<!DOCTYPE html>
<html>
<head>
<!-- META TAGS -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<!-- /META TAGS -->
<!-- CSS -->
<style type="text/css">@import url("css/base.css");</style>
<style type="text/css">@import url("css/grid.css");</style>
<style type="text/css">@import url("css/extensions.css");</style>
<link href='css/themes/blue.css' rel='stylesheet' type='text/css' />


<!-- /CSS -->
<title>News</title>
<!-- JS -->
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/jquery.uniform.js"></script>
<script type="text/javascript" src="js/jquery.idTabs.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.facebox.js"></script>
<script type="text/javascript" src="js/jquery.visualize.js"></script>
<!--[if IE]>
<script type="text/javascript" src="js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" src="js/functions.js"></script>
<!-- /JS -->
</head>
<body class="layout980">
<div id="page-wrapper" class="width"> 
  <!-- HEADER -->
<?php include('header.php');?>
  <!-- HEADER END --> 
  <!-- NAV -->
<?php include('navbar.php');?>
  <!-- NAV END -->
  <div id="page"> 
    <!-- OPEN GRID CONTAINER -->
    <div class="container_12">
      <br class="cl" />
      <!-- TABLES -->
      <div class="grid_12">
        <div class="box-header">
          
          Notifications </div>
        <!-- TABLES - TAB 1 -->
        <div id="table-tab1" class="box table tab-content">
          <table cellspacing="0">
            <thead>
              <tr>
                <td>Sno</td>
                <td>Notification</td>
                <td>BY</td>
                <td>TO</td>
                <td>DATE</td>
                <td>TIME</td>
              
              </tr>
            </thead>
            <tbody>
			<?PHP
			include("db.php");
      $today_date=date("j m Y");
			$q=mysqli_query($con,"SELECT * FROM chemical.notices order by id DESC LIMIT 10");
			while($row=mysqli_fetch_array($q,MYSQLI_BOTH))
			{
				
				$id=$row['id'];
				//$sno=$row['sno'];
				$title=$row['title'];
				$by=$row['from'];
        $to=$row['sendto'];
				$date=$row['date'];
				$time=$row['time'];
				$new="--";
				if($date==$today_date)
				{
					$new="new";
				}
				?>
              <tr>
                <td class="first"><?php echo $id;?></td>
                <td><a href="notice_view.php?id=<?php echo $id;?>" class="spacer modal-fade" rel="modal"><?php echo $title;?><?php if($new=='new') { ?> <span class="notfi">new</span><?php }?></a></td>
                <td><?php echo $by;?> </td>
                <td><?php echo $to;?></td>
                <td><?php echo $date;?> </td>
                <td><?php echo $time;?> </td>
               
                 </tr>
              <?php
		  }
		  ?>
            </tbody>
          </table>
          
          <div class="table-options">
            <ul class="pagination fr">
              <li class="previous-off">« Previous</li>
              <li class="active">1</li>
              <li class="next" style="color:white;">Next »</li>
            </ul>
            <form action="#">
              <br><br>
            </form>
          </div>
        </div>
      </div>
   
    </div>
  </div>
  <div id="messages" style="display: none">
</div>
 <?php
 
 ?>
  <br class="cl" />
  
  <!-- FOOTER -->
  <div id="footer" class="tr"> Copyright &copy; <b>Chemical Insight</b> </div>
  <!-- FOOTER END --> 
</div>
</body>
</html>
<?php
include("footer.php");

?>