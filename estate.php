<?php
include('./admin/includes/config.php');


?>
<?php include_once"includes/header.php "; ?>
	
<body>
<!-- banner -->
	
	<div class="banner-layer">
	<script src="js/jquery.vide.min.js"></script>	
	<div data-vide-bg="video/real">
			<div class="logo text-center" style="margin-top:-30px">
				<h1>
					<a href="index.php">
						<span class="fa fa-home" aria-hidden="true">
								
							</span></a>
				</h1>
			</div>
			<div class="w3ls-container   text-center" style="margin-top:-2px">

				<div class="w3l-content">
					<div class="left-grid">
							<a href="index.html">
						
								<img src="images/logo.jpg"  style="width:350px;" alt="" />
							</a>
					</div>
					<div class="right-grid">
						<p>Lets Make something good Together
							<br>Get in Touch</p>
						<div class="sub-form">
							<form action="#" method="post">
								<input type="email" name="email" size="30" required="" placeholder="Email">
								<button class="btn1">
									<span class="fa fa-paper-plane" aria-hidden="true"></span>
								</button>
							</form>
						</div>
						   

					</div>
				</div>
				<div class="agile-social-icons" style="margin: -40px 0px 0px;">
					<h3 class="h2header">Services For Everyone</h3>
					<ul class="social_list">
						<li>
							<a href="#">
								<img src="images/22.jpg" alt="" />
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/21.jpg" alt="" />
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/23.jpg" alt="" />
							</a>
						</li>
						<li>
							<a href="#">
								<img src="images/20.jpg" alt="" />
							</a>
						</li>
					</ul>
				</div>

			</div>
			
		</div>
		</div>
<!-- //banner -->


<!-- banner-bottom-video -->
	<div class="banner-bottom-video">
		<div class="container">
			<div class="banner-bottom-video-grids">
				<div class="banner-bottom-video-grid-left">
					<?php include_once "includes/side.php";?>
				</div>
				<div class="banner-bottom-video-grid-right">
					<h4>Offering a wide range of services</h4>
					<?php //include_once"includes/lists.php"; ?>
					<?php include_once"real_estate.php"; ?>
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
		<?php include_once"contact.php";?>
		<!-- contact end -->
		
	</div>
<!-- //banner-slider -->
<!-- testimonials -->
	<?php include_once"includes/testimonials.php"; ?>
<!-- //testimonials -->
<?php include_once"includes/footer.php "; ?>