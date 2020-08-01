<?php
include("db.php");
session_start();
$user_check=$_SESSION['login_user'];
echo $user_check;
$sql="SELECT*FROM users WHERE id='$user_check'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
$login_session=$row['id'];
$login_role=$row['role'];
if(!isset($login_session)){
 mysqli_close;
 header('location:index.php');
}
?>