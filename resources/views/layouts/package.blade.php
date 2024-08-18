<section class="package_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
          Packages
        </h2>
        <p>
          Paket yang di sediakan oleh kami
        </p>
      </div>
    </div>
    <div class="container">
      <div class="package_container">
        @if ($paket != null)    

        @foreach ($paket as $item)    
        <div class="box">
          <img src="{{asset('gambar')}}/paket/{{$item->foto}}" alt="{{$item->foto}}" width="150px">
        <div class="detail-box">
          <h4>
            {{$item->nama_paket}}
          </h4>
          <h5 style="color: black">{{$item->harga}}/{{$item->satuan}}</h5>
          <a href="/paket/detail/{{$item->id}}">
            Detail
          </a>
          <a href="https://wa.me/+62">
            Book Now
          </a>
        </div>
      </div>
        @endforeach
        @else
            
        @endif
      </div>
    </div>
  </section>