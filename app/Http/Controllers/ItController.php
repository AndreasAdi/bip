<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItController extends Controller
{
    function index()
    {
        $data = Product::where("category", 2)->simplePaginate(8);

        $images = $this->getImage($data);

        return view("it.index", compact("data", "images"));
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
