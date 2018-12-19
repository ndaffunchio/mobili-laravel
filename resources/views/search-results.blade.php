@extends('templates/master')

@section('title', 'm o b i l i • Resultados de Búsqueda')

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <p style="color:red;">{{$error}}</p>
            @endforeach
        @endif
        <div class="search-results">
        <h2 class="alt-title">Resultados de Búsqueda</h2>
        <p class="subtitle">{{$products->count()}} resultado(s) para '{{request()->input('query')}}'</p>
        <div class="list">
            @foreach ($products as $product)
            <div class="item">
                <a href="{{route('shop.product', $product->slug)}}" class="alt-a">{{$product->name}}</a>
                <p>{{ str_limit($product->description, 180)}}</p>
            </div>
            @endforeach
            {{-- Esta es la forma normal de llamar al paginador {{ $products->links() }} --}}
            {{-- En nuestro caso hay que agregarle el metodo appends() para que concatene las query strings que tenemos al cambiar de página --}}
            {{ $products->appends(request()->input())->links() }}
        </div>
    </div>
</div>
    
@endsection