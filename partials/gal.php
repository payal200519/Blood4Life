<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOOD4life</title>
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="about.css" />

    <script
      src="https://kit.fontawesome.com/9bbc1cd7b1.js"
      crossorigin="anonymous"
    ></script>
     <!-- Template Main CSS File -->
 <!-- <link href="partials/about.css" rel="stylesheet">-->
  
 
    <!-- slider start -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- slider endd -->

    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

  <body onload="loadFunc()">
    <!-- loader -->
    <!--<section id="load">
      <div class="one"></div>
    </section>
    <!-- loader end -->

    <!-- back to top-start -->

    <div class="bckbtn">
      <a href="#"><i class="fa-solid fa-turn-up"></i></a>
    </div>

    <!-- back to top-end -->
    <style media="screen">
    .alt-color {
      background-color: transparent !important;
    }
    @media only screen and (min-width: 992px) {
      nav#navbar.navbar.acolor a.acl,nav#navbar.navbar.acolor .bi.mobile-nav-toggle.bi-list{
        color:white !important;
      }
    }
    nav#navbar.navbar.acolor i.bi.bi-list.mobile-nav-toggle{
      color:white !important;
    }


    nav#navbar.navbar.acolor a.acl.active{
      font-weight: bolder !important;
    }
    nav#navbar.navbar.acolor a.acl:hover{
      color:red !important;
    }
    a#acl.loga{
      color:white !important;
      font-weight: bold !important;
    }
  </style>
</head>
<body>
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center navbars">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a class="loga" href="index.php">BLOOD4LIFE</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="http://localhost/Blood4Life/" class="active" class="acl" class="nsd" id="home">HOME</a></li>

          <li class="dropdown"><a href="" class="acl"><span>ABOUT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.php" >About</a></li>
              <ul>
                  <li><a href="partials/j1.php">Blood journey</a></li>
                  <li><a href="partials/location.php">Location</a></li>
                </ul>
              <li><a href="fq.php" >FAQ</a></li>
              <li><a href="camp.php" >Blood Donation Camp</a></li>
              <li><a href="j1.php" >Blood journey</a></li> 
                
              </li>
            </ul>
          </li>
          <li><a href="donor.php" class="acl">DONOR</a></li>
          <li><a href="gal.php" class="acl">GALLERY</a></li>
          <li><a href="search.php" class="acl">SEARCH</a></li>

          <li><a href="contact.php" class="acl">CONTACT</a></li>
          <li><a href="login.php" class="getstarted" class="acl"><span class="bi bi-person-fill" data-icon="" data-inline="false"></span>&nbspLOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #fff, #f9f9f9);
            color: #333;
            overflow-x: hidden;
        }

        .header {
            text-align: center;
            padding: 60px 20px;
            background: url('g1.jpg');
            filter: brightness(0.5);
             color: black;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }
        h1{
            color: red;
        }
        .header:hover{
            color: white;
        }

        .header h3 {
            margin: 0;
            font-size: 4.5em;
            letter-spacing: 3px;
            font-weight: bold;
            animation: fadeInDown 1s ease;
        }

        .header p {
            font-size: 1.5em;
            margin-top: 15px;
            animation: fadeInUp 1s ease;
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .gallery-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 50px;
            background: linear-gradient(to bottom, #f9f9f9, #eaeaea);
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
            background: #fff;
        }

        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.3);
        }

        .gallery-item:hover img {
            transform: scale(1.2) rotate(3deg);
        }

        .caption {
            position: absolute;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.3));
            color: white;
            width: 100%;
            padding: 20px;
            text-align: center;
            font-size: 1.3em;
            opacity: 0;
            transform: translateY(100%);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .gallery-item:hover .caption {
            opacity: 1;
            transform: translateY(0);
        }

        .footer {
            text-align: center;
            padding: 30px;
            background-color: #c0392b;
            color: white;
            font-size: 1.2em;
            letter-spacing: 1px;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
        }

        .footer a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: #f1c40f;
        }

        .header:before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('header-bg.jpg') no-repeat center center/cover;
            z-index: -1;
            filter: brightness(0.7);
        }

        .gallery-container::after {
            content: '';
            display: block;
            height: 100px;
            background: linear-gradient(to top, #eaeaea, transparent);
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .gallery-item {
            animation: pulse 5s infinite;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Blood Bank Gallery</h1>
    <p>Celebrating the spirit of giving and saving lives</p>
</div>

<div class="gallery-container">
    <div class="gallery-item">
        <img src="img/vol.jpg" alt="Blood Donation Camp">
        <div class="caption">Blood Donation Camp</div>
    </div>
    <div class="gallery-item">
        <img src="img/v2.webp" alt="Volunteers">
        <div class="caption">Our Amazing Volunteers</div>
    </div>
    <div class="gallery-item">
        <img src="img/c1.jpg" alt="Community Drive">
        <div class="caption">Community Blood Drive</div>
    </div>
    <div class="gallery-item">
        <img src="img/s2.webp" alt="Life Saved">
        <div class="caption">Celebrating Lives Saved</div>
    </div>
    <div class="gallery-item">
        <img src="img/saveblood.jpg" alt="Donor Appreciation">
        <div class="caption">Donor Appreciation Event</div>
    </div>
    <div class="gallery-item">
        <img src="img/h7.jpg" alt="Health Checkup">
        <div class="caption">Health Checkup Booth</div>
    </div>
    <div class="gallery-item">
        <img src="img/i.jpg" alt="Blood Bank Staff">
        <div class="caption">Our Dedicated Staff</div>
    </div>
    <div class="gallery-item">
        <img src="img/g3.jpg" alt="Awareness Campaign">
        <div class="caption">Awareness Campaign</div>
    </div>
    <div class="gallery-item">
        <img src="img/do.jpg" alt="Community Support">
        <div class="caption">Community Support</div>
    </div>
    <div class="gallery-item">
        <img src="img/s1.jpg" alt="Blood Drive Success">
        <div class="caption">Blood Drive Success</div>
    </div>
    <div class="gallery-item">
        <img src="img/suc.jpg" alt="Donor Celebration">
        <div class="caption">Celebrating Donors</div>
    </div>
    <div class="gallery-item">
        <img src="img/g1.jpg" alt="Event Highlights">
        <div class="caption">Event Highlights</div>
    </div>
    <div class="gallery-item">
        <img src="img/d3.webp" alt="Blood Donation Success">
        <div class="caption">Successful Blood Donation Drive</div>
    </div>
    <div class="gallery-item">
        <img src="img/men.jpg" alt="Volunteer Team">
        <div class="caption">Dedicated Volunteer Team</div>
    </div>
</div>
<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6">
          <div class="footer-info">
            <h3>BLOOD4Life</h3>
            <p>
              BLOOD4Life <br>
              <br>
              <strong>Phone:</strong> +91 9643757852<br>
              <strong>Email:</strong> info@blood4life.com<br>
            </p>
            
          </div>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Pages</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Donor</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Paitent</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Hospital</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Events</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="partials/locations.php">Locate Us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">FAQs</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="partials\rating.php">Rating</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Help Center</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter to receive the latest news and updates</p>
          <form action="" method="post">
            <input type="email" name="email" placeholder="Enter email address"/><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy; 2021 <strong><span>BLOOD4life</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      It's not how much we give, but how much love we put into giving.
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

<script src="assets/js/main.js"></script>

</body>

</html>
