@extends('admin.master')
@section('title', 'Mobili - Ventas')

@section('breadcrumb')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">Ventas</a></li>
        <li class="breadcrumb-item active">Orden # {{$order->id}}</li>
    </ol>
@endsection
@section('content')
    <div class="top-info">
        <h2 class="order-title">Detalle de la Orden</h2>
        <h3 class="order-date"><span>Orden realizada: </span>{{ $date->format('l d, F Y') }}</h3>
    </div>

<div class="row">
    <!-- Listado productos-->
    <div class="col-sm-12 col-lg-8 col-xl-8">
        <div class="card">
            
            {{-- <div class="card-body"> --}}
                <div class="table-responsive">
                    <table class="orders table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Producto</th>
                                <th scope="col" class="text-right">Cantidad</th>
                                <th scope="col" class="text-right"></th>
                                <th scope="col" class="text-right">Precio</th>
                                <th scope="col" class="text-right">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->OrderItems as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td class="text-right">{{$item->quantity}}</td>
                                <td class="text-right" style="color: lightgray;">x</td>
                                <td class="text-right">${{$item->price}}</td>
                                <td class="text-right">${{$item->quantity * $item->price}}</td>
                            </tr>
                            </thead>
                            @endforeach
                            <tfoot class="tfoot-light">
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col" class="text-right">{{$order->total_quantity}}</th>
                                        <th scope="col" class="text-right"></th>
                                        <th scope="col" class="text-right">Subtotal</th>
                                        <th scope="col" class="text-right">${{ $order->subtotal }}</th>
                                    </tr>
                            </tbody>
                    </table>
                    
                    <section class="totales right">
                        <div class="subtotal">
                            <p>IVA (21%): ${{ $order->tax }}</p>
                        </div>
                        <div class="total">Total: ${{ $order->total }}</div>
                    
                    </section>
                </div>
            {{-- </div>   --}}
        </div>
        
        <div class="order-details row">
            <div class="col-sm-12 col-lg-6 col-xl-6">
                <p class="order-subtitle">FORMA DE PAGO</p>
                <p>{{$order->payment}}</p>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-6">
                <p class="order-subtitle">RETIRA POR</p>
                <p>{{$order->store_address}}</p>
            </div>
        </div>
    </div>

    <!-- Detalle Comprador-->
    <div class="col-sm-12 col-lg-4 col-xl-4 ">
        <div class="order-details">
            <p class="status alert 
            <?php switch($order->status) {
                    case 'Pendiente':
                        echo 'alert-warning';
                        break;
                    case 'Cancelada':
                        echo 'alert-danger';
                        break;
                    case 'Pago Recibido':
                        echo 'alert-success';
                        break;
                }
            ?>">
                <strong>Estado:</strong> {{$order->status}}
            </p>
            <form action="{{ route('sales.update', ['id'=>$order->id]) }}" method="POST">
                @csrf
                @method('PUT')
        
                <label for="status" class="order-subtitle">ACCIONES</label>
                <select name="status" id="status" class="form-control">
                    <option value="" selected disabled>---</option>
                    @switch($order->status)
                        @case('Pendiente')
                            <option value="Cancelada">Cancelar</option>
                            <option value="Pago Recibido">Pago Recibido</option>
                            @break
                        @case('Cancelada')
                            <option value="Pago Recibido">Pago Recibido</option>
                            <option value="Pendiente">Pendiente</option>
                            @break
                        @case('Pago Recibido')
                            <option value="Cancelada">Cancelada</option>
                            <option value="Pendiente">Pendiente</option>
                            @break
                        @default
                    @endswitch
                </select>
                <input type="submit" value="Cambiar" class="btn btn-primary">
            </form>
<br><br>
            <p class="order-subtitle">Datos del cliente</p>
            <div class="card">
                <div class="card-body">
                    <p class="client-name">{{$order->user->first_name}} {{$order->user->last_name}}</p>
                    <p><a href="mailto:{{$order->user->email}}">{{$order->user->email}}</a></p>
                    
                    <p><span>DNI: </span>{{$order->user->dni}}</p>
                    <p><span>Teléfono: </span>{{$order->user->phone}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection