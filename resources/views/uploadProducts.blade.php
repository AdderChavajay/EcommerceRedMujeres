@extends('layauts.plantilla')

@section('title','Ingresar Producto')
    
@section('header')
   <header class="text-center ">
            <img src="{{asset('images/icons/icons/LogoMercado.png')}}" class="img img-fluid" alt="">    
            <img src="{{asset('images/icons/icons/medianologopnggrande.ico')}}" class="img img-fluid"  alt="">
    </header>

@endsection

<!--######################### main ###############################-->
@section('main')
    
<main>       
    <div class="container">
        <div class="row ">


        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
          <div class=" shadow border-radius ">
            
            <div class="card-body p-4 p-sm-5">
                <div class="text-center ">
                    <h3>Ingresar Producto </h3>
                </div>
                        
                        <form action="" method="POST">
                                <div class="row">
                                    <div class="form-floating mb-3 col">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><ion-icon name="shirt-outline"></ion-icon></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nombre producto" aria-describedby="basic-addon1">
                                        </div>
                                        <!--<input type="text" class="form-control" id="floatingInput" placeholder="Nombre">-->
                                    </div>
                                    <div class="form-floating mb-3 col" >

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="basic-addon1"><ion-icon name="infinite-outline"></ion-icon></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Cantidad Producto" aria-describedby="basic-addon1">
                                        </div>
                                        
                                    </div>
                                </div>
                
                            <div class="">
                                <div class="form-floating mb-3 ">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1"><ion-icon name="cash-outline"></ion-icon></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Precio en Dollar"  aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="form-floating mb-3 " >
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon1"> <ion-icon name="text-outline"></ion-icon> </span>
                                        </div>
                                        <textarea class="form-control" name="" id="" cols="10" rows="5" placeholder="Descripción" ></textarea>
                                    </div>
                                </div>

                
                                <div>
                                    <form id='post-form' class='post-form' method='post'>
                                        <label for='files'>Select multiple files: </label>
                                        <input id='files' type='file' multiple/>
                                        <output id='result' />
                                      </form>
                                
                                </div>
                                
                                              
                            </div>
                
                
                            
                    
                            <div class="d-grid text-center py-3">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Crear Cuenta</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection