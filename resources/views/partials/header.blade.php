<header>
    <div class="topBar">
        <div class="promo">
            <p>25% off en todo cocina</p>
        </div>
        <div class="social">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
    </div>
    <nav id="mainNav">
        <div class="bloqueIzq">
            <a class="toggle" href="javascript:void(0)"><i class="fas fa-bars"></i></a>
            <div class="logo">
                <h1><a href="/"><img src="\assets/img/logo.png" alt="Mobili Logo" title="Mobili - Tienda de Muebles"></a></h1>
            </div>
            <div class="menu mobile">
                <ul>
                    <li><a href="{{route('shop.index')}}">Productos</a></li>
                    <li><a href="#">Ambientes</a></li>
                    <li><a href="#">Ideas</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <!--<li><a href="#">Contacto</a></li> Oculto temporalmente -->
                </ul>
            </div>
        </div>

        <!--cierra .bloqueIzq-->
        <div class="bloqueDer">
            <a href="javascript:void(0)" id="search"><i class="fas fa-search"></i></a>
            @auth
            <a class="toggleUserMenu" href="javascript:void(0)"><i class="far fa-user"></i></a>
            <div class="userMenu mobile">
            <p>Hola {{ Auth::user()->first_name }}</p>
                <ul>
                    <li><a href="/profile">Mi cuenta</a></li>
                    <li><a href="/logout">Cerrar sesión</a></li>
                </ul>
            </div>
            @else
            <a class="toggleUserMenu" href="javascript:void(0)"><i class="fas fa-user"></i></a>
            <div class="userMenu mobile">
                <ul>
                    <li><a href="login">Ingresar</a></li>
                    <li><a href="register">Registrarse</a></li>
                </ul>
            </div>
            @endauth
            <a href="{{route('cart.index')}}">
                @if (Cart::instance('default')->count() > 0)
                    <span class="cantidad-carrito">{{ Cart::instance('default')->count() }}</span>
                @endif
                <i class="fas fa-shopping-bag"></i>
            </a>
        </div>
        <!--cierra. bloqueDer-->
    </nav>
</header>
