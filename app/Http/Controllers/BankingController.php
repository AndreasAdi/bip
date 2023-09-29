<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BankingController extends Controller
{
    //

    function index()
    {
        $data = Product::where("category", 1)->simplePaginate(9);

        $images = $this->getImage($data);

        $subCategories = subcategory::where("category_id", 1)->get();

        return view("banking.index", compact("data", "images", "subCategories"));
    }

    function list($id)
    {
        $subCategory = subcategory::where("id", $id)->first();
        $subCategoryName = $subCategory->name;

        $data = Product::where("category", 1)
            ->whereJsonContains("subcategory", $id)
            ->simplePaginate(8);

        $images = $this->getImage($data);

        return view(
            "banking.sub",
            compact("data", "images", "subCategoryName")
        );
    }

    function detail(string $id)
    {
        $data = Product::where("id", $id)->first();
        $images = [];

        $files = Storage::files("public/product/image/" . $data->id);
        $count = count($files);

        for ($i = 1; $i <= $count; $i++) {
            $images[$i] = Storage::url($files[$i - 1]);
        }

        $subCategory = $data->subcategory;
        $subCategory = json_decode($subCategory);

        $similarProduct = Product::where("category", $data->category)
            ->where("id", "!=", $data->id)
            ->whereJsonContains("subcategory", $subCategory)
            ->paginate(5);

        $similarProductImages = [];

        $brandImagePath = "public/brand/image/" . $data->brand;

        //get all files path
        $files = Storage::files($brandImagePath);
        $count = count($files);

        $brandImages = [];

        //get all files url
        for ($i = 1; $i <= $count; $i++) {
            $brandImages[$i] = Storage::url($files[$i - 1]);
        }

        foreach ($similarProduct as $key => $value) {
            $files = Storage::files("public/product/image/" . $value->id);
            $count = count($files);

            for ($i = 1; $i <= $count; $i++) {
                $similarProductImages[$key] = Storage::url($files[$i - 1]);
            }
        }

        return view(
            "banking.detail",
            compact(
                "data",
                "images",
                "similarProduct",
                "similarProductImages",
                "brandImages"
            )
        );
    }

    public function getImage($data)
    {
        $images = [];

        foreach ($data as $key => $value) {
            $files = Storage::files("public/product/image/" . $value->id);
            $count = count($files);

            for ($i = 1; $i <= $count; $i++) {
                $images[$key][$i] = Storage::url($files[$i - 1]);
            }
        }
        return $images;
    }
}
