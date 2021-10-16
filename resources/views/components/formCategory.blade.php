<div class="form-floating mb-3 col">
    <div class="">

        <div class="form-floating mb-3 col">
            <label for="name">Nombre de la Categoria</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <ion-icon name="shirt-outline"></ion-icon>
                    </span>
                </div>
                <input type="text" class="form-control" placeholder="Nombre" name="name" aria-describedby="basic-addon1"
                    required value="{{old('name', $category->name)}}" id="name">
            </div>
            <div>
                <input type='file' name="images" class="form-control" />
            </div>
            <!--<input type="text" class="form-control" id="floatingInput" placeholder="Nombre">-->
        </div>
    </div>
    <div class="row py-3 text-center">
        <div class="col">
            <button type="submit" class="btn btn-primary"> Registrar</button>
        </div>

        <div class="col">
            <a href="{{route('category.index')}}" class="btn btn-secondary">
                <ion-icon name="arrow-back-outline"></ion-icon>
            </a>
        </div>
    </div>

</div>
