@extends('templates/master')
@section('title', 'm o b i l i • Mi cuenta')

@section('content')

@if (session()->has('success'))
{{ session()->get('success') }}
@endif

<section class="micuenta">
    <!-- HOLA, USUARIO       -->
    <div class="container">
        <h1 class="alt-title">MI CUENTA</h1>
        <!-- AVATAR       -->
        <div class="avatar">
            @if (session('status'))
            <div class="alert alert-info alert-success">
                {{ session('status') }}
            </div>
            @endif  
            @if ($datos->avatar)
                <img class="avatar" src="{{asset($datos->avatar)}}" alt="Avatar usuario">                    
            @else
                <i class="far fa-smile"></i>
            @endif
        </div>
        <div class="container-micuenta">
            <div class="info">
                <form method="get" action="{{route('profile.edit')}}" novalidate>
                    <p>Email: {{$datos->email}}</p>
                    <p>Nombre y apellido: {{$datos->first_name}} {{$datos->last_name}}</p>
                    <p>Dni: {{$datos->dni}}</p>
                    <p>Teléfono: {{$datos->phone}}</p>
                    <p>Fecha de nacimiento: {{$datos->birthday}}</p>
                    <button type="submit" class="btn btn-success" value="submit">Modificar mis datos</button>
                </form>
            </div>
        </div> 
        
    </div>            
</section>
@endsection
