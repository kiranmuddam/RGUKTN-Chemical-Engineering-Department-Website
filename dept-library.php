<?php
error_reporting(0);
session_start();
include_once('db.php');
if(!isset($_SESSION['chem_user']))
{
    header('location:login');
}
?>
<?php include("variables.php"); ?>
<?php include("header.php"); ?>
<?php include("db.php");
 $today_date=date("j m Y");
$q=mysqli_query($con,"SELECT * FROM chemical.library_list   order by id ");
?>

    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
  <script src="assets/js/dataTables.buttons.min.js"></script>
<link rel="stylesheet" href="assets/dataTables.bootstrap.min.css"> 
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"> 
    <div class="panel panel-primary table-responsive"" style="margin-right: 5%;margin-left: 5%;">
    <div class="container" style="background:"> 

         <?php
         while($row = mysqli_fetch_array($q,MYSQLI_BOTH))
         {
         ?>
         <div class="container-fluid">
             <div class="row">
                 <div class="alert alert-info">              
                 	<?php echo $row['sno'] ?>&nbsp;&nbsp;
                  <?php echo $row['books'] ?>&nbsp;&nbsp;
                  <span class="badge badge-warning"><?php echo "Stock : ".$row['stock'] ?></span>&nbsp;&nbsp;
                  <span class="badge badge-success"><?php echo "Book Id : ".$row['id'] ?></span>
                     
                 </div>

             </div>
         </div>
         <?php
         }
         ?>
       

     <br>

</div>
</div>



<?php include("footer1.php"); ?>

     <script type="text/Javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script type="text/Javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
    $('#mydata').DataTable( {
        "pagingType": "full_numbers"
    } );
} );
</script>   
