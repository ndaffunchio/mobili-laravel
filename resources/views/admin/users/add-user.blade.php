@extends('admin.master')
@section('title', 'Mobili - Agregar Usuario')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="{{ route('users.index') }}">Usuarios</a>
    </li>
    <li class="breadcrumb-item active">Agregar Usuario</li>
</ol>
@endsection

@section('content')
<div class="row">
    <div class="container">
        <form method="POST" action="{{route('users.store')}}" novalidate class="needs-validation">
            @csrf
            <div class="form-group row">
                {{-- Email --}}
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="nombre@email.com" value="{{ old('email') }}" required>
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
                {{-- Nombre --}}
                <label for="first_name" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-4">
                    <input type="text" name="first_name" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" id="first_name" placeholder="" value="{{ old('first_name') }}" required>
                    @if ($errors->has('first_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            <strong>Campo Obligatorio</strong>
                        </div>
                    @endif
                </div>
                <br>
                <br>
                {{-- Apellido --}}
                <label for="last_name" class="col-sm-1 col-form-label">Apellido</label>
                <div class="col-sm-5">
                    <input type="text" name="last_name" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" id="last_name" placeholder="" value="{{ old('last_name') }}" required>
                    @if ($errors->has('last_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            <strong>Campo Obligatorio</strong>
                        </div>
                    @endif
                </div>
                <br>
                <br>
                {{-- CONTRASEÑA --}}
                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Al menos 6 caracteres" value="{{ old('password') }}" required>
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
                <div class="col-sm-3">
                    <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password-confirm" value="{{ old('password') }}" required>
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
                <br>
                <br>
                {{-- dni --}}
                <label for="dni" class="col-sm-2 col-form-label">DNI</label>
                <div class="col-sm-4">
                    <input type="text" name="dni" class="form-control{{ $errors->has('dni') ? ' is-invalid' : '' }}" id="dni" placeholder="Sin puntos ni guiones" value="{{ old('dni') }}" required>
                    @if ($errors->has('dni'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('dni') }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            <strong>Campo Obligatorio</strong>
                        </div>
                    @endif
                </div>
                <br>
                <br>
                {{-- telefono --}}
                <label for="phone" class="col-sm-1 col-form-label">Teléfono</label>
                <div class="col-sm-5">
                    <input type="text" name="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" id="phone" placeholder="01133445566" value="{{ old('phone') }}" required>
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @else
                        <div class="invalid-feedback">
                            <strong>Campo Obligatorio</strong>
                        </div>
                    @endif
                </div>
                <br>
                <br>
                {{-- fecha de nacimiento --}}
                <label for="birthday" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                <div class="col-sm-10">
                    <input type="date" name="birthday" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }}" id="birthday" placeholder="01133445566" value="{{ old('birthday') }}" required>
                    @if ($errors->has('birthday'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('birthday') }}</strong>
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
                    <button type="submit" class="btn btn-success">Agregar Usuario</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection