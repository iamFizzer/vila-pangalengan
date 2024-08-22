<div class="hero_area">
    <div class="header-carousel owl-carousel">
        @foreach ($data as $hero)    
        <div class="header-carousel-item">
            <img src="{{asset('gambar')}}/{{$hero->destination_pict}}" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="carousel-caption-content">
                    <div class="row">
                        <div class="col-md-6">
                            <main>
                                <img src="{{asset('gambar')}}/{{$hero->destination_pict}}" class="img-fluid" alt="" srcset="">
                            </main>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Villa Situ Cileunca</h5>
                            <h1 class="display-1 text-capitalize text-white mb-4">{{$hero->destination_name}}</h1>
                            <p class="mb-5 fs-5">{{$hero->desc}}</p>
                            <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="https://wa.me/+628">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
       
    </div>
  </div>
