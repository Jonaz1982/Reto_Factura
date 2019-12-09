@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-1">
            <div class="card">
                <div class="card-header">Invoice detail {{ $invoice->number }}</div>

                <div class="card-body">
                 <dl class="row">
                    <dd class="col-md-3">Codigo</dd>
                    <dt class="col-md-3">{{ $invoice->number }}</dt>
                    <dd class="col-md-3">Subtotal</dd>
                    <dt class="col-md-3">{{ $invoice->subtotal }}</dt>
                    <dd class="col-md-3">IVA</dd>
                    <dt class="col-md-3">{{ $invoice->vat }}</dt>
                    <dd class="col-md-12">Descripcion</dd>
                    <dt class="col-md-12">{{ $invoice->description }}</dt>
                 </dl>                
                </div>
                 <div class="card-body">
                         <div class="card">
                            <div class="card-header">Detail of pruducts</div>
                            <table class="table table-sm table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($invoice->products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->pivot->total }}</td>
                                    </tr>
                                <div class="card">
                                    <a href="{{ route('invoices.index') }}" class="btn btn-success btn-block"> List of invoices </a>
                                </div>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                 </div> 
            </div>
        </div>
    </div>
</div>
@endsection