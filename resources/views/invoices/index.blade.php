@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <h1>
                    Invoicing in process.....
                </h1>
                    <a href='{{ route('invoices.create') }}' class='btn btn-success btn-warning float-right'>Add New Invoice</a>
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
                                <th>Id</th>
                                <th>Código</th>
                                <th>Descripcion</th>
                                <th>Subtotal</th>
                                <th>Impuestos</th>
                                <th>Total</th>
                                <th>Cantidad de productos</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($invoices as $invoice)

                            <tr>
                                <tr>
                                    <td>{{ $invoice->id }}</td>
                                    <td>
                                        <a href="{{ route('invoices.show', $invoice) }}">class='btn btn-success'> Mostar {{ $invoice->number }}</a>
                                    </td>
                                    <td>{{ $invoice->id}}</td>
                                    <td>{{ $invoice->codigo}}</td>
                                    <td>{{ $invoice->description}}</td>
                                    <td>{{ $invoice->impuesto}}</td>
                                    <td>{{ $invoice->subtotal}}</td>
                                    <td>{{ $invoice->vat }}</td>
                                    <td>{{ $invoice->total }}</td>
                                    <td>{{ $invoice->products()->count() }}</td>
                                     </tr>
                              
                                <td>
                                    <a href="{{ route('invoices.edit', ['invoice' => $invoice->id]) }} " class='btn btn-info'>Editar</a>
                                    <a href="{{ route('invoices.show', ['invoice' => $invoice->id]) }} " class='btn btn-success'>Mostar</a>

                                    <a class='btn btn-danger'
                                        onClick="
                                            document.getElementById('delete-form').action ='{{route('invoices.destroy',['invoice'=> $invoice->id]) }}'
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