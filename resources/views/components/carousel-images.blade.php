<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-200" src="{{asset('storage/'.$fimage)}}" alt="First slide"/>
            {{-- <div class="row">
                <div class="col-md-3">
                    <div class="sigle-box">
                        <div class="img-area">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        @foreach ($images as $image)
        <div class="carousel-item">
            <img class="d-block w-200" src="{{asset('storage/'.$image)}}" alt="First slide"/>
            {{-- <div class="row">
                <div class="col-md-3">
                    <div class="sigle-box">
                        <div class="img-area">
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
        data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
        data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
