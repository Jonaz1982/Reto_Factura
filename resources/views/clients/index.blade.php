@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h1>
                    Lista de Clientes
                </h1>
                    <a href='{{ route('clients.create') }}' class='btn btn-success btn-warning float-right'>Añadir un nuevo cliente</a>
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
                                <th>Razon Social</th>
                                <th>Nit</th>
                                <th>Direccion</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)

                            <tr>
                                <td>{{ $client->nit}}</td>
                                <td>{{ $client->social_reason}}</td>
                                <td>{{ $client->address}}</td>
                                <td>
                                    <a href="{{ route('clients.edit', ['client' => $client->id]) }} " class='btn btn-info'>Editar</a>
                                    <a href="{{ route('clients.show', ['client' => $client->id]) }} " class='btn btn-success'>Mostar</a>

                                    <a class='btn btn-danger'
                                        onClick="
                                            document.getElementById('delete-form').action ='{{route('clients.destroy',['client'=> $client->id]) }}'
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
