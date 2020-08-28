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
    border-radius: 140px;
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
    border-radius: 130px;
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
.our-team .social-links li a{
    width: 0px;
    height: 0px;
    
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
<h1><span style="font-family:arial;position:absolute;top:40%;left:41%;font-size:22px;"><u><b>WEBTEAM</u></b></span></h1>
<center>

<div class="container" style="position:relative;left:9%;top:80%;" >
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="assets/images/webteam/2.jpg">
                     </div>
                <div class="team-content">
                    <h3 class="team-title">Kiran Babu Muddam</h3>
                    <span class="post">CSE</span>
                    <p class="description">kiraniiitn@gmail.com</p>
                </div>
                
            </div>
        </div>
        <div sytle="position:absolute;">
 
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="assets/images/webteam/asd.png">
                </div>
                <div class="team-content">
                    <h3 class="team-title">vijaykumar G</h3>
                    <span class="post">CSE</span>
                    <p class="description">mail</p>
                </div>
                
    
       
                
                
            </div>
        </div>
    </div>
</div>
<br><br><br>
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->

   <?php include("footer.php"); ?>
    
</body>


</html> 

