@extends('admin.master')
@section('title', 'Mobili - Productos')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Productos</li>
</ol>
@endsection
@section('content')

@if (session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif  
<div class="row">
    
    <div class="col-12">
        <h4 class="mb-3 mt-3">{{$products->total()}} Productos Agregados</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td><img src="{{asset($product->picture)}}" alt="" style="max-width:100px;"></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->price}}</td>
                        <td><a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                        <td>
                            <form action="{{route('product.destroy', ['id' => $product->id ])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $products->links() }}
    </div>
    {{-- Cierra .col-12 --}}
</div>
{{-- Cierra .row --}}

@endsection