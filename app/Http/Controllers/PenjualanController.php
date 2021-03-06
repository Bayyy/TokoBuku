<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Kasir;



class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $penjualan = Penjualan::all();
         return view('penjualan.index',['penjualan' => $penjualan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penjualan = Penjualan::all();
        return view('penjualan.create');

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
        'id_buku' => 'required',
        'id_kasir' => 'required',
        'jumlah' => 'required',
        'total' => 'required',
        'tanggal' => 'required',
    ]);
         $penjualan= new Penjualan;

         $penjualan->id_buku = $request->id_buku;
         $penjualan->id_kasir = $request->id_kasir;
         $penjualan->jumlah = $request->jumlah;
         $penjualan->total = $request->total;
         $penjualan->tanggal = $request->tanggal;

         $penjualan->save();
         return redirect('penjualan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penjualan = Penjualan::find($id);
        return view('penjualan.detail')->with('penjualan',$penjualan);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penjualan = Penjualan::find($id);
        return view('penjualan.edit')->with('penjualan',$penjualan);
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
        'id_buku' => 'required',
        'id_kasir' => 'required',
        'jumlah' => 'required',
        'total' => 'required',
        'tanggal' => 'required',
    ]);
         $penjualan=Penjualan::find($id);

         $penjualan->id_buku = $request->id_buku;
         $penjualan->id_kasir = $request->id_kasir;
         $penjualan->jumlah = $request->jumlah;
         $penjualan->total = $request->total;
         $penjualan->tanggal = $request->tanggal;

         $penjualan->save();
         return redirect('penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan= Penjualan::find($id);
        $penjualan->delete();

        return redirect('penjualan');
    }
}
