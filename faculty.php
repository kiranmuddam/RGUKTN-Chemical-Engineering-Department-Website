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
    border-radius: 20px;
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
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="assets/images/faculty/1.jpg">
                    <div class="over-layer">
                        <ul class="social-links">
                            <li><a href="#">Ms.Mythili&nbsp;P</a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-content">
                    <h3 class="team-title">Ms.Mythili P</h3>
                    <span class="post">M Tech(IIT KGP)</span>
                    <p class="description">mail:hodch.nuz@rgutn.ac.in</p>
                </div>
                
            </div>
        </div>
 
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="assets/images/faculty/2.jpg">
                    <div class="over-layer">
                        <ul class="social-links">
                            <li><a href="#">Mr.MadhusudhanReddy&nbsp;M</a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-content">
                    <h3 class="team-title">Mr.MadhusudhanReddy&nbsp;M</h3>
                    <span class="post">M.Tech(IIT KGP)</span>
                    <p class="description">mail:madhu.chem@rgukt.in</p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="assets/images/faculty/3.jpg">
                    <div class="over-layer">
                        <ul class="social-links">
                            <li><a href="#">Mr.Chinthayya&nbsp;Naidu&nbsp;R</a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-content">
                    <h3 class="team-title">Mr.Chinthayya&nbsp;Naidu&nbsp;R</h3>
                    <span class="post">M.Tech(IIT KGP)</span>
                    <p class="description">mail:r.c.naidu@rgukt.in</p>
                </div>
                
            </div>
        </div>
    </div>
</div><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="assets/images/faculty/4.jpg">
                    <div class="over-layer">
                        <ul class="social-links">
                            <li><a href="#">Mr.Ravi&nbsp;Teja&nbsp;N</a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-content">
                    <h3 class="team-title">Mr.Ravi Teja N</h3>
                    <span class="post">M.Tech(IIT KGP)</span>
                    <p class="description">mail:raviteja@rgukt.in</p>
                </div>
                
            </div>
        </div>
 
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="assets/images/faculty/5.jpg">
                    <div class="over-layer">
                        <ul class="social-links">
                            <li><a href="#">Mr.Srinivas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-content">
                    <h3 class="team-title">Mr.Srinivas</h3>
                    <span class="post">M.Tech(IIT G)</span>
                    <p class="description">chem.srinivas9@rgukt.in</p>
                </div>
                
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="our-team">
                <div class="pic">
                    <img src="assets/images/faculty/6.jpg">
                    <div class="over-layer">
                        <ul class="social-links">
                            <li><a href="#">Mr.Rama&nbsp;Krishna</a></li>
                        </ul>
                    </div>
                </div>
                <div class="team-content">
                    <h3 class="team-title">Mr.Rama Krishna</h3>
                    <span class="post">M.Tech(IIT M)</span>
                    <p class="description">mail:krishna.mtech019@gmail.com</p>
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

