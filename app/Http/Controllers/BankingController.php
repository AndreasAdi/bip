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
        $data = Product::where('category', 1)->get();
        return view('banking.index', compact('data'));
    }

    function detail(string $id)
    {
        $data = Product::where('id', $id)->first();
        return view('banking.detail', compact('data'));
    }
}
