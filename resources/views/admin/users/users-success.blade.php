@extends('admin.master')
@section('title', 'Mobili - ¡Usuario Creado!')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('users.index') }}">Usuarios</a>
    </li>
    <li class="breadcrumb-item">
        <a href="{{ route('users.create') }}">Agregar Usuario</a>
    </li>
    <li class="breadcrumb-item active">Usuario Creado</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="container">
        <div class="alert alert-success" role="alert">
            <span>¡El usuario fue creado con éxito!</span>
        </div>
        <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fas fa-plus"></i>Agregar otro Usuario</a>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Ir al listado <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

@endsection