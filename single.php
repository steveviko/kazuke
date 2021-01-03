<?php
 error_reporting(0);

	

include('./admin/includes/config.php');


?>
<?php include_once"includes/header.php "; ?>
	
<body>
<!-- banner -->
	
	<!-- banner -->
	<?php include_once"includes/header_small.php  "; ?>
	
<!-- //banner -->
<!-- //banner -->


<!-- banner-bottom-video -->
	<div class="banner-bottom-video" style="padding-top:0;">
		<div class="container">
			<div class="banner-bottom-video-grids">
				<div class="banner-bottom-video-grid-left">
					<?php include_once "includes/side.php";?>
				</div>
				<?php 
				$conn = mysqli_connect("localhost","root", "", "tms");

				

?>
				<div class="banner-bottom-video-grid-right">
				<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
<?php 
$pid=intval($_GET['sid']);
$sql = "SELECT * from items where id=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
?>
			
				<h4 class="h3_title">Details </h4>
                <div class="testimonials-grid">
					<?php foreach($results as $result)
{	?>
							<div class="col-md-8 testimonials-grid-left">
								<img src="admin/pacakgeimages/<?php echo htmlentities($result->image);?>" style="width:100%;height:300px" alt=" " class="img-responsive" />
							</div>
							<?php $names =$result->name?>
							<div class="col-md-4 testimonials-grid-right">
								<div class="rating">
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
									<span>☆</span>
								</div>
								<h2><b>Name :</b><?php echo htmlentities($result->name);?></h2>
                                <p><b>Category Type :</b> <?php echo htmlentities($result->type);?></p>
								<p><b> Location :</b> <?php echo htmlentities($result->location);?></p>
								<p><b>Features</b> <?php echo htmlentities($result->features);?></p>
								<p><span><strong>From</strong> Ugx  <?php echo htmlentities($result->price);?>(Negotiable)</span></p>
							</div>
								<div class="clearfix"> </div>
								
								<div class=""><p><b>Description  :</b> <?php echo htmlentities($result->details);?></p>
							
							
				<a href="#" class="btn-primary btn" >If Intrested Call (+256) 712-073-247 | (+256) 784 327 165 | (+256) 704-010-004 </a>
							
				<a href="index.php" class="btn-primary btn" > Back to Home</a>
				
			
							
							
							</div>
								<div class="clearfix"> </div>
								
		
						</div>			  
						<?php }} ?>
					<?php //include_once"includes/lists.php"; ?>
					<?php //include_once"includes/category.php"; ?>
					<?php //include_once"real_estate.php"; ?>
					<?php //include_once"includes/list_horizontal.php"; ?>
					<div class="clearfix"> </div>
								<div class="row"> 
					<h4 class="h3_title" style="margin-top:30px;">Related Items </h4>
					</div>
							<?php 
							

if(isset($_GET['sid'])){
	
	$s_id = $_GET['sid'];
	
	$get_cat = "select * from items where id ='$s_id'";
	$run_cat = mysqli_query($conn, $get_cat);
	$num_rows = mysqli_num_rows($run_cat);

	while($row_cats = mysqli_fetch_array($run_cat)){
		
		$type = $row_cats['type'];
	}
		
		
		$get_type = "select * from items where type ='$type'";	
		$run_type = mysqli_query($conn, $get_type);
		$num_rows = mysqli_num_rows($run_type);
	
		while($row_types = mysqli_fetch_array($run_type)){
			$p_id = $row_types['id'];
			$p_type = $row_types['type'];
			$p_image = $row_types['image'];
			$p_name = $row_types['name'];
			$p_features = $row_types['features'];		
			$p_price = $row_types['price'];
			$p_details = $row_types['details'];
	
	if($num_rows > 0){			

?>


			<div class="banner-bottom-video-grid-rgt" style="margin:10px 4px;">
						<img src="admin/pacakgeimages/<?php echo htmlentities($p_image);?>" style="width:348px;height:196px" alt=" " class="img-responsive" />
						<div class="caption">
							<h3 style="font-weight:bolder;" class="pull-left">  <?php echo htmlentities($p_name);?></h3>
							<h3 style="font-weight:bolder;" class="pull-right"> price: Ugx <?php echo htmlentities($p_price);?></h3>
							<p  class="clearfix"><?php?></p>
							<p  class="pull"><?php echo htmlentities($p_features);?></p>
							<div class="more m1 pull-left">
								<a href="single.php?sid=<?php echo htmlentities($p_id);?>">View Details</a>
							</div>
							<div class="more m1 pull-right">
								<a href="single.php">Request Rates</a>
							</div>
						</div>
					</div>
					


	<?php 
} else{
	
	echo "No product found  ";
} }}?>
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
	<?php include_once"includes/testimonials.php"; ?>

	<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
							<form name="help" method="post">
								<div class="modal-body modal-spa">
									<div class="writ">
										<h4>HOW CAN WE HELP YOU</h4>
											<ul>
												
												<li class="na-me">
													<select id="country" name="issue" class="frm-field required sect" required="">
														<option value="">Select Issue</option> 		
														<option value="Booking Issues">Booking Issues</option>
														<option value="Cancellation"> Cancellation</option>
														<option value="Refund">Refund</option>
														<option value="Other">Other</option>														
													</select>
												</li>
											
												<li class="descrip">
									<input class="special" type="text" placeholder="description"  name="description" required="">
												</li>
													<div class="clearfix"></div>
											</ul>
											<div class="sub-bn">
												<form>
													<button type="submit" name="submit" class="subbtn">Submit</button>
												</form>
											</div>
									</div>
								</div>
								</form>
							</section>
					</div>
				</div>
			</div>
<!-- //testimonials -->
<?php include_once"includes/footer.php "; ?>