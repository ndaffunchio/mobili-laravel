@extends('admin.master')
@section('title', 'Mobili - Dashboard')

@section('breadcrumb')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('admin.index') }}">Dashboard</a>
        </li>
    </ol>
@endsection
@section('content')
    <div class="top-info">
        <h2 class="dashboard-title">Resúmen de la tienda</h2>
    </div>

    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="card dashboard">
                <div class="card-body">
                    <p class="dashboard-subtitle">Total de ventas</p>
                    <p>{{$orders->count()}}</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="card dashboard">
                <div class="card-body">
                    <p class="dashboard-subtitle">Total facturación</p>
                    <p>{{$total}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="card dashboard">
                <div class="card-body">
                    <p class="dashboard-subtitle">Ordenes pendientes</p>
                    <p>{{$pendientes}}</p>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="card dashboard">
                <div class="card-body">
                    <p class="dashboard-subtitle">Usuarios registrados</p>
                    <p>{{$users}}</p>
                </div>
            </div>
        </div>
    </div>

<!-- Area Chart Example-->    
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-chart-area"></i>
        Estadísticas de ventas
    </div>
    <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
    </div>    
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>    


@endsection