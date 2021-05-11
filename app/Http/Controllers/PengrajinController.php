<?php

namespace App\Http\Controllers;

use App\Models\Pengrajin;
use Illuminate\Http\Request;

class PengrajinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Pengrajin::all();
        return view('DataPengrajin.index', ['data'=>$data]);
    }

    public function join()
    {
        //
        return view('Join');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pengrajin = Pengrajin::find($id);
        return view('DataPengrajin.ubah', ['pengrajin' => $pengrajin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if ($request->file('foto')==NULL) {
            $pengrajin = Pengrajin::find($id);
            $pengrajin->id_pengrajin = $request->id_pengrajin;
            $pengrajin->nama = $request->nama;
            $pengrajin->alamat = $request->alamat;
            $pengrajin->kontak = $request->kontak;
            $pengrajin->kerajinan = $request->kerajinan;
            $foto = $request->foto;

            $pengrajin->save();
            return redirect('/pengrajin')->with('success', 'Data Berhasil Diubah!');

        } else {
            $foto = $request->file('foto');
            $Namafoto = time().'.'.$foto->extension();
            $foto->move(public_path('foto'), $Namafoto);
    
            $id_pengrajin = $request->id_pengrajin;
            $nama = $request->nama;
            $alamat = $request->alamat;
            $kontak = $request->kontak;
            $kerajinan = $request->kerajinan;
    
            $pengrajin = Pengrajin::find($id);
            $pengrajin->id_pengrajin = $request->id_pengrajin;
            $pengrajin->nama = $request->nama;
            $pengrajin->alamat = $request->alamat;
            $pengrajin->kontak = $request->kontak;
            $pengrajin->kerajinan = $request->kerajinan;
            $pengrajin->foto = $Namafoto;
    
            $pengrajin->save();
            return redirect('/pengrajin')->with('success', 'Data Berhasil Diubah!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pengrajin = Pengrajin::find($id);
        $pengrajin->delete();
        return redirect('/pengrajin')->with('success', 'Data Telah Dihapus!');
    }
}
