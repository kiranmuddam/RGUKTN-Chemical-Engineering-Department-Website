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
<style type="text/css">
	.imgs{
		width: 400px;
		height: 200px;
	}
	
</style>
    <link rel="stylesheet" href="assets/css/w3.css"> 
   
<body><div class="content container panel">
	<div class="container panel">
   <div class="w3-border">
<div class="w3-bar w3-border-bottom w3-light-grey intronav">
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'lab1')" id="myLink">FM</a>
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'lab2')">MUO</a>
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'lab3')">HT</a>
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'lab4')">CRE</a>
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'lab5')">PDC</a>
<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'lab6')">MTO</a>

<a class="w3-bar-item w3-button testbtn" style="padding:20px;margin:10px;" onclick="openLab(event, 'lab7')">LAB 7</a> 

</div>







<div id="lab1" class="w3-container lab w3-animate-opacity">
<a class="prettyphoto col-md-12 col-sm-12 col-xs-12" rel="prettyPhoto[gallery]" title="LAB 1"></a>
<br>
<center>
<table background="white" hiegth="200px" width="1100px"  border="1" color="black">
<tr style="font-family:timesnewRoman;font-size:20px;"><td colspan="8"  align="center"><b>FLUID MECHANICS LAB</b></td></tr>
<tr style="font-family:times;font-size:18px;" align="center"><td colspan="2">I Year B.Tech CH</td><td colspan="2">SEMESTER-II</td><td colspan="1">L</td><td colspan="1">P</td><td colspan="1">T</td><td colspan="1">C</td>
<tr style="font-family:timesnewRoman;font-size:18px" align="center"><td colspan="2">Code:CH1801</td><td colspan="2">Fluid Mechanics lab</td><td colspan="1">0</td><td colspan="1">0</td><td colspan="1">3</td><td colspan="1">2</td></tr>
<tr>
<td colspan="8" style="font-family:timesnewRoman;font-size:20px" >&nbsp;Course Objective:<br>
&nbsp;The Objective of this Lab is to train the student how to operate the experimental setups and generate the required results from them <br>&nbsp;using basics concepts learned in fluid mechanics course.</td>
<tr><td colspan="8" style="font-family:timesnewRoman;font-size:20px;" >
&nbsp;Course Outcomes:&nbsp;&nbsp;After completion of this lab student understands<br>
<br>
&nbsp;1.The usage of basic equations derived in fluid mechanics course and checks their validity.<br><br>
&nbsp;2.Applications of different experiments in Chemical Industries like flow meters,pumps,etc.</td>
</tr>
</table><br><br></center>


            
                <div class="page-content">     
                    <div class="row page-row">
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"  href="labs/FM/1.png"><img class="img-responsive img-thumbnail imgs" src="labs/FM/1.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/FM/2.png"><img class="img-responsive img-thumbnail imgs" src="labs/FM/2.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/FM/3.png"><img class="img-responsive img-thumbnail imgs" src="labs/FM/3.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/FM/4.png"><img class="img-responsive img-thumbnail imgs" src="labs/FM/4.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/FM/5.png"><img class="img-responsive img-thumbnail imgs" src="labs/FM/5.png" alt="" /></a> 
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/FM/6.png"><img class="img-responsive img-thumbnail imgs" src="labs/FM/6.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/FM/7.png"><img class="img-responsive img-thumbnail imgs" src="labs/FM/7.png" alt="" /></a>
                    
                      </div><!--//page-row-->
                </div><!--//page-content--> 
                </div>
            </div><!--//page--> 
      
                        




<div id="lab2" class="w3-container lab w3-animate-opacity">
<a class="prettyphoto col-md-12 col-sm-12 col-xs-12" rel="prettyPhoto[gallery]" title="LAB 2"></a>

<center>


 <br>
<table background="white" hiegth="200px" width="1100px" color="black" border="1">
 <tr  style="font-family:timesnewRoman;font-size:20px;"><td align="center" colspan="8"> <b>MECHANICAL UNIT OPERATION LAB</b></td></tr>

