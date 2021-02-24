
<?php

include 'configuration/initialize.php';

$articleid = $_GET["id"]
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
					<h2 class="page-title">ARTICLES</h2>
				</div>
			</div>

			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							
							<?php
								if(file_exists('public/articles/'.$articleid.'.php'))
								{
									include 'public/articles/'.$articleid.'.php';
								}
								else{
								?>
								<div class="content col-md-8" id="content">
									<b><h1 style="font-size:180%" class="section-title">File Not Found</h2></b>
								</div>
									
								<?php
								}
								
							?>

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
										<a target="_blank" href="<?php echo $randpic = random_pic()?>"><img height="125px" width="125px" src="<?php  echo $randpic?>" alt=""></a>
										<a target="_blank" href="<?php echo $randpic = random_pic()?>"><img height="125px" width="125px" src="<?php  echo $randpic?>" alt=""></a>
										<a target="_blank" href="<?php echo $randpic = random_pic()?>"><img height="125px" width="125px" src="<?php  echo $randpic?>" alt=""></a>
										<a target="_blank" href="<?php echo $randpic = random_pic()?>"><img height="125px" width="125px" src="<?php  echo $randpic?>" alt=""></a>
										<a target="_blank" href="<?php echo $randpic = random_pic()?>"><img height="125px" width="125px" src="<?php  echo $randpic?>" alt=""></a>
										<a target="_blank" href="<?php echo $randpic = random_pic()?>"><img height="125px" width="125px" src="<?php  echo $randpic?>" alt=""></a>
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