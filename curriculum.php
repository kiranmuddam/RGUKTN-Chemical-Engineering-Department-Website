<?php
error_reporting(0);
session_start();
include_once('db.php');
if(!isset($_SESSION['chem_user']))
{
    header('location:login');
}
?>
<?php include("header.php"); ?>

    <link rel="stylesheet" href="assets/css/w3.css"> 
   
<body>
	<div class="container panel">
  

  <div class="w3-border">
<div class="w3-bar w3-border-bottom w3-light-grey intronav">
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'eng1')" id="myLink">E1 Curriculum</a>
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'eng2')">E2 Curriculum</a>
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'eng3')">E3 Curriculum</a>
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'eng4')">E4 Curriculum</a>
</div>


<div id="eng1" class="w3-container lab w3-animate-opacity">
	<embed src="curriculu/E1.pdf" height="700px" width="1100px"></embed>

</div>

<div id="eng2" class="w3-container lab w3-animate-opacity">
<embed src="curriculu/E2.pdf" height="800px" width="1100px"></embed>
<
</div>

<div id="eng3" class="w3-container lab w3-animate-opacity">
<embed src="curriculu/E3.pdf" height="800px" width="1100px"></embed>
</div>
<div id="eng4" class="w3-container lab w3-animate-opacity">
<embed src="curriculu/E4.pdf" height="800px" width="1100px"></embed>
</div>
</div>

    </div><!--//wrapper-->
</div>

<script>
function openLab(evt, labName) {
  var i;
  var x = document.getElementsByClassName("lab");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
    activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(labName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}
var mybtn = document.getElementById("myLink");
mybtn.click();

function openc(cityn) {
    var i;
    var x = document.getElementsByClassName("labclose");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    document.getElementById(cityn).style.display = "block";  
}

$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });

</script>
</body>
<?php include("footer.php"); ?>