@extends('layout.app')


@section('title', 'Buku')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Buku</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Buku</h4>


                <div class="card-header-form">
                    <a href="{{route('buku.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus"> Tambah Data</i><a>
                </div>
            </div>




            <div class="card-body">
                <table class="table table-striped" id="table">
                    <thead>
                      <tr>
                        <th style="width:10%">No</th>
                        <th>Kode</th>
                        <th>Judul</th>
                        <th>Pengarang</th>
                        <th>Jumlah Halaman</th>
                        <th>Gambar</th>
                        <th style="width:15%">Aksi</th>
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($buku as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->kode}}</td>
                            <td>{{$item->judul}}</td>
                            <th>{{$item->pengarang}}</th>
                            <th>{{$item->jumlah_halaman}}</th>
                            <td><img src="{{asset('/storage/buku/'.$item->gambar)}}" class="rounded" style="width: 50px"></td>
                            <td>
                                <form action="/buku/{{$item->id}}" method="GET" id="delete-form{{$item->id}}">
                                    @method('delete')
                                    <a href="/buku/{{$item->id}}/edit" class="btn btn-warning btn-sm"><i
                                            class="fa fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger fa fa-trash"
                                        onclick="confirmDelete('delete-form{{$item->id}}')"></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    <tbody>

                </table>
            </div>
        </div>
    </div>

</section>
@include('Category.form')
@endsection

@push('script')

<script>
    function confirmDelete(formId) {
        event.preventDefault();
        swal({
                title: 'Apakah Anda Yakin?',
                text: 'Setelah Dihapus Anda Tidak Dapat Memulihkannya!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.getElementById(formId).submit();

                }
            });
    }

</script>
@endpush

@push('script')
<script>
    $(document).ready(function(){
        $('#table').DataTable();
    })

</script>
@endpush


