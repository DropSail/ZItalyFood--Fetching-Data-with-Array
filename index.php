<?php

if ( file_exists( __DIR__ .'/autoload.php')){
	 require_once __DIR__ .'/autoload.php';
}

?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zItalyFood | Free Restaurant Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/slide.css">
	<link rel="stylesheet" href="css/menu.css">
	<!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>
<body>
	<style>
		p{font-family:<?php echo $ThemeOptions['design']['font'];?>}
		span{font-family:<?php echo $ThemeOptions['design']['font'];?>}
		h1{font-family:<?php echo $ThemeOptions['design']['font'];?>}
		h2{font-family:<?php echo $ThemeOptions['design']['font'];?>}
		a.button{background: <?php echo $ThemeOptions['design']['background'];?>}
	</style>
<div class="wrap-body">
	<!--///////////////////////////////////////Top-->
	<div class="top">
		<div class="zerogrid">
			<ul class="number f-left">
				<li class="mail"><p ><?php echo $ThemeOptions['header']['contact']['email'];?></p></li>
				<li class="phone"><p ><?php echo $ThemeOptions['header']['contact']['phone'];?></p></li>
			</ul>
			<ul class="top-social f-right">
				<li><a href="#"><?php echo $ThemeOptions['header']['social_links']['twitter'];?></a></li>
				<li><a href="#"><?php echo $ThemeOptions['header']['social_links']['facebook'];?></a></li>
				
				<li><a href="#"><?php echo $ThemeOptions['header']['social_links']['linkedin'];?></a></li>
				<li><a href="#"><?php echo $ThemeOptions['header']['social_links']['instagram'];?></a></li>
			</ul>
		</div>
	</div>
	<!--////////////////////////////////////Header-->
	<header>
		<div class="zerogrid">
			<center><div class="logo"><img src="<?php echo $ThemeOptions['header']['logo']['logo_image'];?>"></div></center>
		</div>
	</header>
	<div class="site-title">
		<div class="zerogrid">
			<div class="row">
				<h2 class="t-center"><?php echo $ThemeOptions['header']['site_title']['title_text'];?></h2>
			</div>
		</div>
	</div>
    <!--//////////////////////////////////////Menu-->
    <a href="#" class="nav-toggle">Toggle Navigation</a>
    <nav class="cmn-tile-nav">
		<ul class="clearfix">
		<?php foreach ($ThemeOptions['nav_menu'] as $menu) : ?>
			<li class="colour-1"><a href="<?php echo $menu['menu_link'];?>"><?php echo $menu['menu_name'];?></a></li>
			
			<?php endforeach;?>
		</ul>
    </nav>
	
	<div class="zerogrid">
		<div class="callbacks_container">
			<ul class="rslides" id="slider4">
				<?php foreach ($ThemeOptions['slider'] as $slide) : ?>
				<li>
					<img src="<?php echo $slide['slider_image'];?>" alt="">
					<div class="caption">
						<h2><?php echo $slide['slider_title'];?></h2></br>
						<p><?php echo $slide['slider_desc'];?> </p>
					</div>
				</li>
				
				<?php endforeach;?>
				
			</ul>
		</div>
	</div>
	
<!--////////////////////////////////////Container-->
<section id="container" class="index-page">
	<div class="wrap-container zerogrid">
		<!-----------------content-box-1-------------------->
		<section class="content-box box-1">
			<div class="zerogrid">
				<div class="row box-item"><!--Start Box-->
					<h2><?php echo $ThemeOptions['slogan']['slogan_title'];?></h2>
					<span><?php echo $ThemeOptions['slogan']['slogan_desc'];?></span>
				</div>
			</div>
		</section>
		<!-----------------content-box-2-------------------->
		<section class="content-box box-2">
			<div class="zerogrid">
				<div class="row wrap-box"><!--Start Box-->
					<div class="header">
						<h2><?php echo $ThemeOptions['welcome']['welcome_title'];?></h2>
						<hr class="line">
						<span><?php echo $ThemeOptions['welcome']['welcome_desc'];?></span>
					</div>
					<div class="row">
					
					<?php foreach ($ThemeOptions['boxitem'] as $myitem) : ?>
						<div class="col-1-3">
							<div class="wrap-col">

									<div class="box-item">
									<span class="ribbon"><?php echo $myitem['ribbon'];?><b></b></span>
									<img src="<?php echo $myitem['boxitem_image'];?>" alt="">
									<p><?php echo $myitem['boxitem_desc'];?></p>
									<a href="<?php echo $myitem['boxbtn']['boxbtn_link'];?>" class="button button-1"><?php echo $myitem['boxbtn']['boxbtn_title'];?></a>
								</div>

								
							</div>
						</div>
						<?php endforeach; ?>

						
						
					</div>
				</div>
			</div>
		</section>
	</div>
</section>

<!--////////////////////////////////////Footer-->
<footer class="zerogrid">
	<div class="wrap-footer">
		<div class="row">
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Customer Testimonials</h4>
					<div class="row">
						<img src="images/a-1.jpg">
						<h5>Nick Roach</h5>
						<p>Pellentesque elementum leo et justo dapibus convalli. In justo nibh, congue nec dapibus ac, placerat eget sem. Nunc consequat felis non elit ultricies in varius massa laoreet. Aenean lectus nisl, ellentesque in fermentum sit amet, convallis a lorem condimentum mollis. Aenean lectus nisl, ellentesque in fermentum sit amet.</p>
					</div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Location</h4>
					<div class="wrap-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="200" frameborder="0" style="border:0"></iframe></div>
				</div>
			</div>
			<div class="col-1-3">
				<div class="wrap-col">
					<h4>Open Daily</h4>
					<p><span>mon.</span> 17:00 - 21:00</p>
					<p><span>tue.-wed.</span> 16:30 – 21:00</p>
					<p><span>thu.-sat.</span> 16:30 – 21:00</p>
					<p><span>sun.</span> 11:00 – 21:00</p>
					<p><span>Need help getting home?</span></br>
					We will call a cab for you!</p>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<div class="wrapper">
			Copyright 2015 - Designed by <a href="https://www.zerotheme.com">ZEROTHEME</a>
			<ul class="quick-link f-right">
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Terms of Use</a></li>
			</ul>
		</div>
	</div>
</footer>


	<!-- js -->
	<script src="js/classie.js"></script>
	<script src="js/demo.js"></script>

	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
	$(function () {
	  // Slideshow 4
	  $("#slider4").responsiveSlides({
		auto: true,
		pager: false,
		nav: false,
		speed: 500,
		namespace: "callbacks",
		before: function () {
		  $('.events').append("<li>before event fired.</li>");
		},
		after: function () {
		  $('.events').append("<li>after event fired.</li>");
		}
	  });
	});
	</script>
</div>
</body></html>