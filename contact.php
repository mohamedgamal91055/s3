<?php
    session_start();
    include("php/captcha.php");
    $_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>al-sahaba &#8211; Kulturzentrum</title>
		<meta name="description" content="EXCEPTION – Responsive Business HTML Template">
		<meta name="author" content="EXCEPTION">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="images/logo.jpeg">
		    	
		<!-- CSS StyleSheets -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/prettyPhoto.css">
		<link rel="stylesheet" href="css/slick.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		<!--[if lt IE 9]>
	    	<link rel="stylesheet" href="css/ie.css">
	    	<script type="text/javascript" src="js/html5.js"></script>
	    <![endif]-->


		<!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
		<link rel="stylesheet" href="css/skins/skin7.css">
	
	</head>
	<body>
	    
	    <!-- site preloader start -->
	    <div class="page-loader">
	    	<div class="loader-in"></div>
	    </div>
	    <!-- site preloader end -->
	    
	    <div class="pageWrapper">
		    
		   

			<!-- Header Start -->
			<div id="headWrapper" class="clearfix">
		    	
		    	<!-- top bar start -->
		    	<div class="top-bar">
				    <div class="container">
						<div class="row">
							<div class="cell-8">
							    <ul>
								    <li><a href="mailto:info@al-sahaba.de"><i class="fa fa-envelope"></i>info@al-sahaba.de</a></li>
								    <li><span><i class="fa fa-phone"></i> IBAN: DE88 2405 0110 0065 1684 52 BIC: NOLADE21LBG</span></li>
                                    
                                </ul>
							</div>
							<div class="cell-4 right-bar">
					    		<ul class="right">
						    	    <li><a href="https://www.facebook.com/Al-Sahaba-Kulturzentrum-eV-الصحابة-مركز-ثقافي-في-لينوبورغ-174630099396851"><i class="fa fa-facebook"></i></a></li>
						    	   
						        </ul>
							</div>
						</div>
				    </div>
			    </div>
			    <!-- top bar end -->
			    
			    <!-- Logo, global navigation menu and search start -->
			    <header class="top-head top-head-4" data-sticky="true">
				    <div class="container">
					    <div class="row">
							<div class="logo" style="margin-bottom: 0 !important">
								<a href="index.html"><img src="images/logo.jpeg" style="max-width: 50%"></a>
							</div>
						</div>
					</div>
					<div class="container">
					    <div class="nav-4">
						    <div class="gray-nav">
							    <!-- top navigation menu start -->
							    <nav class="top-nav">
								    <ul>
								      <li><a href="index.html"><i class="fa fa-home"></i><span>Home</span></a>
								      </li>
								      <li><a href="blog.html"><i class="fa fa-key"></i><span>Blog</span></a>
								      </li>
								      <li><a href="activity.html"><i class="fa fa-copy"></i><span>Activity</span></a>
								      </li>
									  <li><a href="galerry.html"><i class="fa fa-gift"></i><span>Galerie</span></a>
									  </li>
								      <li class="selected"><a href="contact.php"><i class="fa fa-suitcase"></i><span>Beratungsleistungen</span></a>
								      </li>
								     
								     
								    </ul>
							    </nav>
							    <!-- top navigation menu end -->
							    
							  
	
							</div>
					    </div>
				    </div>
			    </header>
			    <!-- Logo, Global navigation menu and search end -->
			    
			</div>
			<!-- Header End -->
			
			<!-- Content Start -->
			<div id="contentWrapper">
				<div class="sectionWrapper">
				<div class="container">
						<div class="row">
			    			<div class="cell-6 contact-form fx" data-animate="fadeInLeft" id="contact">
			    				<h3 class="block-head">konsultiere das Zentrum</h3>
			    				<mark id="message"></mark>
                                <form class="form-signin cform" method="post" action="php/contact.php" id="cform" autocomplete="on">
			    					<div class="form-input">
				    					<label>Name<span class="red">*</span></label>
				    					<input type="text" name="name" id="name" required="required">
			    					</div>
			    					<div class="form-input">
			    						<label>Email<span class="red">*</span></label>
			    						<input name="email" type="email" id="email" required="required">
			    					</div>
			    					<div class="form-input">
			    						<label>Message<span class="red">*</span></label>
			    						<textarea name="message" cols="40" rows="7" id="messageTxt" spellcheck="true" required="required"></textarea>
			    					</div>
			    					
			    					<div class="form-input">
			    						<input id="submit" name="submit" type="submit" class="btn btn-large main-bg" value="Submit">
			    					</div>

			    				</form>
			    			</div>
			    			<div class="cell-6 contact-form fx" data-animate="fadeInLeft" id="contact">
			    				<h3 class="block-head">Feedback senden</h3>
			    				<mark id="message"></mark>
                                <form class="form-signin cform" method="post" action="php/contact.php" id="cform" autocomplete="on">
			    					<div class="form-input">
				    					<label>Name<span class="red">*</span></label>
				    					<input type="text" name="name" id="name" required="required">
			    					</div>
			    					
			    					<div class="form-input">
			    						<label>Phone</label>
			    						<input name="phone" type="text" id="phone">			    						
			    					</div>
			    					<div class="form-input">
			    						<label>Message<span class="red">*</span></label>
			    						<textarea name="message" cols="40" rows="7" id="messageTxt" spellcheck="true" required="required"></textarea>
			    					</div>
			    					
			    					<div class="form-input">
			    						<input id="submit" name="submit" type="submit" class="btn btn-large main-bg" value="Submit">
			    					</div>

			    				</form>
			    			</div>
						</div>
					</div>
				</div>
				
			
				
				
				
			</div>
			<!-- Content End -->
			
			<!-- Footer start -->
		    <footer id="footWrapper">
		    
					<div class="footer-top">
							<div class="container">
								<div class="row">
									
									
									<hr class="hr-style5">
									<div class="clearfix"></div>
									
									<!-- contact us footer cell start -->
									<div class="cell-7">
										<h3 class="block-head">Keep in Touch</h3>
										<ul>
											<li class="footer-contact"><i class="fa fa-globe"></i><span><a href="#">info@al-sahaba.de</a></span></li>
											<li class="footer-contact"><i class="fa fa-phone"></i><span>+49 172 6961513 / +49 1726961513</span></li>
											<li class="footer-contact"><i class="fa fa-map-marker"></i> <span>Für den Aufbau unsere Moschee brauchen wir noch ihre Unterstützung. Bankverbindung: Sparkasse Al-Sahaba Kulturzentrum e.V. IBAN: DE88 2405 0110 0065 1684 52 BIC: NOLADE21LBG</span></li>
										</ul>
									</div>
									<!-- contact us footer cell end -->
									
								
									
									<!-- flickr stream footer cell start -->
									<div class="cell-3 flickr-stream-w">
										<a href="http://al-sahaba.de/"><img class="img-responsive" src="images/logoo.png"></a>
									</div>
									<!-- flickr stream footer cell start -->
									
								</div>
							</div>	
						</div>
			    <!-- footer bottom bar start -->
			    <div class="footer-bottom">
				    <div class="container">
			    		<div class="row">
				    		<!-- footer copyrights left cell -->
				    		<div class="copyrights cell-5">&copy; Copyrights <b>Al-sahaba</b> 2018. All rights reserved. </div>
				    		
				    		<!-- footer social links right cell start -->
						    <div class="cell-7">
							    <ul class="social-list right">
								    <li class="skew-25"><a href="https://www.facebook.com/Al-Sahaba-Kulturzentrum-eV-الصحابة-مركز-ثقافي-في-لينوبورغ-174630099396851" data-title="facebook" data-tooltip="true"><span class="fa fa-facebook skew25"></span></a></li>
								    <li class="skew-25"><a href="#" data-title="twitter" data-tooltip="true"><span class="fa fa-twitter skew25"></span></a></li>
							    </ul>
						    </div>
						    <!-- footer social links right cell end -->
						    
			    		</div>
				    </div>
			    </div>
			    <!-- footer bottom bar end -->
			    
		    </footer>
		    <!-- Footer end -->
		    
			<!-- Back to top Link -->
			<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
		    
	    </div>
	    

	    <!-- Load JS siles -->	
 		<script type="text/javascript" src="js/jquery.min.js"></script>
	    
	    <!-- Waypoints script -->
		<script type="text/javascript" src="js/waypoints.min.js"></script>
		
		<!-- slick slider carousel -->
		<script type="text/javascript" src="js/slick.min.js"></script>
		<!-- PrettyPhoto script -->
		<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
		<!-- NiceScroll plugin -->
		<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
		
		<!-- general script file -->
		<script type="text/javascript" src="js/script.js"></script>
	</body>
</html>