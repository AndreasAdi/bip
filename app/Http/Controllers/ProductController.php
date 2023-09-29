<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\subcategory;
use App\Models\TemporaryImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function convertYoutube($string)
    {
        return preg_replace(
            "/[a-zA-Z\/:.]*youtu(?:be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)(?:[&?\/]t=)?(\d*)[a-zA-Z0-9\/*\-_?&;%=.]*/i",
            "https://www.youtube.com/embed/$1?start=$2",
            $string
        );
    }

    public function index()
    {
        return view("admin.product.index");
    }

    public function insert()
    {
        $brands = Brand::all();
        $subcategory = subcategory::all();

        return view("admin.product.insert", compact("brands", "subcategory"));
    }

    public function prosesInsert(Request $request)
    {
        $request->validate([
            "name" => "required",
            "brand" => "required",
            "category" => "required",
            "subcategory" => "required",
            "description" => "required",
            "image" => "required",
        ]);

        if (!$request) {
            return redirect()
                ->back()
                ->with("error", "Maaf, data gagal ditambahkan");
        }

        $newProduct = new Product();
        $newProduct->name = $request->input("name");
        $newProduct->brand = $request->input("brand");
        $newProduct->category = $request->input("category");

        $this->saveData($request, $newProduct);
        $newProduct->description = $request->input("description");
        $newProduct->status = "1";

        $newProduct->image = "public/product/image/";
        $newProduct->video = $this->convertYoutube($request->input("video"));
        $tempFolder = Session::get("folder");
        $tempImage = Session::get("filename");

        $newProduct->save();

        for ($i = 0; $i < count($tempFolder); $i++) {
            $temporary = TemporaryImage::where("folder", $tempFolder[$i])
                ->where("image", $tempImage[$i])
                ->first();

            $this->saveImage($temporary, $newProduct, $i);
        }

        $newProduct->image =
            Storage::url("public/product/image/") . $newProduct->id;
        $newProduct->save();

        Session::forget("folder");
        Session::forget("filename");

        return redirect()
            ->route("product")
            ->with("success", "Data berhasil ditambahkan");
    }

    public function edit($id)
    {
        $product = Product::where("id", $id)->first();

        $brands = Brand::all();

        $categories = Category::all();

        $subcategory = subcategory::all();

        $images = [];

        $files = Storage::files("public/product/image/" . $product->id);

        $count = count($files);

        for ($i = 1; $i <= $count; $i++) {
            $images[$i] = Storage::url($files[$i - 1]);
        }

        return view(
            "admin.product.edit",
            compact("product", "brands", "images", "categories", "subcategory")
        );
    }

    public function update(Request $request)
    {
        $product = Product::where("id", $request->id)->first();

        $request->validate([
            "name" => "required",
            "brand" => "required",
            "category" => "required",
            "description" => "required",
        ]);

        if (!$request) {
            return redirect()
                ->back()
                ->with("error", "Maaf, data gagal ditambahkan");
        }

        $product->name = $request->input("name");
        $product->brand = $request->input("brand");
        $product->category = $request->input("category");
        $product->description = $request->input("description");
        $product->status = "1";
        $product->video = $this->convertYoutube($request->input("video"));

        $this->saveData($request, $product);

        $product->save();

        $tempFolder = Session::get("folder");
        $tempImage = Session::get("filename");

        if ($tempFolder == null) {
            return redirect()
                ->back()
                ->with("success", "Data berhasil diubah");
        }

        for ($i = 0; $i < count($tempFolder); $i++) {
            $temporary = TemporaryImage::where("folder", $tempFolder[$i])
                ->where("image", $tempImage[$i])
                ->first();
            $count = count(
                Storage::files("public/product/image/" . $product->id)
            );

            $this->saveImage($temporary, $product, $count);
        }

        return redirect()
            ->back()
            ->with("success", "Data berhasil diubah");
    }

    public function delete($id)
    {
        $product = Product::where("id", $id)->first();

        $images = Storage::files("public/product/image/" . $product->id);

        foreach ($images as $image) {
            Storage::delete($image);
        }

        Storage::deleteDirectory("public/product/image/" . $product->id);

        $product->delete();

        return redirect()
            ->back()
            ->with("success", "Data berhasil dihapus");
    }

    public function deleteImage($id, $number)
    {
        $images = Storage::files("public/product/image/" . $id);

        Storage::delete($images[$number]);

        return redirect()
            ->back()
            ->with("success", "Gambar berhasil dihapus");
    }

    /**
     * @param Request $request
     * @param Product $newProduct
     * @return void
     */
    public function saveData(Request $request, Product $newProduct): void
    {
        $listSubcategoryRaw = $request->input("subcategory");

        $listSubcategory = [];

        foreach ($request->subcategory as $key => $value) {
            //check if subcategory exist
            $subcategory = subcategory::where("id", $value)->first();

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
            $newProduct->subcategory = json_encode(
                array_merge($listSubcategoryRaw, $listSubcategory)
            );
        } else {
            $newProduct->subcategory = json_encode($request->subcategory);
        }
    }

    /**
     * @param $temporary
     * @param Product $newProduct
     * @param int $i
     * @return void
     */
    public function saveImage($temporary, Product $newProduct, int $i): void
    {
        if ($temporary != null) {
            $path =
                storage_path() .
                "/app/files/tmp/" .
                $temporary->folder .
                "/" .
                $temporary->image;
            if (File::exists($path)) {
                $newPath = "public/product/image/" . $newProduct->id;
                $ext = explode(".", $temporary->image);
                $ext = end($ext);
                try {
                    Storage::move(
                        "files/tmp/" .
                        $temporary->folder .
                        "/" .
                        $temporary->image,
                        $newPath . "/" . $i + 1 . "." . $ext
                    );
                } catch (\Exception $e) {
                    echo $e->getMessage();
                }

                //delete folder temporary
                File::delete($path);
                rmdir(storage_path("app/files/tmp/" . $temporary->folder));

                //delete record in temporary table
                $temporary->delete();
            }
        }

    }
}
