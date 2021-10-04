<div class="row">
    <div class="form-floating mb-3 col">

        <label for="name">Nombre del Producto</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <ion-icon name="shirt-outline"></ion-icon>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre" name="name"
                aria-describedby="basic-addon1" required value="{{$product->name}}" id="name">
        </div>
        <!--<input type="text" class="form-control" id="floatingInput" placeholder="Nombre">-->
    </div>
</div>
<div class="row">
    <div class="form-floating mb-3 col">
        <label for="quantity">Cantidad del Producto</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <ion-icon name="infinite-outline"></ion-icon>
                </span>
            </div>
            <input type="number" class="form-control" placeholder="Cantidad" name="quantity"
                aria-describedby="basic-addon1" required value="{{old('quantity')}}" id="quantity">
        </div>
    </div>
</div>
<div class="row">
    <div class="form-floating mb-3 col">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addonddd">
                    <ion-icon name="infinite-outline"></ion-icon>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Tamaño del Producto" name="size"
                aria-describedby="basic-addonddd" required value="{{old('size')}}">
        </div>
    </div>
</div>
<div class="">
    <div class="form-floating mb-3 ">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <ion-icon name="cash-outline"></ion-icon>
                </span>
            </div>
            <input type="number" class="form-control" placeholder="Precio en Dollar" name="price"
                aria-describedby="basic-addon1" required value="{{old('price')}}">
        </div>
    </div>
    <div class="form-floating mb-3 ">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <ion-icon name="text-outline"></ion-icon>
                </span>
            </div>
            <textarea class="form-control" cols="10" rows="5" name="description"
                placeholder="Descripción del producto" value="{{old('description')}}"></textarea>
        </div>
    </div>
    
    <div>
            <label for='files'>Select multiple files: </label>
            <input id='files' type='file' name="images" />
            <output id='result' />
     </div>
</div>
<div class="d-grid text-center py-3">
    <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Crear
        Cuenta</button>
</div>