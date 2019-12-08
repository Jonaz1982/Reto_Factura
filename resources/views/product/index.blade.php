@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h1>
                    Product List
                </h1>
                    <a href='{{ route('products.create') }}' class='btn btn-success btn-warning float-right'>Añadir un nuevo producto</a>
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
                                <th>Code</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)

                            <tr>
                                <td>{{ $product->code}}</td>
                                <td>{{ $product->name}}</td>
                                <td>{{ $product->price}}</td>
                                <td>
                                    <a href="{{ route('products.edit', ['product' => $product->id]) }} " class='btn btn-info'>Editar</a>
                                    <a href="{{ route('products.show', ['product' => $product->id]) }} " class='btn btn-success'>Mostar</a>

                                    <a class='btn btn-danger'
                                        onClick="
                                            document.getElementById('delete-form').action ='{{route('products.destroy',['product'=> $product->id]) }}'
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
