@extends('templates/master')
    
@section('title', 'm o b i l i - Carrito')

@section('content')

	<div class="container cart-page">
        @if (session()->has('success'))
            <p style="text-align:center;" class="alert">{{ session()->get('success') }}</p>
        @endif
        <section class="cart">
            <h2 class="alt-title center">Mi Carrito</h2>

            @if (Cart::count() > 0)

            {{-- <div class="producto-subtotal">
                <p>PRODUCTO</p>
                <p>SUBTOTAL</p>
            </div> --}}

            <div class="items">
                @foreach (Cart::content() as $item)
                    <article class="item">
                        <a href="{{route('shop.product', $item->model->slug)}}"><img src="{{ asset($item->model->picture) }}"></a>
                        <div class="description">
                            <div class="description-sup">
                                <div class="name-price">
                                    <h4 class="name">{{$item->model->name}}</h4>
                                    <p class="price">${{$item->subtotal()}}</p>
                                </div>
                                <p class="unit-price">${{$item->model->price}}</p>
                            </div>
                            
                            <div class="cart-quantity">
                                <form action="{{ route('cart.update', ['id'=> $item->rowId]) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <label for="">Cantidad:  </label>
                                    <select name="quantity" id="quantity">
                                        @for ($i = 1; $i <= 5; $i++)
                                            <option value="{{$i}}" {{ $i == $item->qty ? 'selected' : '' }}>{{$i}}</option>
                                        @endfor
                                    </select>
                                    <button type="submit" alt="Actualizar cantidad" class="button"><i class="fas fa-redo"></i>Actualizar
                                </button>
                                </form>
                            </div>
                            
                            <div class="cart-actions">
                                <form action="{{ route('cart.switchToSaveForLater', $item->rowId) }}" method="POST">
                                    @csrf
                                    <button type="submit" alt="Mover a deseados" class="button deseados"><i class="far fa-heart"></i>Agregar a deseados</button>
                                </form>
                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" alt="Eliminar" class="button"><i class="far fa-trash-alt"></i> Eliminar</button>
                                </form>
                            </div>
                        </div>{{-- cierra .description --}}
                    </article>{{-- cierra .item --}}
                @endforeach
            </div>{{-- cierra .items --}}

            <section class="totales">
                <p>{{ Cart::count() }} item(s) en el carrito</p>
                
                <div class="subtotal">Subtotal: ${{ Cart::subtotal() }} <br><br> IVA (21%): ${{ Cart::tax() }}</div>
                <div class="total">Total: ${{ Cart::total() }}</div>
            
                <div class="botones-compra">
                    <a href="{{route('checkout.index')}}" id="submit" class="submit-btn verde">Iniciar Compra</a>
                    <a href="{{route('shop.index')}}" class="alt-a"><i class="fas fa-arrow-left"></i> Seguir comprando</a>
                </div>
            </section>

            @else
                <h3 class="cart-empty">No hay items en el carrito</h3>
                <a href="{{route('shop.index')}}" class="btn verde back">Volver a la tienda</a>
            @endif
        </section>
        {{-- Cierra .cart --}}

        <section class="wishlist">
            <h2 class="alt-title center">Productos Deseados</h2>

                @if (Cart::instance('saveForLater')->count() > 0)

                    <p>{{ Cart::instance('saveForLater')->count() }} item(s) en su lista de Deseados</p>

                <div class="items">
                    @foreach (Cart::instance('saveForLater')->content() as $deseado)
                        <article class="item">
                            <a href="{{route('shop.product', $deseado->model->slug)}}"><img src="{{ asset($deseado->model->picture) }}"></a>
                            <div class="description">
                                <div class="description-sup">
                                    <div class="name-price">
                                        <h4 class="name">{{$deseado->model->name}}</h4>
                                        <p class="price">${{$deseado->subtotal()}}</p>
                                    </div>
                                </div>
                                
                                <div class="cart-actions">
                                    <form action="{{ route('saveForLater.switchToCart', $deseado->rowId) }}" method="POST">
                                        @csrf
                                        <button type="submit" alt="Mover a deseados" class="button deseados"><i class="far fa-heart"></i>Agregar al Carrito</button>
                                    </form>
                                    <form action="{{ route('saveForLater.destroy', $deseado->rowId) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" alt="Eliminar" class="button"><i class="far fa-trash-alt"></i> Eliminar</button>
                                    </form>
                                </div>
                            </div>{{-- cierra .description --}}
                        </article>{{-- cierra .item --}}
                    @endforeach
                </div>{{-- cierra .items --}}

                @else
                    <h3 class="cart-empty">No hay productos en su lista de Deseados</h3>
                @endif

            </div>
        </section>
@endsection    