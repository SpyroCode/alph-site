<!-- About Me End Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h6 class="section-title bg-white text-center text-primary px-3">About me</h6>
            <h1 class="display-6 mb-4">Do you want to know about me?</h1>
        </div>
        <div class="row g-0 justify-content-center">
            <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                <!--                    <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>-->
                <div class="row p-3 mb-5-3">
                    <div class="column">
                        <div class="card">
                            <img src="/img/profile.jpg" alt="Jane" style="width:100%">
                            <div class="container">
                                <h2>Luis Lopez</h2>
                                <p class="title">CEO & Founder</p>
                                <p>Luis Lopez  con mas de 15 años de experiencia en fotografía y video.creando y diseñando . comprometidos a realizar con pasión cada uno de los eventos que son irrepetibles en nuestra vida, utilizando accesorios y fondos para obtener composiciones basadas en la petición del cliente. Además de tomar imágenes de alta calidad, nuestro de trabajo cuenta con todo el equipo necesario para la realización de cualquier evento . cámaras, , luces, diferentes lentes  estabilizadores solo por mencionar  algo del equipo de trabajo .radicados en Springdale AR.</p>
                                <br>
                                <p>Luis Lopez with more than 15 years of experience in photography and video, creating and designing. committed to carrying out with passion each one of the events that are unrepeatable in our lives, using accessories and backgrounds to obtain compositions based on the client's request. In addition to taking high-quality images, our staff has all the necessary equipment to carry out any event. cameras, lights, different stabilizer lenses just to mention some of the work team. Based in Springdale AR.</p>
                                <div class="ps-3 p-3">
                                    <p class="mb-2">Email</p>
                                    <h6 class="mb-0"><a href="mailto:{{$websiteInfo->email}}" target="_blank">{{ $websiteInfo->email }}</a>.<br></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h6 class="section-title bg-white text-center text-primary px-3">Contact Me</h6>
                </div>
                <div class="row g-0 justify-content-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.5s">
                        <!--                    <p class="text-center mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>-->
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 200px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Me End -->


