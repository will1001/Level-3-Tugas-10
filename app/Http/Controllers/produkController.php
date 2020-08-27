<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $produks = DB::table('produk') -> get();
        // $users = DB::table('users')->get();
        return view('welcome', ['produks' => $produks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        DB::table('produk')->insert([        
            'nama_produk'     => $request->nama_produk,        
            'keterangan'     => $request->keterangan,        
            'harga'    => $request->harga,        
            'jumlah'       => $request->jumlah,        
        ]);

        return redirect('/')->with('status', 'Data Produk Berhasil Ditambahkan');
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
        $produk = DB::table('produk')->where('nama_produk',$id)->first();
        return view('editForm', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        DB::table('produk') -> where('nama_produk', $request -> nama_produk) -> update([
            'nama_produk' => $request->nama_produk,
            'keterangan' => $request ->keterangan,
            'harga' => $request->harga,
            'jumlah' => $request->jumlah,
        ]);
        return redirect('/') -> with('status', 'Data Produk Berhasil DiUbah');
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
        DB::table('produk') -> where('nama_produk', $id) -> delete();
        return redirect('/') -> with('status', 'Data Produk Berhasil Di Hapus');
    }
}
