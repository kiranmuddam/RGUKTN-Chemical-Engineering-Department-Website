<?php include_once("variables.php"); ?>
<?php 
session_start();
if(isset($_SESSION['chem_user']))
{
$id=$_SESSION['chem_user'];
include('db.php');
$date=date("j m Y");
$query=mysqli_query($con,"select * from chemical.notices where date='$date'");
$count=mysqli_num_rows($query);
$q=mysqli_query($con,"SELECT * from chemical.users where id='$id'");
$row=mysqli_fetch_array($q,MYSQLI_BOTH);
$name=$row['name'];
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Chemical Engineering</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chemical Engineering,logo,header,footer">
    <meta name="author" content="Kiranbabu Muddam">    
    <link rel="shortcut icon" href="favicon.ico">  
   
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" href="assets/dataTables.bootstrap.min.css"> 
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css"> 

 

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .fontSize{
            font-size: 18px;

            color: white;
            float: left;
        }
        body{
            background-color: #fefefe;
background-image: url("assets/images/grid-noise.png");
        }
        header{
            
        }
    </style>
</head> 

<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header" style="fixed:top;">  
            <div class="top-bar hidden-xs">
                <div class="container">              
                    <ul class="social-icons col-md-2 col-sm-6 col-xs-12 hidden-xs">
                        <div class="panel-default fontSize btn btn-primary">
                            <span class="fa fa-bullhorn">&nbsp;Latest Updates:</span>

                        </div>            

                    </ul><!--//social-icons-->
                      <?php
                    $q=mysqli_query($con,"SELECT * FROM notices where notype='notice' and date='$date' order by id desc limit 1");
                    while($r=mysqli_fetch_array($q,MYSQLI_BOTH)){
                        $notice=$r['title'];
                    }
                    ?>
                    <h6 class="fontSize hidden-xs " style="float:left;margin-top:10px;padding:0px;height:0px;width:55%;"><marquee style="margin-top:10px;" behavior="infinite" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();"><span class="fa fa-flash">&nbsp;Latest Notifiaction: &nbsp;<?php echo $notice ?><img src="assets/images/new1.gif" width="30" height="25"></marquee></span></h6> 
                    <!--<form class="pull-right search-form" role="search" style="margin-right:0px;">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search the site...">
                        </div>
                        <button type="submit" class="btn btn-theme">Go</button>
                    </form> -->        
                </div>      
            </div><!--//to-bar-->
            <div class="header-main container">
                <h1 class="logo col-md-4 col-sm-4">
                    <a href="index.php"><img id="logo" src="assets/images/logo.png" alt="Logo"></a>
                </h1><!--//logo--> 
                <div class="info col-md-8 col-sm-8">
                    <ul class="menu-top navbar-right ">
                        <li class="divider"><a href="index.php">user</a></li>
                        <li class="divider"><a href="notifications.php">Messages <span class=""><?php echo $count;?></span></a></li>
                        <li><a href="logout">Logout</a></li>
                    </ul><!--//menu-top-->
                    <br />
                    <div class="contact pull-right">
                        
                        <p class="email"><i class="fa fa-envelope"></i><a href="#">Welcome&nbsp;<b><?php echo $name; ?></b></a></p>
 <?php   
}
else
{?>          
    <!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Chemical Engineering</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Chemical Engineering,logo,header,footer">
    <meta name="author" content="Kiranbabu Muddam">    
    <link rel="shortcut icon" href="favicon.ico">  
   
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/pretty-photo/css/prettyPhoto.css"> 
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .fontSize{
            font-size: 18px;

            color: white;
            float: left;
        }
        body{
            background-color: #fefefe;
background-image: url("assets/images/grid-noise.png");
        }
        header{
            
        }
    </style>
</head> 

<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header" style="fixed:top;">  
            <div class="top-bar  hidden-xs">
                <div class="container">              
                    <ul class="social-icons col-md-2 col-sm-6 col-xs-12 hidden-xs">
                        <div class="panel-default fontSize btn btn-primary">
                            <span class="fa fa-bullhorn">&nbsp;Latest Updates:</span>

                        </div>            

                    </ul><!--//social-icons-->
                       <?php
                    $q=mysqli_query($con,"SELECT * FROM notices where notype='notice' and date='$date' order by id desc limit 1");
                    while($r=mysqli_fetch_array($q,MYSQLI_BOTH)){
                        $notice=$r['title'];
                    }
                    ?>
                    <h6 class="fontSize hidden-xs " style="float:left;margin-top:10px;padding:0px;height:0px;width:55%;"><marquee style="margin-top:10px;" behavior="infinite" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();"><span class="fa fa-flash">&nbsp;Latest Notifiaction: &nbsp;<?php echo $notice ?><img src="assets/images/new1.gif" width="30" height="25"></marquee></span></h6> 
                    <form class="pull-right search-form" role="search" style="margin-right:0px;">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search the site...">
                        </div>
                        <button type="submit" class="btn btn-theme">Go</button>
                    </form>         
                </div>      
            </div><!--//to-bar-->
            <div class="header-main container">
                <h1 class="logo col-md-4 col-sm-4">
                    <a href="index.php"><img id="logo" src="assets/images/logo.png" alt="Logo"></a>
                </h1><!--//logo--> 
                <div class="info col-md-8 col-sm-8">
                    <ul class="menu-top navbar-right">
                        <li class="divider"><a href="index.php">Home</a></li>
                        <li class="divider"><a href="login">Login</a></li>
                        <li><a href="">Register</a></li>
                    </ul><!--//menu-top-->
                    <br />
                    <div class="contact pull-right">
                        
                        <p class="email"><i class="fa fa-envelope"></i><a href="#">webteam |<?php echo $title; ?></a></p>
<?php
}
?>
                    </div><!--//contact-->
                </div><!--//info-->
            </div><!--//header-main-->
        </header><!--//header-->

 
        <!-- ******NAV****** -->
       <nav class="main-nav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!--//nav-toggle-->
                </div><!--//navbar-header-->            
                <div class="navbar-collapse collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"><a href="index"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#"><i class="fa fa-university" aria-hidden="true"></i>&nbsp;&nbsp;Department <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="about-department"><i class="fa fa-info-circle" aria-hidden="true"></i>&nbsp;&nbsp;About Department</a></li>
                                <li><a href="infrastructure"><i class="fa fa-qrcode" aria-hidden="true"></i>&nbsp;&nbsp;Infrastructure</a></li>
                                <li><a href="faculty"><i class="fa fa-user-circle-o" aria-hidden="true"></i>&nbsp;&nbsp;Faculty</a></li>  
                                <li><a href="faculty"><i class="fa fa-flask" aria-hidden="true"></i>&nbsp;&nbsp;About Chemical Engineering</a></li>  
                                <!--<li class="dropdown-submenu">
                                    <a class="trigger" tabindex="-1" href="#">Menu Levels <i class="fa fa-angle-right"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">Submenu Level 2</a></li>
                                        <li class="dropdown-submenu">
                                            <a class="trigger" href="#">Submenu Level 2 <i class="fa fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Submenu Level 3</a></li>
                                                <li><a href="#">Submenu Level 3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Submenu Level 2</a></li>
                                        <li><a href="#">Submenu Level 2</a></li>
                                    </ul>
                                </li> -->          
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#"><i class="fa fa-id-badge" aria-hidden="true"></i>&nbsp;&nbsp;Students Portal <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="alumni"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Alumni</a></li>
                                <li><a href="current-students"><i class="fa fa-male" aria-hidden="true"></i>&nbsp;&nbsp;Current Students</a></li>   
                              
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#"><i class="fa fa-puzzle-piece" aria-hidden="true"></i>&nbsp;&nbsp;Academics<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                               <li class="dropdown-submenu">
                                    <li><a href="curriculum"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;&nbsp;Curriculum</a></li>
                                    <!--<ul class="dropdown-menu">
                                        <li><a tabindex="-1" href="#">Engineering 1</a></li>
                                        <li><a href="#">Engineering 2</a></li>
                                        <li><a href="#">Engineering 3</a></li>
                                        <li><a href="#">Engineering 4</a></li>
                                    </ul>-->
                                </li>      
                              
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;&nbsp;Library <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="ebooks">  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>&nbsp;&nbsp;Ebooks</a></li>
                                <li><a href="dept-library"><i class="fa fa-bars" aria-hidden="true"></i>&nbsp;&nbsp;Dept Library</a></li>                  
                            </ul>
                        </li><!--//dropdown-->
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#"><i class="fa fa-bell" aria-hidden="true"></i>&nbsp;&nbsp;Updates <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="notice.php"><i class="fa fa-bullhorn" aria-hidden="true"></i>&nbsp;&nbsp;Notifications</a></li>
                                <li><a href="cdpc.php"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;CDPC</a></li>
                                                                           
                            </ul>
                        </li><!--//dropdown-->
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;&nbsp;Career <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="job-opportunities"><i class="fa fa-street-view" aria-hidden="true"></i>&nbsp;&nbsp;Job Opportunities</a></li>
                                <li><a href="gate.php" target="_new"><i class="fa fa-certificate" aria-hidden="true"></i>&nbsp;&nbsp;Gate</a></li>
                                                                           
                            </ul>
                        </li><!--//dropdown-->
                        <li class="nav-item"><a href="gallery"><i class="fa fa-picture-o" aria-hidden="true"></i>&nbsp;&nbsp;Gallery</a></li>
                    </ul><!--//nav-->
                </div><!--//navabr-collapse-->
            </div><!--//container-->
        </nav><!--//main-nav-->
