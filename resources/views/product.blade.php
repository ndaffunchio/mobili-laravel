@extends('templates/master')

@section('title', 'm o b i l i • '.$product->name)

@section('content')

<article class="product">
    <div class="container">

        <nav class="breadcrumb">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{route('shop.index')}}">Productos</a></li>
                <li><a href="{{route('shop.index', ['category' => $product->category->slug])}}">{{$product->category->name}}</a></li>
                <li class="active"><a href="{{route('shop.product', $product->slug)}}">{{$product->name}}</a></li>
            </ul>
        </nav>

        <section class="product-info">
            <!--SLIDER DE PRODUCTO-->
            <div class="product-image slider-producto product">
                <div class="item"><img src="{{asset($product->picture)}}" alt=""></div>
            </div>

            <div class="product-description">
                <h2 class="product-title">{{$product->name}}</h2>
                <p class="product-price">${{$product->price}}</p>

                <div class="payment">
                    <p><i class="far fa-credit-card"></i> HASTA 12 CUOTAS <a href="https://www.mercadopago.com.ar/ayuda/medios-de-pago-cuotas-promociones_264" target="_blank" class="alt-a">Ver medios de pago</a></p>
                </div>
                
                <form action="{{route('cart.store', $product)}}" method="POST">
                    @csrf
                    <input type="submit" value="AGREGAR AL CARRITO" class="submit-btn verde">
                </form>
                <p class="product-details">{{$product->description}}</p>
            </div>{{-- Cierra .description --}}
        </section>{{-- Cierra .product-info --}}

        <aside class="product-aside">
            <h3 class="alt-title">Opiniones</h3>
            <div class="opinion">
                <div class="estrellas">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h6 class="opinion-nombre">Natalia</h6>
                <blockquote class="comentario">Excelente producto. En mi caso, lo ubiqué en el living de mi casa y combina perfecto con el resto de los muebles. Altamente recomendable, tanto para tu casa como para tu oficina.</blockquote>
            </div>
            <div class="opinion">
                <div class="estrellas">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <h6 class="opinion-nombre">Damián</h6>
                <blockquote class="comentario">Buena calidad, recomendable.</blockquote>
            </div>
            <div class="opinion">
                <div class="estrellas">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h6 class="opinion-nombre">Tomás</h6>
                <blockquote class="comentario">Gran producto. Muy lindo y cómodo.</blockquote>
            </div> 
        </aside>

        <section class="product-related">
            <h3 class="alt-title">PRODUCTOS RELACIONADOS</h3>
            <div class="item-list">

                <a href="{{route('shop.product', 'catre-napper')}}">
                    <div class="item">
                        <img src="/assets/img/deseados/deseados-3.jpg" alt="">
                        {{-- <p class="product-name">VOLK</p> --}}
                        <p class="name">CATRE NAPPER</p>
                        <p class="price">$13000</p>
                    </div>
                </a>
                <a href="{{route('shop.product', 'sillon-byron')}}">
                    <div class="item">
                        <img src="/assets/img/deseados/deseados-4.jpg" alt="">
                        {{-- <p class="product-name">VOLK</p> --}}
                        <p class="name">SILLÓN BYRON</p>
                        <p class="price">$8500</p>
                    </div>
                </a>
                <a href="{{route('shop.product', 'banquito-eco')}}">
                    <div class="item">
                        <img src="/assets/img/deseados/deseados-5.jpg" alt="">
                        {{-- <p class="product-name">VOLK</p> --}}
                        <p class="name">BANQUITO ECO</p>
                        <p class="price">$5350</p>
                    </div>
                </a>
                
            </div>
        </section>

    </div>
</article>


@endsection
