<!-- Project Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Projects</h6>
            <h1 class="display-6 mb-4">Learn More About Our Complete Projects</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($galleries as $gallery)
                <div class="project-item border rounded h-100 p-4" data-dot="{{$gallery->index}}">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded" src="{{$gallery->image}}" alt="">
                        <a href="{{$gallery->image}}" data-lightbox="project"><i class="fa fa-eye fa-2x"></i></a>
                    </div>
                    <h6>{{$gallery->name}}</h6>
                    <span>{{$gallery->name}}</span>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Project End -->
