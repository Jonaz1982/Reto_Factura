@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h1>
                    Lista de Usuarios
                </h1>
                    <a href='{{ route('users.create') }}' class='btn btn-success btn-sm float-right'>Añadir un nuevo usuario</a>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-primary" role="alert">
                        {{session('success')}}
                    </div> 
                    @endif
                    <table class="table table-light">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)

                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit', ['user' => $user->id]) }}" class='btn btn-info'>Editar</a>
                                    <a href="{{ route('users.show', ['user' => $user->id]) }}" class='btn btn-success'>Mostar</a>

                                    <a class='btn btn-danger'
                                        onClick="
                                            document.getElementById('delete-form').action ='{{route('users.destroy',['user'=> $user->id]) }}'
                                            document.getElementById('delete-form').submit()
                                        
                                        "
                                    >Eliminar</a>

                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<form id="delete-form" action="" method="POST" style="display:none;">
    @csrf
    @method('DELETE')
</form>

@endsection
