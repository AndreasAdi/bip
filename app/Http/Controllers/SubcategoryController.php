<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubcategoryController extends Controller
{

    function index()
    {
        return view('admin.subcategory.index');
    }
}
