<ul class="navbar-nav bg-gradient-custom sidebar sidebar-dark accordion" id="accordionSidebar" style="background-image: linear-gradient(180deg, #d4a762 10%, #d4a762 100%);">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">
            <img src="img/logo.png" alt="" style="width: 50px;">
        </div>
        <div class="sidebar-brand-text mx-1">Sotang Mangga 3</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= route_to('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span><strong>Dashboard</strong></span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Utilitas
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="<?= route_to('staff') ?>">
            <i class="fas fa-fw fa-user-tie"></i>
            <span><strong>Manajemen Staff</strong></span>
        </a>
    </li>

    <li class="nav-item">
    <a class="nav-link" href="<?= route_to('pelanggan') ?>">
        <i class="fas fa-fw fa-users"></i>
        <span><strong>Manajemen Pelanggan</strong></span>
    </a>
</li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span><strong>Pages</strong></span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= route_to('produk') ?>">Manajemen Produk</a>
                <a class="collapse-item" href="<?= route_to('testimoni') ?>">Manajemen Testimoni</a>
                <a class="collapse-item" href="<?= route_to('galerifoto') ?>">Manajemen Galeri Foto</a>
                <a class="collapse-item" href="<?= route_to('omset') ?>">Manajemen Omset</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= route_to('adminlogout') ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span><strong>Logout</strong></span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block" />
</ul>
<!-- End of Sidebar -->