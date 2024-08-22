<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary">Villa Situ Cileunca</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="ms-3">
                <h6 class="mb-0">Login Sebagai :</h6>
                <h6 class="mb-0">{{Auth::user()->name}}</h6>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin/dashboard" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/admin/destinasi" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Destinasi</a>
            <a href="/admin/paket" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Paket</a>
            <a href="/admin/testimoni" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Testimoni</a>
        </div>
    </nav>
</div>