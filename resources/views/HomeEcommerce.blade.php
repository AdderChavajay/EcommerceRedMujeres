@extends('layauts.plantilla')

@section('title','Red de mujeres Tzununya')

@section('header')
@include('components.header');
@endsection

@section('main')
<main class="container">
    <div class="espacio"></div>


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
                        <img class="d-block w-100" src="images/Carrusell/3.JPG" alt="Second slide">
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
                <a href="" class="">
                    <ion-icon name="logo-facebook" size="large"></ion-icon>
                </a>
                <a target="_blank" href="https://mercadotzununya.wixsite.com/inicio" class="">
                    <ion-icon name="globe-outline" size="large"></ion-icon>
                </a>
            </div>
        </div>
    </div>

    <section class=" product_sug my-3">
        <section>
            <section class="productos_sugeridos row">
                <div class="asociaciones col-md-3 ">

                    <h5 class=" list-group-item list-group-item-success"><b> Asociaciones </b></h5>
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
                                    <img src="images/Carrusell/2.JPG" class="img img-fluid" alt="">
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


                        <div class="col-md-4 col-sm-4 all_product">
                            <div class="product-image-wrapper producto shadow">
                                <div class="single-products">
                                    <img src="images/Carrusell/3.JPG" alt="" class="img img-fluid">
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
                        <div class="col-md-4  col-sm-4 all_product">
                            <div class="product-image-wrapper producto shadow">
                                <div class="single-products">
                                    <img src="images/Carrusell/1.JPG" alt="" class="img img-fluid">
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
                    </div>
                </div>
                </div>
                </div>

            </section>
        </section>
    </section>
</main>
@endsection

@section('footer')
<footer>
    <p class="text-center">Derechos reservados &copy</p>
</footer>


@endsection