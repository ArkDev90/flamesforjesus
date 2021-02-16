
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

			<div class="page-head" data-bg-image="images/page-head-1.jpg">
				<div class="container">
					<h2 class="page-title">Events</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<h2 class="section-title">Events</h2>
								<ul class="seremon-list large">
									<li>
										<image height="120px" width="120px" src="<?php echo HOMEMAIN ?>/public/updates/2018_05_20_stonino.jpg"></image>
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">Prayer for Healing Made Part of the Sto. Niño Mass too!</a></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-user"></i> Alan Ray</div>
												<div class="date"><i class="fa fa-calendar"></i>May 27 2018</div>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam molestiae doloribus deserunt minus a dicta labore beatae maiores assumenda. Laudantium nihil, maxime molestiae soluta doloribus magnam eum. Nesciunt, ea, sint.</p>
										</div>
									</li>
									<li>
										<image height="120px" width="120px" src="<?php echo HOMEMAIN ?>/public/updates/2018_05_20_stefanus.jpg"></image>
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">The Healing Activity at Saint Stefanus Church (Monastery of St. Augustine) in Ghent</a></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-user"></i> David Clark</div>
												<div class="date"><i class="fa fa-calendar"></i>May 20, 2018</div>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dignissimos corporis quidem at nobis impedit perspiciatis, accusantium qui natus amet sapiente voluptate doloribus laboriosam officia deserunt possimus cumque inventore. Ipsum.</p>
										</div>
									</li>
									<li>
										<image height="120px" width="120px" src="<?php echo HOMEMAIN ?>/public/updates/2018_05_19_healing.jpg"></image>
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">An Evening of Healing with CARA NOVA, a Belgian Catholic Charismatic Community in Ghent</a></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-user"></i> anthony roberts</div>
												<div class="date"><i class="fa fa-calendar"></i>May 23 2018</div>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nisi rem est amet, ducimus, aut, atque error accusantium facilis ab adipisci! Cumque, corrupti sapiente dolores saepe adipisci dignissimos quod unde.</p>
										</div>
									</li>
									<li>
										<image height="120px" width="120px" src="<?php echo HOMEMAIN ?>/public/updates/2018_05_19_pilgrimage.jpg"></image>
										<div class="seremon-detail">
											<h3 class="seremon-title"><a href="#">The Pilgrimage to Kevelaer, Germany</a></h3>
											<div class="seremon-meta">
												<div class="pastor"><i class="fa fa-user"></i> David Clark</div>
												<div class="date"><i class="fa fa-calendar"></i>May 19, 2018</div>
											</div>
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam dignissimos corporis quidem at nobis impedit perspiciatis, accusantium qui natus amet sapiente voluptate doloribus laboriosam officia deserunt possimus cumque inventore. Ipsum.</p>
										</div>
									</li>
								</ul>

								
							</div>
							<div class="sidebar col-md-3 col-md-offset-1">

								<div class="widget">
									<h3 class="widget-title">Gallery</h3>

									<?php
										function random_pic($dir = 'public/gallery')
										{
											$files = glob($dir . '/*.*');
											$file = array_rand($files);
											return $files[$file];
										}
									?>

									<div class="galery-thumb">
										<a href="gallery.php"><img height="100px" width="100px" src="<?php echo random_pic()?>" alt=""></a>
										<a href="gallery.php"><img height="100px" width="100px" src="<?php echo random_pic()?>" alt=""></a>
										<a href="gallery.php"><img height="100px" width="100px" src="<?php echo random_pic()?>" alt=""></a>
										<a href="gallery.php"><img height="100px" width="100px" src="<?php echo random_pic()?>" alt=""></a>
										<a href="gallery.php"><img height="100px" width="100px" src="<?php echo random_pic()?>" alt=""></a>
										<a href="gallery.php"><img height="100px" width="100px" src="<?php echo random_pic()?>" alt=""></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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