<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kasir;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
         
         $kasir = Kasir::all();
         return view('kasir.index',['kasir' => $kasir]);
     }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kasir.create');
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
        'nama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'status' => 'required',
        'username' => 'required',
        'password' => 'required',
        'akses' => 'required',

    ]);

        $kasir= new Kasir;

        $kasir->nama = $request->nama;
        $kasir->alamat = $request->alamat;
        $kasir->telepon = $request->telepon;
        $kasir->status = $request->status;
        $kasir->username = $request->username;
        $kasir->password = $request->password;
        $kasir->akses = $request->akses;


        $kasir->save();
        return redirect('kasir');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kasir=Kasir::find($id);
        return view('kasir.detail')->with('kasir',$kasir);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kasir=Kasir::find($id);
        return view('kasir.edit')->with('kasir',$kasir);
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
        'nama' => 'required',
        'alamat' => 'required',
        'telepon' => 'required',
        'status' => 'required',
        'username' => 'required',
        'password' => 'required',
        'akses' => 'required',

    ]);

        $kasir=Kasir::find($id);

        $kasir->nama = $request->nama;
        $kasir->alamat = $request->alamat;
        $kasir->telepon = $request->telepon;
        $kasir->status = $request->status;
        $kasir->username = $request->username;
        $kasir->password = $request->password;
        $kasir->akses = $request->akses;


        $kasir->save();
        return redirect('kasir');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kasir=Kasir::find($id);
        $kasir->delete();
        return redirect('kasir');
    }
}
