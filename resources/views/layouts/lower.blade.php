<div class="container space">
    <div class="row">
        <div class="col-md-12">
            <div class="section-title text-center">
                <h1>Data Wisata</h1>
                <div class="line-title"></div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="card bg-danger text-white">
              <div class="card-body">
                  <div class="row align-items-center">
                      <div class="col-8">
                        <span class="text-corona">Total Positif</span>
                        <span id="positif" class="count-corona"></span>
                        <span class="text-corona">Orang</span>
                      </div>
                      <div class="col-4">
                          <img src="{{asset('thems')}}/img/sad.png" class="img-icon" alt="" width="80" height="80">
                      </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="card bg-success text-white">
              <div class="card-body">
                  <div class="row align-items-center">
                      <div class="col-8">
                        <span class="text-corona">Total Sembuh</span>
                        <span id="recovered" class="count-corona"></span>
                        <span class="text-corona">Orang</span>
                      </div>
                      <div class="col-4">
                          <img src="{{asset('thems')}}/img/happy.png" class="img-icon" alt="" width="80" height="80">
                      </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="card bg-dark text-white">
              <div class="card-body">
                  <div class="row align-items-center">
                      <div class="col-8">
                        <span class="text-corona">Total Meninggal</span>
                        <span id="dead" class="count-corona"></span>
                        <span class="text-corona">Orang</span>
                      </div>
                      <div class="col-4">
                          <img src="{{asset('thems')}}/img/worried.png" class="img-icon" alt="" width="80" height="80">
                      </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="card bg-info text-white">
              <div class="card-body">
                  <div class="row align-items-center">
                      <div class="col-8">
                        <span class="text-corona">Total Dirawat</span>
                        <span id="active" class="count-corona"></span>
                        <span class="text-corona">Orang</span>
                      </div>
                      <div class="col-4">
                          <img src="{{asset('thems')}}/img/care.png" class="img-icon" alt="" width="80" height="80">
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
</div>