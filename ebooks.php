<?php
error_reporting(0);
session_start();
include_once('db.php');
if(!isset($_SESSION['chem_admin']) && !isset($_SESSION['chem_user']))
{
    header('location:login');
}
?>
<?php include("variables.php"); ?>
<?php include("header.php"); ?>
        <?PHP
            include("db.php");
      $today_date=date("j m Y");
            $q=mysqli_query($con,"SELECT * FROM chemical.upload order by sno DESC LIMIT 100");
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
         <td class="theading" width="50%"><font color="grey">Book name</font></td>
          <td class="theading" width="20%"><font color="grey">Download</font></td>
          
        
          
        
         </tr>
         </thead>
         <?php
         while($row=mysqli_fetch_array($q,MYSQLI_BOTH))
            {
                
                $id=$row['sno'];
                //$sno=$row['sno'];
                $title=$row["books"];
                ?>
         <tr class="text-center">
         <td><b><span class="badge badge-primary"><?php echo $id ?></span></b></td>
         <td><span class="badge badge-primary"><?php echo $title ?></span></td>
         <td><span class="badge badge-warning"><a  target="blank" href="files/books$esx3/<?php echo $title ?>">Download Now</a></span></td>
         
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
