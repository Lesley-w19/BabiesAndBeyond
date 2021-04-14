
<?php
 require "includes/functions.php";

 $photo_portfolio = $photo->getPhoto();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Babies and Beyond - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet"  href="assets/css/style.css" >
   <link rel="stylesheet" href="assets/css/custom.css">
 
  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">babiesNbeyond@gmail.com</a>
        <i class="icofont-phone"></i> +254 786 778 717
      </div>
      <div class="social-links float-right">
        <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="skype"><i class="icofont-skype"></i></a>
        <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="#"><span>Babies and Beyond</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>    
          <li><a href="#gallery">Our Portfolio</a></li>
           <li><a href="#contact">Contact Us</a></li>
          <li class="drop-down"><a href="#">Log In</a>
            <ul>
              <li><a href="login.php">Admin</a></li>
              <!-- <li><a href="#">Sign Up</a></li>
              <li><hr class="divider"></li>
              <li><a href="#">Log Out</a></li> -->
            </ul>
          </li>
       
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1-->
          <div class="carousel-item active" style="background-image: url('assets/img/slide/SLIDE1.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Babies & Beyond</h2>
                <h3 class="animate__animated animate__fadeInDown" id="homeTitle">
                 Why Babies and Beyond
                </h3>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus minus itaque adipisci perspiciatis, quod vel debitis, architecto ducimus cupiditate quos aperiam aliquid sunt nemo praesentium!.</p>
                <p class="animate__animated animate__fadeInUp" style="color:#faa51a">Designed like home to feel like home</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">About Us</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url('assets/img/slide/SLIDE2.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Kindergaten and Pre-School</h2>
                <h3 class="animate__animated animate__fadeInDown" id="homeTitle">
                An Epitome Of Excellence
                 </h3>
                <p class="animate__animated animate__fadeInUp">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde sequi molestiae voluptatibus assumenda inventore sunt at, explicabo delectus omnis qui voluptate mollitia cupiditate, quis quisquam?</p>
                <p class="animate__animated animate__fadeInUp" style="color:#faa51a">Making A difference a child at a time</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">About Us</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  
  </section>
 <!-- End Hero -->

  
    <!-- Start of Notices -->
    <div id="notices" data-aos="fade-up" data-aos-delay="100">
  <div class="notice-1 col-md-3">
  <h3>Check New Events</h3>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque vero optio sint quidem ipsam! Quaerat sequi sed omnis provident accusamus.</p>
  <a href="#about" class="btn-get-started btnNotices ">About Us</a>
  </div>

  <div  class="notice-2 col-md-3" >
  <h3>Opening Hours</h3>
  <ul>
              <li>Mon - Fri <span>6:30AM - 6:30PM</span></li>
              <li><hr class="divider"></li>
              <li>Saturday <span>Closed</span></li>
              <li><hr class="divider"></li>
              <li>Sunday <span>Closed</span></li>
            </ul>
  </div>

  <div  class="notice-3 col-md-6" >
  <h3>Current Notices</h3>
  <p>School is closed. The Babies and Beyond holiday program is in progress! <br><span>(Community based learning program)</span> <br>As From: <span> 6th - 23rd April</span></p>
  <p>Charges: <br>  3500/- PER WEEK <span>With transport</span> <br> 3000/- PER WEEK<span>without transport</span></p>
  </div>

  </div>
  </section>
  <!-- End Notices -->
 

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=RUSCz41aDug" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>
       
         
          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Us</h2>
              <p>The school is a full service,and self contained kindergatern and pre-school with dedicated teachers with great ideas to equip their students not only in education but also with lifeskills.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-food-tag"></i></div>
              <h4 class="title"><a href="">Kindergatern</a></h4>
              <p class="description">This is also known as Daycare.It consists of children between ages of 2years and 4years.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-book"></i></div>
              <h4 class="title"><a href="">Pre-School</a></h4>
              <p class="description">The pre-school consists of children above 4years. It is also divided into PP1, PP2 and PP3. This enables the children learn according to their different levels of qualification.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-spa"></i></div>
              <h4 class="title"><a href="">Holiday program</a></h4>
              <p class="description">We choose to also engage our students when school closes. This is a great opportunity to learn, socialize, acquire skills and have fun.</p>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
             
              <div class="icon"> <i class="fa fa-video-camera" aria-hidden="true"></i></div>
              <h4 class="title"><a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/videos"> Videos</a></h4>
              <p class="description">Get to know more about us by watching our videos.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists" id="accomodation">
        
      <div class="container">
        <h3 data-aos="fade-up">Who We ARE?</h3>
        <div class="row no-gutters" id="rooms">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
            <span>01</span>
            <h4>Experienced</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum!</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>02</span>
            <h4>Professionals</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum!</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>03</span>
            <h4> Sure Guarantee</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum!</p>
          </div>
        </div>
 <h3 data-aos="fade-up">What we offer?</h3>
        <div class="row no-gutters" id="rooms">
       
