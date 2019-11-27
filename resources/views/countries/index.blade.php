@extends('app')
@section('content')
    <div class="card">
        <div class="card-header">Gestión de paises</div>
            <table class="table table-sm table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Número de ciudades</th>
                </tr>
                </thead>
                <tbody>
                @foreach($countries as $country)
                    <tr>
                        <td>{{ $country->id }}</td>
                        <td>{{ $country->name }}</td>
                        <td>{{ $country->cities()->count() }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection()

