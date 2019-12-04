@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mis Usarios Registrados') }}</div>

                <div class="card-body">
                 <ul>
                    <li>Nombre: {{$user->name}}</li>
                    <li>Apellidos: {{$user->last_name}}</li>
                    <li>Email: {{$user->email}}</li>
                 </ul>                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
