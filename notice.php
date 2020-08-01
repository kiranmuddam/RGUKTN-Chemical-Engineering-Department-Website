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
$q=mysqli_query($con,"SELECT * FROM chemical.notices WHERE notype='notice' order by id desc ");
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
         <td class="theading" width="50%"><font color="grey">Title</font></td>
          <td class="theading" width="20%"><font color="grey">To</font></td>
         <td class="theading" width="20%"><font color="grey">Date</font></td>
        <td class="theading" width="20%"><font color="grey">Time</font></td>
        
         </tr>
         </thead>
         <tbody>
         <?php

         while($row = mysqli_fetch_array($q,MYSQLI_BOTH))
         {
          
         ?>
         <tr class="text-center">
         <td><b><span class="badge badge-primary"><?php echo $row["id"] ?></span></b></td>
         <td style="color:#31303f;text-shadow: 1px 1px 2px #7f8184" name="view" value="View" id="<?php echo $row["id"]; ?>" class="view_data" class="notice_title"><b><a href="#"><?php echo $row["title"]; ?></a></b></td>
         <td><span class="badge badge-warning"><?php echo $row["sendto"]; ?></span></td>
         <td><span class="badge badge-success"><?php echo $row["date"]; ?></span></td>
         <td><span class="badge badge-warning"><?php echo $row["time"]; ?></span></td>
         
         </tr>
         <?php
         }
         ?>
         </tbody>
      </table>

     <br>

</div>
</div>

<div id="dataModal" class="modal fade">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
          <!-- <div class="modal-header">
           <h4 class="modal-title">Notice Description</h4>
           </div>-->
           <div>
           <div class="modal-body" id="notice_description"> 
           </div> 
          
           </div>


         <script>
           $(document).ready(function(){
            $('.view_data').click(function(){
              var notice_id = $(this).attr("id");

                $.ajax({
                  url:"notice_fetch.php",
                    method:"post",
                    data:{notice_id:notice_id},
                    success:function(data){
                      $('#notice_description').html(data);
                      $('#notice_description').html(data);

                      $('#dataModal').modal("show");

                    }
                });


              

            });
           });
           </script>




     <script type="text/Javascript" src="assets/js/jquery.dataTables.min.js"></script>
    <script type="text/Javascript" src="assets/js/dataTables.bootstrap.min.js"></script>
  <script src="assets/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript">
$(document).ready(function() {
    $('#mydata').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
} );
</script>   
