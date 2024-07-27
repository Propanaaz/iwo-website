<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Our Rulers</title>
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
                    <div class="position-relative overflow-hidden" style="width:400px; height:400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/oluwo_of_iwo_land.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h1 class="display-6 mb-5">The Current King</h1>
                        <div class="bg-light border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                Prince Rasheed Adewale Akanbi is from Molaasan Compound of Gbaase Ruling House in Isale Oba in Iwo. He was born on the 21st June 1967 in Iwo.
                                For his Elementary School, Prince Akanbi attended Omolewa Nursery and Primary School, Oritamefa, Ibadan (1972-1978), he proceeded to Iwo Grammar School, Araromi, Iwo (1978-1982) and later, Oba Akinyele Memorial High School, Idi-Ape Ibadan.
                                Prince Akanbi obtained a B.Sc. Business Administration from George Brown College, Toronto, Ontario (2005-2009), Ordinary National Diploma in Mass Communication from The Polytechnic Ibadan (1985-87), Certificate in Cybis & Axis System, Convergys Institute, Halifax, Nova Scotia in Canada (2001-2005), Seismic certificate in Operations, Oil and Gas Processing Facilities (2005).

                              

                            </p>  
                            
                          
                               </div>
                       
                    </div>
                </div>
                <p class="text-dark mb-2">
                    He worked as a Data Processor, Bio-skin GMBH in Hamburg Germany (1996-2005), International Development Analyst (Oxfam Canada); travelling to help war and disaster stricken countries around the world by supplying and supporting refugees with relief materials.
                    Prince Akanbi also worked as Associate Supervisor, Purdy Wharf Towers, Halifax, Nova Scotia in Canada.
                </p>

                <p class="text-dark mb-2">
                    He is the Chief Executive Officer of Prince Enterprises, Toronto, Ontario M5H4E7 Canada, Director and Founder of People Against Loneliness Inc. 508-58 Waterson Road, Toronto Ontario, Canada, West Africa Coordinator (Karcher Group FutureTech) presently working on supply of future technology on peace keeping force to the Defence Ministry and Managing Director, Morganz Gamo Quarry, Lagos-Ibadan Expressway, Podo Village, Ibadan.
Prince Akanbi speaks Yoruba, English, French and Deutsche (German).

                </p>

                <p class="text-dark mb-2">
                    On 9 November 2015 until present Oba Abdulrasheed Adewale Akanbi Ilufemiloye Telu 1 from Molaasan Royal family a sub.section of Gbaase ruling house was installed as the 16th Oluwo of Iwoland.
                </p>


                <h1 class="display-6 mb-5">The Iwo Palace</h1>
  <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel2" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/iwo_12.jpg" alt="Image" style="height: 600px;">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/iwo_2.jpg" style="height: 600px;" alt="Image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel2"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel2"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->









                <h1 class="display-6 mb-5">Past Kings in Iwo Land</h1>
<style>
    table{
        border: 2px solid black;
    }
    td,th{
        border: 2px solid black;
    }
</style>
                <table>
    <th>From</th>
    <th>To</th>
    <th>Name</th>
    		
		
		


    <tr>
        <td>1415</td>
        <td>1505</td>
        <td>Parin</td>
    </tr>

    <tr>
        <td>1505</td>
        <td>1541</td>
        <td>Olayilumi</td>
    </tr>

    <tr>
        <td>1550</td>
        <td>1610</td>
        <td>Adegunodo</td>
    </tr>

    		
    		
    		

    <tr>
        <td>1610</td>
        <td>1673</td>
        <td>Olufate Gbase</td>
    </tr>

    <tr>
        <td>1673</td>
        <td>1744</td>
        <td>Alawusa</td>
    </tr>

    <tr>
        <td>1744</td>
        <td>1816</td>
        <td>Ogunmakinde</td>
    </tr>
    		
    		

    
    
    <tr>
        <td>1816</td>
        <td>1906</td>
        <td>Monmodu Ayinla Lamuye</td>
    </tr>

    <tr>
        <td>1906</td>
        <td>1909</td>
        <td>Sunmonu Osunwo</td>
    </tr>


    	
    	

    <tr>
        <td>1909</td>
        <td>1929</td>
        <td>	Sanni Alabi Abimbola Lamuye</td>
    </tr>

    <tr>
        <td>1929</td>
        <td>1930</td>
        <td>	Seidu Adubiaran Lamuye</td>
    </tr>

    		
    		
    		

    <tr>
        <td>1930</td>
        <td>1939</td>
        <td>Abanikanda Amuda Akande</td>
    </tr>

    <tr>
        <td>1939</td>
        <td>1952</td>
        <td>Kosiru Ande Lamuye</td>
    </tr>

    <tr>
        <td>1953</td>
        <td>1957</td>
        <td>Raifu Ajani Adegoroye</td>
    </tr>

    		
    		
    		
    <tr>
        <td>1958</td>
        <td>1982</td>
        <td>Samuel Omotoso Abimbola</td>
    </tr>

    <tr>
        <td>1992</td>
        <td>2013</td>
        <td>Asiru Olatunbosun Tadese</td>
    </tr>

    <tr>
        <td>2015</td>
        <td>present</td>
        <td>Abdulrasheed Adewale Akanbi</td>
    </tr>

</table>
            </div>

        </div>
    </div>
    <!-- About End -->



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
                    <a class="btn btn-link" href="/rulers">Our History</a>
                    <a class="btn btn-link" href="/rulers">Traditional Ruler</a>
                    <a class="btn btn-link" href="/events">Events</a>
                    <a class="btn btn-link" href="/places">Places</a>
                    <a class="btn btn-link" href="/contacts">Contacts</a>
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