<tr align="center" style="font-family:timesnewRoman;font-size:20px;"><td colspan="2">I Year B.Tech CH</td><td colspan="2">SEMESTER-III</td><td colspan="1">L</td><td colspan="1">P</td><td colspan="1">T</td><td colspan="1">C</td>
<tr align="center" style="font-family:timesnewRoman;font-size:20px;"><td colspan="2">Code:CH1901</td><td colspan="2">Mechanical Unit Operation lab</td><td colspan="1">0</td><td colspan="1">0</td><td colspan="1">3</td><td colspan="1">2</td></tr>
<tr>
<td colspan="8"  style="font-family:timesnewRoman;font-size:20px;"><b>&nbsp;Course Objective:</b>This course enables the student to:<br><br>
&nbsp;1.Understand and apply engineering experiment techniques and safety procedure common to the chemical industry.<br><br>
&nbsp;2.Apply principles developed in chemical engineering courses to analysis of chemical Engineering processes and unit operations.<br><br>
&nbsp;3.To provide experience on analyis of size and size reduction<br><br>
&nbsp;4.To acquint the students with the separations based on size.<br><br>
&nbsp;5.Improve skills necessary for group work-interpersonal skills,coordination of the efforts of several persons,leader and subordinate <br>&nbsp;roles,etc.<br>
</tr></td>
<tr style="font-family:timesnewRoman;font-size:20px;" ><td colspan="8">
<b>&nbsp;Course Outcomes:</b>&nbsp;At the end of the course,the student will be able to:
<br><br>
&nbsp;1.Analyze the characterization of particles and calculate the effectiveness of a given screen<br><br>
&nbsp;2.Calculate size reduction ratio,grindability index using ball mill and jaw crusher.<br>
<br>
&nbsp;3.Estimate the power requirement using crushing laws of various crushers.<br><br>
&nbsp;4.Apply separation techniques like forth floatation,sedimentation to separate a mixture.<br>
<br>
&nbsp;5.Evaluate performance characters of filter press,cyclones,floation cells and clarifies.
</td></tr>
</table><br><br></center>





<div class="page-content">     
                    <div class="row page-row">
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"  href="labs/MUO/1.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MUO/1.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MUO/2.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MUO/2.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MUO/3.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MUO/3.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MUO/4.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MUO/4.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MUO/5.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MUO/5.jpg" alt="" /></a> 
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MUO/6.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MUO/6.jpg" alt="" /></a>
                     
                      </div><!--//page-row-->
                </div><!--//page-content--> 
</div>


<div id="lab3" class="w3-container lab w3-animate-opacity">
<center>
    <br>

<table background="white" hiegth="200px" width="1100px" color="black" border="1" >
 <tr style="font-family:timesnewRoman;font-size:20px;"><td align="center" colspan="8"> <b>HEAT TRANSFER LAB</b></td></tr>

<tr  align="center" style="font-family:timesnewRoman;font-size:20px;"><td colspan="2">II Year B.Tech CH</td><td colspan="2">SEMESTER-I</td><td colspan="1">L</td><td colspan="1">P</td><td colspan="1">T</td><td colspan="1">C</td>
<tr  align="center" style="font-family:timesnewRoman;font-size:20px;"><td colspan="2">Code:CH2701</td><td colspan="2">Heat Transfer lab</td><td colspan="1">0</td><td colspan="1">0</td><td colspan="1">3</td><td colspan="1">2</td></tr>
<tr style="font-family:timesnewRoman;font-size:20px;">
<td colspan="8"><b>&nbsp;Course Objective:</b><br><br>
&nbsp;The Objective of this Lab is to train the student how to operate the experimental setups and generate the required results from them using &nbsp;basics concepts learned in Heat transfer course
</tr>
<tr style="font-family:timesnewRoman;font-size:20px;"><td style="font-family:timesnewRoman;font-size:20px;" colspan="8">
&nbsp;<b>Course Outcomes:</b>&nbsp;After completion of this lab student understands
<br>
&nbsp;1.The usage of basic equations derived in heat transfer course and checks their validity<br><br>
&nbsp;2.How to find thermal conductivities of any material<br><br>
&nbsp;3.Heat transfer coefficients in convection mode of heat transfer<br><br>
&nbsp;4.Working of heat exchangers and their importance in chemical industies.
</td></tr>
</table><br>
<br></center>

            
                <div class="page-content">     
                    <div class="row page-row">
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"  href="labs/HT/1.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/HT/1.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/HT/2.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/HT/2.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/HT/3.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/HT/3.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/HT/4.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/HT/4.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/HT/5.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/HT/5.jpg" alt="" /></a> 
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/HT/6.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/HT/6.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/HT/7.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/HT/7.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/HT/8.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/HT/8.jpg" alt="" /></a>
                        
                      </div><!--//page-row-->
                </div><!--//page-content--> 
            </div><!--//page--> 
        


