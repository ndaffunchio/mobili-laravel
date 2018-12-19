@extends('admin.master')
@section('title', 'Mobili - Usuarios')


@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Usuarios</li>
</ol>
@endsection


@section('content')

@if (session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif  

<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Editar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $k => $user)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $user->email }}</td>
                        <td><a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                        <td>
                            @if ($user->id!=1)
                            <form action="{{route('user.destroy', ['id' => $user->id ])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                            @else
                            <button type="submit" class="btn btn-danger" disabled><i class="far fa-trash-alt"></i></button>
                            @endif
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>


@endsection

