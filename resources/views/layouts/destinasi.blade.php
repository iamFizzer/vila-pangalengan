<section class="section section-lg bg-default">
  <div class="container">
    <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Selected Villa</span></h3>
    <div class="row row-lg row-30">
      @foreach ($data as $item)      
      <div class="col-sm-6 col-lg-4 col-xl-3">
        <!-- Product-->
        <article class="product wow fadeInLeft" data-wow-delay=".15s">
          <div class="product-figure"><img src="{{asset('gambar')}}/{{$item->destination_pict}}" alt="" width="161" height="162"/>
          </div>
          <div class="product-rating"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star text-gray-13"></span>
          </div>
          <h6 class="product-title">{{$item->destination_name}}</h6>
          <div class="product-price-wrap">
            <div class="product-price">Weekday : {{$item->price_weekday}} / day</div>
            <div class="product-price">Weekend : {{$item->price_weekend}} / day</div>
          </div>
          <div class="product-button">
            <div class="button-wrap"><a class="button button-xs button-primary button-winona" href="https://wa.me/+6281222025353">Book Now</a></div>
            <div class="button-wrap"><a class="button button-xs button-secondary button-winona" href="/view/destinasi/{{$item->id}}">View</a></div>
          </div>
        </article>
      </div>
      @endforeach
    </div>
  </div>
</section>