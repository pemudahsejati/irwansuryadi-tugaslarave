<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BaranggController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = DB::table('tb_barang')->grt();
        return view ('data/index', compact('bara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('data/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tb_barang')->insert(
            [

                [
                    'id_barang' => $request id_barang,
                    'nama_barang' => $request nama_barang,
                    'kategori_barang' => $request kategori_barang,
                    'merk_barang' =. $request merk_barang,
                    'deskripsi_barang' $request deskripsi_barang,
                    'stok_barang' $request stok_barang,
                    'harga_barang' $request harga_barang,


                ]
            ]
        
        return redirect()->route('brg.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = DB::table('tb_barang')->where('id_barang', $id)->get();
        return view('data/show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = DB::table('tb_barang')->where('id_barang', $id)->get();
        return view('data/adit', compact('bara'));
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
        DB::table('tb_barang')->where('id_barang', $id)->update(
        [
                    'id_barang' => $request id_barang,
                    'nama_barang' => $request nama_barang,
                    'kategori_barang' => $request kategori_barang,
                    'merk_barang' =. $request merk_barang,
                    'deskripsi_barang' $request deskripsi_barang,
                    'stok_barang' $request stok_barang,
                    'harga_barang' $request harga_barang,
        ]

    );
        return redirect()->route('brg.index');

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_barang')->where('id_barang', $id)->delete();
         return redirect()->route('brg.index');
    }
}
