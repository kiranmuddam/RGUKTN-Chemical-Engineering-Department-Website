<?php
include_once('db.php');
session_start();
if(isset($_SESSION['chem_user']))
{
	header('location:index.php');
}

$status="If login or registration problem persists contact srisurya092@gmail.com";
$statu="";
if(isset($_POST['username'])&&($_POST['password'])){

$userid=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['username'])));
$password=htmlspecialchars(addslashes(mysqli_real_escape_string($con,$_POST['password'])));
$query=mysqli_query($con,"SELECT id, password FROM chemical.users WHERE id='".$userid."' and password='".$password."'");
	$c=mysqli_num_rows($query);
	if($c>=1)
	{
		$_SESSION['chem_user']=$userid;
		header("Location:index.php");
	}
	else
	{
		$statu="OOPS...,INVALID DETAILS.";
	}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Login</title>


</head>
<body id="auth-page">

	<h1 align='center' style="color:green;"><?php echo $status; ?></h1>
<div id="page-body-auth">

	<div id="wrapperbg-auth">
<h1 align='center' style="color:green;"><?php echo $statu; ?></h1>
		<div id="container-auth">
			<header>Login</header>
			<div class="content">
				<form class="form" id="loginform" method="post" action="">
					<div class="line">
						<label>Username:</label>
						<input type="text" class="text full96" id="username" name="username" required=""/>
					</div>
					<div class="line">
						<label>Password:</label>				
						<input type="password" class="text full96" id="password" name="password" required=""/>
						<label> <a href="forgotpass" class="small bold float-right">Forgot password?</a></label>
					</div>
					<div class="line">
						<input type="checkbox" id="remember" class="" value="1" name="remember"/>
						<label class="choice" for="remember">Remember me</label>
						<button type="submit" class="submitbtn" name="submit">Login</button>
						<div class="clearfix"></div>
					</div>
				</form>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
