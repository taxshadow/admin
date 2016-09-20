<?php

namespace App\Http\Controllers;
use App\Artikel;
use App\Kategori;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $artikels = Artikel::paginate(2);
        return view('artikel.artikel', ['artikels' => $artikels]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all(); 
        return view ('artikel.insertartikel', ['kategoris' => $kategoris]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'judulartikel' => 'required',
        'kategori_id' => 'required',
        'deskripsi' => 'required',
        ]);

        $artikels = new Artikel;

        $artikels->judulartikel = $request->judulartikel;
        $artikels->kategori_id = $request->kategori_id;
        $artikels->deskripsi = $request->deskripsi;
        $artikels->save();
        return redirect('app/artikel')->with('message','Artikel sudah berhasil ditambahkan');
    

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
        $artikel = Artikel::find($id);
        $kategoris = Kategori::all();
        return view('artikel.editartikel', ['kategoris' => $kategoris, 'artikel' => $artikel]);
        
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
        $this->validate($request, [
        'judulartikel' => 'required',
        'kategori_id' => 'required',
        'deskripsi' => 'required',
        ]);

        $artikels = Artikel::find($id);
        $artikels->judulartikel = $request->judulartikel;
        $artikels->kategori_id = $request->kategori_id;
        $artikels->deskripsi = $request->deskripsi;
        $artikels->save();
        return redirect('app/artikel')->with('message','Artikel sudah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::find($id);
        $artikel->delete();
        return redirect('app/artikel')->with('message','Artikel sudah berhasil dihapus');
    }
}
