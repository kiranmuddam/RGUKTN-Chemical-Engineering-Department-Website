<?php 
session_start();
if(isset($_SESSION['chem_user']))
{
$id=$_SESSION['chem_user'];
include('db.php');
error_reporting(0);
?>
<?php
$status="";
include('db.php');
$user=$_SESSION['chem_user'];
$q=mysqli_query($con,"select * from chemical.users where id='$user'");
$f=mysqli_fetch_array($q,MYSQLI_BOTH);
$name=$f['name'];
if(isset($_POST["submit"]))
{

	$from=$_SESSION['chem_user'];
	$notype=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['notype'])));
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
      	move_uploaded_file($_FILES["file"]["tmp_name"],"files/".$_FILES["file"]["name"]);
      	$filename=$_FILES["file"]["name"];
  			$filetype=$_FILES["file"]["type"];
  			$filesize=$_FILES["file"]["size"] / 1024;
  			$filepath=$_FILES["file"]["tmp_name"];
  	
	  } 
 }
     
     
	$query=mysqli_query($con,"INSERT INTO chemical.notices (`notype`,`title`,`body`,`sendto`,`time`,`date`,`from`,`attachment`)VALUES('$notype','$title','$body','$sendto','$time','$date','$name','$file')") or die(mysql_error());;
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

<?php
}
else{
  header("Location:index.php");
}
?>