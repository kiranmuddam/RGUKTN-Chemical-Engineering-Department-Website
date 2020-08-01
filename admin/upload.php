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
        <title>Chemical Engineering</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Dropzone css -->
        <link href="assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <!--<a href="index.html" class="logo">Admiry</a>-->
                        <a href="index.php"><h4 style="color:#000">Admin Panel</h4></a>
                    </div>
                </div>

               <div class="sidebar-inner slimscrollleft">

                    <div class="user-details">
                        <div class="text-center">
                            <img src="assets/images/default.png" alt="" class="rounded-circle">
                        </div>
                        <div class="user-info">
                            <img src="user.png"/>
                            <h4 class="font-16">Hello Admin!</h4>
                           <a href="../index.php"><span class="text-muted user-status"><i class="fa fa-home"></i>&nbsp;&nbsp;Chemical Home</span></a>
                        </div>
                    </div>

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="index.php" class="waves-effect">
                                    <i class="ti-home"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="notification.php" class="waves-effect">
                                    <i class="ti-pencil-alt"></i>
                                    <span> Send Notifiation </span>
                                </a>
                            </li>
                            
                              <li>
                                <a href="userdata.php" class="waves-effect">
                                    <i class="ti-user"></i>
                                    <span> Userdata </span>
                                </a>
                            </li>
                            <li>
                            <a href="upload.php" class="waves-effect">
                                    <i class="ti-upload"></i>
                                    <span> Upload File</span>
                                </a>
                            </li>
                          

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="user.png" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>                                        
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">File Uploads</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->
<?php
include '../db.php' ;

error_reporting(0);
session_start();
if(isset($_POST['send']))
{   
    $vpb_file_name=($_FILES['upload']['name']);
    $vpb_file_name = mysqli_real_escape_string($con,$vpb_file_name);   
    $withoutExt = preg_replace('/\\.[^.\\s]{3,4}$/', '', $vpb_file_name); //File Name
    $vpb_file_size = $_FILES['upload']['size']; // File Size
    $vpb_allowed_file_extensions = array("pdf,pptx,jpg,png,xlsx");
    $vpb_uploaded_files_location = '../files/'; //This is the directory where uploaded files are saved on your server
    $vpb_final_location = $vpb_uploaded_files_location . $vpb_file_name; //Directory to save file plus the file to be saved
    //Without Validation and does not save filenames in the database
 
    if((move_uploaded_file(strip_tags($_FILES['upload']['tmp_name']), $vpb_final_location)))
    {    
      $f=mysqli_query($con,"INSERT INTO upload (books) VALUES ('$vpb_file_name')");
      if($f==true){
        echo'<script>alert("success")</script>';
      }else{
        echo'<script>alert("some fields missing")</script>';
      }
    }else{
   echo '<div class="alert alert-success"><strong>File ! </strong>Not  uploaded '.$vpb_file_name.'</div>';   
    }
}
?>
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Dropzone</h4>
                                            <p class="text-muted m-b-30 font-14">
                                            </p>

                                            <!--<div class="m-b-30">
                                                <form action="upload" method="POST" class="dropzone" enctype="multipart/form-data">
                                                    <div class="fallback">
                                                         <input type="file" class="form-control" name="upload" id="fileToUpload"  required><br>
                                                    </div>
                                                
                                            </div>>

                                            <div class="text-center m-t-15">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" name="send">Send Files</button>

                                            </div>

                                           </form-->
                                           <form action="upload" method="POST"  enctype="multipart/form-data">
                                            <input type="file" class="form-control" name="upload" id="fileToUpload"  required><br>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="send">Send Files</button>
                                        </form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2018 Chemical <i class="mdi mdi-heart text-danger"></i> by Webteam
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

        <!-- Dropzone js -->
        <script src="assets/plugins/dropzone/dist/dropzone.js"></script>


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
