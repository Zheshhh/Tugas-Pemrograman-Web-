@extends('layout.app')

@section('title', 'Tambah data Barang')

@section('content')
<div class="card border-0 shadow-sm rounded mt-5">
    <div class="card-header">
        <h2>Tambah Data</h2>
    </div>
    
    <div class="card-body">
        <form action="{{route('barang.store')}}" class="row" method="POST">
            @csrf
            <div class="col-md-6">
                <div class="col-md-12">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama">
                </div>
                <div class="col-md-12">
                    <label for="Jumlah">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <label for="Tempat">Tempat</label>
                    <select class="form-select" name="tempat_id" id="tempat">
                        <option value=""><-Pilih-></option>
                        @foreach ($tempat as $tempat)
                            <option value="{{ $tempat->id }}">{{ $tempat->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12"> 
                    <label for="Category">Category</label>
                    <select class="form-select" name="category_id" id="category">
                        <option value=""><-Pilih-></option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection