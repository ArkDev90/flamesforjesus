
<?php

include 'configuration/initialize.php';


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>FLAMES OF FIRE FOR JESUS</title>

		<link rel="icon" href="<?php echo HOMEMAIN ?>/assets/images/logo.png">

		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet" type="text/css">

		<link href="http://fonts.cdnfonts.com/css/bebas" rel="stylesheet">
		<link href="http://fonts.cdnfonts.com/css/colaborate" rel="stylesheet">
		<link href="http://fonts.cdnfonts.com/css/josefin-sans-std" rel="stylesheet">
		<link href="http://fonts.cdnfonts.com/css/negotiate" rel="stylesheet">
                
                
                
		<!-- Loading third party fonts -->
		<link href="fonts/novecento-font/novecento-font.css" rel="stylesheet" type="text/css">
		
                
		

		<!-- Loading main css file -->
		<link rel="stylesheet" href="<?php echo HOMEMAIN ?>/assets/css/style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>
		<div class="site-content">
			
			<?php
			include 'layout/header.php';
			?>

			<!-- .site-header -->

			<div class="hero">
				<div class="slides">
					<li data-bg-image="<?php echo HOMEMAIN ?>/assets/images/local.png">
						<div class="container">
							<div class="slide-content">
								<small class="slide-subtitle">Guiding light to Communities</small>
								<h2 class="slide-title">Our Local Ministries</h2>

								<a href="#" class="button" style="color:white">See our local ministries</a>
							</div>
						</div>
					</li>

					<li data-bg-image="<?php echo HOMEMAIN ?>/assets/images/office.png">
						<div class="container">
							<div class="slide-content">
								<small class="slide-subtitle">Guiding light to Communities</small>
								<h2 class="slide-title">Our Office Ministries</h2>

								<a href="#" class="button" style="color:white">See our office ministries</a>
							</div>
						</div>
					</li>

					<li data-bg-image="<?php echo HOMEMAIN ?>/assets/images/youth.png">
						<div class="container">
							<div class="slide-content">
								<small class="slide-subtitle">Guiding light to our youth</small>
								<h2 class="slide-title">Young Flames for Jesus </h2>

								<a href="#" class="button" style="color:white">See our YFJ PROVINCIAL  BRANCHES</a>
							</div>
						</div>
					</li>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<h2 class="section-title">Recent updates</h2>

						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<image class="news-image" src="<?php echo HOMEMAIN ?>/public/updates/2018_05_20_stonino.jpg"></image>
									<h3 class="news-title"><a href="#">Prayer for Healing Made Part of the Sto. Niño Mass too!</a></h3>
									<small class="date"><i class="fa fa-calendar"></i>May 27 2018</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<image class="news-image" src="<?php echo HOMEMAIN ?>/public/updates/2018_05_20_stefanus.jpg"></image>
									<h3 class="news-title"><a href="#">The Healing Activity at Saint Stefanus Church (Monastery of St. Augustine) in Ghent</a></h3>
									<small class="date"><i class="fa fa-calendar"></i>May 20, 2018</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<image class="news-image" src="<?php echo HOMEMAIN ?>/public/updates/2018_05_19_healing.jpg"></image>
									<h3 class="news-title"><a href="#">An Evening of Healing with CARA NOVA, a Belgian Catholic Charismatic Community in Ghent</a></h3>
									<small class="date"><i class="fa fa-calendar"></i>May 23 2018</small>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="news">
									<image class="news-image" src="<?php echo HOMEMAIN ?>/public/updates/2018_05_19_pilgrimage.jpg"></image>
									<h3 class="news-title"><a href="#">The Pilgrimage to Kevelaer, Germany</a></h3>
									<small class="date"><i class="fa fa-calendar"></i>May 19, 2018</small>
								</div>
							</div>
							
							

						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->

				<div class="fullwidth-block" id="communities">
					<div class="container">
						<div class="row">
							<div class="col-lg-4 col-sm-12">
								<h2 class="section-title">Local Communities</h2>
								<ul class="seremon-list">
									<li>
										<img height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">FOFJ – CENTER</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i> Latukan St.,  Manresa, Quezon City</div>
											</div>
										</div>
									</li>
									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">FOFJ – SAN ILDEFONSO</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i> San Ildefonso, Bulacan</div>
											</div>
										</div>
									</li>
									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">FOFJ – SAN MATEO</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i> San Mateo, Rizal</div>
											</div>
										</div>
									</li>

									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">FOFJ – SOUTH</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i> Las Pińas City</div>
											</div>
										</div>
									</li>

									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">FOFJ-WEDDED HEARTS FOR JESUS</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i> Las Pinas City</div>
											</div>
										</div>
									</li>
									
								</ul>

						
							</div>

							<div class="col-lg-4 col-sm-12">
								<h2 class="section-title">Office Ministries</h2>
								<ul class="seremon-list">
									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">PHILIPPINE NATIONAL BANK</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i> Financial Center, Pasay City</div>
											</div>
										</div>
									</li>
									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">BUREAU OF PLANT INDUSTRY</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i> BUREAU OF PLANT INDUSTRY</div>
											</div>
										</div>
									</li>
									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">DEPARTMENT OF SCIENCE & TECHNOLOGY</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i> Bicutan,  Taguig City</div>
											</div>
										</div>
									</li>

									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">THE MAKATI GROUP</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i> Don Bosco Parish, Makati City</div>
											</div>
										</div>
									</li>

				
									
								</ul>

							</div>

							<div class="col-lg-4 col-sm-12">
								<h2 class="section-title">YFJ Provincial Branches</h2>
								<ul class="seremon-list">
									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">Luzon</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i>BAGUIO CITY</div>
											</div>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i>BARLIG, MOUNTAIN PROVINCE</div>
											</div>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i>PUERTO PRINCESA, PALAWAN</div>
											</div>
										</div>
									</li>
									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">VISAYAS</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i>TAGBILARAN, BOHOL</div>
											</div>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i>ILOILO CITY</div>
											</div>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i>GUIMARAS CITY</div>
											</div>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i>BANGA, AKLAN</div>
											</div>
										</div>
									</li>

									<li>
										<img  height="60px"  width="60px"  src="<?php echo HOMEMAIN ?>/assets/images/logo.png" alt="">
										<div class="seremon-detail">
											<h3 class="seremon-title"><b><a href="#">MINDANAO</a></b></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i>DAVAO CITY</div>
											</div>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-map-marker"></i>CAGAYAN DE ORO CITY</div>
											</div>
										</div>
									</li>
						
				
									
								</ul>

							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- section -->
			</main> <!-- .main-content -->

			<?php
			include 'layout/footer.php';
			?>
			<!-- .site-footer -->

		</div>
		

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>