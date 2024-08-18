    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
            <div class="row">
                <div class="col-6 collapse-brand">
                    <a href="./index.html">
                        <img src="{{ asset('Admin/assets/img/brand/blue.png') }}">
                    </a>
                </div>
                <div class="col-6 collapse-close">
                    <button type="button" class="navbar-toggler" data-toggle="collapse"
                        data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                        aria-label="Toggle sidenav">
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
            <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended"
                    placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <span class="fa fa-search"></span>
                    </div>
                </div>
            </div>
        </form>

        <!-- Navigation -->
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link active" href="./index.html">
                    <i class="ni ni-tv-2 text-primary"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./examples/invoices.html">
                    <i class="ni ni-single-copy-04 text-blue"></i> Invoices
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./examples/products.html">
                    <i class="ni ni-box-2 text-green"></i> Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./examples/categories.html">
                    <i class="ni ni-bullet-list-67 text-orange"></i> Categories
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./examples/customers.html">
                    <i class="ni ni-single-02 text-yellow"></i> Customers
                </a>
            </li>
        </ul>

        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Hak Akses</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
                <a class="nav-link " href="./examples/profile.html">
                    <i class="ni ni-single-02 text-yellow"></i> Atur Akun
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./examples/login.html">
                    <i class="ni ni-key-25 text-info"></i> Atur Role
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./examples/register.html">
                    <i class="ni ni-circle-08 text-pink"></i> Atur Permission
                </a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item active active-pro">
                <a class="nav-link" href="#">
                    <i class="ni ni-settings-gear-65 text-dark"></i> Version 1.1.0
                </a>
            </li>
        </ul>


    </div>
