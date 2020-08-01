<?php include("variables.php"); ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
        <title><?php echo $title; ?></title>

        <!--ADDING THE REQUIRED STYLE SHEETS-->

        <link type="text/css" href="assets/css/bootstrap.css" rel="stylesheet">  <!--BOOTSTRAP 3 CSS FILE-->
        <link type="text/css" href="assets/css/font-awesome.css" rel="stylesheet"> <!--Font Awesome CSS FILE-->
        <link type="text/css" href="assets/css/custom.css" rel="stylesheet">  <!--CUSTOM CSS FILE-->
        <link type="text/css" href="assets/css/animate.css" rel="stylesheet">  <!--animate.css FILE-->



        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->



    </head>
    <body>

        <section>
            <div class="container">
                <div class="row row1">
                    <div class="col-md-12">
                        <h3 class="center capital f1 wow fadeInLeft" data-wow-duration="2s">Something went Wrong!</h3>
                        <h1 id="error" class="center wow fadeInRight" data-wow-duration="2s">0</h1>
                        <p class="center wow bounceIn" data-wow-delay="2s">Page not Found!</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div id="cflask-holder" class="wow fadeIn" data-wow-delay="2800ms">
                            <span class="wow tada " data-wow-delay="3000ms"><i class="fa fa-flask fa-5x flask wow flip" data-wow-delay="3300ms"></i> 
                                <i id="b1" class="bubble"></i>
                                <i id="b2" class="bubble"></i>
                                <i id="b3" class="bubble"></i>

                            </span>
                        </div>
                    </div>
                </div>


                <div class="row"> <!--Search Form Start-->
                    <div class="col-md-12">     
                        <div class="col-md-6 col-md-offset-3 search-form wow fadeInUp" data-wow-delay="4000ms">
                            <form action="#" method="get">
                                <input type="text" placeholder="Search" class="col-md-9 col-xs-12"/>
                                <input type="submit" value="Search" class="col-md-3 col-xs-12"/>
                            </form>
                        </div>
                    </div>
                </div> <!--Search Form End-->   


                <div class="row"> <!--Links Start-->
                    <div class="col-md-12">
                        <div class="links-wrapper col-md-6 col-md-offset-3">
                            <ul class="links col-md-9">
                                <li class="wow fadeInRight" data-wow-delay="4400ms"><a href="index.php"><i class="fa fa-home fa-2x"></i></a></li>
                                <li class="wow fadeInRight" data-wow-delay="4300ms"><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                                <li class="wow fadeInRight" data-wow-delay="4200ms"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-delay="4200ms"><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-delay="4300ms"><a href="#"><i class="fa fa-pinterest fa-2x"></i></a></li>
                                <li class="wow fadeInLeft" data-wow-delay="4400ms"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>
                            </ul>

                        </div>
                    </div>

                </div> <!-- Links End--> 
            </div>
        </section>

        <!--ADDING THE REQUIRED SCRIPT FILES-->
        <script type="text/javascript" src="assets/js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="assets/js/countUp.js"></script>
        <script type="text/javascript" src="assets/js/wow.js"></script>

        <!--Initiating the CountUp Script-->
        <script type="text/javascript">
            "use strict";
            var count = new countUp("error", 0, 404, 0, 3);

            window.onload = function() {
                // fire animation
                count.start();
            }
        </script>

        <!--Initiating the Wow Script-->
        <script>  
            "use strict";
            var wow = new WOW(
            {
                animateClass: 'animated',
                offset:       100
            }
        );
            wow.init();
        </script>


    </body>
</html>
