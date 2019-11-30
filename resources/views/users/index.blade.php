@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Usuarios
                    <a href='{{ route('users.create') }}' class='btn btn-success btn-sm'>Nuevo Usuario</a>
                </div>
                <div class="card-body">
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
                                    <a href="{{ route('users.edit', ['user' => $user->id]) }}"" class='btn btn-info'>Editar</a>
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

@endsection
