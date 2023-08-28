<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\TemporaryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(5);
        return view('dashboard', compact('product'));
    }

    public function insert()
    {
        return view('admin.product.insert');
    }

    public function prosesInsert(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);

        if (!$request) {
            return redirect()->back()->with('error', 'Maaf, data gagal ditambahkan');
        }


        $newProduct = new Product();
        $newProduct->name = $request->input('name');
        $newProduct->brand = $request->input('brand');
        $newProduct->category = $request->input('category');
        $newProduct->description = $request->input('description');
        $newProduct->status = "1";

        $newProduct->image = 'public/product/image/';
        $tempFolder = Session::get('folder');
        $tempImage = Session::get('filename');

        $newProduct->save();

        for ($i = 0; $i < count($tempFolder); $i++) {
            $temporary = TemporaryImage::where('folder', $tempFolder[$i])->where('image', $tempImage[$i])->first();

            if ($temporary) { //if exist

                //hapus file and folder temporary
                $path = storage_path() . '/app/files/tmp/' . $temporary->folder . '/' . $temporary->image;
                if (File::exists($path)) {

                    //move file to storage/public/product/image/id
                    $newPath = 'public/product/image/' . $newProduct->id;


                    //move file
                    $ext = explode('.', $temporary->image);
                    $ext = end($ext);
                    try {
                        Storage::move('files/tmp/' . $temporary->folder . '/' . $temporary->image, $newPath . '/' . $i . '.' . $ext);
                    } catch (\Exception $e) {
                        echo $e->getMessage();
                    }


                    //delete folder temporary
                    File::delete($path);
                    rmdir(storage_path('app/files/tmp/' . $temporary->folder));

                    //delete record in temporary table
                    $temporary->delete();
                }
            }
        }

        $newProduct->image = 'public/product/image/' . $newProduct->id;
        $newProduct->save();
    }
}
