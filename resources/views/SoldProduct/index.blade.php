@extends('layouts.app')

@section('main')
<div class="container">


    <div class="Card">
        <div class="card-header text-center">
            <h5>Productos Vendidos</h5>

        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th width="280px">Accion</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>#</td>
                        <td>nombre</td>
                        <td>
                            <a class="btn btn-success" href="">Mostrar</a>
                            <a class="btn btn-primary" href="">Editar</a>
                        </td>
                    </tr>

                </tbody>
            </table>

        </div>

    </div>
</div>

@endsection