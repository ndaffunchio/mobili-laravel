<!DOCTYPE html>
<html lang="es">
    @include('admin.partials.head')
<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.login.submit') }}" novalidate>
                @csrf
                <div class="form-group">
                    <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Usuario" required="required" autofocus="autofocus" value="{{ old('email') }}">
                    <label for="inputEmail">Usuario</label>
                    @if ($errors->has('email'))
                        <span class="text-danger"><strong>{{ $errors->first('email') }}</strong></span>
                    @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Contraseña" required="required">
                    <label for="inputPassword">Contraseña</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Recordarme
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block" href="#">Ingresar</button>
                </form>
                {{-- <div class="text-center">
                    <a class="d-block small" href="#">¿Olvidaste la contrase&ntilde;a?</a>
                </div> --}}
            </div>
        </div>
    </div>
    @include('admin.partials.scripts')
</body>
</html>

