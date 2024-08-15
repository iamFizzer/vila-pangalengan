<section class="package_section layout_padding-top">
    <div class="container">
      <div class="heading_container">
        <h2>
          Villa
        </h2>
        <p>
          Villa yang kami sediakan dan pasti estetik. 
        </p>
      </div>
    </div>
    <div class="container">
      <div class="package_container">
        @foreach ($data as $item)
        <div class="box">
            <img src="{{asset('gambar')}}/{{$item->destination_pict}}" alt="{{$item->destination_name}}" width="50%">
          <div class="detail-box">
            <h4>
              {{$item->destination_name}}
            </h4>

            <a href="/destinasi/detail">
              Detail
            </a>
            <a href="https://wa.me/+62">
              Book Now
            </a>
          </div>
        </div>
        @endforeach
        
      </div>
    </div>
  </section>