<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanpengrajinController extends Controller
{
    //
    public  function index()
    {
        return view('pengrajin.index');
    }
    public function home()
    {
        return view('layouts.defaultone');

    }
}
