<?php 

$m=$_GET['m'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8"> 
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name"> 
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" /> 
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.hoverIntent.minified.js"></script>
    <script src="js/jquery.twitter.js"></script>
    <script src="js/forms.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
     <script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
    <script src="js/script.js"></script>
    <script>
      jQuery
    $(window).load(function(){
      jQuery('#camera').camera({
        pagination      : false, 
        navigation      : false,
        transPeriod     : 2000, 
        fx          : 'simpleFade', 
        time: 7000
      });
    });
    </script>
    <!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<!--==============================header=================================-->
<div class="main">
     <div class="head">
     	  <div class="container_12">   
         <header class="bdb-header">               
                 <article class="grid_12">                   
                   <div class="inner-block">
                      <h1>
                        <a class='logo' href="index.php">Smileschool</a>
                      </h1>
                         <nav> 
                           <ul class="sf-menu responsive-menu">
                           <?php
                           		if($m == NULL) {echo '<li class="current"><a  href="index.php">Główna</a></li>';} else
            						{echo '<li ><a href="index.php">Główna</a></li>';}
            					if($m == 2) {echo '<li class="current"><a  href="index2.php?m=2">O nas</a></li>';} else
            						{echo '<li ><a href="index2.php?m=2">O nas</a></li>';}      
                                if($m == 3) {echo '<li class="current"><a  href="index2.php?m=3">Kursy</a></li>';} else
            						{echo '<li ><a href="index2.php?m=3">Kursy</a></li>';}
            					if($m == 4) {echo '<li class="current"><a  href="index2.php?m=4">Cennik </a></li>';} else
            						{echo '<li ><a href="index2.php?m=4">Cennik </a></li>';}	
            					if($m == 5) {echo '<li class="current"><a  href="index2.php?m=5">FAQ</a></li>';} else
            						{echo '<li ><a href="index2.php?m=5">FAQ</a></li>';}
            					if($m == 6) {echo '<li class="current"><a  href="index2.php?m=6">Promocje</a></li>';} else
            						{echo '<li ><a href="index2.php?m=6">Promocje</a></li>';}
            					if($m == 7) {echo '<li class="current"><a  href="index2.php?m=7">Kontakt</a></li>';} else
            						{echo '<li ><a href="index2.php?m=7">Kontakt</a></li>';}
                  			?>
                   
                   	

            		
                            </ul>
                            <div class="clear"></div>
                          </nav>
                       <div class="clear"></div>
                   </div>
                 </article>
                 <div class="clear"></div>               
      </header>
      </div>
   </div> 
		<!--==============================content================================-->
<?php


if ($m == NULL) { require("index.php"); }
if ($m == 2) { require("2.php"); }
if ($m == 3) { require("3.php"); }
if ($m == 4) { require("4.php"); }
if ($m == 5) { require("5.php"); }
if ($m == 6) { require("6.php"); }
if ($m == 7) { require("7.php"); }
if ($m == 8) { require("8.php"); }
if ($m == 9) { require("4.php"); }
if ($m == 10) { require("5.php"); }
if ($m == 11) { require("6.php"); }
if ($m == 12) { require("7.php"); }
if ($m == 13) { require("8.php"); }
?>


	<!--==============================footer=================================-->		
	<footer>
      <div class="main-footer">
    <div class="container_12">
              <div class="grid_12">
                <div class="inner-block">
                  <p>UFC College &copy; 2013 All Rights Reserved &nbsp;&nbsp;<span>|</span>&nbsp;&nbsp; <a href="index2.php?m=8">Privacy Policy</a> </p>
                </div>
              </div>
                <div class="clear"></div>
        </div>
      </div>  
  </footer>
</div>	
</body>
</html>