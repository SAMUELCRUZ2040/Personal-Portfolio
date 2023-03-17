<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link rel="icon" href="{{ asset('img/icons/activity.svg')}}">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/3ff4519403.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @vite([ 'resources/css/media/extra-mediaQuery.css', 'resources/js/custom.js', 'resources/js/validation.js', 'resources/img'])
    
    <title>My Personal - Portfolio</title>

</head>

<body>
    <!--------------------------- Loader -------------------------->
    <div class="loader">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets7.lottiefiles.com/packages/lf20_AQEOul.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
    </div>
    <!--------------------------- switch ---------------------------->

    <div class="cover-switch">
        <i class="fa-solid fa-gear"></i>
    </div>
    <div class="switch">
        <h4>color changer</h4>
        <div class="hide-button">x</div>
        <ul class="list-switch">
            <li data-color="#50a8a1" style="background: #50a8a1"></li>
            <li data-color="#c79864" style="background: #c79864"></li>
            <li data-color="#fdd05a" style="background: #fdd05a"></li>
            <li data-color="#fd5c55" style="background: #fd5c55"></li>
            <li data-color="#6b9839" style="background: #6b9839"></li>
            <li data-color="#9644e2" style="background: #9644e2"></li>
            <li data-color="#e350b8" style="background: #e350b8"></li>
            <li data-color="#f1a433" style="background: #f1a433"></li>
        </ul>
    </div>
    <!---------------- Star navbar  ------------------->

    <nav class="vertical-nav">

        <!-- logo -->
        <i class="fa-solid fa-s logo"></i>

        <!-- toogle menu -->

        <button class="toogle_menu" id="toogle-menu">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>

        <!-- copyright -->
        <p class="copyright">
            <a href="#">Samuel_Cruz</a> @ 2022 for love
            <i class="fa-brands fa-linux"></i>
        </p>

        <!-- mini menu -->
        <div class="mini-menu" id="mini-menu">
            <ul class="list container">
                <li>
                    <a class="active" href="#home">Home</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="#blog">Blog</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!----------------- End navbar  ------------------->

    <!-- alert -->
    <div class="alert" role="alert">
        <div class="row container-alert">
            <div class="col-6">
                <p class="text-center">Thanks for contact me</p>
                <p>I have received your message successfully and I am very grateful for your message, I will respond as quickly as possible, We appreciate you taking the time to contact us.</p>
                <p class="text-center">Have a nice day</p>
            </div>
            <div class=" col-6">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_ngcdqu4j.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
            </div>
        </div>
    </div>
    <!----------------- Star content page ------------->

    <div class="page-content">

        <!----------------- Star home --------------------->

        <section class="active" id="home">
            <div class="row container-home gy-4">
                <div class="col-5 container-img">
                    <!-- image -->
                    <div class="img container-fluid"></div>
                </div>
                <div class="col-7 container-information d-flex justify-content-center">
                    <!-- information -->
                    <div class="tittle-principal text-center">
                        <h1 class="text-opacity-100%">Samuel Cruz</h1>
                    </div>
                    <p>A Creative Freelancer & Full stack Developer</p>
                    <!-- iconos -->
                    <ul class="list-group d-flex flex-row gx-4">
                        <li class="list-grou-item me-2"> 
                        <a href="https://twitter.com/SamuelCruz2040" target="__blank">
                            <i class="fa-brands fa-twitter"></i></li>
                        </a> 
                        <li class="list-grou-item me-2"> 
                        <a href="https://wa.me/3218384721" target="__blank">
                            <i class="fa-brands fa-whatsapp"></i></li>
                        </a> 
                        <li class="list-grou-item"> 
                        <a href="https://www.linkedin.com/in/samuel-cruz-934075231/" target="__blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="networks">
                <div class="remove-networks">
                    <i class="fa-solid fa-xmark"></i>
                </div>
                <div class="tittle">
                    <h3>Networks</h3>
                </div>
                <ul class="list-nerworks">
                    <li class="item-list">
                        <a href="https://www.instagram.com/samuelcruz6010/" class="icon" target="__blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="https://github.com/SAMUELCRUZ2040" class="icon" target="__blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="https://candidato.co.computrabajo.com/candidate/home?idapp=3&f=FEE939887FF3D46C" class="icon" target="__blank">
                            <i class="fa-regular fa-copyright"></i>
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="https://join.skype.com/invite/bQqIhGL8yrzF" class="icon" target="__blank">
                            <i class="fa-brands fa-skype"></i>
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="https://dribbble.com/SamuelCruz2040" class="icon" target="__blank">
                            <i class="fa-brands fa-dribbble"></i>
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="https://www.facebook.com/profile.php?id=100089655997929" class="icon" target="__blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="container-button">
                <button>Networks</button>
            </div>
        </section>

        <!----------------- End home ---------------------->

        <!----------------- Star about -------------------->

        <section id="about">
            <!---------- about me  ----------->

            <div class="about-me container">
                <!-- titulo -->
                <div class="tittle-about text-center">
                    <h2>DISCOVER</h2>
                    <h1>ABOUT ME</h1>
                </div>
                <div class="row container-about">
                    <div class="col-md-7 col-lg-6 col-xl-5 col-xxl-5 img-about mt-5">
                        <img class="img-fluid" src="{{asset('img/about/bg-about-min.jpg')}}" alt="">                    
                    </div>
                    <div class="col-md-7 col-lg-6 col-xl-7 col-xxl-7 container-information mt-5">
                        <div class="my-information">
                            <h3>Hello! I am Samuel Cruz</h3>
                            <p class="mt-4">
                                SENA student with knowledge in software development, database and programming languages. My main objective is to grow professionally, therefore, I look for opportunities that allow me to learn
                                <p>
                        </div>
                        <div class="row personal-information d-flex flex-row p-4">
                            <div class=" col-sm-6 col-md-6 col-lg-lg-6 col-xl-6 col-xxl-6 date">
                                <p><span class="text-white"> Name: </span> Samuel Cruz</p>
                                <p><span class="text-white"> Phone: </span>+57 3218484721</p>
                                <p><span class="text-white"> Experience: </span> 1 year</p>
                                <p><span class="text-white"> Skype: </span> Samuel_Cruz</p>
                            </div>
                            <div class=" col-sm-6 col-md-6 col-lg-lg-6 col-xl-6 col-xxl-6 date">
                                <p><span class="text-white"> Age: </span> 18</p>
                                <p><span class="text-white"> Address: </span> Bogota, Colombia </p>
                                <p><span class="text-white"> Freelance: </span> Disponible</p>
                                <p><span class="text-white"> Dribbble: </span> scare.Dribbble</p>
                            </div>
                        </div>
                        <div class="download-information">
                            <a href="{{asset('img/curriculum/Currículum.pdf')}}" class="btn" target="__blank">CURRICULUM</a>
                        </div>
                    </div>

                </div>

            </div>
            <!--------------  end about me ---------------->


            <!-----------------  star services ----------------->

            <div class="services container">

                <!-- titulo -->
                <div class="tittle-services">
                    <h2 class="mt-5 mb-5">MY SERVICES</h2>
                </div>

                <!-- tarjets -->
                <div class="row container-cards d-flex g-4">
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card">
                            <div class="cover-card">
                                <i class="fa-solid fa-lines-leaning"></i>
                            </div>
                            <h4>Back End</h4>
                            <p>Management of php and laravel for the elaboration of different projects</p>
                            <span class="number">01</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card">
                            <div class="cover-card">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <h4>Back End</h4>
                            <p>Management of MySQL and queries from different databases</p>
                            <span class="number">02</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card">
                            <div class="cover-card">
                                <i class="fa-solid fa-pen-ruler"></i>
                            </div>
                            <h4>Fron End</h4>
                            <p>management of html css and javascript for the design of your projects</p>
                            <span class="number">03</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3">
                        <div class="card">
                            <div class="cover-card">
                                <i class="fa-solid fa-circle-nodes"></i>
                            </div>
                            <h4>Fron End</h4>
                            <p>Management of the react framework for better interfaces of your project</p>
                            <span class="number">04</span>
                        </div>
                    </div>
                </div>
                <!-- end services -->
            </div>
            <!-----------------  end services ----------------->


            <!----------------- star skills ----------------->
            <div class="skills container mb-5 mt-5">

                <!-- contenedor 1 -->
                <div class="partOne m">
                    <!-- HTML -->
                    <div class="skills-bar">
                        <div class="bar">
                            <div class="info ">
                                <span class="text-white">Html</span>
                            </div>
                            <div class="progress-line html"><span></span></div>
                        </div>
                    </div>

                    <!-- CSS -->
                    <div class="skills-bar ">
                        <div class="bar ">
                            <div class="info ">
                                <span class="text-white">Css</span>
                            </div>
                            <div class="progress-line css "><span></span></div>
                        </div>
                    </div>

                    <!-- raect -->
                    <div class="skills-bar ">
                        <div class="bar ">
                            <div class="info ">
                                <span class="text-white">Potoshop</span>
                            </div>
                            <div class="progress-line  potoshop "><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- contenedor 2 -->
                <div class="partTwo m">

                    <!-- php -->
                    <div class="skills-bar ">
                        <div class="bar ">
                            <div class="info ">
                                <span class="text-white">Php</span>
                            </div>
                            <div class="progress-line php"><span></span></div>
                        </div>
                    </div>

                    <!-- POTOSHOP -->
                    <div class="skills-bar ">
                        <div class="bar ">
                            <div class="info ">
                                <span class="text-white">Laravel</span>
                            </div>
                            <div class="progress-line laravel"><span></span></div>
                        </div>
                    </div>

                    <!-- DOM JS -->
                    <div class="skills-bar ">
                        <div class="bar ">
                            <div class="info ">
                                <span class="text-white">MySQL</span>
                            </div>
                            <div class="progress-line MySQL"><span></span></div>
                        </div>
                    </div>
                </div>

                <!-- contenedor 3 -->
                <div class="partThree m">

                    <!-- JAVASCRIPT -->
                    <div class="skills-bar ">
                        <div class="bar ">
                            <div class="info ">
                                <span class="text-white">JavaScript</span>
                            </div>
                            <div class="progress-line javascript "><span></span></div>
                        </div>
                    </div>

                    <!-- MySQL -->
                    <div class="skills-bar ">
                        <div class="bar ">
                            <div class="info ">
                                <span class="text-white">React</span>
                            </div>
                            <div class="progress-line react"><span></span></div>
                        </div>
                    </div>

                    <!-- Laravel -->
                    <div class="skills-bar ">
                        <div class="bar ">
                            <div class="info ">
                                <span class="text-white">After Effects</span>
                            </div>
                            <div class="progress-line afterEffects"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------- end skills ----------------->

            <!----------------- star resume ----------------->
            <div class="resume container">
                <div class="resume-tittle mb-5">
                    <h2>MY RESUME</h2>
                </div>
                <div class="row container-resume d-flex justify-content-center">
                    <div class="col-md-8 col-lg-5 col-xxl-5 col-xxl-5 card-resume text-center">
                        <div class="titlle-card ">
                            <h4>Tecnico en programacion de software</h4>
                        </div>
                        <p>programming technician at SENA in 5 months starting the productive stage</p>
                    </div>
                    <div class="col-md-8 col-lg-5 col-xxl-5 col-xxl-5 card-resume text-center">
                        <div class="titlle-card">
                            <h4>Academic bachelor</h4>
                        </div>
                        <p>Basic secondary finished at the Industrial Technical Institute of Facatativa Cundinamarca</p>
                    </div>
                    <div class="col-md-8 col-lg-5 col-xxl-5 col-xxl-5 card-resume text-center">
                        <div class=" titlle-card ">
                            <h4>Freelance jobs</h4>
                        </div>
                        <p>Sales, customer service</p>
                    </div>
                    <div class="col-md-8 col-lg-5 col-xxl-5 col-xxl-5 card-resume text-center">
                        <div class="titlle-card">
                            <h4>Microsoft office</h4>
                        </div>
                        <p>Handling of excel, word, powerpoint and photoshop to edit work and help collaboratively for projects</p>
                    </div>
                </div>
            </div>
            <!----------------- end resume ----------------->

        </section>


        <!----------------- End about  -------------------->

        <!----------------- Star Portfolio ---------------->
        <section id="portfolio">
            <div class="portfolio container">
                <!-- titulo -->
                <div class="portfolio-titlle">
                    <h2 class="titlle-top">RECENT WORKS</h2>
                    <h1 class="main-tittle">MY PORTFOLIO</h1>
                </div>
                <div class="options mb-5">
                    <ul id="command" class="list-filter list-unstyled d-flex flex-row gy-4">
                        <li class="active mostrar" data-filter="all">All</li>
                        <li class="" data-filter="Front">Front End</li>
                        <li class="" data-filter="Back">Back End</li>
                        <li class="" data-filter="Graphic">Graphic Design</li>
                    </ul>
                </div>

                <div class="row gy-4 mb-5 group-img">
                    <div class="col-sm-7 col-md-6 col-lg-4 col-xl-4 c-i Front">
                        <div class="object">
                            <img class="img-fluid rounded-3 img" src="{{ asset('img/portfolio/imagen-1.jpg')}}" alt="img">
                            <div class="blanket">
                                <h4 class="tittle-item">Project Tittle</h4>
                                <i class="fa-solid fa-magnifying-glass icon-category"></i>
                                <div class="category mt-3">
                                    <span class="text-white">
                                        FRONT END
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-4 col-xl-4 c-i Back">
                        <div class="object">
                            <img class="img-fluid rounded-3 img" src="{{ asset('img/portfolio/imagen-2.jpg')}}" alt="img">
                            <div class="blanket">
                                <h4 class="tittle-item">Project Tittle</h4>
                                <i class="fa-solid fa-magnifying-glass icon-category"></i>
                                <div class="category mt-3">
                                    <span class="text-white">
                                        BACK END
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-4 col-xl-4 c-i Graphic">
                        <div class="object">
                            <img class="img-fluid rounded-3 img" src="{{ asset('img/portfolio/imagen-3.jpg')}}" alt="img">
                            <div class="blanket">
                                <h4 class="tittle-item">Project Tittle</h4>
                                <i class="fa-solid fa-magnifying-glass icon-category"></i>
                                <div class="category mt-3">
                                    <span class="text-white">
                                        GRAPHIC DESIGN
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-4 col-xl-4 c-i Front">
                        <div class="object">
                            <img class="img-fluid rounded-3 img" src="{{ asset('img/portfolio/imagen-4.jpg')}}" alt="img">
                            <div class="blanket">
                                <h4 class="tittle-item">Project Tittle</h4>
                                <i class="fa-solid fa-magnifying-glass icon-category"></i>
                                <div class="category mt-3">
                                    <span class="text-white">
                                        FRONT END
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-4 col-xl-4 c-i Back">
                        <div class="object">
                            <img class="img-fluid rounded-3 img" src="{{ asset('img/portfolio/imagen-5.jpg')}}" alt="img">
                            <div class="blanket">
                                <h4 class="tittle-item">Project Tittle</h4>
                                <i class="fa-solid fa-magnifying-glass icon-category"></i>
                                <div class="category mt-3">
                                    <span class="text-white">
                                        BACK END
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-4 col-xl-4 c-i Graphic">
                        <div class="object">
                            <img class="img-fluid rounded-3 img" src="{{ asset('img/portfolio/imagen-6.jpg')}}" alt="img">
                            <div class="blanket">
                                <h4 class="tittle-item">Project Tittle</h4>
                                <i class="fa-solid fa-magnifying-glass icon-category"></i>
                                <div class="category mt-3">
                                    <span class="text-white">
                                        GRAPHIC DESIGN
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!----------------- End Portfolio ----------------->
        <!------------------------ Star Blog ------------------------>
        <section id="blog">
            <div class="container blog">
                <!-- titlle -->
                <div class="blog-tittle mt-5 px-4">
                    <h2>LATEST POSTS</h2>
                    <h1>MY BLOG</h1>
                </div>
                <div class="row information-blog gy-4  container mt-4 px-5">
                    <div class=" col-lg-4 col-xl-4 col-xxl-4 img-container">
                        <img class="img-fluid rounded-3" src="{{ asset('img/blog/imagen-1.jpg')}}" alt="">
                        <div class="mini-description">
                            <span>Back End</span>
                            <i class="fa-solid fa-magnifying-glass icon-category"></i>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xl-4 col-xxl-4 img-container">
                        <img class="img-fluid rounded-3" src="{{ asset('img/blog/imagen-2.jpg')}}" alt="">
                        <div class="mini-description">
                            <span>Front End</span>
                            <i class="fa-solid fa-magnifying-glass icon-category"></i>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xl-4 col-xxl-4 img-container">
                        <img class="img-fluid rounded-3" src="{{ asset('img/blog/imagen-3.jpg')}}" alt="">
                        <div class="mini-description">
                            <span>Back End</span>
                            <i class="fa-solid fa-magnifying-glass icon-category"></i>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xl-4 col-xxl-4 img-container">
                        <img class="img-fluid rounded-3" src="{{ asset('img/blog/imagen-4.jpg')}}" alt="">
                        <div class="mini-description">
                            <span>Front End</span>
                            <i class="fa-solid fa-magnifying-glass icon-category"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xl-4 col-xxl-4 remove">
                        <div class="container-remove">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_pytxl8rw.json"  background="transparent"  speed="1"  style="width: 200px; height: 200px;"  loop  autoplay></lottie-player>
                        </div>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player class="pointer" src="https://assets3.lottiefiles.com/temporary_files/81b1nc.json"  background="transparent"  speed="1"  style="width: 140px; height: 140px;"  loop  autoplay></lottie-player>
                    </div>
                    <div class=" col-lg-4 col-xl-4 col-xxl-4 img-container">
                        <img class="img-fluid rounded-3" src="{{ asset('img/blog/imagen-5.jpg')}}" alt="">
                        <div class="mini-description">
                            <span>Back End</span>
                            <i class="fa-solid fa-magnifying-glass icon-category"></i>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xl-4 col-xxl-4 img-container">
                        <img class="img-fluid rounded-3" src="{{ asset('img/blog/imagen-6.jpg')}}" alt="">
                        <div class="mini-description">
                            <span>Front End</span>
                            <i class="fa-solid fa-magnifying-glass icon-category"></i>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xl-4 col-xxl-4 img-container">
                        <img class="img-fluid rounded-3" src="{{ asset('img/blog/imagen-7.jpg')}}" alt="">
                        <div class="mini-description">
                            <span>Back End</span>
                            <i class="fa-solid fa-magnifying-glass icon-category"></i>
                        </div>
                    </div>
                    <div class=" col-lg-4 col-xl-4 col-xxl-4 img-container">
                        <img class="img-fluid rounded-3" src="{{ asset('img/blog/imagen-8.jpg')}}" alt="">
                        <div class="mini-description">
                            <span>Front End</span>
                            <i class="fa-solid fa-magnifying-glass icon-category"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------ End Blog ------------------------>
        <!------------------------ Star Contact -------------------->
        <section id="contact">
            <div class="container contact">
                <!-- tittle -->
                <div class="contact-tittle mt-5 mb-5">
                    <h2>GET IN TOUCH</h2>
                    <h1>CONTACT ME</h1>
                </div>

                <!-- content -->
                <div class="row gy-5 content-contact">
                    <div class="col-lg-5 col-xl-4">
                        <div class="row gy-5 group-letters">
                            <div class="ms-3 col-7 letter rounded-3">
                                <div class="information-contact">
                                    <h4>lOCATION</h4>
                                    <p class="text-white">Colombia</p>
                                    <p class="text-white">Bogota D.C</p>
                                </div>
                                <span class="icon">
                                        <i class="fa-solid fa-map-location-dot mt-4"></i>
                                </span>
                            </div>
                            <div class="ms-3 col-7 letter rounded-3">
                                <div class="information-contact">
                                    <h4>EMAIL</h4>
                                    <p class="text-white">samuelcruz2040@gmail.com</p>
                                    <p class="text-white">snanez@qvision.com.co</p>
                                </div>
                                <span class="icon">
                                    <i class="fa-solid fa-envelopes-bulk mt-4"></i>
                                </span>
                            </div>

                            <div class="ms-3 col-7 letter rounded-3 mb-5">
                                <div class="information-contact">
                                    <h4>PHONE</h4>
                                    <p class="text-white">+57 3218384721</p>
                                    <p class="text-white">+57 3163264426</p>
                                </div>
                                <span class="icon">
                                <i class="fa-solid fa-phone-volume p mt-4"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8 container-formulario">
                        <form action="{{route('post.store')}}" method="POST" class="formulario" id="formulario">
                            @csrf
                            <div class="mb-4 container-input"  id="container-input">
                                <label for="name" class="">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" autocomplete="off">
                                </label>
                            </div>
                            <div class="mb-4 container-input"  id="container-input">
                                <label for="email">
                                    <input type="email" class="form-control" id="gmail" name="gmail" placeholder="Name@example.com" autocomplete="off">
                                </label>
                            </div>
                            <div class="mb-4 container-input"  id="container-input">
                                <label for="subject">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" autocomplete="off">
                                </label>
                            </div>
                            <div class="mb-5 container-textarea"  id="container-input">
                                <label for="message">
                                    <textarea class="form-control" rows="3" id="message" name="message" placeholder="Message" autocomplete="off" ></textarea>
                                </label>
                            </div>
                            <button class="btn btn-transparent buttom-form mb-5" type="submit">
                                send Message
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!------------------------ End Contact  -------------------->
    </div>
    <!----------------- End content page ------------->


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</body>
</html>