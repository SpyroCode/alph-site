<!-- Topbar Start -->
<div class="container-fluid bg-light px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <!--                <ol class="breadcrumb mb-0">-->
            <!--                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Home</a></li>-->
            <!--                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Career</a></li>-->
            <!--                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Terms</a></li>-->
            <!--                    <li class="breadcrumb-item"><a class="small text-secondary" href="#">Privacy</a></li>-->
            <!--                </ol>-->
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow us:</small>
            <div class="h-100 d-inline-flex align-items-center">
                @foreach($socialNetworks as $socialNetwork)
                    <a class="btn-square text-primary border-end rounded-0" href="{{ $socialNetwork->url }}"><i class="{{ $socialNetwork->icon }}"></i></a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Brand & Contact Start -->
<div class="container-fluid py-4 px-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="row align-items-center top-bar">
        <div class="col-lg-4 col-md-12 text-center text-lg-start">
            <a href="" class="navbar-brand m-0 p-0">
                <h1 class="fw-bold text-primary m-0"><i class="fa fa-camera me-3"></i>Your logo</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
        </div>
        <div class="col-lg-8 col-md-7 d-none d-lg-block">
            <div class="row">
                <div class="col-4">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                            <i class="far fa-clock text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-2">Opening Hour</p>
                            <h6 class="mb-0">Mon - Fri, 8:00 - 9:00</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                            <i class="fa fa-phone text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-2">Call Us</p>
                            <h6 class="mb-0">{{ $websiteInfo->phone_1 }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex align-items-center justify-content-end">
                        <div class="flex-shrink-0 btn-lg-square border rounded-circle">
                            <i class="far fa-envelope text-primary"></i>
                        </div>
                        <div class="ps-3">
                            <p class="mb-2">Email Us</p>
                            <h6 class="mb-0">{{ $websiteInfo->email }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand & Contact End -->
@include('layouts.navbar')