<div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
  <span>01</span>
  <h4>Social Skills</h4>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum!</p>
 
</div>

<div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
  <span>02</span>
  <h4>Quality</h4>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum!</p>
</div>

<div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
  <span>03</span>
  <h4> Life Skills</h4>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, earum!</p>
</div>

</div>

      </div>
    </section><!-- End About Lists Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">
        
        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">50</span>
              <p>Students</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">10</span>
              <p>Class Rooms</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">24</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">15</span>
              <p>Our Teachers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" id="services">

        <div class="section-title">
          <h2> Our Services</h2>
        </div>
           <h3 data-aos="fade-up"> School Sessions</h3>
        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-book"></i></div>
            <h4 class="title"><a href="">Lessons</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ipsam nulla itaque assumenda reprehenderit quaerat repellendus ut dicta, ducimus aspernatur..</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-lunch"></i></div>
            <h4 class="title"><a href="">Meals</a></h4>
            <p class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ipsam nulla itaque assumenda reprehenderit quaerat repellendus ut dicta, ducimus aspernatur.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            
             <div class="icon"><i class="icofont-van"></i></div>
             <h4 class="title"><a href="">Transport </a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias ipsam nulla itaque assumenda reprehenderit quaerat repellendus ut dicta, ducimus aspernatur.</p>
          </div>
         
        </div>
 <h3 data-aos="fade-up">Holiday Program</h3>
        <div class="row">
        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
           <div class="icon"><i class="icofont-song-notes"></i></div>
            <h4 class="title"><a href="">Music & Dance</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, dolorum quo unde aperiam nulla quia architecto. Fugiat rem debitis rerum.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-pie"></i></div>
            <h4 class="title"><a href="">Cookery & Baking</a></h4>
            <p class="description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat quae earum reprehenderit optio eaque atque enim officiis laboriosam nobis iure!</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-read-book"></i></div>
            <h4 class="title"><a href="">Book Club</a></h4>
            <p class="description"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus illo harum placeat, mollitia voluptatum rerum nemo fuga pariatur voluptatem numquam.</p>
          </div>
         
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="gallery" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Our Portfolio</h2>
          <p style="width:70%; margin: 2px auto;">Ease of access to education, holiday program, transport and so much more. All in one awesome package. Where your child can be educated while discovering themselves.</p>
        </div>

        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-presidential">Presidential</li>
              <li data-filter=".filter-premier">Premier</li>
              <li data-filter=".filter-deluxe">Deluxe</li>
              <li data-filter=".filter-double">Double</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div> -->

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
           <?php  foreach($photo_portfolio as $item){?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-presidential" data-aos="fade-up">
            <div class="portfolio-wrap">
              <img src="<?php echo $item['image_img']; ?>" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><?php echo $item['image_name']; ?></h4>
               
                <div class="portfolio-links">
                  <a href="<?php echo $item['image_img']; ?>" data-gall="portfolioGallery" class="venobox" title="<?php echo $item['image_name']; ?>"><i class="icofont-eye"></i></a>
                  <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/photos/?ref=page_internal" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>
              <?php } ?>
      
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->



    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

        <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3 style="color: #e92264;">Email Us</h3>
              <p>babiesNbeyond@gmail.com<br>babiesandbeyond@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3 style="color: #e92264;">Our Address</h3>
              <p>Kahawa Sukari, Taveta Rd <br> Along Thika SuperHighway</p>
            </div>
          </div>

         

          <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3 style="color: #e92264;">Call Us</h3>
              <p>+254 786 778 717<br>+254 722 738 980</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" name="submitMessage">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Babies and Beyond</h3>
            <p>
             Kahawa Sukari, Taveta Rd <br>
             Along Thika SuperHighway <br><br>
              <strong>Phone:</strong> +254 786 778 717<br>
              <strong>Email:</strong> babiesNbeyond@gmail.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="https://www.facebook.com/Babies-and-Beyond-1529615943984527/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
           <h4>Go To <i class="icofont-arrow-right"></i></h4>
           
            
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Our Portfolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contact Us</a></li>
            </ul>
          </div>

         

          <div class="col-lg-6 col-md-6 footer-newsletter">
            <h4>Special Requests</h4>
            <p>No request is too great and no detail too small. We are also here to assist you before your admission.</p>
            <form action="" method="post">
              <input type="email" name="email">
              <input type="submit" value="Subscribe" onclick="onClick()">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>BabiesNBeyond</span></strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>