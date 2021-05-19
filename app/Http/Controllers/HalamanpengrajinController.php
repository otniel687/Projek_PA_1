<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use App\Models\Pengrajin;

class HalamanpengrajinController extends Controller
{
    //
    public  function index()
    {
        $header = Desa::find(17);
        $data = Pengrajin::all();
        return view('pengrajin.index', [
            'data'=>$data,
            'header'=>$header
            ]);
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}