<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    //
    public  function index()
    {
        $jenis_ulos = DB::table('jenis_ulos')->get();
        return view('produk.index', ['jenis_ulos' => $jenis_ulos]);
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}
