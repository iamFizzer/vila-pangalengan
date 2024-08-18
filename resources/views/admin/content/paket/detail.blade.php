@extends('admin.index')

@section('isian')
    <div class="container">
        <div class="d-flex justify-content-start">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Villa </h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                       <span>Nama Villa</span>
                       <span>:</span>
                        <span>{{$data['destination_name']}}</span>
                    </div>
                    <div class="form-group">
                        <span>Harga Weekday</span>
                        <span>:</span>
                        <span>Rp. {{$data['price_weekday']}}</span>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <span>Harga Weekend</span>
                            <span>:</span>
                            <span>Rp. {{$data['price_weekend']}}</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <span>Deskripsi</span>
                        <span>:</span>
                        <textarea name="desk" class="form-control" id="desk" placeholder="Masukkan Deskripsi">{{$data['desc']}}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2"><span>Foto</span></div>
                            <div class="col-md-2"><span>:</span></div>
                            <div class="col-md-8">
                                <img src="{{asset('gambar')}}/{{$data['destination_pict']}}" alt="{{$data['destination_name']}}" width="50%">
                            </div> 
                        </div>
                    </div>
                    <div class="card-footer">
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