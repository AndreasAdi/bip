<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BankingController extends Controller
{
    //

    function index()
    {
        return view('banking.index');
    }

    function detail()
    {
        return view('banking.detail');
    }
}
