@extends('layout.app')

@section('title', 'Edit data category')

@section('content')
<div class="card border-0 shadow-sm rounded mt-5">
    <div class="card-header">
        <h2>Show Data Category</h2>
    </div>
    
    <div class="card-body">
        <form action="" class="row">
            <div class="col-md-12">
                <label for="Nama">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{$category->nama}}" id="nama" readonly>
            </div>
            <div class="col-12">
                <a href="/category" class="btn btn-warning mt-2">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection