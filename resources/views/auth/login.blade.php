@extends('templates/master')

@section('title', 'm o b i l i • Login')

@section('content')
<section class="login">
    <div class="container">
        <div class="container-form">
            <h2 class="alt-title">Ingresar</h2>
            <p class="login-info">¿Tenés cuenta? Ingresá ahora.</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- EMAIL -->
                <div class="form-item">
                    <label for="email" class="form-label">Email <span style="color:red;">*</span></label>
                    <input id="email" type="email" class="form-field{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                    <span class="form-error" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <!-- CONTRASEÑA -->
                <div class="form-item">
                    <label for="inputPassword" class="form-label">Contraseña <span style="color:red;">*</span></label>
                    <input id="password" type="password" class="form-field{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="form-error" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <!-- RECORDAR USUARIO -->
                <div class="form-checkbox">
                    <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label for="remember">
                        <p>{{ __('Remember Me') }}</p>
                    </label>
                </div>
                <div>
                    <input type="submit" value="{{ __('Login') }}" class="submit-btn gris">
                </div>
            </form>
        </div>
    </div>

    <div class='copy-side'>
            {{-- <a href="{{ route('password.request') }}" class="alt-a" style="display: block;">
                {{ __('Forgot Your Password?') }}
            </a> --}}
            <p style="display: inline-block;">¿No tenés una cuenta en mobili?   </p><a href="register" class="alt-a">Crear una</a>
    </div>
</section>
@endsection