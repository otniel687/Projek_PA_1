<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Jenis;
use Illuminate\Http\Request;
use App\Models\Ulos;
use Illuminate\Support\Facades\DB;

class UlosController extends Controller
{
     public function index()
    {
        $penjelasan = Desa::find(5);
        $header = Desa::find(6);
        $ragi_hidup = Jenis::find(1);
        $mangiring = Jenis::find(3);
        $ragi_hotang = Jenis::find(5);
        $ariteneng = Jenis::find(11);
        $gatip = Jenis::find(13);
        $beka_buluh = Jenis::find(9);
        $data = Ulos::all();
        $video = DB::table('video')
        ->select('video.*', 'video.video')
        ->find(2);
        return view('ulos.index', [
            'data' => $data,
            'header' => $header,
            'video' => $video,
            'penjelasan' => $penjelasan, 
            'ragi_hidup' => $ragi_hidup, 
            'mangiring' => $mangiring, 
            'ragi_hotang' => $ragi_hotang,
            'ariteneng' => $ariteneng, 
            'gatip' => $gatip, 
            'beka_buluh' => $beka_buluh
            ]);
    }
    public function batak()
    {
        // $data_web2 = DB::table('data_web2')->get();
        $ulos = DB::table('jenis_ulos')
        ->select('jenis_ulos.*')
        ->limit(8)
        ->orderBy('created_at','asc')
        ->paginate(8);
        $video = DB::table('video')
        ->select('video.*', 'video.video')
        ->find(3);
        $header = Desa::find(7);
        $about = Desa::find(8);
        return view('ulos.batak', [
            // 'data_web2' => $data_web2,
            'video' => $video,
            'ulos' => $ulos,
            'header' => $header,
            'about' => $about,
            ]);
    }
    public function karo()
    {   
        // $data_web3 = DB::table('data_web3')->get();
        $ulos = DB::table('jenis_ulos')
        ->select('jenis_ulos.*')
        ->offset(8)->limit(6)->get();
        $video = DB::table('video')
        ->select('video.*', 'video.video')
        ->find(4);
        $header = Desa::find(9);
        $about = Desa::find(10);
        $about2 = Desa::find(11);
        return view('ulos.karo', [
            // 'data_web3' => $data_web3,
            'video' => $video,
            'ulos' => $ulos,
            'header' => $header,
            'about' => $about,
            'about2' => $about2,
            ]);
    }
}
