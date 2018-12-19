<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user-shield"></i>
            <span>Admins</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="adminDropdown">
            <a class="dropdown-item" href="{{ route('admins.index') }}">Listado de Admins</a>
            <a class="dropdown-item" href="{{ route('admins.create') }}">Agregar Admin</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="adminDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-user-shield"></i>
            <span>Usuarios</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="adminDropdown">
            <a class="dropdown-item" href="{{ route('users.index') }}">Listado de Usuarios</a>
            <a class="dropdown-item" href="{{ route('users.create') }}">Agregar Usuario</a>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="productosDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-store"></i>
            <span>Productos</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="productosDropdown">
            <a class="dropdown-item" href="{{ route('product.index') }}">Listado de Productos</a>
            <a class="dropdown-item" href="{{ route('product.create') }}">Agregar Producto</a>
        </div>
    </li>
    <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="categoriasDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-list"></i>
                <span>Categorías</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="categoriasDropdown">
                <a class="dropdown-item" href="{{ route('category.index') }}">Listado de Categorías</a>
                <a class="dropdown-item" href="{{ route('category.create') }}">Agregar Categoría</a>
            </div>
        </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('sales.index') }}">
            <i class="fas fa-fw fa-cart-arrow-down"></i>
            <span>Ventas</span></a>
    </li>
</ul>