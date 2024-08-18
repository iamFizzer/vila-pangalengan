@extends('admin.index')

@section('isian')

<div class="container">
    <h1> Paket</h1>
    <div class="d-flex flex-row-reverse">
        <a href="/admin/paket/tambah" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="d-flex justify-content-center">
        <table class="table table-hover table-responsive">
            <thead>
                <th>No</th>
                <th>Nama Paket</th>
                <th>Deskripsi</th>
                <th>Harga </th>
                <th>Foto</th>
                <th>action</th>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama_paket}}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>{{ $item->harga }}/{{ $item->satuan }}</td>
                    <td><img src="{{asset('gambar')}}/paket/{{ $item->foto }}" alt="{{ $item->foto }}" width="150px"></td>
                    <td>
                        <a href="/admin/paket/edit/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="/admin/paket/detail/{{ $item->id }}" class="btn btn-sm btn-info">Detail</a>
                        <form action="/admin/paket/delete/{{ $item->id }}" method="post" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
    
@endsection