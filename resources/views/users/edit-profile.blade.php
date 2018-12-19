@extends('templates/master')
@section('title', 'm o b i l i • Mi cuenta')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Mi cuenta</li>
</ol>
@endsection
@section('content')

@if (session()->has('success'))
{{ session()->get('success') }}
@endif

<section class="register">
    <div class="container">
        <div class="container-form">
            <h1 class="alt-title">Modificar mis datos</h1>
            
            <!-- AVATAR       -->
            <div class="avatar">
                @if ($profile->avatar)
                    <img class="avatar" src="{{asset($profile->avatar)}}" alt="Avatar usuario">                    
                @else
                <i class="far fa-smile"></i>
                @endif
            </div>
    
            <form method="POST" action="{{route('profile.update', ['id' => Auth::id()])}}" novalidate enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-item image">
                    <label for="avatar">Subir imagen:</label>
                    <input type="file" class="form-control{{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" id="avatar">
                    @if ($errors->has('avatar'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('avatar') }}</strong>
                        </span>
                    @endif
                </div>
                        {{-- E-MAIL --}}
                <div class="form-item">
                    <label for="email" class="form-label">Email <span style="color:red;">*</span></label>
                    <input id="email" type="email" class="form-field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email', $profile->email) }}" required>
                    <div class="alert-error"></div>
                    @if ($errors->has('email'))
                        <span class="form-error" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group wrap">
                    {{-- NOMBRE --}}
                    <div class="form-item" id="nombre">
                        <label for="first_name" class="form-label">Nombre <span style="color:red;">*</span></label>
                        <input id="first_name" type="text" class="form-field{{ $errors->has('first_name') ? ' is-invalid' : '' }}" name="first_name" value="{{ old('first_name', $profile->first_name) }}" required>
                        <div class="alert-error"></div>
                        @if ($errors->has('first_name'))
                            <span class="form-error" role="alert">
                                <strong>{{ $errors->first('first_name') }}</strong>
                            </span>
                        @endif
                    </div>
                    {{-- APELLIDO --}}
                    <div class="form-item" id="apellido">
                        <label for="last_name" class="form-label">Apellido <span style="color:red;">*</span></label>
                        <input id="last_name" type="text" class="form-field{{ $errors->has('last_name', $profile->last_name) ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name', $profile->last_name) }}" required>
                        <div class="alert-error"></div>
                        @if ($errors->has('last_name'))
                            <span class="form-error" role="alert">
                                <strong>{{ $errors->first('last_name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group wrap">
                    {{-- CONTRASEÑA --}}
                    <div class="form-item">
                        <label for="password" class="form-label">Contraseña <span style="color:red;">*</span></label>
                        <input id="password" type="password" class="form-field{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Al menos 6 caracteres">
                        <div class="alert-error"></div>
                        @if ($errors->has('password'))
                            <span class="form-error" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    {{-- CONFIRMAR CONTRASEÑA --}}
                    <div class="form-item">
                        <label for="password-confirm" class="form-label">Confirmar contraseña <span style="color:red;">*</span></label>
                        <input id="password-confirm" type="password" class="form-field" name="password_confirmation" required>
                    </div>
                </div>

                
                <div class="form-group wrap">
                    {{-- DNI --}}
                    <div class="form-item">
                        <label for="dni" class="form-label">DNI <span style="color:red;">*</span></label>
                        <input id="dni" type="text" class="form-field{{ $errors->has('dni') ? ' is-invalid' : '' }}" name="dni" value="{{ old('dni', $profile->dni) }}" placeholder="Sin puntos ni guiones" required>
                        <div class="alert-error"></div>
                        @if ($errors->has('dni'))
                            <span class="form-error" role="alert">
                                <strong>{{ $errors->first('dni') }}</strong>
                            </span>
                        @endif
                    </div>
                    {{-- TELEFONO --}}
                    <div class="form-item">
                        <label for="phone" class="form-label">Teléfono</label>
                        <input id="phone" type="text" class="form-field{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone', $profile->phone) }}" placeholder="01133445566">
                        <div class="alert-error"></div>
                        @if ($errors->has('phone'))
                            <span class="form-error" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                

                {{-- FECHA DE NACIMIENTO --}}
                <div class="form-item">
                    <label for="birthday" class="form-label">Fecha de nacimiento</label>
                    <input id="birthday" type="date" class="form-field{{ $errors->has('birthday') ? ' is-invalid' : '' }}" name="birthday" value="{{ old('birthday', $profile->birthday) }}">
                    <div class="alert-error"></div>
                    @if ($errors->has('birthday'))
                        <span class="form-error" role="alert">
                            <strong>{{ $errors->first('birthday') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
                <div class="alert-error submit"></div>
            </form>
        </div>
    </div>
</section>
@endsection
