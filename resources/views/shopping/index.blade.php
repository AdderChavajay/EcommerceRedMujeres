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
                                    <tr class="">
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
                                            <h5 class="" style="font-size: 18px;">${{
                                                $product->price }}</h5>
                                        </td>
                                        <td class="">
                                            <p class="" style="font-size: 18px;">${{
                                                $product->getPriceSum() }} </p>
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
                        {{-- <a href="{{route('direcctions.index')}}" class="btn btn-primary btn-lg btn-block">
                            <ion-icon name="logo-paypal"></ion-icon> Comprar
                        </a> --}}
                        <div id="paypal-button-container"></div>
                    </div>
                    <div class="col d-flex shadow py-2" style="width: 80px;">
                        <h5 class="mx-auto mb-0"> Total: ${{\Cart::getTotal();}} </h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection

@section('scripts')
@if (!Cart::isEmpty())
<script src="https://www.paypal.com/sdk/js?client-id={{env('PAYPAL_CLIENT_ID')}}&locale=es_GT"></script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            return actions.order.create({
                @auth
                payer: {
                    name: {
                        given_name: '{{ Auth::user()->name }}',
                        surname: '{{ Auth::user()->last_name }}'
                    },
                    // address: {
                    //     address_line_1: '',
                    //     address_line_2: '',
                    //     admin_area_1: '',
                    //     admin_area_2: '',
                    //     postal_code: '',
                    //     country_code: 'GT'
                    // }
                },
                @endauth
                purchase_units: [{
                    amount: {
                        currency_code: 'USD',
                        value: {{\Cart::getTotal()}},
                        breakdown: {
                            item_total: {
                                currency_code: 'USD',
                                value: {{\Cart::getTotal()}},
                            }
                        }
                    },
                    items: [
                        @foreach ($products as $product)
                            {
                                name: '{{ $product->name }}',
                                unit_amount: {
                                    currency_code: 'USD',
                                    value: '{{ $product->price }}',
                                },
                                quantity: '{{ $product->quantity }}',
                            },
                        @endforeach
                    ]
                }]
            });
        },
        onApprove: function(data, actions) {
            // return actions.order.capture().then(function(details) {
            //     alert('Transaction completed by ' + details.payer.name.given_name);
            // });
            return fetch('/paypal/process/'+data.orderID)
            .then(res => res.json())
            .then(function (response) {
                if (!response.success) {
                    const failureMessage = 'Sorry, your transaction could not be processed.';
                    alert(failureMessage);
                    return;
                }
                location.href = '/shopping-success/status'
                // alert('Transaction completed by ' + response.data);
            })
        },
        onError: function (err) {
            alert('No se pudo completar la transaccion' + err);
            console.error(err);
        }
    }).render('#paypal-button-container');
</script>
@endif
@endsection
