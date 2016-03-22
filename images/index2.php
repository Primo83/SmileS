<?php 

$m=$_GET['m'];

?>

<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8"> 
	<?php 
	if ($m == 2) { require("head/head_o_nas.php"); }
	if ($m == 3) { require("head/head_promocje.php"); }
	if ($m == 4) { require("head/head_kursy.php"); }
	if ($m == 5) { require("head/head_faq.php"); }
	if ($m == 6) { require("head/head_metoda.php"); }
	if ($m == 7) { require("head/head_kontakt.php"); }
	if ($m == 8) { require("head/head_cookie.php"); }
	if ($m == 9) { require("head/head_dla_dzieci.php"); }
	if ($m == 10) { require("head/head_dla_mlodziezy.php"); }
	if ($m == 11) { require("head/head_dla_doroslych.php"); }
	if ($m == 12) { require("head/head_dla_firm.php"); }
	if ($m == 13) { require("head/head_indywidualne.php"); }
	?>
    
    <meta name = "format-detection" content = "782 213 664" />
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
                        <a class='logo' href="index.php" title="Smileschool - Angielski Bydgoszcz">s</a>
                      </h1>
                         <nav> 
                           <ul class="sf-menu responsive-menu">
                           <?php
                           		if($m == NULL) {echo '<li class="current"><a  href="index.php" title="Strona główna Szkoły Języka Angielskiego w Bydgoszczy">Główna</a></li>';} else
            						{echo '<li ><a href="index.php"title="Strona główna Szkoły Języka Angielskiego w Bydgoszczy">Główna</a></li>';}
            					if($m == 2) {echo '<li class="current"><a  href="index2.php?m=2" title="O Smile School - Angielski Bydgoszcz Fordon">O nas</a></li>';} else
            						{echo '<li ><a href="index2.php?m=2" title="O Smile School - Angielski Bydgoszcz Fordon">O nas</a></li>';}      
                                if($m == 6) {echo '<li class="current"><a  href="index2.php?m=6" title="Metoda stosowana podczas nauki języka Angielskiego">Metoda</a></li>';} else
            						{echo '<li ><a href="index2.php?m=6" title="Metoda stosowana podczas nauki języka Angielskiego">Metoda</a></li>';}
            					if($m == 4 or $m == 9 or $m == 10 or $m == 11 or $m == 12 or $m == 13) {echo '<li class="current"><a  href="index2.php?m=4" title="Kursy z języka angielskiego w Bydgoszcz">Kursy</a></li>';} else
            						{echo '<li ><a href="index2.php?m=4" title="Kursy z języka angielskiego w Bydgoszcz">Kursy</a></li>';}	
            					if($m == 5) {echo '<li class="current"><a  href="index2.php?m=5" title="Angielski Bydgoszcz najczęściej zadawane pytania">FAQ</a></li>';} else
            						{echo '<li ><a href="index2.php?m=5" title="Angielski Bydgoszcz najczęściej zadawane pytania">FAQ</a></li>';}
            					if($m == 3) {echo '<li class="current"><a  href="index2.php?m=3" title="Kursy językowe Promocje">Promocje</a></li>';} else
            						{echo '<li ><a href="index2.php?m=3" title="Kursy językowe Promocje">Promocje</a></li>';}
            					if($m == 7) {echo '<li class="current"><a  href="index2.php?m=7" title="Bydgoszcz - Fordon">Kontakt</a></li>';} else
            						{echo '<li ><a href="index2.php?m=7" title="Bydgoszcz - Fordon">Kontakt</a></li>';}
            					
            						?>
                  			
                   
                   	

            		
                            </ul>
                            <div class="clear"></div>
                          </nav>
                       <div class="clear"></div>
                   </div>
                 </article>
                 <div class="clear"></div>               
      </header>
      <h1 class="h1male">ANGIELSKI BYDGOSZCZ</h1>
      </div>
      
   </div> 
		<!--==============================content================================-->
<?php


if ($m == NULL) { require("index.php"); }
if ($m == 2) { require("o_nas.php"); }
if ($m == 3) { require("promocje.php"); }
if ($m == 4) { require("kursy.php"); }
if ($m == 5) { require("faq.php"); }
if ($m == 6) { require("metoda.php"); }
if ($m == 7) { require("kontakt.php"); }
if ($m == 8) { require("cookie.php"); }
if ($m == 9) { require("dla_dzieci.php"); }
if ($m == 10) { require("dla_mlodziezy.php"); }
if ($m == 11) { require("dla_doroslych.php"); }
if ($m == 12) { require("dla_firm.php"); }
if ($m == 13) { require("indywidualne.php"); }
?>


	<!--==============================footer=================================-->		
	<footer>
      <div class="main-footer">
    <div class="container_12">
              <div class="grid_12">
                <div class="inner-block">
                  <p><img src="images/logo.png" alt="Angielski Bydgoszcz" style="width:55px; height:20px;"> &copy; 2014 All Rights Reserved &nbsp;&nbsp;<span>|</span>&nbsp;&nbsp;  </p>
                </div>
              </div>
                <div class="clear"></div>
        </div>
      </div>  
  </footer>
</div>	
</body>
</html>