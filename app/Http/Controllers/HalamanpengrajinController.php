<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengrajin;

class HalamanpengrajinController extends Controller
{
    //
    public  function index()
    {
        $data = Pengrajin::all();
        return view('pengrajin.index', ['data'=>$data]);
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}