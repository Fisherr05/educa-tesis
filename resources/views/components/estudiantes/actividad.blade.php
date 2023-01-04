<div class="col-md-6 col-lg-5" data-aos="zoom-in" data-aos-delay="100">
    <div class="box">
        {{-- <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div> --}}
        <h4 class="title"><a href="{{route('temario',$idActividad)}}">{{$title ?? ''}}</a></h4>
        {{$slot}}
        {{-- <p class="description"></p>       --}}
    </div>
</div>