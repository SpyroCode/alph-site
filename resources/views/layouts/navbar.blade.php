<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
    <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav me-auto p-3 p-lg-0">
            <a href="{{url('/')}}" class="nav-item nav-link @if(Request::is('/')) active @endif">Home</a>
            <!--                <a href="about.html" class="nav-item nav-link">About Us</a>-->
            <a href="{{url('/services-web')}}" class="nav-item nav-link @if(Request::is('services-web')) active @endif">Services</a>
            <a href="{{url('/gallery')}}" class="nav-item nav-link @if(Request::is('gallery')) active @endif">Gallery</a>
            <a href="{{url('/about-me')}}" class="nav-item nav-link @if(Request::is('about-me')) active @endif">About me</a>
            <!--                <div class="nav-item dropdown">-->
            <!--                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>-->
            <!--                    <div class="dropdown-menu border-0 rounded-0 rounded-bottom m-0">-->
            <!--                        <a href="feature.html" class="dropdown-item">Features</a>-->
            <!--                        <a href="team.html" class="dropdown-item">Our Team</a>-->
            <!--                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>-->
            <!--                        <a href="404.html" class="dropdown-item">404 Page</a>-->
            <!--                    </div>-->
            <!--                </div>-->
            <a href="{{url('/contact')}}" class="nav-item nav-link @if(Request::is('contact')) active @endif">Contact Us</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
