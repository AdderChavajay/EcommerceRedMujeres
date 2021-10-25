@extends('layouts.app')
@section('main')
<div class="Card container">
    <div class="card-header text-center">
        <h5>Detalles de venta</h5>
    </div>

    <div class="card-body overflow-auto">
        <div class="ma-10">
            <div class="alert alert-secondary">
                Fecha de creacion: {{ date('d-m-Y H:i:s', strtotime($purchased->created_at)) }}
            </div>
        </div>
        <table class="table table-hover text-center">
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

        <div class=" ">
            <div class="col-2 ml-auto alert alert-secondary">
                <h5>
                    Total: ${{ $purchased->total }}
                </h5>
            </div>
        </div>
    </div>
</div>

@endsection