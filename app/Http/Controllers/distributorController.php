<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distributor;

class distributorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distributor = distributor::all();
        return view('distributor.index',['distributor' => $distributor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('distributor.create');
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
           'nama_distributor' => 'required',
           'alamat' => 'required',
           'telepon' => 'required',
        ]);

        $distributor = new distributor;
        $distributor->nama_distributor = $request->nama_distributor;
        $distributor->alamat = $request->alamat;
        $distributor->telepon = $request->telepon;
        $distributor->save();
        return redirect('distributor');
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
        $distributor = distributor::find($id);
        return view('distributor.edit')->with('distributor', $distributor);
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
        $distributor = distributor::find($id);
        $distributor->nama_distributor = $request->nama_distributor;
        $distributor->alamat = $request->alamat;
        $distributor->telepon = $request->telepon;
        $distributor->save();
        return redirect('distributor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distributor = distributor::find($id);
        $distributor->delete();
        return redirect('distributor');
    }
}
