<div class="container-fluid service py-5">
  <div class="container py-5">
      <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
          <div class="sub-style">
              <h4 class="sub-title px-3 mb-0">Villa Yang tersedia</h4>
          </div>
          <h1 class="display-3 mb-4">Villa Situ Cileunca Pangalengan.</h1>
          <p class="mb-0">Berikut Villa Yang di Sediakan</p>
      </div>
      <div class="row g-4 justify-content-center">
        @foreach ($data as $item)
        <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item rounded">
             <div class="service-img rounded-top">
                  <img src="{{asset('gambar')}}/{{$item->destination_pict}}" class="img-fluid rounded-top w-100" alt="">
             </div>
              <div class="service-content rounded-bottom bg-light p-4">
                  <div class="service-content-inner">
                      <h5 class="mb-4">{{$item->destination_name}}</h5>
                      <p class="mb-4">{{$item->desc}}</p>
                      <a href="https://wa.me/+628" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Book Now</a>
                      <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Detail</a>
                  </div>
              </div>
          </div>
      </div>
        @endforeach
      </div>
  </div>
</div>