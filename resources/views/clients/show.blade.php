@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mis clientes Registrados') }}</div>

                <div class="card-body">
                 <ul>
                    <li>Razon Social: {{$client->social_reason}}</li>
                    <li>Nit: {{$client->nit}}</li>
                    <li>Direccion: {{$client->address}}</li>
                 </ul>                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
