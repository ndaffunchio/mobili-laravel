@extends('templates/master')

@section('title', 'm o b i l i')

@section('content')
    <section class="exito">
      <div class="container">
        <div class="container-exito">
        <h2 class="alt-title">Bienvenida/o {{ Auth::user()->first_name }}</h2>
          <p class="exito-message">Te has registrado con éxito en mobili.com </p>
          {{-- LINK AL SHOP CUANDO ESTÉ --}}
          <a href="{{ route('shop.index') }}" class="btn gris">Ingresar a la tienda</a><br>
        </div>
      </div>
    </section>
@endsection
