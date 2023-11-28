@extends('layout.app')

@section('title', 'Edit data tempat')

@section('content')
<div class="card border-0 shadow-sm rounded mt-5">
    <div class="card-header">
        <h2>Edit Data Tempat</h2>
    </div>
    
    <div class="card-body">
        <form action="/tempat/edit/{{$tempat->id}}" class="row" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$tempat->nama}}" id="nama">
            </div>
            <div class="col-12">
                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection