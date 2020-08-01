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
$q=mysqli_query($con,"SELECT * FROM chemical.data   order by id ");
?>

    <script type="text/javascript" src="assets/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
  <script src="assets/js/dataTables.buttons.min.js"></script>
<link rel="stylesheet" href="assets/dataTables.bootstrap.min.css"> 
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"> 
    <div class="panel panel-primary table-responsive"" style="margin-right: 5%;margin-left: 5%;">
    <div class="container" style="background:"> 
<table id="mydata" class="table table-striped table-bordered table-hover table-boxed" cellspacing="0" width="100%">
<thead >
         <tr class="text-center">
         <td class="theading" width="5%"><font color="grey">S.no</font></td>
         <td class="theading" width="20%"><font color="grey">University ID</font></td>
          <td class="theading" width="50%"><font color="grey">Full name</font></td>
          <td class="theading" width="20%"><font color="grey">Batch</font></td>
      
        
         </tr>
         </thead>
         <tbody>
         <?php
         while($row = mysqli_fetch_array($q,MYSQLI_BOTH))
         {
         ?>
         <tr class="text-center">
         <td><b><span class="" style="color: Tomato"><?php echo $row["sno"] ?></span></b></td>
         <td><span class="" style="color:SlateBlue"><?php echo $row["id"] ?></span></td>
         <td><span class=""  style="color: MediumSeaGreen"><?php echo $row["name"]; ?></span></td>
         <td><span class="badge badge-warning"><?php echo $row["year"]; ?></span></td>
         
         </tr>
         <?php
         }
         ?>
         </tbody>
      </table>

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
