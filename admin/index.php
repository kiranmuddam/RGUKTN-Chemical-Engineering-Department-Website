<?php
session_start();
	if(isset($_SESSION['chem_user'])){
		if($_SESSION['chem_user']=="n151278" ||  $_SESSION['role']=='admin'){ ?>
			<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta content="Admin Dashboard" name="description" />
        <meta content="G.S.N.R" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

       

        <!--Morris Chart CSS -->
       
<?php include 'include.php' ?>
    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

           
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
<?php
error_reporting(0);
include '../db.php';
$w=mysqli_query($con,"SELECT * FROM users");
$users=mysqli_num_rows($w);
$g=mysqli_query($con,"SELECT * FROM notices");
$notice=mysqli_num_rows($g);
$l=mysqli_query($con,"SELECT * FROM feedbacks");
$feedbacks=mysqli_num_rows($l);
$h=mysqli_query($con,"SELECT * FROM upload");
$upload=mysqli_num_rows($h);
?>
                            <div class="row">
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-white">
                                        <span class="mini-stat-icon bg-light"><i class="mdi mdi-users text-danger"></i></span>
                                        <div class="mini-stat-info text-right text-muted">
                                            <span class="counter text-danger"><?php echo $users ?></span>
                                            Total Users
                                        </div>
                                        <p class="mb-0 m-t-20 text-muted">Total Users <span class="pull-right"><?php echo $users ?></span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-success">
                                        <span class="mini-stat-icon light"><i class="mdi mdi-currency-usd text-success"></i></span>
                                        <div class="mini-stat-info text-right text-white">
                                            <span class="counter text-white"><?php echo $notice ?></span>
                                            Total notifications
                                        </div>
                                        <p class="mb-0 m-t-20 text-light"> Total notifications <span class="pull-right"><?php echo $notice ?></span></p>
                                    </div>
                                </div>
                               
                                       
                                 
                                <div class="col-md-6 col-xl-3">
                                    <div class="mini-stat clearfix bg-info">
                                        <span class="mini-stat-icon light"><i class="mdi mdi-currency-btc text-info"></i></span>
                                        <div class="mini-stat-info text-right text-light">
                                            <span class="counter text-white"><?php echo $upload ?></span>
                                            Total Uploads
                                        </div>
                                        <p class="mb-0 m-t-20 text-light">Total uploads <span class="pull-right"><?php echo $upload ?></span></p>
                                    </div>
                                </div>
                            </div>

                            
                           


                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2018 Chemical Portal <i class="mdi mdi-heart text-danger"></i> by Webteam.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!--Morris Chart-->
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

        <script src="assets/pages/dashborad.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
	
	<?php
}
else{
        header('Location:../index.php');
}
}
else{
        header('Location:../index.php');
}
?>


