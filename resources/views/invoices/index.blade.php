@extends('app')
@section('content')
    <div class="card">
        <div class="card-header">Invoice Management</div>
        <table class="table table-sm table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Código</th>
                <th>Subtotal</th>
                <th>Impuestos</th>
                <th>Total</th>
                <th>Cantidad de productos</th>
            </tr>
            </thead>
            <tbody>
            @foreach($invoices as $invoice)
                <tr>
                    <td>{{ $invoice->id }}</td>
                    <td>
                        <a href="{{ route('invoices.show', $invoice) }}">{{ $invoice->number }}</a>
                    </td>
                    <td>{{ $invoice->subtotal }}</td>
                    <td>{{ $invoice->vat }}</td>
                    <td>{{ $invoice->total }}</td>
                    <td>{{ $invoice->products()->count() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection()

