<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="format-detection" content="telephone=no" />
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="stylesheet" type="text/css" media="screen"
	href="css/style.css">
<link rel="icon" href="images/angielski.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/angielski.ico"
	type="image/x-icon" />
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
			<header>
				<div class="container_12">
					<article class="grid_12">
						<div class="inner-block">
							<h1>
								<a class='logo' href="index.php">ufc</a>
							</h1>
							<nav>
								<ul class="sf-menu responsive-menu">
									<li class="current"><a href="index.php">Główna</a></li>
									<li><a href="index2.php?m=3">O nas</a></li>
									<li><a href="index2.php?m=3">Kursy</a></li>
									<li><a href="index2.php?m=3">Cennik</a></li>
									<li><a href="index2.php?m=3">FAQ</a></li>
									<li><a href="index2.php?m=3">Promocje</a></li>
									<li><a href="index2.php?m=3">Kontakt</a></li>
								</ul>
								<div class="clear"></div>
							</nav>
							<div class="clear"></div>
						</div>
					</article>
					<div class="clear"></div>
				</div>
			</header>
			<div id="slide">
				<div class="container_12">
					<article class="grid_12">
						<div class="inner-block">
							<div class="slider camera_wrap camera_azure_skin" id="camera">

								<div data-src="images/slide1.jpg">
									<div class="banner camera_caption fadeFromBottom">
										<div class="div-banner">
											<!--  Education  is <span>an  investment</span><span>in  future </span>-->
										</div>
									</div>
								</div>
								<div data-src="images/slide3.jpg">
									<div class="banner camera_caption fadeFromBottom">
										<div class="div-banner">
											<!--   Z nami <span>angielski</span><span>jest łatwy ! </span> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<!--==============================content================================-->
		<section id="content">
			<div class="container_12">
				<div class="grid_4">
					<div class="inner-block">
						<div class="box" id="block">
							<a href="#"> <span></span> <em>Dla dzieci</em> <span>dobry start
									jest podstawą</span> <strong></strong>
							</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="inner-block">
						<div class="box" id="block-1">
							<a href="#"> <span></span> <em>Dla młodzieży</em> <span>świat
									pełen możliwości</span> <strong></strong>
							</a>
						</div>
					</div>
				</div>
				<div class="grid_4">
					<div class="inner-block">
						<div class="box" id="block-2">
							<a href="#"> <span></span> <em>Dla dorosłych</em> <span>awans w
									pracy i podróże</span> <strong></strong>
							</a>
						</div>
					</div>
				</div>

				<div class="clear"></div>
			</div>
		</section>

		<!--==============================footer=================================-->
		<footer>
			<div class="main-footer">
				<div class="container_12">
					<div class="grid_12">
						<div class="inner-block">
							<p>
								
							</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>