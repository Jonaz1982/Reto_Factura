@extends('app')
@section('content')
<div class="card">
    <div class="card-header">Detalle de factura {{ $invoice->number }}</div>
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
</div>
<hr>
<div class="card">
    <div class="card-header">Detalle de pruductos</div>
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
        @endforeach
        </tbody>
    </table>
</div>
<hr>
<div class="card">
    <a href="{{ route('invoices.index') }}" class="btn btn-success btn-block"> Listado de facturas </a>
</div>
@endsection
