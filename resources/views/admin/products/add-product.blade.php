@extends('admin.master')
@section('title', 'Mobili - Agregar Producto')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('product.index') }}">Productos</a>
    </li>
    <li class="breadcrumb-item active">Agregar Producto</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="container">
        <form method="POST" action="{{route('product.store')}}" novalidate class="needs-validation" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nombre del producto</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Nombre del producto" value="{{ old('name') }}" required>
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
                <label for="description" class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="Descripción">{{ old('description') }}</textarea>
                    @if ($errors->has('description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="price" class="col-sm-2 col-form-label">Precio</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="price" placeholder="Precio" value="{{ old('price') }}" required>
                    @if ($errors->has('price'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            <strong>Campo Obligatorio</strong>
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="category_id" class="col-sm-2 col-form-label">Categoría</label>
                <div class="col-sm-10">
                    <select name="category_id" id="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}" required>
                        <option value="" disabled {{ (!old('category_id')) ? "selected" : "" }}>Elegir Categoría</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{ (old('category_id') == $category->id) ? "selected" : "" }}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('category_id'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category_id') }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            <strong>Campo Obligatorio</strong>
                        </div>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <label for="picture" class="col-sm-2 col-form-label">Foto del producto</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control{{ $errors->has('picture') ? ' is-invalid' : '' }}" name="picture" id="picture">
                    @if ($errors->has('picture'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('picture') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group row">
                <span class="col-sm-2 col-form-label">Producto Destacado</span>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline" style="margin-top:5px;">
                        <input class="form-check-input" type="radio" name="featured" id="featuredYes" value="1" {{ old('featured') ? 'checked="checked"' : '' }}>
                        <label class="form-check-label" for="featuredYes">Sí</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="featured" id="featuredNo" value="0" {{ old('featured') ? '' : 'checked="checked"' }}>
                        <label class="form-check-label" for="featuredNo">No</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4 offset-2">
                    <button type="submit" class="btn btn-success">Agregar Producto</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection