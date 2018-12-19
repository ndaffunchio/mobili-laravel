@extends('templates/master')

@section('title', 'm o b i l i • h o m e')

@section('content')
    <!--MAIN SLIDER-->
    <section class="slider">
        <div><img src="assets/img/home/slider-1.jpg" alt=""></div>
        <div><img src="assets/img/home/slider-2.jpg" alt=""></div>
        <div><img src="assets/img/home/slider-3.jpg" alt=""></div>
    </section>
    <!--/MAIN SLIDER-->

    <!--PRODUCTOS DESEADOS-->
    <section class="deseados">
        <h2 class="main-title">Los m&aacute;s deseados</h2>
        <div class="deseados-slider">

            @foreach ($products as $product)
                <div class="item">
                    <a href="{{ route('shop.product', ['slug'=>$product->slug]) }}">
                        <img src="{{ asset($product->picture) }}" alt="">
                        <h4 class="deseados-title">{{$product->name}}</h4>
                        <p class="price">${{$product->price}}</p>
                    </a>
                </div>
            @endforeach
            
        </div>
    </section>
    <!--/PRODUCTOS DESEADOS-->

    <section class="features">
        <div class="features-item">
            <span class="features-icon"><i class="fas fa-shopping-basket"></i></span>
            <h5 class="features-title">Comprá online. Recibí en tienda</h5>
        </div>
        <div class="features-item">
            <span class="features-icon"><i class="fas fa-shipping-fast"></i></span>
            <h5 class="features-title">Servicio de entrega rápido y económico</h5>
        </div>
        <div class="features-item">
            <span class="features-icon"><i class="fas fa-lock"></i></span>
            <h5 class="features-title">Compra fácil y 100% segura</h5>
        </div>
    </section>

    <!--TUS AMBIENTES-->
    <section class="ambientes">
      <h2 class="main-title">TUS AMBIENTES</h2>
      <a href="#">
        <div class="overlay"><h4 class="ambientes-title">Living room</h4></div>
        <img src="assets/img/ambientes/ambientes-livingroom.jpg" alt="">
      </a>
      <a href="#">
        <div class="overlay"><h4 class="ambientes-title">Cocina</h4></div>
        <img src="assets/img/ambientes/ambientes-kitchen.jpg" alt="">
      </a>
      <a href="#">
        <div class="overlay"><h4 class="ambientes-title">Habitación</h4></div>
        <img src="assets/img/ambientes/ambientes-habitacion.jpg" alt="">
      </a>
      <a href="#">
        <div class="overlay"><h4 class="ambientes-title">Niños</h4></div>
        <img src="assets/img/ambientes/ambientes-kids-room.jpg" alt="">
      </a>
      <a href="#">
        <div class="overlay"><h4 class="ambientes-title">Baño</h4></div>
        <img src="assets/img/ambientes/ambientes-bathroom.jpg" alt="">
      </a>
      <a href="#">
        <div class="overlay"><h4 class="ambientes-title">Oficina</h4></div>
        <img src="assets/img/ambientes/ambientes-oficina.jpg" alt="">
      </a>
    </section>
    <!--/TUS AMBIENTES-->
@endsection
