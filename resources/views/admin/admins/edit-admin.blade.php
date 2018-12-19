@extends('admin.master')
@section('title', 'Mobili - Editar Administrador')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('admins.index') }}">Administradores</a>
    </li>
    <li class="breadcrumb-item active">Editar Administrador</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="container">
        <form method="POST" action="{{route('admin.update', ['id' => $admin->id ])}}" novalidate class="needs-validation">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" value="{{ old('email', $admin->email) }}">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            <strong>Campo Obligatorio</strong>
                        </div>
                    @endif
                </div>
                <br>
                <br>
                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-4">
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Al menos 6 caracteres" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            <strong>Campo Obligatorio</strong>
                        </div>
                    @endif
                </div>
                <label for="password-confirm" class="col-sm-2 col-form-label">Confirmar contraseña</label>
                <div class="col-sm-4">
                    <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password-confirm" value="{{ old('password') }}">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
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
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection