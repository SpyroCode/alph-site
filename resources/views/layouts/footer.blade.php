<!-- Footer Start -->
<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Address</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $websiteInfo->address }}, {{ $websiteInfo->location }}</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $websiteInfo->phone_1 }}</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $websiteInfo->email }}</p>
                <div class="d-flex pt-2">
                    @foreach($socialNetworks as $socialNetwork)
                        <a class="btn btn-square btn-outline-secondary rounded-circle me-1" href="{{ $socialNetwork->url }}"><i class="{{ $socialNetwork->icon }}"></i></a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="/">Home</a>
                <a class="btn btn-link" href="/services-web">Services</a>
                <a class="btn btn-link" href="/gallery">Gallery</a>
                <a class="btn btn-link" href="/about-me">About me</a>
                <a class="btn btn-link" href="/contact">Contact Ust</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Gallery</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/11.jpeg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/15.jpeg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/16.jpeg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/11.jpeg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/15.jpeg" alt="Image">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="img/16.jpeg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Boudoir</h5>
                <p>The boudoir is a type of female photography in which the elegance and sensuality of the woman prevail above all else. These photographs recreate an atmosphere of intimacy and calm, a moment of the woman in connection with herself</p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <form method="POST" action="{{ route('gallery') }}">
                        @csrf
                        <input required class="form-control bg-transparent border-secondary w-100 py-3 ps-4 pe-5" type="email" placeholder="Your email">
                        <input type="hidden" name="title" value="Boudoir">
                        <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">View More</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    {{date('Y')}}&copy; <a href="/">luislopezstudiophotography.com</a> All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a href="https://spyrocode.com">SpyroCode</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
