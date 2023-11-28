@extends('layout.app')

@section('title', 'Barang')

@section('content')
<div class="card  mt-5">
    <div class="card border-0 shadow-sm rounded">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Barang</h2>
                </div>
                <div class="col-auto">
                    <a href="/barang/create" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>


    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th>Nama</th>
                    <th>Jumlah</th>
                    <th>Tempat</th>
                    <th>Category</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($barang as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>{{$item->tempat->nama}}</td>
                    <td>{{$item->category->nama}}</td>
                    <td>
                        <form action="/barang/delete/{{$item->id}}" method="POST">
                            <a class="btn btn-warning btn-sm" href="/barang/edit/{{$item->id}}">Edit</a>
                            <a class="btn btn-primary btn-sm" href="/barang/detail/{{$item->id}}">Detail</a>
                            @csrf 
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-sm" value="Hapus"></input>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection