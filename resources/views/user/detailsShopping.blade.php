@extends('layouts.plantilla')

@section('title', 'Detalle del Producto')

@section('main')

<div class="Card container">
    <div class="card-header text-center">
        <h5>Detalles del Producto</h5>
    </div>
    <div class="card-body overflow-auto">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr class="">
                    <th>#</th>
                    <th>Producto</th>
                    <th>Tamaño</th>
                    <th>Cantidad</th>
                    <th>Precio/U</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>nombre</td>
                    <td>S</td>
                    <td>3</td>
                    <td>$23</td>
                    <td>$32</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection