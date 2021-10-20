<!-- Just an image -->
<div class="container-fluid">

  <nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="/">
      <img src="/images/icons/icons/LogoMercado.png" width="30" height="30" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{ (request()->routeIs('product.index')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('product.index') }}">Productos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{ (request()->routeIs('category.index')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('category.index') }}">Categorias</a>
        </li>
        <li class="nav-item  {{ (request()->routeIs('association.index')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('association.index') }}">Asociasiones</a>
        </li>
        <li class="nav-item  {{ (request()->routeIs('SoldProduct.index')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('SoldProduct.index') }}">Productos Vendidos</a>
        </li>
        <li class="nav-item {{ (request()->routeIs('user.index')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('user.index') }}">Usuarios</a>
        </li>
        <li class="nav-item {{ (request()->routeIs('roles.index')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('roles.index') }}">Roles</a>
        </li>
        <li class="nav-item {{ (request()->routeIs('permissions.index')) ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('permissions.index') }}">Permisos</a>
        </li>
      </ul>
      <div>
        <li class="nav-item dropdown " style=" list-style:none;">
          <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" style="color: #000;">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu ">
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();this.closest('form').submit();" style="color: #000;">
                {{ __('Cerrar sesion') }}
              </a>
            </form>
          </div>
        </li>
      </div>
      {{-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> --}}
    </div>
  </nav>
</div>