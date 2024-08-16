@extends('admin.index')

@section('isian')
    <div class="container">
        <div class="d-flex justify-content-start">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Villa </h3>
                </div>
                <div class="card-body">
                    <form action="/admin/destinasi/update/{{$data['id']}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Villa</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Villa" value="{{$data['destination_name']}}" >
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="weekday">Harga Weekday</label>
                        <input type="text" name="weekday" class="form-control" id="weekday" placeholder="Masukkan Harga Weekday" value="{{$data['price_weekday']}}" >
                        @error('weekday')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="weekend">Harga Weekend</label>
                        <input type="text" name="weekend" class="form-control" id="weekend" placeholder="Masukkan Harga Weekend" value="{{$data['price_weekend']}}">
                        @error('weekend')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="desk">Deskripsi</label>
                        <textarea name="desk" class="form-control" id="desk" placeholder="Masukkan Deskripsi">{{$data['desc']}}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('gambar')}}/{{$data['destination_pict']}}" alt="{{$data['destination_name']}}" width="50%">
                            </div> 
                            <div class="col-md-6">
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" class="form-control" id="foto">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/admin/destinasi" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
    var weekend = document.getElementById('weekend');
    weekend.addEventListener('keyup', function(e)
    {
        weekend.value = formatRupiah(this.value);
    });
    var weekday = document.getElementById('weekday');
    weekday.addEventListener('keyup', function(e)
    {
        weekday.value = formatRupiah(this.value);
    });
    function formatRupiah(angka, prefix)
    {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split    = number_string.split(','),
            sisa     = split[0].length % 3,
            rupiah     = split[0].substr(0, sisa),
            ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
            
        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }
        
        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }
    </script>
@endsection