@extends('templates/master')

@section('title', 'm o b i l i • Shop')

@section('content')

<section class="shop">

    <nav class="breadcrumb">
        <ul>
            <li><a href="/">Home</a></li>
            <li class="active"><a href="{{route('shop.index')}}">Productos</a></li>
        </ul>
    </nav>

    <aside class="shop-categories">
        <h3 class="shop-categories-title  toggleCategoriesMenu"><a  href="javascript:void(0)">Categorías  <i class="fas fa-angle-down"></i></a></h3>
        <div class="categoriesMenu mobile">
            <ul class="categories">
                @foreach ($categories as $category)
                    <li class="{{ request()->category == $category->slug ? 'active' : '' }}"><a href="{{route('shop.index', ['category' => $category->slug])}}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </aside>

    <main class="shop-list">

        <h2 class="shop-list-title">{{ $categoryName }}</h2>
        <div class="byPrice">
            <span>Ordenar por: </span>
            <a href="{{ route('shop.index', ['category'=> request()->category, 'orderBy' => 'menor_precio']) }}">Menor Precio</a>
            <a href="{{ route('shop.index', ['category'=> request()->category, 'orderBy' => 'mayor_precio']) }}">Mayor Precio</a>
        </div>
        <div class="shop-list-items">

            @forelse ($products as $product)
                <a href="{{route('shop.product', $product->slug)}}">
                    <div class="item">
                        <img src="{{asset($product->picture)}}" alt="">
                        {{-- <p class="product-name">VOLK</p> --}}
                        <p class="name">{{$product->name}}</p>
                        <p class="price">${{$product->price}}</p>
                    </div>
                </a>
            @empty
                <div class="empty-category"><p>No hay productos para mostrar en esta categoría.</p></div>
            @endforelse

            @if ($products->count()%4 !== 0)
                @for ($i = 0; $i < $products->count()%4; $i++)
                    <div class="item"></div>
                @endfor
            @endif

        </div>

        {{-- Esta es la forma normal de llamar al paginador {{ $products->links() }} --}}

        {{-- En nuestro caso hay que agregarle el metodo appends() para que concatene las query strings que tenemos al cambiar de página --}}
        {{ $products->appends(request()->input())->links() }}
    </main>{{-- cierra .shop-list --}}
    
</section>{{-- cierra .shop --}}

{{-- <section class="features store">
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
</section> --}}



@endsection