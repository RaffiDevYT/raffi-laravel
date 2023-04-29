<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Notice</title>

    <!--  Bootstrap css file  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <!--  font awesome icons  -->
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
	
    <!--  custom css file  -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cookies.css') }}">

    <!-- s -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <meta content="index, follow" name="robots"/>
    <link rel="shortcut icon" href="{{ asset('img/Logo Baru.png') }}">
    <meta content="id" name="geo.country"/>
    <meta content="Indonesia" name="geo.placename"/>
    <meta content="general" name="rating"/>
    <meta content="Rafi Athallah Wibowo" name="Author"/>
    <link href="https://www.instagram.com/raffidev/" rel="publisher"/>
    <link href="https://www.instagram.com/raffidev/" rel="author"/>
    <link href="https://www.instagram.com/raffidev/" rel="me"/>
    <meta name="google-site-verification" content="afmRzE8HqACVR8kBtqqXdh4q5xrszZnOEnPtzzNlLCE"/>
    <meta name="msvalidate.01" content="26E64DF8D8B14C5AF83FBD804474B8C4"/>
    <meta property="og:title" content="Raffi &dash; Portfolio"/>
    <meta property="og:url" content="https://raffidev.com/"/>
    <meta property="og:type" content="profile"/>
    <meta property="og:site_name" content="Raffi &dash; Portfolio"/>
    <meta property="og:description" content="All About Of Me :D"/>
    <meta property="og:image" content="../../public/img/Logo Baru.png"/>
    <meta property="profile:first_name" content="Raffi"/>
    <meta property="profile:last_name" content="Athallah Wibowo"/>
    <meta property="profile:gender" content="male"/>
    <meta property="og:locale" content="id_ID"/>
    <meta property="og:locale:alternate" content="en_US"/>
    <meta property="og:locale:alternate" content="en_GB"/>
    <meta property="article:author" content="https://www.instagram.com/raffidev/"/>
    <meta property="article:publisher" content="https://www.instagram.com/raffidev/"/>
    <meta content="summary" name="twitter:card"/>
    <meta content="summary_large_image" name="twitter:card"/>
    <meta content="Raffi &dash; Portfolio" name="twitter:title"/>
    <meta content="#03a9f4" name="theme-color"/>
    <meta content="#03a9f4" name="msapplication-navbutton-color"/>
    <meta content="#03a9f4" name="apple-mobile-web-app-status-bar-style"/>
    <link href="//ogp.me" rel="dns-prefetch"/><link href="//unpkg.com" rel="dns-prefetch"/><link href="//cdn.jsdelivr.net" rel="dns-prefetch"/><link href="//fonts.gstatic.com" rel="dns-prefetch"/><link href="//code.jquery.com" rel="dns-prefetch"/><link href="//www.w3.org" rel="dns-prefetch"/><link href="//orzdesign.site" rel="dns-prefetch"/><link href="//profile.orzdesign.site" rel="dns-prefetch"/><link href="//krsonline.orzdesign.site" rel="dns-prefetch"/><link href="//kuesioner.orzdesign.site" rel="dns-prefetch"/><link href="//inventory.orzdesign.site" rel="dns-prefetch"/><link href="//pluneng.site" rel="dns-prefetch"/><link href="//cctmu.site" rel="dns-prefetch"/><link href="//goo.gl" rel="dns-prefetch"/><link href="//wa.me" rel="dns-prefetch"/><link href="//www.instagram.com" rel="dns-prefetch"/><link href="//www.youtube.com" rel="dns-prefetch"/><link href="//www.facebook.com" rel="dns-prefetch"/><link href="//discord.com" rel="dns-prefetch"/><link href="//github.com" rel="dns-prefetch"/><link href="//www.google.com" rel="dns-prefetch"/><link href="//mail.google.com" rel="dns-prefetch"/><link href="//www.blogger.com" rel="dns-prefetch"/>
</head>
<body>
    <!-- Preloader -->
    <div id="loader">
      <div class="preloader-background"></div>
      <div class="preloader">
        <img class="center-image" src="{{ asset('img/Logo Baru.png') }}" draggable="false" />
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
    <!-- Preloader END -->

    <!-- Header Area -->
    <section id="home">
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><strong>RAFFIATHALLAH</strong></div>
        <ul class="links">
            <li><a href="/#home">HOME</a></li>
            <li><a href="/#about">ABOUT</a></li>
            <li><a href="/#experience">EXPERIENCE</a></li>
            <li><a href="/#brand">SKILLS</a></li>
            <li><a href="profile/">PROFILE</a></li>
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
    <!-- Header Area END -->

    <!-- Cookies Area -->
    <div class="wrapper">
      <div class="data">
        <p>This website uses cookies to enhance your browsing experience. <a href="#"> Read more...</a></p>
      </div>

      <div class="buttons">
        <button class="button" id="declineBtn">Disallow cookies</button>
        <button class="button" id="acceptBtn">Allow cookies</button>
      </div>
    </div>
    <!-- Cookies Area END -->

    <!-- Hero Area -->
    <h1>SOON</h1>
    <!-- Hero Area END -->


    <!-- JAVA SCRIPT -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ url('js/jquery.3.4.1.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/particles.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
</body>
</html>