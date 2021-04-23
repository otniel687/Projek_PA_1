<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlosController extends Controller
{
    public function ulos()
    {
        return view('ulos.index');
    }
    public function batak()
    {
        return view('ulos.batak');
    }
    public function karo()
    {
        return view('ulos.karo');
    }
}
