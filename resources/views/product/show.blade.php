@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mis Productos Registrados') }}</div>

                <div class="card-body">
                 <ul>
                    <li>Code: {{$product->code}}</li>
                    <li>Name: {{$product->name}}</li>
                    <li>Price: {{$product->price}}</li>
                 </ul>                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
