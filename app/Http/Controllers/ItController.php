<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItController extends Controller
{
    //

    function index()
    {
        return view('it.index');
    }

    function detail()
    {
        return view('it.detail');
    }
}
