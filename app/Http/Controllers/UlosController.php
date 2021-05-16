<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\UlosBatak;
use App\Models\UlosKaro;
use Illuminate\Support\Facades\DB;

class UlosController extends Controller
{
    public function ulos()
    {
        return view('ulos.index');
    }
    public function batak()
    {
        $data_web2 = DB::table('data_web2')->get();
        return view('ulos/batak',['data_web2'=> $data_web2]);
    }
    public function karo()
    {   $data_web3 = DB::table('data_web3')->get();
        return view('ulos.karo',['data_web3'=> $data_web3]);
    }
}
