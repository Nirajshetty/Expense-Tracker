<?php
session_start();
include("connect.php");

$userprofile=$_SESSION['user_name'];
$query="SELECT amount FROM updating where mail='$userprofile'";
$data=mysqli_query($success,$query);
$result=$success->query($query) or die($success->error) ;//this is to fetch all the data of that particular user
$sum=0;
while($row=$result->fetch_assoc())
{
    $sum=$sum+$row['amount'];
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
    
    <!-- service_area  -->
    <div class="service_area">
        <?php
        if($userprofile){
            $query= "SELECT * FROM updating WHERE mail='$userprofile'";
          $data=mysqli_query($success,$query);
       
         
          $result=mysqli_fetch_assoc($data); //this is to fetch all the data of that particular user
          if(!$result)
          {
            echo '<script type="text/javascript"> 
            alert("Your expense list is empty..Do update !"); 
            window.location.href = "index.php";
        </script>; ' ;
           
          }
          else{
          $d=$result['dates'];
          }
          }
            else
            {
              header('location:signin.php');
            }
        ?>
        <?php if($result){?>
        <h4 style="color:black; margin-left:230px; margin-bottom:-50px;"> 
        <br> Start Date : <?php }?>
                                <?php
                                if($result)
                                {
                                echo $d;
                                }
                                else{
                                    echo " ";
                                }
                                ?>
                                <?php if($result){?>
                              <h5 style="color:gray; margin-left:320px; margin-bottom:-50px;"> (YYYY-MM-DD)</h5>
                              
                                </h4>
                                <?php }?>
                              
                               
        <div class="container">
   
            <div class="row justify-content-center">
            
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"
                            style="font-size: 50px; color:#57b846; margin-top: -70px;" id="services"> Progress</span>
                        <br>
                        <br>
                       
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s"
                            data-wow-delay=".4s">
                            
                                <div class="icon">
                                    <img src="img/svg_icon/target.svg" alt="" height="50px" width="50px">
                                </div>
                                <h3>Your Target savings</h3>
                                <?php
                               if($userprofile){
                                $query= "SELECT * FROM setting WHERE mail='$userprofile ' ORDER BY id DESC
                                LIMIT 1";
                              $data=mysqli_query($success,$query);
                              $result=mysqli_fetch_assoc($data); //this is to fetch all the data of that particular user
                              $nam=$result['targetsavings'];
                               
                              }
                                else
                                {
                                  header('location:signin.php');
                                }
                                ?>
                                <h3><strong>Rs. 
                                <?php
                                echo $nam;
                                ?>
                                </strong>
                                </h3>
                                <br>
                         
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-4">
                        <div class="single_service text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            
                                <div class="icon">
                                    <img src="img/svg_icon/money.svg" alt="" height="50px" width="50px">
                                </div>
                                <h3>Your current savings</h3>
                                <?php
                                if($userprofile){
                                $qu= "SELECT * FROM setting WHERE mail='$userprofile' ORDER BY id DESC
                                LIMIT 1";
                              $data=mysqli_query($success,$qu);
                              $result=mysqli_fetch_assoc($data); //this is to fetch all the data of that particular user
                              $sall=$result['salary'];
                               
                              }
                                else
                                {
                                  header('location:login.php');
                                }
                                ?>
                                <h3><strong> 
                                <?php
                                $diff=$sall-$sum;
                                if($diff>0)
                                {
                                  echo "Rs.".$diff;
                                }
                                else{
                                    echo "No savings :(";
                                }
                                ?>
                                </strong>
                                </h3>
                                <br>
                           
                        </div>

                    </div>


                    <div class="col-xl-4 col-md-4" style="height:100px;">
                        <div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s"
                            data-wow-delay=".4s" style="height:300px;">
                            
                                <div class="icon">
                                    <img src="img/svg_icon/question.svg" alt="" height="50px" width="50px">
                                </div>
                                <h3>Today's progress</h3>
                                <?php
                                if($nam<=$diff && $diff>=0)
                                {
                                    echo "<h3>" ?> <strong style="color: green;"> <?php echo"Yaay!! You have saved Rs. ".$diff."</strong></h3>"; 
                                    
                                }
                                else{
                                    echo "<h3>" ?> <strong style="color: red;"> <?php echo"Oops!! your savings didn't meet your target</strong></h3>";
                                }
                         ?>
                        
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!--/ service_area  -->

        
        <div class="container-login100-form-btn" style="margin-left: -450px;  margin-top:-50px;">
                                                <form action="reset.php" method="POST" enctype="multipart/form-data">
                                                    <button name="reset" style="margin-left: 680px;"
                                                        class="login100-form-btn">
                                                      RESET after end of each start month
                                                    </button>
                                                </form>
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