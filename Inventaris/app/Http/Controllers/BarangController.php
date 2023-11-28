<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\category;
use App\Models\tempat;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang
        ::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\Models\Category::all(); // Mengambil semua data kategori dari database
        $tempat = \App\Models\Tempat::all(); // Mengambil semua data tempat dari database
        return view('barang.create', compact('categories', 'tempat'));
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
            'nama' => 'required|max:225',
        ]);

        Barang
        ::create([
            'nama' => $request->nama,
            'jumlah' => $request->jumlah,
            'tempat_id' => $request->tempat_id,
            'category_id' => $request->category_id,
        ]);
       

        return redirect('barang')->with('sukses', 'Data berhasil disimpan');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = Barang
        ::find($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id);
        $categories = Category::all();
        $tempat = Tempat::all();
        return view('barang.edit', compact('barang','categories', 'tempat'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->nama = $request->nama;
        $barang->jumlah = $request->jumlah;
        $barang->tempat_id = $request->tempat_id;
        $barang->category_id = $request->category_id;
        $barang->update();

        return redirect('barang')->with('sukses', 'Data berhasil diupdate'); 
   }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = Barang
        ::find($id);
        $barang->delete();

        return redirect('barang')->with('sukses', 'Data berhasil dihapus');
    }
}
