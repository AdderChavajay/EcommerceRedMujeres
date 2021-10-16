@extends('layauts.plantilla')

@section('title','Compras')

@section('header')
@include('components.header');
@endsection


@section('main')

<div class="container col-md-6">
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
                <div class="card-body p-4">
                    <div class="text-center">
                        <h4>Productos</h4>
                    </div>
                    @foreach ($products as $product)
                    <div class="  mb-3">
                        <div class="card-body shadow">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <div>
                                        <img src="{{asset('storage/'.$product->attributes->image)}}"
                                            class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                                    </div>
                                    <div class="ms-3 px-3 py-0">
                                        <h5>{{ $product->name }}</h5>
                                        <p class="small mb-0">{{ $product->attributes->size }}</p>
                                    </div>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <div style="width: 50px;">
                                        <h5 class="fw-normal mb-0">{{ $product->quantity }}</h5>
                                    </div>
                                    <div style="width: 80px;">
                                        <h5 class="mb-0">${{ $product->price }}</h5>
                                    </div>
                                    <form action="{{ route('shopping.destroy', $product->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-default" style="color: green;" type="submit">
                                            <ion-icon name="trash-outline"></ion-icon>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

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
@endsection