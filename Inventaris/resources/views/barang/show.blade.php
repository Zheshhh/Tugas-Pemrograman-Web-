@extends('layout.app')

@section('title', 'Edit data Barang')

@section('content')
<div class="card border-0 shadow-sm rounded mt-5">
    <div class="card-header">
        <h2>Show Data Barang</h2>
    </div>
    
    <div class="card-body">
        <form action="" class="row">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <div class="col-md-12">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{$barang->nama}}" readonly>
                </div>
                <div class="col-md-12">
                    <label for="Jumlah">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{$barang->jumlah}}" readonly>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <label for="Tempat">Tempat</label>
                    <input type="text" name="tempat" class="form-control" id="tempat" value="{{$barang->tempat->nama}}" readonly>
                </div>
                <div class="col-md-12"> 
                    <label for="Category">Category</label>
                    <input type="text" name="category" class="form-control" id="category" value="{{$barang->category->nama}}" readonly>
                </div>
            </div>
            <div class="col-12">
                <a href="/barang" class="btn btn-warning mt-2">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection