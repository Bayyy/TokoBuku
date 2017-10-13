<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class bukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = buku::all();
        return view('buku.index',['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
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
           'judul' => 'required',
           'noisbn' => 'required',
           'penulis' => 'required',
           'penerbit' => 'required',
           'tahun' => 'required',
           'stok' => 'required',
           'harga_pokok' => 'required',
           'harga_jual' => 'required',
           'ppn' => 'required',
           'diskon' => 'required',
        ]);

        $buku = new buku;
        $buku->judul = $request->judul;
        $buku->noisbn = $request->noisbn;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        $buku->harga_pokok = $request->harga_pokok;
        $buku->harga_jual = $request->harga_jual;
        $buku->ppn = $request->ppn;
        $buku->diskon = $request->diskon;
        $buku->save();
        return redirect('buku');
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
        $buku = buku::find($id);
        return view('buku.edit')->with('buku', $buku);
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
        $buku = buku::find($id);
        $buku->judul = $request->judul;
        $buku->noisbn = $request->noisbn;
        $buku->penulis = $request->penulis;
        $buku->penerbit = $request->penerbit;
        $buku->tahun = $request->tahun;
        $buku->stok = $request->stok;
        $buku->harga_pokok = $request->harga_pokok;
        $buku->harga_jual = $request->harga_jual;
        $buku->ppn = $request->ppn;
        $buku->diskon = $request->diskon;
        $buku->save();
        return redirect('buku');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = buku::find($id);
        $buku->delete();
        return redirect('buku');
    }
}
