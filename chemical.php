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
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>

</head>
<body style="background-color:#d7d7d7;margin:auto">
    
    <!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
    <div id="wowslider-container1">
    <div class="ws_images"><ul>
        <li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_0"/></li>
        <li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_1"/></li>
        <li><img src="data1/images/4_psu1_copy.jpg" alt="4 psu1 copy" title="4 psu1 copy" id="wows1_2"/></li>
        <li><img src="data1/images/5_psu2.jpg" alt="5 psu2" title="5 psu2" id="wows1_3"/></li>
        <li><img src="data1/images/6_international_companies_copy.jpg" alt="6 international companies copy" title="6 international companies copy" id="wows1_4"/></li>
        <li><img src="data1/images/7_private_companies_copy.jpg" alt="7 private companies copy" title="7 private companies copy" id="wows1_5"/></li>
        <li><img src="data1/images/9_gate_copy.jpg" alt="9 gate copy" title="9 gate copy" id="wows1_6"/></li>
        <li><a href="http://wowslider.net"><img src="data1/images/10_higher_education_copy.jpg" alt="html5 slider" title="10 HIgher education copy" id="wows1_7"/></a></li>
        <li><img src="data1/images/11_research_copy.jpg" alt="11 Research copy" title="11 Research copy" id="wows1_8"/></li>
    </ul></div>
    <div class="ws_bullets"><div>
        <a href="#" title="1"><span><img src="data1/tooltips/1.jpg" alt="1"/></span></a>
        <a href="#" title="2"><span><img src="data1/tooltips/2.jpg" alt="2"/></span></a>
        <a href="#" title="4 psu1 copy"><span><img src="data1/tooltips/4_psu1_copy.jpg" alt="4 psu1 copy"/></span></a>
        <a href="#" title="5 psu2"><span><img src="data1/tooltips/5_psu2.jpg" alt="5 psu2"/></span></a>
        <a href="#" title="6 international companies copy"><span><img src="data1/tooltips/6_international_companies_copy.jpg" alt="6 international companies copy"/>5</span></a>
        <a href="#" title="7 private companies copy"><span><img src="data1/tooltips/7_private_companies_copy.jpg" alt="7 private companies copy"/></span></a>
        <a href="#" title="9 gate copy"><span><img src="data1/tooltips/9_gate_copy.jpg" alt="9 gate copy"/></span></a>
        <a href="#" title="10 HIgher education copy"><span><img src="data1/tooltips/10_higher_education_copy.jpg" alt="10 HIgher education copy"/></span></a>
        <a href="#" title="11 Research copy"><span><img src="data1/tooltips/11_research_copy.jpg" alt="11 Research copy"/></span></a>
    </div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net"></a></div>
    <div class="ws_shadow"></div>
    </div>  
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
                
    
       
                
                
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

