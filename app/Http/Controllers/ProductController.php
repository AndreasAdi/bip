<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\TemporaryImage;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(5);


        $images = array();
        foreach ($product as $key => $value) {
            $files = Storage::files('public/product/image/' . $value->id);
            $count = count($files);

            for ($i = 1; $i <= $count; $i++) {
                $images[$key][$i] = Storage::url($files[$i - 1]);
            }
        }

        return view('admin.product.index', compact('product', 'images'));
    }

    public function insert()
    {
        $brands = Brand::all();

        return view('admin.product.insert', compact('brands'));
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
        $newProduct->video = $request->input('video');
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
                        Storage::move('files/tmp/' . $temporary->folder . '/' . $temporary->image, $newPath . '/' . $i + 1 . '.' . $ext);
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

        $newProduct->image = Storage::url('public/product/image/') . $newProduct->id;
        $newProduct->save();

        Session::forget('folder');
        Session::forget('filename');

        return redirect()->route('product')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $product = Product::where('id', $id)->first();

        $brands = Brand::all();

        $categories = Category::all();

        $images = array();

        $files = Storage::files('public/product/image/' . $product->id);

        $count = count($files);

        for ($i = 1; $i <= $count; $i++) {
            $images[$i] = Storage::url($files[$i - 1]);
        }



        return view('admin.product.edit', compact('product', 'brands', 'images', 'categories'));
    }

    public function update(Request $request)
    {
        $product = Product::where('id', $request->id)->first();

        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        if (!$request) {
            return redirect()->back()->with('error', 'Maaf, data gagal ditambahkan');
        }

        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->status = "1";
        $product->video = $request->input('video');

        $product->save();

        $tempFolder = Session::get('folder');
        $tempImage = Session::get('filename');



        for ($i = 0; $i < count($tempFolder); $i++) {
            $temporary = TemporaryImage::where('folder', $tempFolder[$i])->where('image', $tempImage[$i])->first();
            $count = count(Storage::files('public/product/image/' . $product->id));

            if ($temporary) { //if exist

                //hapus file and folder temporary
                $path = storage_path() . '/app/files/tmp/' . $temporary->folder . '/' . $temporary->image;
                if (File::exists($path)) {

                    //move file to storage/public/product/image/id
                    $newPath = 'public/product/image/' . $product->id;


                    //move file
                    $ext = explode('.', $temporary->image);
                    $ext = end($ext);
                    try {
                        Storage::move('files/tmp/' . $temporary->folder . '/' . $temporary->image, $newPath . '/' . $count + 1 . '.' . $ext);
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

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $product = Product::where('id', $id)->first();

        $images = Storage::files('public/product/image/' . $product->id);

        foreach ($images as $image) {
            Storage::delete($image);
        }

        Storage::deleteDirectory('public/product/image/' . $product->id);

        $product->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

    public function deleteImage($id, $number)
    {
        $images = Storage::files('public/product/image/' . $id);

        Storage::delete($images[$number]);

        return redirect()->back()->with('success', 'Gambar berhasil dihapus');
    }
}
