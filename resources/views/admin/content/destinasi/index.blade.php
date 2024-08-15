@extends('admin.index')

@section('isian')

<div class="container">
    <h1> Destinasi</h1>
    <div class="d-flex flex-row-reverse">
        <a href="/admin/destinasi/tambah" class="btn btn-primary btn-sm">Tambah Data</a>
    </div>
    <div class="d-flex justify-content-center">
        <table class="table table-hover table-responsive">
            <thead>
                <th>No</th>
                <th>Nama Tempat</th>
                <th>Harga Weekend</th>
                <th>Harga Weekday</th>
                <th>action</th>
            </thead>
            <tbody>
                <?php $no=1; ?>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->destination_name}}</td>
                    <td>{{ $item->price_weekend }}</td>
                    <td>{{ $item->price_weekday }}</td>
                    <td>
                        <a href="/admin/destinasi/edit/{{ $item->id }}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="/admin/destinasi/detail/{{ $item->id }}" class="btn btn-sm btn-info">Detail</a>
                        <form action="/admin/destinasi/delete/{{ $item->id }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
    
@endsection