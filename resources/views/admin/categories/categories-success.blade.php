@extends('admin.master')
@section('title', 'Mobili - ¡Categoría Creada!')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('category.index') }}">Categorías</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('category.create') }}">Agregar Categoría</a>
    </li>
    <li class="breadcrumb-item active">Categoría Creada</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="container">
        <div class="alert alert-success" role="alert">
            <span>¡La categoría fue creada con éxito!</span>
        </div>
        <a href="{{ route('category.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Agregar otra categoría</a>
        <a href="{{ route('category.index') }}" class="btn btn-primary">Ir al listado <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

@endsection