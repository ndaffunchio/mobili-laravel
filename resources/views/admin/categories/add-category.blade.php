@extends('admin.master')
@section('title', 'Mobili - Agregar Categoría')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('category.index') }}">Categorías</a>
    </li>
    <li class="breadcrumb-item active">Agregar Categoría</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="container">
        <form method="POST" action="{{route('categories.store')}}" novalidate class="needs-validation">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nombre de la categoría</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Nombre de la categoría" value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            <strong>Campo Obligatorio</strong>
                        </div>
                    @endif
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-sm-4 offset-2">
                    <button type="submit" class="btn btn-success">Agregar Categoría</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection