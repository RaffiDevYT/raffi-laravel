<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="Rafi Athallah">
    <link rel="shortcut icon" href="{{ asset('img/data/rafi.jpg') }}">
    <meta name="description" content="Hello, my name is Rafi Athallah I created this website for my personal data and photos">
    <meta name="author" content="RafiAthallah">
    <meta property="og:site_name" content="Rafi Athallah">
    <meta property="og:url" content="https://raffidev.com/">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Rafi Athallah">
    <meta property="og:description" content="Hello, my name is Rafi Athallah I created this website for my personal data and photos">
    <title>Rafi Athallah</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Space+Grotesk" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Space+Mono" />
    <link href="https://fonts.cdnfonts.com/css/tt-travels-next-trl" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <!--  Magnific Popup css file  -->
    <link rel="stylesheet" href="{{ asset('vendor/Magnific-Popup/dist/magnific-popup.css') }}">
    <!--  Owl-carousel css file  -->
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/css/owl.theme.default.min.css') }}">
    <!-- Custom Script -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
</head>

<body>
    <!-- Preloader -->
        <div id="loader">
      <div class="preloader-background"></div>
      <div class="preloader">
        <img class="center-image" src="{{ asset('img/data/loader.png') }}" draggable="false" />
        <div class="status">
          <br />
          <h1>Loading...</h1>
          <br />
          <noscript>Please turn JavaScript on and reload the page.<br /></noscript>
          You don't have to do anything. You will be redirected to the requested content shortly.
          <br />
          Please allow up to few seconds...
        </div>
      </div>
    </div>

    <main id="page">
    <!--  ======================= Start Header Area ============================== -->
    <section id="home">
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><strong>RAFFIATHALLAH</strong></div>
        <ul class="links">
            <li><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#experience">EXPERIENCE</a></li>
            <li><a href="#skills">SKILLS</a></li>
            <li><a href="blog/">BLOG</a></li>
            <div class="bx bx-moon toogle-btn" id="darkmode"></div>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    </section>
    <!--  ======================= End Header Area ============================== -->
    <div class="wrapper">
      <div class="data">
        <p>This website uses cookies to enhance your browsing experience. <a href="cookies/"> Read more...</a></p>
      </div>

      <div class="buttons">
        <button class="button" id="declineBtn">Disallow cookies</button>
        <button class="button" id="acceptBtn">Allow cookies</button>
      </div>
    </div>

    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main">


    <!--  ======================= Start Hero Area =======================  -->
    <section id="hero">
	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-lg-5 col-md-6 my-auto isi order-1 text-center text-lg-start">
				<h1 class="fw-bold"> I'm <span>Rafi Athallah</span></h1>
				<p>
					<span class="auto-input"></span>
				</p>
				<a class="btn btn-costum1" href="contact/">Contact Me</a>

				<div class="social-icon">
				</div>
			</div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="../../img/banner/learning-removebg-preview.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    <!--  ======================= End Hero Area =======================  -->

    <!--  ========================= About Area ==========================  -->
    <section id="about">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center ">
                    <div class="col-10">
                        <h1 class="text-center">ABOUT</h1>
                        <hr>
                    </div>
                    <div class="col-lg-10 cok-md-12">
                        <p class="text-lg-center">Hi, my name is RafiAthallah, I live in the city of Tangerang, I want to become a Cyber ​​Security and Full-Stack Developer. I first learned a programming language when I was in 7th grade, at that time I was looking at YouTube for fun with the search "Learn Website & Hacking" and then I saw that website & hacking had to be able and understand programming languages ​​too. That's where I became interested in becoming a Web Developer and Cyber ​​Security.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="skills" id="skills">
                        <h3><span>My</span> <span class="highlight">Skills</span></h3>
                        <hr>
                    <div class="skill-container">
                        <div class="card-skill">
                            <img src="../../img/svg/html.svg" alt="HTML" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/css.svg" alt="CSS" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/JavaScript.svg" alt="JavaSctipt" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/Bootstrap5.svg" alt="Bootstrap" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/mysql.svg" alt="MySQL" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/SQLite.svg" alt="SQLite" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/ai.svg" alt="Illustrator" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/ps.svg" alt="Photoshop" loading="lazy" />
                        </div>
                    </div>
                    <h4 id="learning">Currently Learning:</h4>
                    <div class="skill-container">
                        <div class="card-skill">
                            <img src="../../img/svg/Python.svg" alt="Python" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/tailwind.svg" alt="TailwindCSS" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/react.svg" alt="React" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/vue.svg" alt="Vue" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/nodejs.svg" alt="Node JS" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/mongodb.svg" alt="Mongo DB" loading="lazy" />
                        </div>
                        <div class="card-skill">
                            <img src="../../img/svg/laravel.svg" alt="Laravel" loading="lazy" />
                        </div>
                    </div>
                </div>

    <!--  ========================= End About Area ==========================  -->

    <!--  ========================= Education & Experience Area ==========================  -->
    <section id="experience">
    <div class="main">
        <h3 class="heading">Education & Experience</h3>
        <div class="education-container">
            <ul>
                <li>
                    <h3 class="title">SD Persatuan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eaque quidem esse? Incidunt, odit beatae?</p>
                    <a href="#">2015 - 2020</a>
                    <span class="circle"></span>
                    <span class="date">Education</span>
                </li>
                <li>
                    <h3 class="title">SMP BINONG PERMAI</h3>
                    <p>SMP Binong Permai An Nurmaniyah Curug, Tangerang is one of the top rated place listed as <a href="https://goo.gl/maps/QTFeVbkXVxA8azrq7">School in Tangerang</a></p>
                    <a href="#">2021 - 2024</a>
                    <span class="circle"></span>
                    <span class="date">Education</span>
                </li>
                <li>
                    <h3 class="title">Developer At GabutNetwork</h3>
                    <p>GabutNetwork under the operational control of Arsa has been successful in running business in the networking field since 2019 which has made us more professional at every step. We always maintain these 3 main qualities to ensure the comfort of each of our buyers. <a href="https://gabutnetwork.com" target="_blank">Website Here!</a></p>
                    <a href="#">2022 - 2022</a>
                    <span class="circle"></span>
                    <span class="date">Experience</span>
                </li>
                <li>
                    <h3 class="title">Moderator Cyber Security At Isci Community</h3>
                    <p>ISCI Team is a community where the activists of Web Developers and Ethical Hacking are. ISCI Team was founded on the 12th of the 2nd month of 2021 and was initiated by 3 people. The initial purpose of forming the ISCI Team was only for Hacking community, then switch goals to become a cyber security and web developer community and oversee crime in the internet world. <a href="http://isci.rf.gd" target="_blank">Website Here!</a></p>
                    <a href="#">2022 - Forever</a>
                    <span class="circle"></span>
                    <span class="date">Experience</span>
                </li>
            </ul>
        </div>
    </div>
    </section>

    <!--  ========================= End Education & Experience Area ==========================  -->

    <!--  ======================= Project Area =============================  -->
    <section id="project">
        <section class="project-area">
            <div class="container">
                <div class="project-title pb-5">
                    <h1 class="text-uppercase title-h1 title-text text-center">Recently Done Project</h1>
                    <h1 class="text-uppercase title-h1 title-text text-center">Quality Work</h1>
                </div>

                <div class="button-group text-center">
                    <button type="button" class="active title-text" id="btn1" data-filter="*">All</button>
                    <button type="button" class="title-text" data-filter=".website">Website</button>
                    <button type="button" class="title-text" data-filter=".latest">Latest</button>
                    <button type="button" class="title-text" data-filter=".following">Following</button>
                </div>

                <div class="row grid">
                    <div class="col-lg-4 col-md-6 col-sm-12 element-item website">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="../../img/portfolio/project1.png">
                                    <img src="../../img/portfolio/project1.png" alt="portfolio-1"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase title-text">Web Desing</h4>
                                <span class="text-secondary">By RaffiDev</span>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-4 col-md-6 col-sm-12 element-item website">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="../../img/portfolio/project4.png">
                                    <img src="../../img/portfolio/project4.png" alt="portfolio-4"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase title-text">Minecraft Website Design</h4>
                                <span class="text-secondary">By RaffiDev And Vincent</span>
                            </div>
                        </div>
                    </div>
                   <div class="col-lg-4 col-md-6 col-sm-12 element-item latest">
                        <div class="our-project">
                            <div class="img">
                                <a class="test-popup-link" href="../../img/portfolio/project5.png">
                                    <img src="../../img/portfolio/project5.png" alt="portfolio-5"
                                        class="img-fluid">
                                </a>
                            </div>
                            <div class="title py-4">
                                <h4 class="text-uppercase title-text">Discord Bot</h4>
                                <span class="text-secondary">By RaffiDev#2578</span>
                            </div>
                        </div>
                    </div>
            </div>
            </div>
            </div>
        </section>

    <!--  ======================= End Project Area =============================  -->

    <!--  ======================== Hacking Comunity Area ==============================  -->
    <section class="hacking-area">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <div class="hacking-title">
                        <h1 class="text-uppercase title-h1 hacking">Hacking Comunity</h1>
                        <br><br>
                        <p class="para">
                            ISCI Team is a community where the activists of Web Developers and
                            Ethical Hacking are. ISCI Team was founded on the 12th of the 2nd
                            month of 2021 and was initiated by 3 people. The initial purpose of
                            forming the ISCI Team was only for
                            Hacking community, then switch goals to become a cyber security and
                            web developer community and oversee crime in the internet world.
                        </p>
                        <button id="copyip" class="btn button-hacking" value="http://isci.rf.gd">Website Here!</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  ======================== End Hacking Comunity Area ==============================  -->

    <!-- ======================= Contact Admin ======================= -->
        <section id="contact">
            <div class="container">
                <h1 class="text-uppercase title-h1 text-4xl text-teal-400 text-center">CONTACT US</h1>
                <div class="line my-4 mx-auto"></div>
                <div class="row">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                    <div data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                        <div class="card">
                        <div class="card-body">
                            <br />
                            <h5 class="card-title">Raffi Athallah</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-center text-gray-400">ISCI Leader</h6> -->
                            <span class="badge bg-primary">Web Developer</span>
                            <span class="badge bg-primary">Cyber Security</span>
                            <span class="badge bg-primary">Data Science</span>
                            <span class="badge bg-primary">Data Analyst</span>
                            <hr />
                            <br />
                            <p class="card-text" id="aboutText1">Coming from Tangerang city, and being the moderator of ISCI,
                            under the pseudonym ./HC - R4ff1Dev.sh</p>
                            <br />
                            <a href="https://wa.me/6285157868689/" target="_blank" class="button">
                            <span>Contact</span>
                            </a>
                            <br />
                            <br />
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                        <div class="card">
                        <div class="card-body">
                            <br />
                            <h5 class="card-title">Raffi Athallah</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-center text-gray-400">ISCI Moderator</h6> -->
                            <span class="badge bg-primary">Web Developer</span>
                            <span class="badge bg-primary">Cyber Security</span>
                            <span class="badge bg-primary">Data Science</span>
                            <span class="badge bg-primary">Data Analyst</span>
                            <hr />
                            <br />
                            <p class="card-text" id="aboutText3">Coming from Tangerang city, and being the moderator of ISCI,
                            under the pseudonym ./HC - R4ff1Dev.sh</p>
                            <br />
                            <a href="https://wa.me/6285157868689" target="_blank" class="button"><span>Contact</span></a>
                            <br />
                            <br />
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="col">
                    <div data-aos="fade-down" data-aos-delay="50" data-aos-duration="1000">
                        <div class="card">
                        <div class="card-body">
                            <br />
                            <h5 class="card-title">Raffi Athallah</h5>
                            <!-- <h6 class="card-subtitle mb-2 text-center text-gray-400">ISCI Moderator</h6> -->
                            <span class="badge bg-primary">Web Developer</span>
                            <span class="badge bg-primary">Cyber Security</span>
                            <span class="badge bg-primary">Data Science</span>
                            <span class="badge bg-primary">Data Analyst</span>
                            <hr />
                            <br />
                            <p class="card-text" id="aboutText3">Coming from Tangerang city, and being the moderator of ISCI,
                            under the pseudonym ./HC - R4ff1Dev.sh</p>
                            <br />
                            <a href="https://wa.me/6285157868689" target="_blank" class="button"><span>Contact</span></a>
                            <br />
                            <br />
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======================= END CONTACT ======================= -->

    <!-- ======================= Footer ======================= -->
        <div class="lastline text-center">
        <p class="para" style="color: #fff;">
                    © 2021 - Made with <svg xmlns="http://www.w3.org/2000/svg" height="1.30em" viewBox="0 0 512 512"><style>svg{fill:#eb0f0f}</style><path d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg>
                        <a href="https://instagram.com/raffidev" target="_blank" style="text-decoration: none;"><span style="color: #fff;">by Rafi Athallah</span></a>
                    </p>
        </div>
    <!-- ======================= End Footer ======================= -->
        <a href="#home" class="swipeup"><i class="fa-solid fa-arrow-up arrayupb"></i>
        </a>
        
 
        <!-- Scroll -->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--  Jquery js file  -->
        <script src="{{ url('js/jquery.3.4.1.js') }}"></script>

        <!--  Bootstrap js file  -->
        <script src="{{ url('js/bootstrap.min.js') }}"></script>

        <!--  isotope js library  -->
        <script src="{{ asset('vendor/isotope/isotope.min.js') }}"></script>

        <!--  Magnific popup script file  -->
        <script src="{{ asset('vendor/Magnific-Popup/dist/jquery.magnific-popup.min.js') }}"></script>

        <!--  Owl-carousel js file  -->
        <script src="{{ asset('vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>

        <!--  custom js file -->
        <script src="{{ asset('js/particles.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
        <script>
            var typed = new Typed(".auto-input", {
                strings: ["Web Developer", "Frontend Developer", "Cyber Security", "Data Science"],
                typeSpeed: 100,
                backSpeed: 100,
                loop: true
            })
        </script>
        <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="df4193ed-7abc-4cda-901f-5cb9872e88f7";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
</body>

</html>