<div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
    <div class="box">
        <h4 class="title">{{$title ?? ''}}</h4>
        {{$slot}}
        {{-- <p class="description"></p> --}}
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-info" href="">Jugar</a>
        </div>

    </div>
</div>