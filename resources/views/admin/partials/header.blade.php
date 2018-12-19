<nav class="navbar navbar-expand navbar-dark bg-dark static-top" id="page-top">
    <div class="toggle">
        <a class="navbar-brand mr-0" href="{{ route('admin.index') }}"><img src="{{asset('assets/img/logo-white.png')}}" alt="Logo Mobili Blanco"></a>
        <button class="btn btn-link btn-sm text-white" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
    </div>
    
    <!-- Navbar Search 
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>-->

    <!-- Navbar -->
    <ul class="navbar-nav">
        {{-- <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.logout')}}" role="button">
                <span class="nav-logout">Cerrar Sesión</span><i class="fas fa-sign-out-alt"></i>
            </a>
        </li>
    </ul>

  </nav>