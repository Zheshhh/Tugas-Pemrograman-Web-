@extends('layout.app')

@section('title', 'Tempat')

@section('content')
<div class="card mt-5">
    <div class="card border-0 shadow-sm rounded">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Tempat</h2>
                </div>
                <div class="col-auto">
                    <a href="/tempat/create" class="btn btn-success">Tambah Data</a>
                </div>
            </div>
        </div>
    </div>


    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th width="10%">#</th>
                    <th>Nama</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tempat as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                    <td>
                        <form action="/tempat/delete/{{$item->id}}" method="POST">
                            <a class="btn btn-warning btn-sm" href="/tempat/edit/{{$item->id}}">Edit</a>
                            <a class="btn btn-primary btn-sm" href="/tempat/detail/{{$item->id}}">Detail</a>
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