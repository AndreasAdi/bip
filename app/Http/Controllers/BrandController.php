<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\TemporaryImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    //

    public function index()
    {
        $brand = Brand::paginate(5);

        return view('admin.brand.index', compact('brand'));
    }

    public function insert()
    {
        return view('admin.brand.insert');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required',

        ]);

        if (!$request) {
            return redirect()->back()->with('error', 'Maaf, data gagal ditambahkan');
        }

        $categories = $request->input('category');
        $category = json_encode($categories);

        $newBrand = new Brand();
        $newBrand->name = $request->input('name');
        $newBrand->category_id = $category;
        $newBrand->description = $request->input('description');
        $newBrand->image = 'public/brand/image/';

        $newBrand->save();

        $tempFolder = Session::get('folder');
        $tempImage = Session::get('filename');
        for ($i = 0; $i < count($tempFolder); $i++) {
            $temporary = TemporaryImage::where('folder', $tempFolder[$i])->where('image', $tempImage[$i])->first();

            if ($temporary) { //if exist

                //hapus file and folder temporary
                $path = storage_path() . '/app/files/tmp/' . $temporary->folder . '/' . $temporary->image;
                if (File::exists($path)) {


                    $newPath = 'public/brand/image/' . $newBrand->id;


                    //move file
                    $ext = explode('.', $temporary->image);
                    $ext = end($ext);
                    try {
                        Storage::move('files/tmp/' . $temporary->folder . '/' . $temporary->image, $newPath . '/' . $i + 1 . '.' . $ext);
                    } catch (Exception $e) {
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

        $newBrand->image = Storage::url('public/brand/image/') . $newBrand->id;
        $newBrand->save();

        Session::forget('folder');
        Session::forget('filename');

        return redirect()->route('brand')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);

        $categories = Category::all();

        $images = array();

        $files = Storage::files('public/brand/image/' . $brand->id);

        $count = count($files);


        for ($i = 1; $i <= $count; $i++) {
            $images[$i] = Storage::url($files[$i - 1]);
        }



        return view('admin.brand.edit', compact('brand', 'categories', 'images'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
        ]);

        if (!$request) {
            return redirect()->back()->with('error', 'Maaf, data gagal ditambahkan');
        }

        $categories = $request->input('category');
        $category = json_encode($categories);

        $brand = Brand::find($request->input('id'));
        $brand->name = $request->input('name');
        $brand->category_id = $category;
        $brand->description = $request->input('description');

        $brand->save();

        return redirect()->back()->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->route('brand')->with('success', 'Data berhasil dihapus');
    }
}
