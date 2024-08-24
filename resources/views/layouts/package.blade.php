<section class="section section-md bg-default">
    <div class="container">
      <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Paket Lainnya</span></h3>
      <div class="row row-md row-30">
        @foreach ($paket as $pak)       
        <div class="col-sm-6 col-lg-4">
          <div class="oh-desktop">
            <!-- Services Terri-->
            <article class="services-terri wow slideInDown">
              <div class="services-terri-figure"><img src="{{asset('gambar')}}/paket/{{$pak->foto}}" alt="" width="370" height="278"/>
              </div>
              <div class="services-terri-caption"><span class="services-terri-icon linearicons-man"></span>
                <h5 class="services-terri-title"><a href="#">{{$pak->nama_paket}}</a></h5>
              </div>
            </article>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>