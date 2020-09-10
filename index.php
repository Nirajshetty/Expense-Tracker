
<?php
session_start();
error_reporting(0);
include("connect.php");
$userprofile=$_SESSION['user_name'];
if($userprofile){
  $query= "SELECT * FROM Credentials WHERE email='$userprofile'";
$data=mysqli_query($success,$query);
$result=mysqli_fetch_assoc($data); //this is to fetch all the data of that particular user
$nam=$result['name'];
}
else
{
  header('location:login.php');
}
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <nav class=”navbar fixed-top navbar-expand-md navbar-light bg-light”>
        <header class="header">
            <div class="header-area ">
                <div id="sticky-header" class="main-header-area">
                    <div class="container-fluid p-0">
                        <div class="row align-items-center no-gutters">
                            <div class="col-xl-2 col-lg-2 ">
                                <div class="logo-img">
                                    <br>
                                    <a href="index.php">
                                        <img src="img/etg.gif" alt="" height="50px" width="180px"
                                            style="margin-left: -150px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <div class="main-menu  d-none d-lg-block text-center">
                                    <nav>
                                        <ul id="navigation">
                                            <br>
                                            <li class="nav-item">
                                                <div class="container-login100-form-btn" style="margin-left: 220px;">
                                                <form action="logout.php" method="POST" enctype="multipart/form-data">
                                                    <button name="logout" style="margin-left: 680px;"
                                                        class="login100-form-btn">
                                                        Logout
                                                    </button>
                                                </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </nav>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area" style="background-image: url(images/et.jpg);">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay"
            style="background-image: url(images/et.jpg);">
            <div class="container">
                <div class="row align-items-center justify-content-start">
                    <div class="col-lg-10 col-md-10">
                        <div class="slider_text">
                            <h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
                                style="color: white;">
                                TRACK YOUR EXPENSES TO SAVE !!
                            </h3>
                            <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
                                style="color: #57b846; margin-left: 5px;">
                                Saving Rs.40 per day for 40 years could yield you 1 million.
                            </h2>
                            <br>
                            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
                                style="color: white; margin-left: 5px;">
                                So buck up, Start saving !
                            </p>
                            <br>
                            <a name="getstarted" href="#services" style="margin-left: 5px; width: 50px; "
                            class="login100-form-btn ">
                            Get Started
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- slider_area_end -->

    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                            style="font-size: 50px; color:#57b846; margin-top: -70px;" id="services"> Services</span>
                        <br>
                        <br>
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                            style="font-size: 20px; color:#6cd35a; margin-top: -70px;">It takes only 3 simple steps to
                            track your expenses !</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s"
                            data-wow-delay=".4s">
                            <a href="set.php">
                                <div class="icon">
                                    <img src="img/svg_icon/gear.svg" alt="" height="50px" width="50px">
                                </div>
                                <h3>SET</h3>
                                <p>Set your Monthly salary and the target amount you want to save at the end of each
                                    month</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <div class="single_service text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            <a href="update.php">
                                <div class="icon">
                                    <img src="img/svg_icon/event.svg" alt="" height="50px" width="50px">
                                </div>
                                <h3>UPDATE</h3>
                                <p>Update your daily expenses and its details regularly </p>
                                <br>
                            </a>
                        </div>

                    </div>


                    <div class="col-xl-4 col-md-4">
                        <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s"
                            data-wow-delay=".4s">
                            <a href="progress.php">
                                <div class="icon">
                                    <img src="img/svg_icon/chart.svg" alt="" height="50px" width="50px">
                                </div>
                                <h3>PROGRESS</h3>
                                <p>Check monthly progress and your savings for each month</p>
                                <br>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!--/ service_area  -->

        <div class="about_area" sty>
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-5 offset-lg-1">
                        <div class="about_info">
                            <div class="section_title white_text">

                                <p class="mid_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
                                    “It’s not how much you make each month that matters — it’s how much you save along
                                    with the flexibility and time outside work that you have.”
                                </p>
                                <p class="last_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s"> ― Francis
                                    Shenstone.</p>
                                <button name="logout" class="login100-form-btn">
                                    About Us
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>


<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/ajax-form.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/scrollIt.js"></script>
<script src="js/jquery.scrollUp.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/gijgo.min.js"></script>

<!--contact js-->
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/mail-script.js"></script>

<script src="js/main.js"></script>