<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    //
    public  function index()
    {
        $produk = DB::table('produk')->get();
        return view('produk.index', ['produk' => $produk]);
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}
