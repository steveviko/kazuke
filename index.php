<?php include_once('config.php');
 include_once('header.php'); ?>
	
<body>
<!-- banner -->
	<?php include_once("banner_top.php "); ?>
	
<!-- //banner -->


<!-- banner-bottom-video -->
	<div class="banner-bottom-video" style="padding-top:0;">
		<div class="container">
			<div class="banner-bottom-video-grids">
				<div class="banner-bottom-video-grid-left">
					<?php include_once "includes/side.php";?>
				</div>
				<div class="banner-bottom-video-grid-right">
					<h4 class="h3_title">At Kazuke we offer a wide range of services</h4>
					<?php include_once"includes/lists.php"; ?>
					<?php //include_once"category.php"; ?>
					<?php //include_once"real_estate.php"; ?>
					<?php //include_once"includes/list_horizontal.php"; ?>
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom-video -->
<!-- banner-slider -->
	<div class="banner-slider">
		
		<!-- contact -->
		<?php include_once("contact.php");?>
		<!-- contact end -->
		
	</div>
<!-- //banner-slider -->
<!-- testimonials -->
	<?php include_once("includes/testimonials.php"); ?>
<!-- //testimonials -->
<?php include_once("includes/footer.php "); ?>