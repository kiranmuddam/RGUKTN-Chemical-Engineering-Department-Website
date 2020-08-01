<?php 
session_start();
if(isset($_SESSION['chem_user']))
{
$id=$_SESSION['chem_user'];
include('db.php');
error_reporting(0);
?>
<?php include("header.php"); ?>
<script type="text/javascript" src="assets/js/ckeditor/ckeditor.js"></script>

<div class="well" align="center" style="width: 80%;margin-left: 10%;">
<form  action="noticesent.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="type">Notice Type</label><br>
    <select style="width: 52%;height:30px;" name="notype" id="notype" class="form-control" required>
                <option value="notice">General Notice</option>
                <option value="cdpc">CDPC</option>
                <option value="event">Event</option>
                
    </select>
  </div>
  <div class="form-group">
    <label for="title">Post Title</label>
    <input type="text" class="form-control"  placeholder="title" style="width: 52%;" id="title" name='title' required>
  </div>
 <div class="form-group">
    <label> Your Descripion Here</label><br>
    <textarea class="form-control" type="textarea" id="message" name="body" rows="7" cols="50" style="width: 52%;" placeholder="Type your Descripion here...." required></textarea>
  </div>
   <div class="form-group">
    <label for="sentto">Send To</label><br>
    <select style="width: 52%;height:30px;" name="sendto" class="form-control" required>
                <option value="E2-CH-01">E2-CH-01</option>
                <option value="E3-CH-01">E3-CH-01</option>
                <option value="E3-CH-02">E3-CH-02</option>
                <option value="E4-CH-01">E4-CH-01</option>
                <option value="ALL">ALL</option>
    </select>
  </div>
  
  <div class="form-group">
  <label>File Upload:</label>
   <input type="file" class="form-control" style="width: 52%" name='file' id="uploaded"   />
    </div>
 <!--iv class="form-group">
    <label> upload Attachment</label><br>
    <input type="file" class="form-control" id="file" name="files" multiple="multiple"  style="width: 52%;"></div>-->
  <button type="submit" class="btn btn-info" name="submit">Submit</button>
</form></div>
   <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'message' );
            </script>
<?php include("footer1.php"); ?>
<?php
}
else{
  header("Location:index.php");
}
?>

