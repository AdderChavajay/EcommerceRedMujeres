@extends('layouts.app')
@section('main')
<div class="Card container">
    <div class="card-header text-center">
        <h5>Detalles de venta</h5>
    </div>
    <div class="ma-10">
        Fecha de creacion: {{ date('d-m-Y H:i:s', strtotime($purchased->created_at)) }}
    </div>
    <div class="card-body overflow-auto">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr class="">
                    <th scope="">#</th>
                    <th scope="">Producto</th>
                    <th scope="">Tamaño</th>
                    <th scope="">Cantidad</th>
                    <th scope="">Precio/U</th>
                    <th scope="">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchased->details as $detail)
                <tr class="">
                    <th class="">{{ $detail->product->id }}</th>
                    <th class="">{{ $detail->product->name }}</th>
                    <td class="">{{ $detail->product->size }}</td>
                    <td class="">${{ $detail->quantity }}</td>
                    <td class="">${{ $detail->price }}</td>
                    <td class="">${{ $detail->quantity * $detail->price }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        Total: ${{ $purchased->total }}
    </div>
</div>

@endsection
