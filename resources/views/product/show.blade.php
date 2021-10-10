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
                            <img class="w-200 img-fluid" src="{{asset('storage/'.$image)}}" alt="First slide"
                                width="500px" />
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="descripcion col-md-3 col-sm-12">
            <div class="margen_descripcion">
                <h5> <b> {{ $product->name }} </b> </h5>
                <p> <b>Web ID:</b> {{ $product->id }}</p>
                <span class="span">
                    <h2 class="text-center"><b> US ${{ $product->price }} </b> </h2>

                    <div class="input">
                        <input type="text" class="form-control" placeholder="Cantidad de productos" />
                        <br>
                        <select class="form-control">
                            <option>Grande</option>
                            <option>Mediano</option>
                            <option>Pequeño</option>

                        </select>

                    </div>
                    <div class="text-center ">
                        <button type="button" class="btn btn-danger ">
                            <ion-icon name="cart" class=""></ion-icon>
                            Agregar al carrito
                        </button>
                    </div>


                </span>
                <div class="estados_di  estados_disponibildad">
                    <p><b>Disponibilidad:</b> En existencia</p>
                    <p><b>Estado:</b> Nuevo</p>
                </div>
            </div>
        </div>
    </Section>
    <section class="titulos row">
        <div class="text-center">

        </div>

    </section>
    <section>
        <section class="productos_sugeridos row">
            <div class="asociaciones col-md-3 ">

                <h4 class="text-center list-group-item list-group-item-success bordeo_asociacion"><b> Asociaciones </b>
                </h4>
                <ol class="list-group list-group-flush">

                    <li class="list-group-item"><a href="list-group-item">Tz'unun Ya'</a> </li>
                    <li class="list-group-item"><a href="">Maya Tzutuhil</a></li>
                    <li class="list-group-item"><a href="">Jun Mokaaj Ixmucane</a></li>
                    <li class="list-group-item"><a href="">Mujeres artesanas pedranas</a></li>
                    <li class="list-group-item"><a href="">Movimiento de mujeres tz'utujiles IXKEEM</a></li>
                    <li class="list-group-item"><a href="">Ixoq Kotz'iij Ya'</a></li>
                    <li class="list-group-item"><a href="">Mujeres de cambio</a></li>
                    <li class="list-group-item"><a href="">Innovadoras Mi Soya y Textiles</a></li>
                    <li class="list-group-item"><a href="">Mujeres Tz'utujiles Semilla I'XIJA'TZ</a></li>
                    <li class="list-group-item"><a href="">Ixoq Ajqeem</a></li>
                    <li class="list-group-item"><a href=""> Mujeres Trabajadoras </a></li>
                </ol>

            </div>


            <div class="col-md-9">
                <div class="text-center">
                    <h3 class="Products_As"> <b> Productos sugeridos </b> </h3>
                </div>

                <div class="row col-md-12">
                    <div class="col-md-4 col-sm-6 all_product">
                        <div class="product-image-wrapper producto shadow">
                            <div class="single-products">
                                <img src="{{asset('images/Carrusell/1.JPG')}}" class="img img-fluid" alt="">
                                <div class="productinfo text-center">
                                    <h3>$56</h3>
                                    <p>Easy Polo Black Edition</p>
                                    <div class="margen">
                                        <button type=" submit" class="btn btn-default">
                                            <ion-icon name="cart"></ion-icon>
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 all_product">
                        <div class="product-image-wrapper producto shadow">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('images/Carrusell/3.JPG')}}" class="img img-fluid" alt="" />
                                    <h3>$56</h3>
                                    <p>Easy Polo Black Edition</p>
                                    <div class="margen">
                                        <button type="button" class="btn btn-default ">
                                            <ion-icon name="cart"></ion-icon>
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 all_product">
                        <div class="product-image-wrapper producto shadow">
                            <div class="single-products">
                                <img src="{{asset('images/Carrusell/1.JPG')}}" alt="" class="img img-fluid">
                                <div class="productinfo text-center">
                                    <h3>$56</h3>
                                    <p>Easy Polo Black Edition</p>
                                    <div class="margen">
                                        <button type="button" class="btn btn-default ">
                                            <ion-icon name="cart"></ion-icon>
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-6 all_product">
                        <div class="product-image-wrapper producto shadow">
                            <div class="single-products">
                                <img src="{{asset('images/Carrusell/2.JPG')}} " alt="" class="img img-fluid">
                                <div class="productinfo text-center">
                                    <h3>$56</h3>
                                    <p>Easy Polo Black Edition</p>
                                    <div class="margen">
                                        <button type="button" class="btn btn-default ">
                                            <ion-icon name="cart"></ion-icon>
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4  col-sm-6 all_product">
                        <div class="product-image-wrapper producto shadow">
                            <div class="single-products">
                                <img src="{{asset('images/Carrusell/3.JPG')}}" alt="" class="img img-fluid">
                                <div class="productinfo text-center">
                                    <h3>$56</h3>
                                    <p>Easy Polo Black Edition</p>
                                    <div class="margen">
                                        <button type="button" class="btn btn-default">
                                            <ion-icon name="cart"></ion-icon>
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 all_product">
                        <div class="product-image-wrapper producto shadow">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="{{asset('images/Carrusell/2.JPG')}}" class="img img-fluid" alt="" />
                                    <h3>$56</h3>
                                    <p>Easy Polo Black Edition</p>
                                    <div class="margen">
                                        <button type="button" class="btn btn-default">
                                            <ion-icon name="cart"></ion-icon>
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 all_product">
                        <div class="product-image-wrapper producto shadow">
                            <div class="single-products">
                                <img src="{{asset('images/Carrusell/1.JPG')}}" alt="" class="img img-fluid">
                                <div class="productinfo text-center">
                                    <h3>$56</h3>
                                    <p>Easy Polo Black Edition</p>
                                    <div class="margen">
                                        <button type="button" class="btn btn-default">
                                            <ion-icon name="cart"></ion-icon>
                                            Agregar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
</main>

@endsection


@section('footer')
<footer>
    <h5 class="text-center">Derechor reservados &copy;</h5>
</footer>
@endsection