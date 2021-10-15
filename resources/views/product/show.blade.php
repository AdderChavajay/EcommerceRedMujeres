@extends('layauts.plantilla')

@section('title','Informacion del producto')

@section('header')
@include('components.header');
@endsection

@section('main')
<main class="container">
    <Section class="row">

        <div class="imagen col-md-8  col-sm-12">
            @php
            $images = explode(',', $product->images);
            $fimage = array_shift($images);
            @endphp
            @include('components.carousel-images')
            <div style="overflow: auto;">
                <div style="overflow: auto;">
                    <div class="d-flex">
                        @foreach ($images as $image)
                        <div class="d-inline-block py-2 px-1" style="max-width: 150px;">
                            <img class="w-200 img-fluid " src="{{asset('storage/'.$image)}}" alt="First slide"
                                width="500px" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="descripcion col-md-3 col-sm-12">
            <div class="margen_descripcion">
                <h3> <b> {{ $product->name }} </b> </h3>
                <p> <b>Web ID:</b> {{ $product->id }}</p>
                <span class="span">
                    <h2 class="text-center"><b> US ${{ $product->price }} </b> </h2>

                    <div class="">
                        <h5 class=""><b>Tamaño: </b> {{$product->size}}  </h5>
                    </div>
                    <div class="estados_di  ">
                        <p><b>Descripcion:</b></p>
                        <p>{{$product->description}}</p>
                    </div>
                    <div class="text-center ">
                        <form id="form-add-to-cart" action="{{ route('shopping.store', ) }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">
                            <input type="hidden" name="name" value="{{ $product->name }}">
                            <input type="hidden" name="size" value="{{ $product->size }}">
                            <input type="hidden" name="quantity" value="1">
                            <input type="hidden" name="price" value="{{ $product->price }}">
                            <input type="hidden" name="image" value="{{ $fimage }}">
                            <button class="btn btn-primary" type="submit">
                                <ion-icon name="cart" class=""></ion-icon>
                                Agregar al carrito
                            </button>
                        </form>
                    </div>


                </span>

            </div>
        </div>
    </Section>
    <section class="titulos row">
        <div class="text-center">

        </div>

    </section>
    <section>
        <section class="productos_sugeridos row">
            <div class="col-md-12">
                <div class="text-center">
                    <h3 class="Products_As"> <b> Productos relacionados </b> </h3>
                </div>

                <div class="row col-md-12">
                    @foreach ($relation_products as $product)
                    <div class="col-md-3 col-sm-6 all_product">
                        <a href="{{ route('product.show', $product->id) }}" class="color_letras ">
                            <div class="product-image-wrapper producto shadow">
                                <div class="single-products">
                                    @php
                                    $images = explode(',', $product->images);
                                    @endphp
                                    <img src="{{ asset('storage/'.$images[0]) }}"  class="img-full-contain" alt="">
                                    <div class="productinfo text-center">
                                        <h3><b>  ${{ $product->price }}  </b></h3>
                                        <p>{{ $product->name }}</p>
                                        <div class="margen">
                                            <button type=" submit" class="btn btn-dark">
                                                <ion-icon name="cart"></ion-icon>
                                                Agregar
                                            </button>
                                        </div>
                                        <div class="py-2"></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
</main>

@endsection


@section('footer')
<footer>
    <h5 class="text-center">Derechor reservados &copy;</h5>
</footer>
@endsection