<div id="lab4" class="w3-container lab w3-animate-opacity">
<div class="page-content">   
<center>
<br>
<table background="white" hiegth="200px" width="1100px" color="black" border="1" > 
 <tr  style="font-family:timesnewRoman;font-size:20px;"><td align="center" colspan="8"> <b>CHEMICAL REACTION ENGINEERING LAB</b></td></tr>

<tr  align="center" style="font-family:timesnewRoman;font-size:20px;" ><td colspan="2">II Year B.Tech CH</td><td colspan="2">SEMESTER-II</td><td colspan="1">L</td><td  colspan="1">P</td><td colspan="1">T</td><td colspan="1">C</td><tr  align="center" style="font-family:timesnewRoman;font-size:20px;" ><td  colspan="2">Code:CH2801</td><td  
    colspan="2">Chemical
Reaction Engneering</td><td  colspan="1">0</td><td  colspan="1">0</td><td
colspan="1">3</td><td colspan="1">2</td></tr>

<tr style="font-family:timesnewRoman;font-size:20px;" >
<td  colspan="8"><b>&nbsp;Course Objective:</b>At the end of this course,the student will be able to:<br>
&nbsp;&nbsp;1.Examine the temperature dependent term of a rate equation with Arrhenius' Law.<br><br>
&nbsp;&nbsp;2.Determine the rate equation for a reaction using laboratory methods<br><br>
&nbsp;&nbsp;3.Design ideal batch reactor for various operating requiremtns<br><br>
&nbsp;&nbsp;4.Design ideal plug flow reactor for various operating requiremts<br><br>
&nbsp;&nbsp;5.Design ideal CSTR reactor for various operating requirements<br><br>
&nbsp;&nbsp;6.Comparsion of conversion using multiple reactors and single reactor<br>

</tr>
<tr style="font-family:timesnewRoman;font-size:20px;" ><td colspan="8">
&nbsp;Course Outcomes:&nbsp;At the end of the laboratory course,the students will be able to:
<br>
&nbsp;&nbsp;1.Estimation of rate constant by applying Arrhenius theorem<br><br>
&nbsp;&nbsp;2.Understanding the estimation of rate law parameters for a given reaction in a batch reactor by using two different methods
</td></tr>
</table><br><br></center>
  
                    <div class="row page-row">
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"  href="labs/CRE/1.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/1.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/2.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/2.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/3.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/3.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/4.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/4.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/5.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/5.jpg" alt="" /></a> 
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/6.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/6.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/7.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/7.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/8.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/8.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/9.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/9.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/10.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/10.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/CRE/11.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/CRE/11.jpg" alt="" /></a>
                      </div><!--//page-row-->
                </div><!--//page-content--> 
            </div><!--//page--> 


<div id="lab5" class="w3-container lab w3-animate-opacity">

<div class="page-content">   

<center><br>

<table background="white" hiegth="200px" width="1050px" color="black" border="1" color="black">
 <tr><td align="center"  colspan="8"  style="font-family:timesnewRoman;font-size:20px"> <b>PROCESS DYNAMICS & CONTROL LAB</b></td></tr>

<tr align="center"  style="font-family:timesnewRoman;font-size:20px"><td  colspan="2">I Year B.Tech CH</td><td  colspan="2">SEMESTER-II</td><td colspan="1">L</td><td  colspan="1">P</td><td  colspan="1">T</td><td width="1">C</td>
<tr align="center"  style="font-family:timesnewRoman;font-size:20px"><td colspan="2">Code:CH2802</td><td colspan="2">Process Dynamics & Control lab</td><td colspan="1">0</td><td colspan="1">0</td><td  colspan="1">3</td><td  colspan="1">2</td></tr>
<tr style="font-family:timesnewRoman;font-size:20px" >
<td colspan="8"><b>&nbsp;Course Objective:</b>&nbsp;The course content enables the student to:<br>
&nbsp;1.To understand the dynamic behavior of the systems<br><br>
&nbsp;2.To evaluate response of first and higher order characterstics<br><br>
&nbsp;3.Study the installed characterstics of the value.<br><br>
&nbsp;4.Study if there is a hysteresis in the control value and sensor.<br><br>
&nbsp;5.Evaluate the tunning of a PID control via manual and automatic tuning.<br><br>
&nbsp;6.Evaluate the effect controller on the control system<br><br>
</tr><tr  style="font-family:timesnewRoman;font-size:20px;"><td colspan="20px">
&nbsp;<b>Course Outcomes:</b>&nbsp;At the end of the course,the student will be able to:
<br>
&nbsp;1.Estiamte the dynamic behaviour of the control systems.<br><br>
&nbsp;2.Uderstad the controllability ,speed of response the control systems.<br><br>
&nbsp;3.Select proper control value to meet process needs.<br><br>

