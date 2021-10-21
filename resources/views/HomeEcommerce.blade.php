@extends('layauts.plantilla')

@section('title','Red de mujeres Tzununya')

@section('header')
@include('components.header');
@endsection

@section('main')
<main class="container">
    @if ($errors->any())
    @foreach ($errors->all() as $message)
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
    @endforeach
    @endif
    <div class="row">
        <div class="col-md-8 col-sm-12">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner shadow">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/Carrusell/1.JPG" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/Carrusell/2.JPG" alt="Second slide">
                    </div>
                    <div class="carousel-item ">
                        <img class="d-block w-100" src="images/Carrusell/3.jpeg" alt="Second slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>

        <div class="col-md-4 col-sm-12 texto">

            <h3 class="text-center my-3"> <strong>Red de mujeres</strong></h3>

            <article class="">
                <p>
                    La red de mujeres están conformadas por asociaciones entre ella mismas
                    que por la cual cada asociación tiene sus propios cualidades y roles que
                    los hacen destacar.
                </p>

                <p>
                    Cabe mencionar que estos productos en venta son elaborados a mano y
                    cada una de ella son mujeres emprendedoras.
                </p>

            </article>

            <div class="text-center ">
                <a target="_blank" href="https://www.facebook.com/MercadodeArtesaniasTzununYa" class="">
                    <ion-icon name="logo-facebook" size="large"></ion-icon>
                </a>
                <a target="_blank" href="https://mercadotzununya.wixsite.com/inicio" class="">
                    <ion-icon name="globe-outline" size="large"></ion-icon>
                </a>
            </div>
            <div class="text-center">
                <a href="{{route('catalog.categories')}}" class="btn btn-primary">
                    Ver Catalogo del Mercado
                </a>
            </div>
        </div>
    </div>

    <section class="productos my-3">
        <section>
            <section class="productos_sugeridos row">
                <div class="asociaciones col-md-3 ">

                    <h5 class=" list-group-item list-group-item-action active" style="background: 1b2631;"><b>
                            Asociaciones
                        </b></h5>
                    <ol class="list-group list-group-flush">

                        <li class="list-group-item"><a href="https://mercadotzununya.wixsite.com/inicio/tzunun-ya"
                                target="_blank">Tz'unun Ya'</a> </li>
                        <li class="list-group-item"><a href="https://mercadotzununya.wixsite.com/inicio/maya-tzutuhil"
                                target="_blank">Maya Tzutuhil</a></li>
                        <li class="list-group-item"><a
                                href="https://mercadotzununya.wixsite.com/inicio/jun-mokaaj-ixmucane"
                                target="_blank">Jun Mokaaj
                                Ixmucane</a></li>
                        <li class="list-group-item"><a
                                href="https://mercadotzununya.wixsite.com/inicio/mujeres-artesanas-pedranas"
                                target="_blank">Mujeres
                                artesanas pedranas</a></li>
                        <li class="list-group-item"><a
                                href="https://mercadotzununya.wixsite.com/inicio/movimiento-de-mujeres-tzutujiles-ixkeem"
                                target="_blank">Movimiento
                                de mujeres tz'utujiles IXKEEM</a></li>
                        <li class="list-group-item"><a
                                href="https://mercadotzununya.wixsite.com/inicio/ixoq-kotz-iij-ya" target="_blank">Ixoq
                                Kotz'iij Ya'</a>
                        </li>
                        <li class="list-group-item"><a
                                href="https://mercadotzununya.wixsite.com/inicio/mujeres-de-cambio"
                                target="_blank">Mujeres de
                                cambio</a></li>
                        <li class="list-group-item"><a
                                href="https://mercadotzununya.wixsite.com/inicio/innovadoras-mi-soya-y-textiles"
                                target="_blank">Innovadoras
                                Mi Soya y Textiles</a></li>
                        <li class="list-group-item"><a
                                href="https://mercadotzununya.wixsite.com/inicio/mujeres-tzutujiles-semilla-ixijatz"
                                target="_blank">Mujeres
                                Tz'utujiles Semilla I'XIJA'TZ</a></li>
                        <li class="list-group-item"><a href="https://mercadotzununya.wixsite.com/inicio/ixoq-ajqeem"
                                target="_blank">Ixoq Ajqeem</a></li>
                        <li class="list-group-item"><a
                                href="https://mercadotzununya.wixsite.com/inicio/mujeres-trabajadoras" target="_blank">
                                MujeresTrabajadoras </a></li>
                    </ol>

                </div>


                <div class="col-md-9">
                    <div class="text-center">
                        <h3 class="Products_As"> <b> Productos sugeridos </b> </h3>
                    </div>

                    <div class="mustra_producto row col-md-12">
                        @foreach ($products as $product)
                        <div class="col-md-4 col-sm-12 all_product">
                            <a href="{{ route('product.show', $product->id) }}" class="color_letras">
                                <div class="product-image-wrapper producto shadow">
                                    <div class="single-products">
                                        @php
                                        $images = explode(',', $product->images);
                                        @endphp
                                        <img src="{{ asset('storage/'.$images[0]) }}" class="img-full-contain" alt="">
                                        <div class="productinfo text-center">
                                            <h3 class="color_letras">${{ $product->price }}</h3>
                                            <p class="color_letras">{{ $product->name }}</p>
                                            <div class="margen">

                                                <a href="{{ route('product.show', $product->id) }} "
                                                    class="btn btn-dark">
                                                    <ion-icon name="cart"></ion-icon>
                                                    Agregar
                                                </a>
                                                <!--
                                                    <button type=" submit" >
                                                    </button>
                                                -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
                </div>

            </section>
        </section>
    </section>
</main>
@endsection