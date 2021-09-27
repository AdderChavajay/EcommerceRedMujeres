@extends('layauts.plantilla')

@section('title','Informacion del producto')
    
@section('header')
<nav class="navbar navbar-expand-lg navbar-light container ">
          
    <a class="navbar-brand" href="#"> 
      <img src="{{asset('images/icons/LogoMercado.jpg')}}"  alt="">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     
      <form class="form-inline my-2 my-lg-0 mx-auto">
        
        <input type="text" class="form-control mr-sm-2" placeholder="Buscar" aria-describedby="basic-addon1">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
      
      </form>
      
      <ul class="navbar-nav ml-auto ">
        
        <li class="nav-item active w-100">
          <a class="nav-link" href="#"><ion-icon name="home-sharp"></ion-icon>inicio</a>
        </li>
        
        <!--##################################Menu deplegable de Asociaciones ################################-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <ion-icon name="cart-sharp"></ion-icon>
            Carrito
          </a>
          <div class="dropdown-menu  " aria-labelledby="dropdownMenuButton">
            
              <div class="row" >
                <a href=""> <img src="" alt=""> <p>Nombre Producto</p>  </a>
                <p>$50</p>
                <ion-icon name="close-outline"></ion-icon>
              </div>
            </div>
        </li>

        <!--###################### meno desplegable de inicio de secion#######################-->
        <li class="nav-item dropdown w-100">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Iniciar Secion
          </a>
          <div class="dropdown-menu">
            <form class="px-4 py-3">
              <div class="form-group">
                <label for="exampleDropdownFormEmail1">Correo Electronico</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
              </div>
              <div class="form-group">
                <label for="exampleDropdownFormPassword1">Contraseña</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Contraseña">
              </div>
              <button type="submit" class="btn btn-primary">Entrar</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Crear Cuenta</a>
            <a class="dropdown-item" href="#">Olvido su contraseña</a>
          </div>
        </li>
      </ul>     
    </div>
</nav>
@endsection

@section('main')
<main class="container">
    <Section class="row">
        
        <div class="imagen col-md-8  col-sm-12">
                <img  src="{{asset('images/Carrusell/3.JPG')}}" class="img img-fluid shadow" alt="">
            <div class="img-mini ">
                <div class="col-md-12 ">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 img">
                            <img class="img img-fluid shadow" src="{{asset('images/Carrusell/1.JPG')}}" alt="">
                        </div>
                        <div class="col-md-4 col-sm-4 img">
                            <img class="img img-fluid shadow" src="{{asset('images/Carrusell/1.JPG')}}" alt="">
                        </div>
                        <div class="col-md-4 col-sm-4 img ">
                            <img class="img img-fluid shadow" src="{{asset('images/Carrusell/1.JPG')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="descripcion col-md-3 col-sm-12">
            <div class="margen_descripcion">
                <h5> <b> Anne Klein Sleeveless Colorblock Scuba </b> </h5>
                <p> <b>Web ID:</b>  1089772</p>
                <span class="span">
                    <h2 class="text-center"><b> US $15 </b> </h2>
                    
                    <div class="input">
                        <input type="text" class="form-control" placeholder="Cantidad de productos"/>
                        <br>
                        <select class="form-control" >
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
    </Section >
   <section class="titulos row">
    <div class="text-center">
        
    </div>
        
   </section>
    <section>
    <section class="productos_sugeridos row">
        <div class="asociaciones col-md-3 ">
            
             <h4 class="text-center list-group-item list-group-item-success bordeo_asociacion" ><b> Asociaciones </b></h4>
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
            <div class="text-center"> <h3 class="Products_As" > <b> Productos sugeridos </b> </h3>   </div>
            
                <div class="row col-md-12">
                    <div class="col-md-4 col-sm-6 all_product">
                        <div class="product-image-wrapper producto shadow">
                            <div class="single-products">   
                                    <img src="{{asset('images/Carrusell/1.JPG')}}" class="img img-fluid" alt="">
                                <div class="productinfo text-center">
                                        <h3>$56</h3>
                                        <p>Easy Polo Black Edition</p>
                                    <div class="margen">
                                        <button type=" submit"  class="btn btn-default">            
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
                        <div class="product-image-wrapper producto shadow" >
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