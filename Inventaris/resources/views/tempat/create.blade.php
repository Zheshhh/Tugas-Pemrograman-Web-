@extends('layout.app')

@section('title', 'Tambah data tempat')

@section('content')
<div class="card border-0 shadow-sm rounded mt-5">
    <div class="card-header">
        <h2>Tambah Data Tempat</h2>
    </div>
    
    <div class="card-body">
        <form action="{{route('tempat.store')}}" class="row" method="POST">
            @csrf
            <div class="col-md-12">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
            <div class="col-12">
                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection