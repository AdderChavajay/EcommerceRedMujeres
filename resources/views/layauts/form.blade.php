<div class="row">
    <div class="form-floating mb-3 col">
        <label for="name">Nombre del Producto</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <ion-icon name="shirt-outline"></ion-icon>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre" name="name" aria-describedby="basic-addon1"
                required value="{{old('name', $product->name)}}" id="name">
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
                aria-describedby="basic-addon1" required value="{{old('quantity', $product->quantity)}}" id="quantity">
        </div>
    </div>
</div>
<div class="row">
    <div class="form-floating mb-3 col">
        <label for="size">tamaño del Producto</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addonddd">
                    <ion-icon name="infinite-outline"></ion-icon>
                </span>
            </div>
            <input type="text" class="form-control" placeholder="Tamaño del Producto" name="size"
                aria-describedby="basic-addonddd" required value="{{old('size', $product->size)}}" id="size">
        </div>
    </div>
</div>

<div class="row">
    @php
    function in_array_field($needle, $needle_field, $haystack, $strict = false) {
    if ($strict) {
    foreach ($haystack as $item)
    if (isset($item->$needle_field) && $item->$needle_field === $needle)
    return true;
    }
    else {
    foreach ($haystack as $item)
    if (isset($item->$needle_field) && $item->$needle_field == $needle)
    return true;
    }
    return false;
    }
    @endphp
    <div class="form-floating mb-3 col">
        <label for="category">Catergoria del porducto</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addonddd">
                    <ion-icon name="keypad-outline"></ion-icon>
                </span>
            </div>
            <select name="categories[]" class="form-control" multiple>
                @foreach ($categories as $category)
                @if (in_array_field($category->id, 'id', $product->categories))
                <option value="{{$category->id}}" selected> {{$category->name}} </option>
                @else
                <option value="{{$category->id}}"> {{$category->name}} </option>
                @endif
                @endforeach
            </select>
        </div>
    </div>
</div>

{{-- <div class="row">
    <div class="form-floating mb-3 col">
        <label for="category">Catergoria del porducto</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addonddd">
                    <ion-icon name="keypad-outline"></ion-icon>
                </span>
            </div>
            <select name="associations[]" class="form-control" multiple>
                @foreach ($associations as $association)
                @if (in_array_field($association->id, 'id', $product->associations))
                <option value="{{$association->id}}" selected> {{$association->name}} </option>
                @else
                <option value="{{$association->id}}"> {{$association->name}} </option>
                @endif
                @endforeach
            </select>
        </div>
    </div>
</div> --}}


<div class="">
    <div class="form-floating mb-3 ">
        <label for="price">Precio Unitario</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <ion-icon name="cash-outline"></ion-icon>
                </span>
            </div>
            <input type="number" class="form-control" placeholder="Precio en Dollar" name="price"
                aria-describedby="basic-addon1" required value="{{old('price',$product->price)}}" id="price">
        </div>
    </div>
    <div class="form-floating mb-3 ">
        <label for="description" class="disable">Descripcion</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">
                    <ion-icon name="text-outline"></ion-icon>
                </span>
            </div>
            <textarea class="form-control" cols="10" rows="5" name="description" placeholder="Descripción del producto"
                id="description">{{old('description', $product->description)}}</textarea>
        </div>
    </div>

    <div class="">
        <label for='files'> Seleccionar Fotos: </label>
        <div class="py-3" class="rounded ">
            @empty($product->image)
            @else
            <img src="{{asset('storage'.'/'.$product->images)}}" class="rounded float-left" alt="">
            @endempty
        </div>

        <input id='files' class="form-control" type='file' name="images[]" multiple />
        <output id='result' class="" />
    </div>
</div>
<div class="row py-3">
    <div class="d-grid text-center col">
        <button class="btn btn-primary  fw-bold" type="submit">Confirmar</button>
    </div>

    <div class="d-grid text-center col">
        <a href="{{url('product/')}}" class="btn btn-primary row">
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
    </div>
</div>