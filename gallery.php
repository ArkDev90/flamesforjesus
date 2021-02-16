
<?php

include 'configuration/initialize.php';

// How many images should be shown on each apge?
$limit = 8; 
 
// How many adjacent pages should be shown on each side?
$adjacents = 3;
 
// This is the name of file ex. I saved this file as index.php.
$targetpage = 'gallery.php';
 
// All iamges holder, defalut value is empty
$allImages = [];
 
// Target images directory
$image_dir = 'public/gallery/';
// Iterator over the directory
$dir = new DirectoryIterator(dirname(__FILE__).DIRECTORY_SEPARATOR.$image_dir);
 
// Iterator over the files and push jpg and png images to $allImages array.
foreach ($dir as $fileinfo) {
    if ($fileinfo->isFile() && in_array($fileinfo->getExtension(),array('jpg','png'))) { 
      array_push($allImages,$image_dir.$fileinfo->getBasename());
    }
  }
 
// total number of images
$total_pages = count($allImages);
 
//how many items to show per page
$page = isset($_GET['page']) ? $_GET['page'] : 1;
 
//  if no page var is given, set start to 0
$start = $page ?  (($page - 1) * $limit) : 0; 
 
 
$images = array_slice( $allImages, $start, $limit );;
 
/* Setup page vars for display. */
if ($page == 0) $page = 1; //if no page var is given, default to 1.
$prev = $page - 1; //previous page is page - 1
$next = $page + 1; //next page is page + 1
$lastpage = ceil($total_pages/$limit); //lastpage is = total pages / items per page, rounded up.
$lpm1 = $lastpage - 1; //last page minus 1
 
$pagination = "";
if($lastpage > 1)
{ 
  $pagination .= "<div class=\"center pagination\" >";
  //previous button
  if ($page > 1) 
    $pagination.= "<a href=\"$targetpage?page=$prev#gallery\">Previous</a>";
  else
    $pagination.= "<span class=\"disabled\">Previous</span>"; 
  
  //pages	
  if ($lastpage < 7 + ($adjacents * 2)) //not enough pages to bother breaking it up
  { 
    for ($counter = 1; $counter <= $lastpage; $counter++)
    {
      if ($counter == $page)
        $pagination.= "<b style='padding:5px'><span class=\"current\">$counter</span></b>";
      else
        $pagination.= "<a style='padding:5px' href=\"$targetpage?page=$counter#gallery\">$counter</a>"; 
    }
  }
  elseif($lastpage > 5 + ($adjacents * 2)) //enough pages to hide some
  {
    //close to beginning; only hide later pages
    if($page < 1 + ($adjacents * 2)) 
    {
      for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
      {
        if ($counter == $page)
          $pagination.= "<b><span style='padding:5px' class=\"current\">$counter</span></b>";
        else
          $pagination.= "<a style='padding:5px' href=\"$targetpage?page=$counter#gallery\">$counter</a>"; 
      }
      $pagination.= "...";
      $pagination.= "<a style='padding:5px' class=\"margin\" href=\"$targetpage?page=$lpm1#gallery\">$lpm1</a>";
      $pagination.= "<a style='padding:5px' href=\"$targetpage?page=$lastpage#gallery\">$lastpage</a>"; 
    }
    //in middle; hide some front and some back
    elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
    {
      $pagination.= "<a style='padding:5px' href=\"$targetpage?page=1#gallery\">1</a>";
      $pagination.= "<a style='padding:5px' href=\"$targetpage?page=2#gallery\">2</a>";
      $pagination.= "...";
      for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
      {
        if ($counter == $page)
          $pagination.= "<b style='padding:5px'><span class=\"current\">$counter</span></b>";
        else
          $pagination.= "<a style='padding:5px' href=\"$targetpage?page=$counter#gallery\">$counter</a>"; 
      }
      $pagination.= "...";
      $pagination.= "<a style='padding:5px' href=\"$targetpage?page=$lpm1#gallery\">$lpm1</a>";
      $pagination.= "<a style='padding:5px' href=\"$targetpage?page=$lastpage#gallery\">$lastpage</a>"; 
    }
    //close to end; only hide early pages
    else
    {
      $pagination.= "<a style='padding:5px' href=\"$targetpage?page=1#gallery\">1</a>";
      $pagination.= "<a style='padding:5px' href=\"$targetpage?page=2#gallery\">2</a>";
      $pagination.= "...";
      for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
      {
        if ($counter == $page)
          $pagination.= "<b><span class=\"current\">$counter</span></b>";
        else
          $pagination.= "<a style='padding:5px' href=\"$targetpage?page=$counter#gallery\">$counter</a>"; 
      }
    }
  }
  
  //next button
  if ($page < $counter - 1) 
    $pagination.= "<a href=\"$targetpage?page=$next#gallery\">Next</a>";
  else
    $pagination.= "<span class=\"disabled\">Next</span>";
  $pagination.= "</div>\n"; 
}
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

		<style>
			.center {
				margin: auto;
				width: 50%;
				padding: 10px;
				}
		</style>

	</head>


	<body>
		<div class="site-content">
				
		<?php
		include 'layout/header.php';
		?>
		<!-- .site-header -->

			<div class="page-head" data-bg-image="images/page-head-1.jpg">
				<div class="container">
					<h2 class="page-title">Gallery</h2>
				</div>
			</div>
			<main class="main-content">
				<div class="fullwidth-block">
					<div class="container">
						<div class="row" id="gallery">
							<div class="content col-md-12">
								<div class="row">

									<?php
										if(count($images) > 0) {
											foreach($images as $image) { ?>
											<div class="family">
												<a href="<?php echo $image; ?>">
													<img src="<?php echo $image; ?>" alt="" class="family-image">
												</a>
											</div>
											
										<?php } 
										} else {
											echo 'No images';
										}
									?>
								</div>
								<?php
									echo $pagination;
								?>
								
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