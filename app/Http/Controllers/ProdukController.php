<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    //
    public  function index()
    {
        $header = Desa::find(16);
        $produk = DB::table('produk')->get();
        return view('produk.index', [
            'produk' => $produk,
            'header' => $header,
            ]);
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}
