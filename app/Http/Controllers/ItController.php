<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItController extends Controller
{
    function index()
    {
        $data = Product::where("category", 2)->simplePaginate(8);

        $images = $this->getImage($data);
        $subCategories = subcategory::where("category_id", 2)->get();

        return view("it.index", compact("data", "images", "subCategories"));
    }

    function list($id)
    {
        $subCategory = subcategory::where("id", $id)->first();
        $subCategoryName = $subCategory->name;

        $data = Product::where("category", 2)
            ->whereJsonContains("subcategory", $id)
            ->simplePaginate(8);

        $images = $this->getImage($data);

        return view(
            "it.sub",
            compact("data", "images", "subCategoryName")
        );
    }


    function detail()
    {
        return view("it.detail");
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
