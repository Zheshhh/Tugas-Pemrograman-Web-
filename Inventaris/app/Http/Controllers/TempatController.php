<?php

namespace App\Http\Controllers;

use App\Models\tempat;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tempat = Tempat::all();
        return view('tempat.index', compact('tempat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tempat.create');
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

        Tempat::create([
            'nama' => $request->nama
        ]);

        return redirect('tempat')->with('sukses', 'Data berhasil disimpan');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tempat = Tempat::find($id);
        return view('tempat.show', compact('tempat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tempat = Tempat::find($id);
        return view('tempat.edit', compact('tempat'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tempat = Tempat::find($id);
        $tempat->nama = $request->nama;
        $tempat->update();

        return redirect('tempat')->with('sukses', 'Data berhasil diupdate'); 
   }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tempat  $tempat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tempat = Tempat::find($id);
        $tempat->delete();

        return redirect('tempat')->with('sukses', 'Data berhasil dihapus');
    }
}
