<Header>
    <nav class="navbar navbar-expand-lg navbar-light container ">

        <a class="navbar-brand icono" href="{{ route('main') }}">
            <img src="/images/icons/icons/LogoMercado.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form class="form-inline my-2 my-lg-0 mx-auto">
                <input type="text" class="form-control mr-sm-2 buscador" placeholder="  "
                    aria-describedby="basic-addon1">
                <button class="btn btn-primary my-2 my-sm-0 rounded" type="submit">Buscar</button>
            </form>
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active w-100">
                    <a class="nav-link" href="{{ route('main') }}">Inicio</a>
                </li>
                <!--##################################Menu deplegable de Asociaciones ################################-->
                <li class="nav-item active w-100">
                    <a href="{{route('shopping.index')}} " class="nav-link">Carrito</a>
                </li>
                <!--###################### meno desplegable de inicio de secion#######################-->
                @auth
                <li class="nav-item active w-100">
                    <a href="{{ route('product.index') }}" class="nav-link">
                        Productos
                    </a>
                </li>
                <!--opcion de cerrar cesion-->
                <li class="nav-item dropdown w-100 ">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

</Header>