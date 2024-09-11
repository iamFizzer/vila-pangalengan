<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Detail | Villa Situ Cileunca</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{asset('gambar')}}/logo.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="{{asset('thems')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('thems')}}/css/fonts.css">
    <link rel="stylesheet" href="{{asset('thems')}}/css/style.css">
  </head>
  <body>
    <div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="56px" data-xl-stick-up-offset="56px" data-xxl-stick-up-offset="56px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="/"><img class="brand-logo-dark" src="{{asset('gambar')}}/logo.png" alt="" width="198" height="66"/></a></div>
                </div>
                <div class="rd-navbar-right rd-navbar-nav-wrap">
                  <div class="rd-navbar-aside">
                    <ul class="rd-navbar-contacts-2">
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-phone"></span></div>
                          <div class="unit-body"><a class="phone" href="/tel:+6281222025353">+6281222025353</a></div>
                        </div>
                      </li>
                      <li>
                        <div class="unit unit-spacing-xs">
                          <div class="unit-left"><span class="icon mdi mdi-map-marker"></span></div>
                          <div class="unit-body"><a class="address" href="#">Situ Cileunca Pangalengan</a></div>
                        </div>
                      </li>
                    </ul>
                    <ul class="list-share-2">
                      <li><a class="icon mdi mdi-facebook" href="{{asset('thems')}}/#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="{{asset('thems')}}/#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="{{asset('thems')}}/#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="{{asset('thems')}}/#"></a></li>
                    </ul>
                  </div>
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/">Home</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#">Villa</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#">Paket</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- parallax top-->
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Detail Villa</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="/">Home</a></li>
            <li class="active">villa</li>
          </ul>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="tabs-custom row row-50 justify-content-center flex-lg-row-reverse text-center text-md-left" id="tabs-4">
            <div class="col-lg-8 col-xl-9">
              <!-- Tab panes-->
              <div class="tab-content tab-content-1">
                <div class="tab-pane fade show active" id="tabs-4-1">
                  <h4>Tentang {{$data->destination_name}}</h4>
                  <p>{{$data->desc}}</p>
                  <img src="{{asset('gambar/'.$data->destination_pict)}}" alt="" width="835" height="418"/>

                  <div class="card">
                    <table class="table table-bordered">
                      <thead>
                        <th>Weekend</th>
                        <th>Weekday</th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{$data->price_weekend}}</td>
                          <td>{{$data->price_weekday}}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                 </div>
                 
              </div>
              <a href="https://wa.me/+6281222025353" class="button button-lg button-primary button-winona button-shadow-2">BOOK NOW</a>
            </div>
          </div>
        </div>
      </section>

      <!-- Icon Classic-->
      {{-- <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-md row-50">
            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay="0s">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-helicopter"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="{{asset('thems')}}/#">Free Delivery</a></h5>
                    <p class="box-icon-classic-text">Lotus advenas ducunt ad gemna. Ubi est domesticus domina heu.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".1s">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-pizza"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="{{asset('thems')}}/#">20+ Pizza Options</a></h5>
                    <p class="box-icon-classic-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-xl-4 wow fadeInUp" data-wow-delay=".2s">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-lg flex-column text-center flex-md-row text-md-left">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-leaf"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="{{asset('thems')}}/#">Fresh Ingredients</a></h5>
                    <p class="box-icon-classic-text">Albus, dexter particulas grauiter consumere de ferox, bi-color abactus.</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section> --}}

      <!-- Our Team-->
      {{-- <section class="section section-lg section-bottom-md-70 bg-default">
        <div class="container">
          <h3 class="oh"><span class="d-inline-block wow slideInUp" data-wow-delay="0s">our team</span></h3>
          <div class="row row-lg row-40 justify-content-center">
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay=".2s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="{{asset('thems')}}/#"><img src="{{asset('thems')}}/images/team-01-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="{{asset('thems')}}/#">Richard Peterson</a></h6>
                  <div class="team-modern-status">Head Chef</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="{{asset('thems')}}/#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInLeft" data-wow-delay="0s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="{{asset('thems')}}/#"><img src="{{asset('thems')}}/images/team-02-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="{{asset('thems')}}/#">Amelia Lee</a></h6>
                  <div class="team-modern-status">Manager</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="{{asset('thems')}}/#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay=".1s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="{{asset('thems')}}/#"><img src="{{asset('thems')}}/images/team-03-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="{{asset('thems')}}/#">Sam Peterson</a></h6>
                  <div class="team-modern-status">Head Baker</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="{{asset('thems')}}/#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay=".3s" data-wow-duration="1s">
              <!-- Team Modern-->
              <article class="team-modern"><a class="team-modern-figure" href="{{asset('thems')}}/#"><img src="{{asset('thems')}}/images/team-04-270x236.jpg" alt="" width="270" height="236"/></a>
                <div class="team-modern-caption">
                  <h6 class="team-modern-name"><a href="{{asset('thems')}}/#">Jane Smith</a></h6>
                  <div class="team-modern-status">Pizza Chef</div>
                  <ul class="list-inline team-modern-social-list">
                    <li><a class="icon mdi mdi-facebook" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-twitter" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-instagram" href="{{asset('thems')}}/#"></a></li>
                    <li><a class="icon mdi mdi-google-plus" href="{{asset('thems')}}/#"></a></li>
                  </ul>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-100 text-left section-relative">
        <div class="container">
          <div class="row row-60 justify-content-center justify-content-xxl-between">
            <div class="col-lg-6 col-xxl-5 position-static">
              <h3>Our history</h3>
              <div class="tabs-custom" id="tabs-5">
                <div class="tab-content tab-content-1">
                  <div class="tab-pane fade" id="tabs-5-1">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">PizzaHouse Establishment and First Happy Clients</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-5-2">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Organizing a Free Pizza Delivery Service in Los Angeles</h5>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-5-3">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Offering an Extended Range of Pizzas, Burgers, and Salads</h5>
                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
                  </div>
                  <div class="tab-pane fade show active" id="tabs-5-4">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Partnering with Organic Farms Located in California</h5>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.</p>
                  </div>
                </div>
                <div class="list-history-wrap">
                  <ul class="nav list-history">
                    <li class="list-history-item" role="presentation"><a href="{{asset('thems')}}/#tabs-5-1" data-toggle="tab">
                        <div class="list-history-circle"></div>2005</a></li>
                    <li class="list-history-item" role="presentation"><a href="{{asset('thems')}}/#tabs-5-2" data-toggle="tab">
                        <div class="list-history-circle"></div>2012</a></li>
                    <li class="list-history-item" role="presentation"><a href="{{asset('thems')}}/#tabs-5-3" data-toggle="tab">
                        <div class="list-history-circle"></div>2015</a></li>
                    <li class="list-history-item" role="presentation"><a class="active" href="{{asset('thems')}}/#tabs-5-4" data-toggle="tab">
                        <div class="list-history-circle"></div>2019</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-lg-6 position-static index-1">
              <div class="bg-image-right-1 bg-image-right-lg"><img src="{{asset('thems')}}/images/our_history-1110x710.jpg" alt="" width="1110" height="710"/>
                <div class="link-play-modern"><a class="icon mdi mdi-play" data-lightgallery="item" href="{{asset('thems')}}/https://www.youtube.com/watch?v=1UWpbtUupQQ"></a>
                  <div class="link-play-modern-title">How we<span>Work</span></div>
                  <div class="link-play-modern-decor"></div>
                </div>
                <div class="box-transform" style="background-image: url(images/our_history-1110x710.jpg);"></div>
              </div>
            </div>
          </div>
        </div>
      </section> --}}

      <!-- Our clients-->
      {{-- <section class="section section-lg bg-default text-md-left">
        <div class="container">
          <div class="row row-60 justify-content-center flex-lg-row-reverse">
            <div class="col-md-8 col-lg-6 col-xl-5">
              <div class="offset-left-xl-70">
                <h3 class="heading-3">What People Say</h3>
                <div class="slick-quote">
                  <!-- Slick Carousel-->
                  <div class="slick-slider carousel-parent" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel-5" data-for="#child-carousel-5" data-slide-effect="true">
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Torus accelerares, tanquam ferox cacula. Fluctuss experimentum in burdigala! Ubi est peritus classis? Peregrinatione superbe ducunt ad magnum verpa.</span></h5>
                        <h5 class="quote-modern-author">Stephen Adams,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Gluten, fluctus, et galatae. Germanus classiss ducunt ad brodium. Pol, a bene cedrium. Tabess unda in neuter avenio! Orexiss sunt adelphiss de rusticus parma.</span></h5>
                        <h5 class="quote-modern-author">Sam Peterson,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Pol, silva! Grandis contencios ducunt ad torus. Monss congregabo in nobilis tectum! Velox, fatalis victrixs sapienter talem de emeritis, festus torus.</span></h5>
                        <h5 class="quote-modern-author">Jane McMillan,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                    <div class="item">
                      <!-- Quote Modern-->
                      <article class="quote-modern">
                        <h5 class="quote-modern-text"><span class="q">Fluctuss sunt eras de neuter plasmator. Heuretes noster brabeuta est. Nixus, visus, et mensa. Primus, magnum tatas rare locus de altus, camerarius clabulare.</span></h5>
                        <h5 class="quote-modern-author">Will Jones,</h5>
                        <p class="quote-modern-status">Regular Client</p>
                      </article>
                    </div>
                  </div>
                  <div class="slick-slider child-carousel" id="child-carousel-5" data-arrows="true" data-for=".carousel-parent" data-items="4" data-sm-items="4" data-md-items="4" data-lg-items="4" data-xl-items="4" data-slide-to-scroll="1">
                    <div class="item"><img class="img-circle" src="{{asset('thems')}}/images/team-5-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="{{asset('thems')}}/images/team-6-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="{{asset('thems')}}/images/team-7-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                    <div class="item"><img class="img-circle" src="{{asset('thems')}}/images/team-8-83x83.jpg" alt="" width="83" height="83"/>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-7"><img src="{{asset('thems')}}/images/wp-say-669x447.jpg" alt="" width="669" height="447"/>
            </div>
          </div>
        </div>
      </section> --}}

      <!-- Page Footer-->
      <footer class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line-2">
          <div class="container">
            <div class="row row-30 align-items-center">
              <div class="col-sm-6 col-md-7 col-lg-4 col-xl-4">
                <div class="row row-30 align-items-center text-lg-center">
                  <div class="col-md-7 col-xl-6"><a class="brand" href="/"><img src="{{asset('gambar')}}/logo.png" alt="" width="198" height="66"/></a></div>
                  
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                <div class="group-xmd group-sm-justify">
                  <div class="footer-modern-contacts wow slideInUp">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                      <div class="unit-body"><a class="phone" href="tel:#">+6281222025353</a></div>
                    </div>
                  </div>
                  <div class="footer-modern-contacts wow slideInDown">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                      <div class="unit-body"><a class="mail" href="mailto:#">info@villasitucileunca.com</a></div>
                    </div>
                  </div>
                  <div class="wow slideInRight">
                    <ul class="list-inline footer-social-list footer-social-list-2 footer-social-list-3">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-3">
          <div class="container">
            <div class="row row-10 justify-content-between">
              <div class="col-md-6"><span>Situ Cileunca Pangalengan</span></div>
              <div class="col-md-auto">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span></span><span>.&nbsp;</span><span>All Rights Reserved.</span></span></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="{{asset('thems')}}/js/core.min.js"></script>
    <script src="{{asset('thems')}}/js/script.js"></script>
  </body>
</html>