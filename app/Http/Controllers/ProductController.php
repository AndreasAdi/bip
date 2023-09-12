<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\subcategory;
use App\Models\TemporaryImage;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //this is unused
    //use livewire component(TableProduct) instead 
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
        $subcategory = subcategory::all();

        return view('admin.product.insert', compact('brands', 'subcategory'));
    }

    public function prosesInsert(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
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

        $listSubcategoryRaw = $request->input('subcategory');

        $listSubcategory = [];


        foreach ($request->subcategory as $key => $value) {

            //check if subcategory exist
            $subcategory = subcategory::where('id', $value)->first();

            //if not exist add new subcategory
            if (!$subcategory) {
                $newSubcategory = new subcategory();
                $newSubcategory->name = $value;
                $newSubcategory->category_id = $request->category;
                $newSubcategory->save();
                $listSubcategory[$key] = $newSubcategory->id;
                //remove new subcategory from listSubcategoryRaw
                unset($listSubcategoryRaw[$key]);
            }
        }

        if (count($listSubcategory) > 0) {
            //merge subcategory and listSubcategory to one array
            $newProduct->subcategory = json_encode(array_merge($listSubcategoryRaw, $listSubcategory));
        } else {
            $newProduct->subcategory = json_encode($request->subcategory);
        }
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

        $subcategory = subcategory::all();

        $images = array();

        $files = Storage::files('public/product/image/' . $product->id);

        $count = count($files);

        for ($i = 1; $i <= $count; $i++) {
            $images[$i] = Storage::url($files[$i - 1]);
        }



        return view('admin.product.edit', compact('product', 'brands', 'images', 'categories', 'subcategory'));
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

        $listSubcategoryRaw = $request->input('subcategory');

        $listSubcategory = [];


        foreach ($request->subcategory as $key => $value) {

            //check if subcategory exist
            $subcategory = subcategory::where('id', $value)->first();

            //if not exist add new subcategory
            if (!$subcategory) {
                $newSubcategory = new subcategory();
                $newSubcategory->name = $value;
                $newSubcategory->category_id = $request->category;
                $newSubcategory->save();
                $listSubcategory[$key] = $newSubcategory->id;
                //remove new subcategory from listSubcategoryRaw
                unset($listSubcategoryRaw[$key]);
            }
        }

        if (count($listSubcategory) > 0) {
            //merge subcategory and listSubcategory to one array
            $product->subcategory = json_encode(array_merge($listSubcategoryRaw, $listSubcategory));
        } else {
            $product->subcategory = json_encode($request->subcategory);
        }

        $product->save();

        $tempFolder = Session::get('folder');
        $tempImage = Session::get('filename');


        if ($tempFolder == null) {
            return redirect()->back()->with('success', 'Data berhasil diubah');
        }

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

    public function search(Request $request)
    {
        $query = $request->input('query');


        $product = Product::where('name', 'like', '%' . $query . '%')->paginate(1);

        $html = '';
        if (count($product) == 0) {
            $html .= '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">';
            $html .= '<th colspan="4" scope="row" class="px-6 py-16 font-medium text-center text-gray-600 whitespace-nowrap dark:text-white">Product Tidak Ditemukan</th>';
            $html .= '</tr>';
        }

        foreach ($product as $key => $value) {
            $files = Storage::files('public/product/image/' . $value->id);
        }



        //return html
        foreach ($product as $key => $value) {
            $html .= '<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">';
            $html .= '<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">' . $value->name . '</th>';
            $html .= '<td class="px-6 py-4 text-gray-500 whitespace-nowrap dark:text-gray-300">' . $value->getBrand->name . '</td>';
            $html .= '<td class="px-6 py-4 text-gray-500 whitespace-nowrap dark:text-gray-300">' . $value->getCategory->name . '</td>';
            $html .= ' <td class="px-6 py-4 text-sm font-medium">';
            $html .= ' <a href="/admin/product/edit/' . $value->id;
            $html .= '" class="pr-2 text-blue-600 hover:text-blue-500">Edit</a>
                                           <button onclick="deleteProduct(' . $value->id . ')"';
            $html .= 'class="text-red-600 hover:text-red-500">Delete</button>
                                        </td></tr>';
        }

        return response()->json([
            'rows' => $html,
            'links' => $product->links()
        ], 200);

        // return $html;
    }
}
