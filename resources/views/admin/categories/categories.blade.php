@extends('admin.master')
@section('title', 'Mobili - Categorías')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Categorías</li>
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
                @foreach ($categories as $k => $category)
                    <tr>
                        <td>{{ $k+1 }}</td>
                        <td>{{ $category->name }}</td>
                        <td><a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-warning"><i class="far fa-edit"></i></a></td>
                        <td>
                            <form action="{{route('category.destroy', ['id' => $category->id ])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
</div>

@endsection