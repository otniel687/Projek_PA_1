<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DesaController extends Controller
{
    
    public function home()
    {
        return view('layouts.defaultone');
    }

    public function index()
    {
        $desa = Desa::orderBy('id', 'asc')->limit(4)->get();
        $video = DB::table('video')
        ->select('video.*', 'video.video')
        ->find(1);
        $galery = DB::table('galery')
        ->join('picture', 'galery.id_gambar', '=', 'picture.id')
        ->select('galery.*','picture.gambar')
        ->paginate();
        return view('About.desa',[
            'desa'=>$desa,
            'galery'=>$galery,
            'video'=>$video
        ], compact('desa'));
    }
}
