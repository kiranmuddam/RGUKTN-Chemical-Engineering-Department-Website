<style type="text/css">
    .hclass{
        text-align: center;
        border-color: grey;
    }
    div.hclass{
        background-color: grey;
    }
.our-team .pic{
    position: relative;
    overflow: hidden;
}
.our-team .pic img{
    width: 65%;
    height: 230px;
    border-radius: 110px;
}
.our-team .over-layer{
    width: 65%;
    height: 100%;
    position: absolute;
    bottom: -100%;
    left: 0;
    background: rgba(156, 136, 185, 0.7);
    transition: all 0.5s ease 0s;
}
.our-team:hover .over-layer{
    bottom: 0;
}
.our-team .over-layer:before{
    content: "";
    width: 90%;
    height: 0;
    position: absolute;
    top: 5%;
    left: 5%;
    border-top: 5px solid rgba(255,255,255,0.7);
    border-left: 5px solid rgba(255,255,255,0.7);
    opacity: 0;
    transition: all 0.5s ease 0.5s;
}
.our-team:hover .over-layer:before{
    opacity: 1;
    height: 90%;
}
.our-team .social-links{
    padding: 0;
    margin: 0;
    
    text-align: center;
    font-size:15px;
    position: absolute;left:25%;
    top: 45%;
    transform: scale(0);
    opacity: 0;
    transition: all 0.5s ease 1s;
}
.our-team:hover .social-links{
    opacity: 1;
    transform: scale(1);
}
.our-team .social-links li{
    display: inline-block;
    margin-left: 0px;
}
.our-team .social-links li a{
    width: 0px;
    height: 0px;
    line-height: 30px;
    display: block;
    font-size: 13px;
    color: #fff;
    background: rgba(11, 32, 56, 0.7);
}
.our-team .team-content{
    background: #f3f5f7;
    padding: 30px 25px;
    width:65%;
}
.our-team .team-title{
    font-size: 18px;
    font-weight: 700;
    color: #5d5e5e;
    margin: 0 0 5px 0;
}
.our-team .post{
    display: block;
    font-size: 16px;
    font-style: italic;
    color: #898989;
    margin-bottom: 15px;
}
.our-team .post:after{
    content: "";
    display: block;
    width: 35px;
    height: 3px;
    background: #9c88b9;
    margin-top: 7px;
}
.our-team .description{
    font-size: 14px;
    color: #6091BA;
}
.our-team .read{
    display: inline-block;
    font-size: 14px;
    color: #fff;
    text-transform: uppercase;
    padding: 8px 8px 8px 50px;
    background: #6091BA;
    z-index: 1;
    position: relative;
    transition: all 0.5s ease 0s;
}
.our-team .read:hover{
    background: #6dc1b3;
    text-decoration: none;
    color: #000;
}
.our-team .read:after{
    content: "";
    width: 36px;
    height: 100%;
    background: #9c88b9;
    position: absolute;
    top: 0;
    right: -18px;
    transform: skewX(-45deg);
    z-index: -1;
    transition: all 0.5s ease 0s;
}
.our-team .read:hover:after{
    background: #6dc1b3;
}
@media screen and (max-width: 990px){
    .our-team{ margin-bottom: 0px; }
}
</style>
<?php include("header.php");?>

<html>
<head>
    <title></title>
</head>
<body>

</body>
</html>");?>
<center>
    <div class="fb3d-modal">
  <a href="#" class="cmd-close"><span class="glyphicon glyphicon-remove"></span></a>
  <div class="mount-container">

<div class="container">
    <div class="row">
   </body>
<div class="well">
  <div class="books">
    <div class="thumb">

     <a href="books/gatebrochure.pdf" target="blank"><img id="gatebrochure" src="books/thumbs/2018.png" class="btn" alt="GATE-2018-brochure" height="300" width="250" ></a></img>
      <a href="books/GATE-2019-Brochure.pdf" target="blank"> <img id="gatebrochure" src="books/thumbs/2019.png" class="btn" alt="GATE-2018-brochure" height="300" width="250" ></a></img>

  <a href="books/GATE 2019 Syllabus.pdf" target="blank"><img id="gatebrochure" src="books/thumbs/syllabus.png" class="btn" alt="GATE-2018-brochure" height="300" width="250" ></a></img>
 
      

 </div>
</div>
    </div>
    <div class="caption">
      Click on books to read!!!
    </div>
  </div>
</div>
</div>
       
</div><br><br><br>
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->

   <?php include("footer.php"); ?>
    


</html>	

