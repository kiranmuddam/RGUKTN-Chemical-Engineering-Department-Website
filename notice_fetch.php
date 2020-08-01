<?php
if(isset($_POST['notice_id']))
{
include('db.php');
$id=$_POST["notice_id"];
$id=htmlspecialchars(addslashes($id));
$id=mysqli_real_escape_string($con,$id);
$result=mysqli_query($con,"select * from chemical.notices  where id='".$id."' ORDER by id DESC");
$row=mysqli_fetch_array($result,MYSQLI_BOTH);
$subject=$row['title'];
$details=$row['body'];
$by=$row['from'];
$dated=$row['date'];
$files='';
if($row["attachment"]!="--")
      {
        $file_name=$row['attachment'];
         $files.="<a href='files/".$file_name."' target=_new style='font-size:15px;text-decoration:underline;color:#787878;' download><img src='assets/images/index4.jpg' style='width:30px;height:30px;' /> ".$file_name."</a><br />";
}     
echo "<div style='width:100%;height:auto;min-height:10%;'>
      <div style='background-color:#E2E2C5;height:10%;width:100%;margin-top:0%;color:white;'>
        <h3 style='text-align:center;padding-top:10px;color:black'>Notice</h3>
        <br />
      </div>
      <div style='text-align:left;float:right;margin-top:10px;font-weight:normal;padding-right:12px;line-height:20px;color:#999;' >News id: $id <br />Posted on : <b><i>$dated</i></b> .</div>
        <div style='float:left;line-height:70px;' >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject : &nbsp; <b>$subject</b></div>
        <div style='padding-top:5%; padding-left:5%; padding-right:4%;height:auto;min-height:50%;font-weight:100;'><br />
        
        <div style='width:95%;margin-top:6px;height:auto;padding-top:2%;padding-left:2%; min-height:40%;max-width:2050px;-moz-box-shadow:1px 0px 1px 2px #DDDDDD;box-shadow:1px 0px 1px 2px #DDDDDD;-webkit-box-shadow:1px 0px 1px 2px #DDDDDD;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;line-height:23px;'><br />".nl2br($details)."
        <br><br> $files
        <div style='text-align:right;font-weight:bold; width:90%;padding-bottom:0%;'>SD/-&nbsp; <br /><font style='font-size:18px;color:green'>$by</font></div></div></div>
      </div><br><br><br><br></div>
      ";
}
?>


