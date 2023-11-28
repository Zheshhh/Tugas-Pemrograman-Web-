<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Category;
use App\Models\Penerbit;
use App\Models\Anggota;

class BukuController extends Controller
{
   
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    
    public function create()
    {
        $category = Category::all();
        $penerbit = Penerbit::all();
        return view('buku.create', compact('category','penerbit'));
    }

   
    public function store(Request $request)
    {
        $image = $request->file('gambar');
        $image->storeAs('public/buku', $image->hashName());
        
        Buku::create([
           
            'kode'=> $request->kode,
            'judul'=> $request->judul,
            'kategori_id'=> $request->kategori_id,
            'penerbit_id'=> $request->penerbit_id,
            'isbn'=> $request->isbn,
            'pengarang'=> $request->pengarang,
            'jumlah_halaman'=> $request->jumlah_halaman,
            'stok'=> $request->stok,
            'tahun_terbit'=> $request->tahun_terbit,
            'sinopsis'=> $request->sinopsis,
            'gambar'=> $image->hashName(),

        ]);
        
        return redirect('buku')->with('sukses', 'Data berhasil disimpan');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
       
    }

    
    public function update(Request $request, $id)
    {
       
        $image = $request->file('gambar');
        $image->storeAs('public/buku', $image->hashName());
        $buku = Buku::find($id);

        $buku->kode = $request->kode;
        $buku->judul = $request->judul;
        $buku->kategori_id = $request->kategori_id;
        $buku->penerbit_id = $request->penerbit_id;
        $buku->isbn = $request->isbn;
        $buku->pengarang = $request->pengarang;
        $buku->jumlah_halaman = $request->jumlah_halaman;
        $buku->stok = $request->stok;
        $buku->tahun_terbit = $request->tahun_terbit;
        $buku->sinopsis = $request->sinopsis;
    }

   
    public function destroy($id)
    {
        //
    }
}

