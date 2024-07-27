<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Our History</title>
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
                        <div class="bg-light border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">
                                The Iwo Kingdom is a traditional state based on the city of Iwo in Osun State, Nigeria. The Yoruba kingdom, whose ruler is titled "Oluwo of Iwo", was established in the 14th century AD. 
                                The Iwo people, like all other people of Yoruba stock are said to have originally belonged to Ile-Ife from where they migrated sometime in the 14th century. The earliest settlement was founded by Adekola Telu, son of the 16th Ooni of Ife, a female called Luwo Gbagida.[1] The present city of Iwo was founded in the 16th or 17th century. 
                            </p>            
                               </div>
                       
                    </div>
                </div>
                <p class="text-dark mb-2">
                    
                    Iwo, town, Osun state, southwestern Nigeria. It lies 6 miles (10 km) north of the Iwo station on the Lagos-Kano railway and at the intersection of roads from Ibadan, Oyo, and Ogbomosho, on a low hill at the edge of savanna and forest. Founded in the 16th or 17th century, it became the capital of the Yoruba kingdom of Iwo. The former ruler of the Iwo kingdom, the oluwo (“king”), whose palace now incorporates a modern building and the local government offices, still retains important social and traditional functions and is an adviser to the local government. Within the town, many of the traditional Yoruba compounds with their rectangular courtyards have been replaced with single-story and multi-story houses.
                </p>
                <p class="text-dark mb-2">
                    The cultivation and export of cacao is the town’s economic mainstay. Yams, corn (maize), cassava (manioc), and palm oil and kernels, the chief staple crops, are grown north of the town. Cotton weaving and dyeing (with locally grown indigo) are traditionally important activities. Iwo’s predominantly Muslim population is served by a central mosque and a hospital. A Baptist mission, Muslims, Roman Catholics, and the government operate the town’s schools. Although the railroad built in 1906 greatly enhanced Iwo’s growth, the town’s traffic is now primarily road-borne. Pop. (2006) local government area, 191,377.
                </p>
                <p class="text-dark mb-2">
                    Iwo is one of the ancient towns in Yorubaland. Its early history like the history of most Yoruba kingdoms, started at Ile-Ife early in the 11th century. Tradition relate that Adekola Telu, son of the sixteenth Ooni of Ife, Queen Luwo Gbagida, who migrated from Obalooran’s compound in Ile-Ife after the death of his mother.
                </p>
                <p class="text-dark mb-2">
                    Prince Adekola Telu left Ile-Ife with a host of attendants headed to the unknown when they left Ile-Ife. However, his first settlement was at a place called Ogundigbaro which was a place located at the confluence of River Oba and River Osun. After a number of years at this settlement, they were forced to leave the place due to constant flooding.
                </p>
                <p class="text-dark mb-2">
                    After consultation with Ifa Oracle they moved to Erunmu District where they could not remain for a long time because of the depredation of wild animals around the area (Alademomi Kenyan). The sojourners then moved to Igbo-Orita from where, after a long time they proceeded to settle finally at Ile-Iwo. It's claimed that Adekola Telu died at Igbo Orita. The site was a distance of about six (6) kilometres from the centre of the preset Iwo (Ibadan Iwo Garage).
                </p>
                <p class="text-dark mb-2">
                    Three descendants of Telu reigned here. They were Rounmu (who probably led the group there), ganfenumodi and Jikanmu (who had the most eventful reign). A separate account stated that while it was epidemic that sent them packing, they consulted Ifa oracle before leaving. Ifa therefore ordered them to leave Igbo Orita for a place where Eye Odidere (Parrot) abounded. It was on their way that Jikanmu fell sick and was being carried along by a man named Aimaku. Gossip House
                </p>
                <p class="text-dark mb-2">
                    As fate would have it, Jikanmu eventually gave up the ghost very near a river, which has today being named Adeke River (River where the King died – Obadeke) today. The man who was credited for founding the present Iwo was Olumade Parin. Parin had taken over from Jikanmu after his death, and had led the people to where Parrot is abounded. It was on their way that Jikanmu fell sick and was being carried along by a man named Aimaku. As fate would have it, Jikanmu eventually gave up the ghost very near a river, which has today being named Adeke River (River where the King died – Obadeke) today.
                </p>
                <p class="text-dark mb-2">
                    The man who was credited for founding the present Iwo was Olumade Parin. Parin had taken over from Jikanmu after his death, and had led the people to where Parrot is abounded. That was how Parin became the first Oluwo in around 17th century.
                </p>
                <p class="text-dark mb-2">
                    Their kings are great by the successes achieved in war time. Their nobles show their nobility by their achievements at the war front. However, while Iwo shared similar sentiment of having a strong connection with Ile-Ife, the cradle of the Yoruba race, the reason for their migration is far from wars but that of direct and willing migration from Ile-Ife. Iwo is located round towns and major settlements which includes Asa, Oluponna, Ile-Ogbo, Ogbaagba, Kuta, Telemu, Ikire-Ile, Bode-Osi, Ajagba, Ajagunlase and Ikonifin just to mention a few.
                </p>
                <p class="text-dark mb-2">
                    The rulers of these aforementioned settlements pay traditional homage to the Oluwo of Iwoland, the paramount ruler in the area. It must therefore be noted with satisfaction that people of Iwo and its environs co-exist peacefully together while believers of Christian, Islamic and Traditional religions intermingle among one another without problem.
                </p>
                <p class="text-dark mb-2">
                    <strong>Ìwó Odíderé</strong> <br>
                    Iwo people, like all other people of the Yoruba kingdom, are said to have originated from Ile-Ife – where they migrated sometimes in the 14th century. The only predicted land with the symbol of the parrots (which signifies the location of the promised land) is the Iwo kingdom. The city was formerly part of old Oyo state and was later separated and became one of the major townships in Osun State, Nigeria.
                </p>
                <p class="text-dark mb-2">
                    It has over 30 ancient and powerful Kings all under the Oluwo of Iwoland, HRM Oba Abdulrosheed Akanbi as the only Consenting Authority and first class paramount Ruler in an area of 245 km² and a population of 191,348 (central city/Local Government) most populous Local Government in Osun State by the 2006 Nigeria National census figures. The other local governments in Iwo from satellite towns are Aiyedire Local Government, 265.783 km² area and 76,309 by population, as well as Ola-Oluwa Local Government, 332.117 km² area and 76,227 by population. The Headquarters of the Local Governments are Iwo (Central), Iwo; Aiyedire, Ile Ogbo; and Ola-Oluwa, Bode-Osi. Iwo now has additional four (4) Local Governments: Iwo East, Olomowewe; Iwo West, Agberire; Ọla Oluwa South East, Ilemowu; Ayedire South East, Oluponna.
                </p>
                <p class="text-dark mb-2">
                    <strong>Education</strong> <br>
                    The source of orthodox Education in Iwo was, initially, primarily Christian Missionary based. These were mostly Baptist as each Baptist Church branch in the central city established a primary school of its own with corresponding name after the branch: Aipate Baptist Day School, Olukotun Baptist Day School, Feesu Baptist Day School, Oke-Odo Baptist Day School. The Baptists also established a secondary school, Baptist High school, Iwo, the only institution in Iwo awarding Advanced Level of West African School Certificate in addition to the Ordinary Level certificate. There was also a Baptist Modern school (now obsolete in Nigeria educational system) which now metamorphosed to Baptist Grammar school – awarding ordinary level certificates like other secondary schools. These in addition to the old Baptist College, a Teacher Training College, and one of the oldest of such in Africa and main source of teachers to the Nigerian and other African countries Education system. The College is now the site of Bowen University, the secular Baptist University, and the one of the three University in Iwo and environment. The Baptists were followed by the Methodist who had a Methodist Primary School in the central city, as well a Modern school, now United Methodist High School.
                </p>
                <p class="text-dark mb-2">
                    The Catholics had a Modern School, now Catholic Grammar School, and a Female Secondary School- St. Marys High School which is now a co-educational school.
                </p>
                <p class="text-dark mb-2">
                    The government later joined the Christian missionaries in establishing many primary schools, a Modern School, Local authority Modern School, now Local Authority Commercial Grammar School, a Teacher Training College, LATCO, later changed in 1964 to Iwo Grammar School.
                </p>
                <p class="text-dark mb-2">
                    Muslim missionaries also joined the efforts later in establishing Ansar-U-deen Primary School, Ansar-U-Deen Modern School which is now Ansar-U-deen Grammar School, and Anwar-ul-Islam Grammar School. The first Shariah court in Nigeria was established in Iwo. Iwo people are majorly Muslim as early as 1655 when the first mosque in Yorubaland was built which serves as the first place of worship and Islamic education. Among the major secondary schools are the Iwo Grammar School, the United Methodist High School, the Baptist High School, St. Mary’s High School, the L.A. Commercial Grammar School, Islahudeen Grammar School and the Anwar-ul-Islam Grammar School as well as several others. Iwo is well noted for Arabic/Islamic education. There are several Arabic schools (Modrassah)in the City and many Iwo indigenes usually have a taste of this along with the secular schools. The popular Modrassah include Islamic youth center (morkaz shabaab) which was established by late Islamic scholar named Sheikh Ahmad Muhally Adedimeji Aroworeki, Islahudeen Arabic School, Obatedo, founded by late Sheikh Abdulbaaqi Muhammad in the early 1960s. Amin Training Center, Araromi is another prominent school established by late Sheikh Badrudeen Al-Amin in the 1950s. Islamic cultural center (Markaz Abdul Razaq Abdul Rahman), Sheik Adam ilory Villa, Agbowo, Iwo.
                </p>

                <p class="text-dark mb-2">
                    There are many primary schools in the satellite towns established by the former Western Regional Government as well as many secondary schools in Iwo and its satellite towns which were established during the tenure of Chief Bola Ige as the governor of the old Oyo state.
                </p>

                <p class="text-dark mb-2">
                    Higher Institutions: BOWEN University, Wolex Polytechnic, Baptist Teachers’ Training College which was located at Oke Odo in Iwo, but this facility is now used as the campus of Bowen University, Westland University, Iwo city polytechnic, Royal College of Public Health and Technology, Empire College of Health Technology, Al Ummah College of Education, Federal College of Education, Offer center institute of Agriculture. Another institution in Iwo is Shariah College of Nigeria, which used to be in Ibadan before it was relocated to its permanent site at Oke-Afo, Iwo.
                </p>
                <p class="text-dark mb-2">
                    Among the major private secondary schools are Islamic Model College, Muslim International School, Agbaje Memorial Comprehensive College, Aipate Baptist School, Vico-Hope Comprehensive College, A-1 Grammar School, Crowey Schools, Regina Mundi Girls Secondary School, The wings school, Innayatullah muslim academy, ICC Model school, Our Lady of Fatima academy (OLFA). etc.
                </p>

                <p class="text-dark mb-2">
                    <strong>Technology</strong> <br>
                    Iwo is the home for the first state television in Nigeria which is founded 40 years ago, Reality Television Service (RTS),It is just 21yrs that the NTA Ibadan is used to be older than it. It is also the home of Reality Radiovision Services (RRS), it’s also known as odidere fm or 96.3Fm. Also iwo also have Bowen Radio 101.9fm and an old radio station at ori eru Iwo Am which was abandoned by Osun state government. There is also a new radio station in Iwo Ayekooto FM, 88.3FM
                </p>
                <p class="text-dark mb-2">
                    <strong>Agriculture</strong><br>
                    Short story of Iwo in Oyo dialect by a native speaker. Iwo is a home to Osun State Agricultural Development Programmes (OSSADEP), also selema farm s, shabeeb agro and many more.
                </p>

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
                    <a class="btn btn-link" href="/history">Our History</a>
                    <a class="btn btn-link" href="/rulers">Traditional Ruler</a>
                    <a class="btn btn-link" href="/event">Events</a>
                    <a class="btn btn-link" href="/places">Places</a>
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