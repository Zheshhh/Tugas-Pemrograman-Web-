@extends('layout.app')

@section('title', 'Edit data category')

@section('content')
<div class="card border-0 shadow-sm rounded mt-5">
    <div class="card-header">
        <h2>Edit Data Category</h2>
    </div>
    
    <div class="card-body">
        <form action="/category/edit/{{$category->id}}" class="row" method="POST">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$category->nama}}" id="nama">
            </div>
            <div class="col-12">
                <button class="btn btn-primary mt-3" type="submit">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection