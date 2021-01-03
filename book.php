<?php
include('./admin/includes/config.php');


?>
<?php include_once"includes/header.php "; ?>
	
<body>
<!-- banner -->
	
	<!-- banner -->
	<?php include_once"banner_top.php "; ?>
	
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
				<h4 class="h3_title">Fill in the form belows to request for quotations </h4>
                <div class="testimonials-grid">
				<div class="home-form-w3ls mt-30 pt-lg-4 ">
				
				<form action="search.php" method="get"  enctype="multipart/form-data" style="margin-top: 1em;">
					<div class="row">
						
							<div class="form-group">
							<input type="text" name="phone" class="form-control" placeholder="phone Number" required=" ">
							</div>
							<div class="form-group">
							<input type="text" name="name"  class="form-control" placeholder="Name" >
							</div>
							<div class="form-group ">
								<select required="" name="location" class="form-control">
									<option value="">Location</option>
									<option value="1">Kampala</option>
									<option value="2">Wakiso</option>
									<option value="3">Mukono</option>
									<option value="4">Entebbe</option>
								</select> 
								<!-- <input type="hidden" class="form-control" name="search_query"placeholder="" /><br/>
								<input type="text" class="form-control" name="search_query" placeholder="Search Land,Houses....." /> -->
							</div>
							<div class="form-group">
							<textarea name="message" placeholder="Meassage" class="form-control"  required=" "></textarea>
							</div>
							<div class="form-group ">
								
								<input type="hidden" class="form-control" name="search_query"placeholder="" /><br/>
								<input type="text" class="form-control" name="search_query" placeholder="Search Land,Houses....." />
							</div>
						</div>
					</div>
					<button type="submit" name="submit_search" class="btn btn-primary btn_apt">Send</button>
				</form>
			</div>
			<!-- //form -->
               
							<!-- <section>
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
							</section> -->
				
							
							
							</div>
								<div class="clearfix"> </div>
								
		
						</div>			  
						
					<?php //include_once"includes/lists.php"; ?>
					<?php //include_once"includes/category.php"; ?>
					<?php //include_once"real_estate.php"; ?>
					<?php //include_once"includes/list_horizontal.php"; ?>
					<div class="clearfix"> </div>
					
							

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

	
<!-- //testimonials -->
<?php include_once"includes/footer.php "; ?>