<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public  function index()
    {
        return view('produk.index');
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}
