<?php
include_once('./config.php');?>


<?php include_once("./header.php"); ?>

<?php include_once("./includes/header_small.php"); ?>
	
<body>
<!-- banner -->
	
<?php //include_once"banner_top.php "; ?>
<!-- //banner -->


<!-- banner-bottom-video -->
	<div class="banner-bottom-video" style="padding-top:0;">
		<div class="container">
			<div class="banner-bottom-video-grids">
				<div class="banner-bottom-video-grid-left">
					<?php include_once("includes/side.php");?>
				</div>
				<div class="banner-bottom-video-grid-right">
				<?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail, name from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{		
		

?>



		
					



<div class="clearfix"> </div>
					
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated h3_title" data-wow-delay=".5s" > 
		<?php 	echo $result->name;  ?>
		</h1>
	
	</div>
</div>
					<?php //include_once"includes/lists.php"; ?>
					<?php //include_once"includes/category.php"; ?>
					<?php //include_once"real_estate.php"; ?>
					<?php //include_once"includes/list_horizontal.php"; ?>
					<p style="margin-top:20px;margin-left: 20px; background: #fff;"><?php 	echo $result->detail; ?></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php 
}}?></div>
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
	<?php include_once"includes/testimonials.php"; 
// <!-- testimonials -->
 include_once"includes/footer.php"; ?>