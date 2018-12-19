@extends('admin.master')
@section('title', 'Mobili - Ventas')

@section('breadcrumb')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Ventas</li>
    </ol>
@endsection
@section('content')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Fecha</th>
                <th scope="col">Estado</th>
                <th scope="col">Total</th>
                <th scope="col">Forma de Pago</th>
                <th scope="col">Sucursal</th>
                <th scope="col">Detalles</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr>
                    <td>{{ $order->id}}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->status }}</td>
                    <td>${{ $order->total }}</td>
                    <td>{{ $order->payment }}</td>  
                    <td>{{ $order->store_address }}</td>
                    <td><a href="{{ route('sales.show', ['id'=>$order->id]) }}"><i class="fas fa-search"></i></a></td>
                </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>
</div>
@endsection