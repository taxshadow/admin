<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Kategori;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.kategori', ['kategori' => $kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kategori.insertkategori');
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
        'namakategori' => 'required',
        'indukkategori' => 'required',
        ]);

        $kategori = new Kategori;

        $kategori->namakategori = $request->namakategori;
        $kategori->indukkategori = $request->indukkategori;

        $kategori->save();
        return redirect('app/kategori')->with('message','Kategori sudah berhasil ditambahkan');
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
        $kategori = Kategori::find($id);

        return view('kategori.editkategori')->with('kategori', $kategori);
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
        'namakategori' => 'required',
        'indukkategori' => 'required',
        ]);

        $kategori = Kategori::find($id);

        $kategori->namakategori = $request->namakategori;
        $kategori->indukkategori = $request->indukkategori;

        $kategori->save();
        return redirect('app/kategori')->with('message','Kategori sudah berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('app/kategori')->with('message','Kategori sudah berhasil dihapus');
    }
}
