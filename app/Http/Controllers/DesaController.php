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
        
        $desa = Desa::paginate(20);
        $video = DB::table('video')
        ->select('video.*', 'video.video')
        ->find(1);
        $galery = DB::table('galery')
        ->select('galery.*','galery.gambar')
        ->paginate();
        return view('About.desa',[
            'galery'=>$galery,
            'video'=>$video
        ], compact('desa'));
    }
}