&nbsp;4.Understand direct digital control systems handling and operation.<br><br>

&nbsp;5.Tuning of a PID control via manual and automatic tuning<br><br>
&nbsp;6.Choose PID modes that effect controllability ,speed of reponse the control systems<br></td>
</tr>
</table> <br><br> </center>
                    <div class="row page-row">
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"  href="labs/PDC/1.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/1.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/2.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/2.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/3.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/3.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/4.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/4.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/5.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/5.png" alt="" /></a> 
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/6.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/6.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/7.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/7.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/8.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/8.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/9.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/9.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/10.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/10.png" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/PDC/11.png"><img class="img-responsive img-thumbnail imgs" src="labs/PDC/11.png" alt="" /></a>
                      </div><!--//page-row-->
                </div><!--//page-content--> 
            </div><!--//page--> 

<div id="lab6" class="w3-container lab w3-animate-opacity">
	
<div class="page-content">
<br>  
<table background="white" hiegth="200px" width="1100px" color="black" border="1">
 <tr align="center" style="font-family:timesnewRoman;font-size:20px;"><td align="center" colspan="8"> <b>MASS TRANSFER OPERATION LAB</b></td></tr>
<tr  align="center" style="font-family:timesnewRoman;font-size:20px;"><td colspan="2">II Year B.Tech CH</td><td colspan="2">SEMESTER-III</td><td colspan="1">L</td><td colspan="1">P</td><td colspan="1">T</td><td colspan="1">C</td>
<tr  align="center" style="font-family:timesnewRoman;font-size:20px;"><td colspan="2">Code:CH2901</td><td colspan="2">Mass transfer Operation lab</td><td colspan="1">0</td><td colspan="1">0</td><td colspan="1">3</td><td colspan="1">2</td></tr>

<tr style="font-family:timesnewRoman;font-size:20px;" >
<td colspan="8"><b>&nbsp;Course Objective:</b><br>
&nbsp;1.To understand the basic principle of diffusions and convective mass transfer.<br><br>
&nbsp;2.To study the vapor liquid equilibrium liquid-liquid equilibrium etc.<br><br>
&nbsp;3.To study different separation operations and there use off for fluid-fluid operations <br><br>
&nbsp;4.To understand the characterstics of solid-liquid separations.
</tr><tr style="font-family:timesnewRoman;font-size:20px;"><td colspan='8'>
&nbsp;<b>Course Outcomes:&nbsp;</b>At the end of the course students are able to:
<br>
&nbsp;1.Perform experiments in relation to the Mass Transfer fundamentals.<br><br>
&nbsp;2.Find out diffusivity and mass transfer coefficients.<br><br>
&nbsp;3.Compare the equilibrium data developed with the theoretical data.<br><br>
&nbsp;4.Evaluate the effectiveness of different separation techniques.
</td></tr>
</table><br><br></center>   
                    <div class="row page-row">
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]"  href="labs/MT/1.jpg"><img class="img-responsive img-thumbnail imgs " src="labs/MT/1.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MT/2.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MT/2.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MT/3.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MT/3.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MT/4.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MT/4.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MT/5.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MT/5.jpg" alt="" /></a> 
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MT/6.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MT/6.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MT/7.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MT/7.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MT/8.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MT/8.jpg" hieght='200' width='200' alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MT/9.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MT/9.jpg" alt="" /></a>
                        <a class="prettyphoto col-md-3 col-sm-3 col-xs-6" rel="prettyPhoto[gallery]" href="labs/MT/10.jpg"><img class="img-responsive img-thumbnail imgs" src="labs/MT/10.jpg" alt="" /></a>
                        
               </div>
</div>
 </div>
 

<div id="lab7" class="w3-container lab w3-animate-opacity">
    <a class="prettyphoto col-md-12 col-sm-12 col-xs-12" rel="prettyPhoto[gallery]" title="LAB 7"></a>
    <center>
    <div class="page-content">
 <h1>Update Soon!!</h1>

</center>   
                    
                        
               </div><!--//page-row-->
                    </div><!--//page-content--> 
                            </div><!--//page-->

                            </div>
                                </div>



                    

  
</div>
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
