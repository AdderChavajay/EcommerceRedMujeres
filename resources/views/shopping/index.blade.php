@extends('layauts.plantilla')

@section('title','Compras')

@section('header')
@include('components.header');
@endsection


@section('main')

<div class="container col-md-8">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show ">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col">
            <div class="">
                <div class="container">


                    <div class="Card">
                        <div class="card-header text-center">
                            <h5>Carrito </h5>

                        </div>
                        <div class="card-body overflow-auto">
                            <table class="table table-hover ">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="col">Producto</th>
                                        <th class="">Cantidad</th>
                                        <th class="">Precio/U</th>
                                        <th class="">Subtotal</th>
                                        <th class="">Accion</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach ($products as $product)
                                    <tr class="shadow">
                                        <td class="row ">
                                            <div class="col">
                                                <img src="{{asset('storage/'.$product->attributes->image)}}"
                                                    class="img-fluid rounded-3" alt="Shopping item"
                                                    style="width: 65px;">
                                            </div>
                                            <div class="col">
                                                <p style="font-size: 1rem;">{{ $product->name }}</p>
                                                <p class="small mb-0">Tamaño: <b> {{ $product->attributes->size }} </b>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <h5 class="fw-normal mb-0" style="font-size: 18px;">{{ $product->quantity }}
                                            </h5>
                                        </td>
                                        <td class="">
                                            <h5 class="mb-0" style="font-size: 18px;">${{ $product->price }}</h5>
                                        </td>
                                        <td class="">
                                            <p class="mb-0" style="font-size: 18px;">${{ $product->getPriceSum() }} </p>
                                        </td>

                                        <td class="col">
                                            <a class="btn btn-default" style="color: green;"
                                                href="{{ route('product.show', $product->id) }}">
                                                <ion-icon name="pencil"></ion-icon>
                                            </a>
                                            <form action="{{ route('shopping.destroy', $product->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-default" style="color: red;" type="submit">
                                                    <ion-icon name="trash-outline"></ion-icon>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row py-2 px-5 ">
                    <div class="col text-center">
                        <a href="" class="btn btn-primary">
                            <ion-icon name="logo-paypal"></ion-icon> Comprar
                        </a>
                    </div>
                    <div class="col d-flex shadow py-2" style="width: 80px;">
                        <h5 class="mx-auto mb-0"> Total: ${{\Cart::getTotal();}} </h5>
                    </div>
                </div>
                <div class="text-center my-3">
                    <form action="{{ route('shopping.clean') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Quitar todos los productos</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection