<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">Villa Situ Cileunca</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset('admin')}}/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin/dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/admin/destinasi" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Destinasi</a>
            <a href="/admin/testimoni" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Testimoni</a>
        </div>
    </nav>
</div>