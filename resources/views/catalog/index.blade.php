@extends('layauts.plantilla')

@section('title','Mercado de Artesanias')

@section('header')
@include('components.header');
@endsection

@section('main')
<div class="container">
    <div class="text-center alert alert-info">
        <h4>{{$category->name}}</h4>
    </div>
    
    <div class="row col-md-12 my-2">
        @foreach ($products as $product)
            <div class="col-md-3 col-sm-6 ">

                <a href="{{ route('product.show', $product->id) }}" style="text-decoration: none; color: #000">
                    <div class="product-image-wrapper producto shadow">
                        <div class="single-products">
                            @php
                            $images = explode(',', $product->images);
                            @endphp
                            <img src="{{asset('storage/'.$images[0])}}" class="img-full-contain" alt="">
                                <div class="productinfo text-center">
                                        <h3>${{ $product->price }}</h3>
                                        <p>{{ $product->name }}</p>
                                        <div class="margen py-2">
                                            <button type=" submit" class="btn btn-dark">
                                                <ion-icon name="cart"></ion-icon>
                                                Agregar
                                            </button>
                                        </div>
                                </div>
                        </div>
                    </div>
                </a>

            </div>
        @endforeach
    </div>
    {{ $products->links() }}
</div>

@endsection
