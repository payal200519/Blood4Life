<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BLOOD4life</title>
    
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="contact.css" />

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
<?php
               $servername="localhost";
                $username="root";
              $password="";
             $database="project";

     $conn = mysqli_connect($servername,$username,$password,$database);
     
     if($_SERVER['REQUEST_METHOD']=='POST')
     {
        
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $Message=$_POST['Message'];
     }
     if(isset($_POST['insert']))
     {
      $sql="INSERT INTO `con1` (`name`, `email`, `subject`, `Message`) VALUES ('$name', '$email', '$subject', '$Message')";
        $result = mysqli_query($conn,$sql);
      }   
     ?>
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

          <li class="dropdown"><a href="about.php" class="acl"><span>ABOUT</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
              <li><a href="about.php" >About</a></li>
              <ul>
                  <li><a href="j1.php">Blood journey</a></li>
                  <li><a href="location.php">Location</a></li>
                </ul>
              <li><a href="fq.php" >FAQ</a></li>
              <li><a href="camp.php" >Blood Donation Camp</a></li>
              <li><a href="j1.php" >Blood journey</a></li> 
              <li><a href="fee1.php" >Feedback</a></li> 

              </li>
            </ul>
          </li>
          <li><a href="donor.php" class="acl">DONOR</a></li>
          <li><a href="hospital.php" class="acl">HOSPITAL</a></li>
          <li><a href="gal.php" class="acl">GALLERY</a></li>
          <li><a href="search.php" class="acl">SEARCH</a></li>

          <li><a href="contact.php" class="acl">CONTACT</a></li>
          <li><a href="login.php" class="getstarted" class="acl"><span class="bi bi-person-fill" data-icon="" data-inline="false"></span>&nbspLOGIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
    
    
    <!-- contact section  -->

    <section class="contact">
      <!-- landing-section-start -->
      <div
        class="hero"
        data-aos="zoom-in"
        data-aos-delay="50"
        data-aos-duration="1500"
      >
        <!-- <h1 class="text-center text-uppercase">Contact Us</h1> -->
      </div>
      <!-- landing-section-end -->

      <div class="container mt-5">
        <div
          class="section-title text-center"
          data-aos="zoom-in"
          data-aos-delay="50"
          data-aos-duration="1500"
        >
          <h1 class="heading d-flex justify-content-center">Contact</h1>
          <p class="mt-5">
            If you have second thoughts or new reasons to believe that the blood
            you donated will not be completely safe for transfusion to a
            patient, please feel free to <br />
            <span>call us on +91 90676 65653</span>
          </p>
        </div>
      </div>

      <div
        class="mt-5"
        data-aos="zoom-in"
        data-aos-delay="50"
        data-aos-duration="1500"
      >
        <iframe
          style="border: 0; width: 100%; height: 400px"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.52982230402!2d72.82229625000001!3d21.15920015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1708063608427!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          scrolling="no"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
        ></iframe>
      </div>

      <div class="container">
        <div class="row mt-5">
          <div
            class="col-lg-6"
            data-aos="fade-up"
            data-aos-delay="50"
            data-aos-duration="1500"
          >
            <div class="row">
              <div class="col-md-12">
                <div class="boxx">
                  <i class="fa-solid fa-location-dot"></i>
                  <h3>Our Address</h3>
                  <p>Surat , Gujarat</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="boxx mt-4">
                  <i class="fa-regular fa-envelope"></i>
                  <h3>Email Us</h3>
                  <p>blood4life@gmail.com<br /></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="boxx mt-4">
                  <i class="fa-solid fa-phone-volume"></i>
                  <h3>Call Us</h3>
                  <p>+91 90676 65653</p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="col-lg-6 mt-3 mt-lg-0"
            data-aos="fade-up"
            data-aos-delay="50"
            data-aos-duration="1500"
          >
            <form method="POST"
              class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Your Name"
                    required=""
                  />
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="Your Email"
                    required=""
                  />
                </div>
              </div>
              <div class="mt-3">
                <input
                  type="text"
                  name="subject"
                  class="form-control"
                  placeholder="Subject"
                  required=""
                />
              </div>
              <div class="form-group mt-3">
                <textarea
                  class="form-control"
                  rows="6"
                  name="Message"
                  placeholder="Message"
                  required=""
                ></textarea>
              </div>
              <div class="text-center rr mt-3">
                <button class="rrr" type="submit" name="insert" value="insert">Send Message</button>
              </div>
              
              
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- contact section end  -->

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

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <!-- animaion -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script src="contact.js"></script>
  </body>
</html>
