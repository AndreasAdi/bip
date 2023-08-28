<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
            'status' => 'required',
        ]);

        if (!$request) {
            return redirect()->back()->with('error', 'Maaf, data gagal ditambahkan');
        }


        $newProduct = new Product();
        $newProduct->nama = $request->input('name');
        $newProduct->brand = $request->input('brand');
        $newProduct->kategori = $request->input('category');
        $newProduct->deskripsi = $request->input('description');
        $newProduct->status = $request->input('status');

        // upload file (This is temporary code)
        // will discuss more about uploading file later
        // either fixed number of image or dynamic number of image
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $request->file('image')->move('images/', $fileName);
        $newProduct->gambar = $fileName;



        $newProduct->save();
    }
}
