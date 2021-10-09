<div class="row">
    <div class="form-floating mb-3 col">
        <label for="name">Nombre </label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre" name="name" aria-describedby="basic-addon1"
                required value="{{old('name', $user->name)}}" id="name">
        </div>
        <!--<input type="text" class="form-control" id="floatingInput" placeholder="Nombre">-->
    </div>
</div>

<div class="row">
    <div class="form-floating mb-3 col">
        <label for="size">Apellido</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addonddd">
                    <ion-icon name="person-outline"></ion-icon>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Tamaño del Producto" name="last_name"
                aria-describedby="basic-addonddd" required value="{{old('size', $user->last_name)}}" id="size">
        </div>
    </div>
</div>

<div class="row">
    <div class="form-floating mb-3 col">
        <label for="quantity">Correo Electronico</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    @
                </span>
            </div>
            <input type="email" class="form-control" placeholder="Cantidad" name="email" aria-describedby="basic-addon1"
                required value="{{old('quantity', $user->email)}}" id="quantity">
        </div>
    </div>
</div>
</div>
<div class="row py-3">
    <div class="d-grid text-center col">
        <button class="btn btn-primary  fw-bold" type="submit">Confirmar</button>
    </div>

    <div class="d-grid text-center col">
        <a href="{{url('user/')}}" class="btn btn-primary row">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
    </div>
</div>