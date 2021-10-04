@extends('layauts.plantilla')

@section('title','Red de mujeres Tzununya')

@section('header')

<nav class="navbar navbar-expand-lg navbar-light container ">

    <a class="navbar-brand icono" href="#">
        <img src="images/icons/icons/LogoMercado.png" alt="">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0 mx-auto">
            <input type="text" class="form-control mr-sm-2 buscador" placeholder="  " aria-describedby="basic-addon1">
            <button class="btn btn-primary my-2 my-sm-0 rounded" type="submit">Buscar</button>
        </form>

        <ul class="navbar-nav ml-auto ">
            <li class="nav-item active w-100">
                <a class="nav-link" href="#">Inicio</a>
            </li>
            <!--##################################Menu deplegable de Asociaciones ################################-->
            <li class="nav-item active w-100">
                <a href="#" class="nav-link">Carrito</a>
            </li>
            <!--###################### meno desplegable de inicio de secion#######################-->
            @auth
            <li class="nav-item active w-100">
                <a href="{{ route('product.create') }}" class="nav-link">
                    Agregar_Producto
                </a>
            </li>
            <!--opcion de cerrar cesion-->
            <li class="nav-item dropdown w-100 ">

                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu mx-2">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" class=" nav-link " onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Cerrar sesion') }}
                        </x-dropdown-link>
                    </form>
                </div>

            </li>
            @else
            <li class="nav-item dropdown w-100">
                <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Iniciar Sesion
                </a>
                <div class="dropdown-menu">
                    <form method="POST" action="{{ route('login') }}" class="px-4 py-3">
                        @csrf
                        <!-- Email Address -->
                        <div class=" form-group">
                            <x-label for="email" :value="__('Correo electronico')" />
                            <x-input id="email" class="form-control" type="email" name="email" :value="old('email')"
                                required autofocus placeholder="email@ejemplo.com" />
                        </div>

                        <!-- Password -->
                        <div class="form-group">
                            <x-label for="password" :value="__('Contraseña')" />
                            <x-input id="password" class="form-control" type="password" name="password" required
                                autocomplete="current-password" />
                        </div>

                        <!-- Remember Me -->
                        <div class="block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Recordar contraseña') }}</span>
                            </label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary">
                                {{ __('Iniciar sesion') }}
                            </button>
                        </div>
                    </form>
                    <div class="dropdown-divider"></div>
                    <div class="px-2">
                        <a class="dropdown-item" href="{{ route('register') }}">Crear Cuenta</a>
                        @if (Route::has('password.request'))
                        <a class="dropdown-item " href="{{ route('password.request') }}">
                            {{ __('Olvido su contraseña?') }}
                        </a>
                        @endif

                    </div>
                </div>
            </li>
            @endauth

        </ul>

    </div>
</nav>
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