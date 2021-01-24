<?php
include('./admin/includes/config.php');


?>
<?php include_once("header.php"); ?>
	<!-- banner -->
	
<!-- //banner -->
<body>
<!-- banner -->
	
	<!-- banner -->
<?php include_once("./includes/header_small.php"); ?>
	
<!-- //banner -->
<!-- //banner -->


<!-- banner-bottom-video -->
	<div class="banner-bottom-video" style="padding-top:0;">
		<div class="container">
			<div class="banner-bottom-video-grids">
				<div class="banner-bottom-video-grid-left">
					<?php include_once("includes/side.php");?>
				</div>
				<?php 
				$conn = mysqli_connect("localhost","root", "", "tms");

				

?>
				<div class="banner-bottom-video-grid-right">
	
				<?php 
							

							if(isset($_GET['cat'])){
								
								$cat_id = $_GET['cat'];
								
								$get_cat = "select * from items where type ='$cat_id'";
								$run_cat = mysqli_query($conn, $get_cat);
								$num_rows = mysqli_num_rows($run_cat);
							
								while($row_cats = mysqli_fetch_array($run_cat)){
									$p_id = $row_cats['id'];
									$p_image = $row_cats['image'];
									$p_name = $row_cats['name'];
								}
	if($num_rows > 0){			

?>			
				<h4 class="h3_title" >Available <span style="color: #e10123;"><?php echo htmlentities($p_name);?></span> at Kazuke General Service Ltd </h4>
									  
		<?php	} }?>
					<?php //include_once"includes/lists.php"; ?>
					<?php //include_once"includes/category.php"; ?>
					<?php //include_once"real_estate.php"; ?>
					<?php //include_once"includes/list_horizontal.php"; ?>
					

							<?php 
							

if(isset($_GET['cat'])){
	
	$cat_id = $_GET['cat'];
	
	$get_cat = "select * from items where type ='$cat_id'";
	$run_cat = mysqli_query($conn, $get_cat);
	$num_rows = mysqli_num_rows($run_cat);

	if($num_rows > 0){			

	while($row_cats = mysqli_fetch_array($run_cat)){
		$p_id = $row_cats['id'];
		$p_image = $row_cats['image'];
		$p_name = $row_cats['name'];
		$p_features = $row_cats['features'];		
		$p_price = $row_cats['price'];
		$p_details = $row_cats['details'];
		
		
		
	

?>

			
			<div class="banner-bottom-video-grid-rgt" style="margin:10px 4px;">
						<img src="admin/pacakgeimages/<?php echo htmlentities($p_image);?>" style="width:348px;height:196px" alt=" <?php echo htmlentities($p_name);?>" class="img-responsive" />
						<div class="caption">
							<h3 style="font-weight:bolder;" class="pull-left">  <?php echo htmlentities($p_name);?></h3>
							<h3 style="font-weight:bolder;" class="pull-right">  From: Ugx <?php echo htmlentities($p_price);?></h3>
							<p  class="clearfix"><?php?></p>
							<p  class="pull"><?php echo htmlentities($p_features);?></p>
							<div class="more m1 pull-left">
								<a href="single.php?sid=<?php echo htmlentities($p_id);?>">View Details</a>
							</div>
							<div class="more m1 pull-right">
								<a href="book.php">Request Rates</a>
							</div>
						</div>
					</div>
					


	<?php 
}} else{
	
	echo "No items found  ";
} }?>
<div class="clearfix"> </div>
					
				
					
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom-video -->
<!-- banner-slider -->
	<div class="banner-slider">
		
		<!-- contact -->
		<?php include_once"contact.php";?>
		<!-- contact end -->
		
	</div>
<!-- //banner-slider -->
<!-- testimonials -->
	<?php include_once("includes/testimonials.php"); ?>
<!-- //testimonials -->
<?php include_once"(includes/footer.php"); ?>