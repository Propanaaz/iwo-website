<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Welcome to Iwo Land</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-primary m-0">Iwo<span class="text-white">Land</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/history" class="nav-item nav-link">Our History</a>
                    <a href="/rulers" class="nav-item nav-link">Traditional Ruler</a>

                    <a href="/events" class="nav-item nav-link">Events</a>

                    <a href="/places" class="nav-item nav-link">Places</a>
                 
                    <a href="/contacts" class="nav-item nav-link">Contact</a>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/iwo_10.jpg" alt="Image" style="height: 600px;">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Iwo Land: The Land of Virture</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown"></p>
                                    {{-- <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/iwo_2.jpg" style="height: 600px;" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Iwo Odidere</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown"></p>
                                    {{-- <a class="btn btn-primary py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>

                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/iwo_10.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/iwo_3.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Our History</div>
                        <h1 class="display-6 mb-5">Iwo Odidere</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                The Iwo Kingdom is a traditional state based on the city of Iwo in Osun State, Nigeria. The Yoruba kingdom, whose ruler is titled "Oluwo of Iwo", was established in the 14th century AD. 
                                The Iwo people, like all other people of Yoruba stock are said to have originally belonged to Ile-Ife from where they migrated sometime in the 14th century. The earliest settlement was founded by Adekola Telu, son of the 16th Ooni of Ife, a female called Luwo Gbagida.[1] The present city of Iwo was founded in the 16th or 17th century. 
                                


                            </p>
                            {{-- <span class="text-primary">Jhon Doe, Founder</span> --}}
                        </div>
                        {{-- <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p> --}}
                        <a class="btn btn-primary py-2 px-3 me-3" href="/history">
                            Read More
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        {{-- <a class="btn btn-outline-primary py-2 px-3" href="">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Causes Start -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Our Leaders</div>
                <h1 class="display-6 mb-5">Notable People in Iwo Land</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="img/osun_state_governor.jpg" style="width:400px; height:400px;" alt="">
                        <div class="causes-overlay">
                            {{-- <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-10">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>The Executive Governor of Osun State</small>
                            </div>
                            <h5 class="mb-3">His Exellency Nurudeen Jackson Ademola Adeleke</h5>
                         
                        </div>
                  
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="img/oluwo_of_iwo_land.jpg" style="width:400px; height:400px;" alt="">
                        <div class="causes-overlay">
                            {{-- <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-10">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>The Oluwo Of Iwo Land</small>
                            </div>
                            <h5 class="mb-3">His Royal Highness Abdulrasheed Adewale Akanbi Ilufemiloye Telu 1 </h5>
                         
                        </div>
                  
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative mt-auto">
                        <img class="img-fluid" src="img/local_government_chairman.jpg" style="width:400px; height:400px;" alt="">
                        <div class="causes-overlay">
                            {{-- <a class="btn btn-outline-primary" href="">
                                Read More
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a> --}}
                        </div>
                    </div>
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-10">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>The Local Government Chairman</small>
                            </div>
                            <h5 class="mb-3">Comrade Abdulrasheed Adewale Akanbi Ilufemiloye Telu 1 </h5>
                         
                         
                        </div>
                  
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Causes End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Our Pride</div>
                <h1 class="display-6 mb-5">Notable Places in Iwo Kingdom</h1>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/iwo_8.jpg" style="width:600px; height:200px;" alt="">
                        <h4 class="mb-3">Iwo Local Government Secretariat</h4>
                        <p class="mb-4">The Iwo Local Government Secretariat</p>
                        {{-- <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/iwo_2.jpg" style="width:600px; height:200px;" alt="">
                        <h4 class="mb-3">Oluwo of Iwo Palace</h4>
                        <p class="mb-4">The Palace of His Royal Highness. The Oluwo Of Iwo Land</p>
                        {{-- <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" style="width:600px; height:200px;" src="img/iwo_3.jpg" alt="">
                        <h4 class="mb-3">Iwo Monument</h4>
                        <p class="mb-4">Our Historical Monument </p>
                        <a class="btn btn-outline-primary px-3" href="/places">
                            See More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5" data-parallax="scroll" data-image-src="img/iwo_10.jpg">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
              
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class=" bg-white p-5" style=" height:500px;overflow-y: scroll;">
                       
                            <h1 class="display-6 text-red mb-5">Iwo Anthem</h1>
                       
                       <p>Iwo o olodo oba</p>
                       <p>Ni’le odidere o</p>
                        <p>Okan saa niwa e gba o</p>
                        <p>Ire Iwo la n fe o</p>
                         <p>Ire Iwo la n fe o</p>
                        
                        <p>Ewa omo Iwo o</p>
                        <p>Ewa ara ore wa</p>
                            <p>E je ka gbe’wo goke</p>
                                <p>Ire Iwo la n fe o</p>
                                    <p>Ire Iwo la n fe o</p>
                        
                                        <p> N’ile ni loko lodo</p>
                                            <p>  Gbogbo aye ewa o</p>
                                                <p>E je ka gbe’wo goke</p>
                                                    <p> Ire Iwo la n fe o</p>
                                                        <p>Ire Iwo la n fe o</p>
                        
                                                            <p> Pledge (Ileri)</p>
                                                                <p>Mo se ileri fun Iwo Olodo Oba,</p>
                                                                    <p>N’ile Odidere eye ire,</p>
                                                                        <p>Pe lagbara Olodumare,</p>
                                                                            <p> Iwo ko ni i t’oju mi baje,</p>
                                                                                <p>Gbogbo ohun ti mo ba nilaye,</p>
                                <p>  t’ile Odidere niwon nse,</p>
                                <p> emi ko je gbagbe Iwo Olodo oba,</p>
                                <p>ki Olorun ko ranmi </p>
                                 <p>Amin!</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">Trustees</div>
                <h1 class="display-6 mb-5">Meet Iwo Board of Trustees</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Prof. Lai Olurode </h5>
                            <p class="text-primary">Chairman</p>
                            {{-- <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Otunba Waidi Jiire Ayinla</h5>
                            <p class="text-primary">Secretary</p>
                            {{-- <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative rounded overflow-hidden">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                        </div>
                        <div class="team-text bg-light text-center p-4">
                            <h5>Dr. (Mrs.) Taiwo Adeagbo </h5>
                            <p class="text-primary">Treasurer</p>
                            {{-- <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
           
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h1 class="fw-bold text-primary mb-4">Iwo<span class="text-white">Land</span></h1>
                    <p>Iwo Odidere</p>
                    {{-- <div class="d-flex pt-2">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> --}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Iwo, Osun State Nigeria</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+2347031965988</p>
                    <p><i class="fa fa-envelope me-3"></i>odiderecentral@gmail.com</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="/">Home</a>
                    <a class="btn btn-link" href="/history">Our History</a>
                    <a class="btn btn-link" href="/rulers">Traditional Ruler</a>
                    <a class="btn btn-link" href="/events">Events</a>
                    <a class="btn btn-link" href="/places">Places</a>
                    <a class="btn btn-link" href="/contacts">Contact</a>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Iwo Odidere</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        {{-- Designed By <a href="https://htmlcodex.com">HTML Codex</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>