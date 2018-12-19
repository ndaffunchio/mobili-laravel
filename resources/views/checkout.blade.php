@extends('templates/master')

@section('title', 'm o b i l i • Checkout')

@section('stripe')
	<script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')

<div class="container">
    <form action="{{route('checkout.store')}}" method="POST">
        @csrf
        <div class="title">
            <h2 class="alt-title center">Envío y Pago</h2>
        </div>

        <div class="showroom-items">

            <section class="showroom">
                <h3 style="margin-top:5rem;">RETIRO EN SHOWROOM</h3>
                <p>Seleccioná un local por donde preferís retirar tu producto.</p>
                <h4>LOCALES</h4>

                <select name="store_address">
                    <option value="" selected disabled>Seleccionar Local</option>
                    <option value="Thames 2323">THAMES 2323 - Palermo</option>
                    <option value="Cabildo 1728">CABILDO 1728 - Belgrano</option>
                    <option value="Lavalle 937">LAVALLE 937 - Retiro</option>
                </select>
                @if ($errors->has('store_address'))
                    <p style="color:red;">{{$errors->first('store_address')}}</p>
                @endif
            </section>

            <section class="medios-de-pago">
                <h3 style="margin-top:5rem;">MEDIO DE PAGO</h3>

                <div class="medio-de-pago">
                    <input type="radio" name="payment" value="Efectivo" checked>
                    <span>Quiero abonar en efectivo al retirar</span>
                </div>

                <div class="medio-de-pago">
                    <input type="radio" name="payment" value="Mercado Pago">
                    <span>Quiero abonar con MercadoPago</span>
                </div>
                @if ($errors->has('payment'))
                    <p style="color:red;">{{$errors->first('payment')}}</p>
                @endif
                <img src="assets/img/pago/mercado-pago.png">
            </section>

        </div>

        <div style="margin-top:4rem;display: flex;justify-content: center;">
            <input type="submit" value="FINALIZAR COMPRA" class="submit-btn verde finalizar-compra">
        </div>

    </form>
</div>

@endsection