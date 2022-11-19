<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">Services</h6>
            <h1 class="display-6 mb-4">We focus on doing the best to remember that moment</h1>
        </div>
        <div class="row g-4">
        @foreach($services as $service)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="">
                    <img class="img-fluid rounded mb-4" src="{{$service->image}}" alt="">
                    <h4 class="mb-0">{{ $service->title }}</h4>
                </a>
            </div>
        @endforeach
        </div>
    </div>
</div>
<!-- Service End -->
