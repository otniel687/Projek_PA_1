<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengrajinController extends Controller
{
    public function buat()
    {
        return view('pengrajin.index');
    }
}
