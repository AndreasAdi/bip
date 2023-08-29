<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BankingController extends Controller
{
    //

    function index()
    {

        $data = Product::where('category', 1)->paginate(5);

        $images = array();
        foreach ($data as $key => $value) {
            $files = Storage::files('public/product/image/' . $value->id);
            $count = count($files);

            for ($i = 1; $i <= $count; $i++) {
                $images[$key][$i] = Storage::url($files[$i - 1]);
            }
        }


        return view('banking.index', compact('data', 'images'));
    }

    function detail(string $id)
    {
        $data = Product::where('id', $id)->first();
        $images = array();

        $files = Storage::files('public/product/image/' . $data->id);
        $count = count($files);

        for ($i = 1; $i <= $count; $i++) {
            $images[$i] = Storage::url($files[$i - 1]);
        }
        return view('banking.detail', compact('data', 'images'));
    }
}
