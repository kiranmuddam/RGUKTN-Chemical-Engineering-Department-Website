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
        <title> Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="chemical" name="Kiranbabu Muddam" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Summernote css -->
        <link href="assets/plugins/summernote/summernote-bs4.css" rel="stylesheet" />


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
<img src="user.png" alt="user" class="rounded-circle">                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                               
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
<!-- Top Bar End -->
<?php
error_reporting(0);
session_start();
$date=date("j m Y");
$session_id=$_SESSION['chem_user'];
include '../db.php' ;
if(isset($_POST['send'])){
     
    $notype=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['type'])));
    $title=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['title'])));
    $body=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['description'])));
    $sendto=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['sentto'])));
    $date=date("j m Y");
    $time=date("h:i A");
    
   $file="--";
	if(isset($_FILES['file']))
	{
  		if (file_exists("/files/".$_FILES["file"]["name"])){
			
  			echo $_FILES["file"]["name"] . " already exists. ";
  		}
	   else
	   {
		  $file=$_FILES["file"]["name"];
      	move_uploaded_file($_FILES["file"]["tmp_name"],"files/".$_FILES["file"]["name"]);
      	$filename=$_FILES["file"]["name"];
  			$filetype=$_FILES["file"]["type"];
  			$filesize=$_FILES["file"]["size"] / 1024;
  			$filepath=$_FILES["file"]["tmp_name"];
  	
	  } 
 }
     
    $query=mysqli_query($con,"INSERT INTO chemical.notices (`notype`,`title`,`body`,`sendto`,`time`,`date`,`from`,`attachment`)VALUES('$notype','$title','$body','$sendto','$time','$date','$session_id','$filename')") or die(mysql_error());;
    if($query==true){
        echo '<script>alert("Sent Succesfully");</script>' ;
    }else{
        echo '<script>alert("Some fields are missing");</script>' ;
    }
}
?>
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
                                            <form action="notification.php" enctype="multipart/form-data" method="POST" role="form">
                                       <input type="text" class="form-control" name="title" placeholder="Notice Title" required=""><br>
                                         <select  class="form-control" name="sentto" required="">
                                             <option value="">Select Send to</option>
                                                <option value="E2-CH-01">E2-CH-01</option>
                <option value="E3-CH-01">E3-CH-01</option>
                <option value="E3-CH-02">E3-CH-02</option>
                <option value="E4-CH-01">E4-CH-01</option>
                <option value="ALL">ALL</option>
                                         </select><br>
                                         <select class="form-control" name="type"  required="">
                                             <option value="">Select Notice Type</option>
                                            <option value="notice">Notice</option>
                                             <option value="cdpc">CDPC</option>                                        
                                         </select><br>

                                            <textarea class="summernote" name="description" required="" >Write notification body here...</textarea><br>                                          <div class="form-group">
  <label>File Upload:</label>
     <input type="file" name='file' id="uploaded"   />

    </div>  
                                            <button class="btn btn-success" name="send" type="submit">Send Notification</button>
</form>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->


                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2018 Chemical<i class="mdi mdi-heart text-danger"></i> by Webteam
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

        <!--Summernote js-->
        <script src="assets/plugins/summernote/summernote-bs4.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        <script>
            jQuery(document).ready(function(){
                $('.summernote').summernote({
                    height: 300,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: true                 // set focus to editable area after initializing summernote
                });
            });
        </script>


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
