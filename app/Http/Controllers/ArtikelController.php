<?php

namespace App\Http\Controllers;
use App\Artikel;
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
        return view ('artikel.insertartikel');
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
        'kategori' => 'required',
        'deskripsi' => 'required',
        ]);

        $artikels = new Artikel;

        $artikels->judulartikel = $request->judulartikel;
        $artikels->kategori = $request->kategori;
        $artikels->deskripsi = $request->deskripsi;
        $artikels->save();
        return redirect('app/artikel');
    

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

        return view('artikel.editartikel')->with('artikel', $artikel);
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
        'kategori' => 'required',
        ]);

        $artikel = Artikel::find($id);

        $artikel->judulartikel = $request->judulartikel;
        $artikel->kategori = $request->kategori;
        $artikel->save();
        return redirect('app/artikel');
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
        return redirect('app/artikel');
    }
}
