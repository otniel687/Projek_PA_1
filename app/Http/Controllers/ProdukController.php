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
        $gambar = DB::table('picture')
        ->select('picture.*','picture.gambar')->limit(71)->orderBy('created_at')
        ->paginate();
        return view('produk.index', [
            'jenis_ulos' => $jenis_ulos,
            'gambar' => $gambar
            ]);
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}
