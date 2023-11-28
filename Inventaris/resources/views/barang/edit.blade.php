@extends('layout.app')

@section('title', 'Edit data barang')

@section('content')
<div class="card border-0 shadow-sm rounded mt-5">
    <div class="card-header">
        <h2>Edit Data Barang</h2>
    </div>
    
    <div class="card-body">
        <form action="/barang/edit/{{$barang->id}}" class="row" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <div class="col-md-12">
                    <label for="Nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{$barang->nama}}">
                </div>
                <div class="col-md-12">
                    <label for="Jumlah">Jumlah</label>
                    <input type="text" name="jumlah" class="form-control" id="jumlah" value="{{$barang->jumlah}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-12">
                    <label for="Tempat">Tempat</label>
                    <select class="form-select" name="tempat_id" id="tempat">
                        <option value=""><-Pilih-></option>
                            @foreach ($tempat as $itemt)
                                <option value="{{ $itemt->id }}" {{ $barang->tempat_id == $itemt->id ? 'selected' : '' }}>
                                    {{ $itemt->nama }}
                                </option>
                            @endforeach
                    </select>
                </div>
                <div class="col-md-12"> 
                    <label for="Category">Category</label>
                    <select class="form-select" name="category_id" id="category">
                        <option value=""><-Pilih-></option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}" {{ $barang->category_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
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