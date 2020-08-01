<?php session_start();?>

        <?php
            if(isset($_SESSION['chem_users']) || $_SESSION['admin'] = "")
                {
                    include("db.php");
$status="";
$user=$_SESSION['id'];
$q=mysqli_query($con,"select * from users where id='$user'");
$f=mysqli_fetch_array($q,MYSQLI_BOTH);
$name=$f['name'];
if(isset($_POST["submit"]))
{

  $from=$_SESSION['id'];
  $title=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['title'])));
  $body=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['body'])));
  $sendto=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['sendto'])));
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
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
        $filename=$_FILES["file"]["name"];
        $filetype=$_FILES["file"]["type"];
        $filesize=$_FILES["file"]["size"] / 1024;
        $filepath=$_FILES["file"]["tmp_name"];
    
    } 
 }
     
     
  $query=mysqli_query($con,"INSERT INTO chemical.notices(`title`,`body`,`sendto`,`time`,`date`,`from`,`attachment`)VALUES('$title','$body','$sendto','$time','$date','$name','$file')") or die(mysql_error());;
  if($query)
  {
    $status="Message sent Successfully.";
  }
  else
  {
    $status="Oops...,INVAILD Details Entered.";
  }
}
?>
<?php include('header.php');?>
  <!-- HEADER END --> 
  <div id="page"> 
    <div class="box-header">Post Notice &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $status;?></div>
         <div class="box">
        <form method="post" action="#" enctype="multipart/form-data">
			
			<div class="row">
              <label>Title:</label>
              <input type="text" id="title" name='title' title="This is an input box"  required=""/>
            </div>
            <div class="row">
              <label>Send To:</label>
              <select title="Select an option" name="sendto">
                <optgroup label="Select">
                <option value="E2-CH-01">E2-CH-01</option>
                <option value="E3-CH-01">E3-CH-01</option>
                <option value="E3-CH-02">E3-CH-02</option>
                <option value="E4-CH-01">E4-CH-01</option>
                <option value="ALL">ALL</option>
                </optgroup>
              </select>
            </div>
            <div class="row">
              <label>Message:</label>
              <textarea class="wysiwyg" id="message" name="body" rows="6" cols="34" title="This is a cool textarea" required=""></textarea>
            </div>
            <div class="row">
              <label>File Upload:</label>
              <input id="uploaded" type="file"  name='file' title="This is an upload form, neat isn't it." />
            </div>
            <div class="row">
              <label></label>
              <input type="submit" value="submit" name='submit' class="button medium blue" />
            </div>
            </form>
      </div>
      </div>
<br class="cl" />  
  <?php include("footer.php"); ?> 
</div>
</body>
</html><?php
                 }


         else{
                    header('Location: index.php'); //redirect URL
                }
        ?>