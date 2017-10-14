<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasok;
use App\Buku;
use App\Distributor;

class pasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pasok = pasok::all();
        return view('pasok.index',['pasok' => $pasok]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasok.create');
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
           'id_distributor' => 'required',
           'id_buku' => 'required',
           'jumlah' => 'required',
           'tanggal' => 'required',
        ]);

        $pasok = new pasok;
        $pasok->id_distributor = $request->id_distributor;
        $pasok->id_buku = $request->id_buku;
        $pasok->jumlah = $request->jumlah;
        $pasok->tanggal = $request->tanggal;
        $pasok->save();
        return redirect('pasok');
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
        $pasok = pasok::find($id);
        return view('pasok.edit')->with('pasok', $pasok);
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
        $pasok = pasok::find($id);
        $pasok->id_distributor = $request->id_distributor;
        $pasok->id_buku = $request->id_buku;
        $pasok->jumlah = $request->jumlah;
        $pasok->tanggal = $request->tanggal;
        $pasok->save();
        return redirect('pasok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasok = pasok::find($id);
        $pasok->delete();
        return redirect('pasok');
    }
}
