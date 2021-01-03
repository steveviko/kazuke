<h4 class="h3_title" style=" text-transform: uppercase;padding:15px;font-weight:bolder;">View By Top Categories </h4>
						<div class="clearfix"> </div>
				
				<?php 

				$sql = "SELECT * from services order by rand() ";
				$query = $dbh->prepare($sql);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0)
				{
									

				?>		
				  
							<div class="panel-heading" role="tab" id="<?php //echo htmlentities($result->id); ?>">
							  <h4 class="panel-title">
								<a  href="#">
								
								</a>
							  </h4>
							</div>
						
						
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php foreach($results as $result)
							{?>
						  <div class="panel panel-default" id="services">
							<div class="panel-heading" role="tab" id="<?php echo htmlentities($result->id); ?>">
							  <h4 class="panel-title">
								<a  href="category.php?cat=<?php echo htmlentities($result->id); ?>">
								  <?php echo htmlentities($result->service_name);?>
								</a>
							  </h4>
							</div>
							
							
							
						  </div>
						  
<?php }}?>					

						<?php 

						$sql = "SELECT * from tblpages order by rand() ";
						$query = $dbh->prepare($sql);
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$cnt=1;
						if($query->rowCount() > 0)
						{
											

						?>
						<h4 class="h3_title" style=" text-transform: uppercase;padding:15px;font-weight:bolder;">View  Top Pages </h4>
						<div class="clearfix"> </div>
						<div class="panel panel-default">
							<div class="panel-heading" role="tab" id="<?php echo htmlentities($result->id); ?>">
							
							</div>
						</div>
					<?php foreach($results as $result)
					{?>
						<div class="panel panel-default" id="services">
							<div class="panel-heading" role="tab" id="<?php echo htmlentities($result->id); ?>">
							  <h4 class="panel-title">
								<a  href="page.php?type=<?php echo htmlentities($result->type); ?>">
								  <?php echo htmlentities($result->name);?>
								</a>
							  </h4>
							</div>
							
							
							
						  </div>
						  <?php }}?>
					  </div>
					  <div class="clearfix"> </div>
					  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					   <div class="panel panel-default">
							<div class="panel-heading" role="tab" id="<?php echo htmlentities($result->id); ?>">
							  <h4 class="panel-title">
								<a  href="#">
								  <h4 class="h3_title">Follow us on Social Media</h4>
								</a>
							  </h4>
							</div>
							
							
							
						  </div>
					  <div class="col-md-4 footer-grids w3l-agileits" >
					
							<section class="social" >
								<ul style="display: flex; margin-top: 1em;">
									<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
									
									
									<li><a style="background:green" class="icon " href="#"><i class="fa fa-whatsapp "></i></a></li>
									
								</ul>
							</section>
						</div>
				</div>
				
				<div class="clearfix"> </div>
				
								
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <?php 
					  

						  $sql = "SELECT * from brands order by rand()  ";
						  $query = $dbh->prepare($sql);
						  $query->execute();
						  $results=$query->fetchAll(PDO::FETCH_OBJ);
						  $cnt=1;
						  if($query->rowCount() > 0)
						  {
											  
		  
					 
					  foreach($results as $result)
						{?>
		
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="<?php echo htmlentities($result->id); ?>">
									<h4 class="panel-title">
										<a  href="brand.php?brand=<?php echo htmlentities($result->id); ?>">
										<h4 class="h3_title"><?php echo htmlentities($result->name); ?> </h4>
										</a>
									</h4>
									</div>						
								</div>

								<div class=" gallery-grid gallery1">
							<a href="brand.php?brand=<?php echo htmlentities($result->id); ?>" class="swipebox">
								<img src="admin/pacakgeimages/<?php echo htmlentities($result->image);?>" style="width:348px;height:196px" class="img-responsive" alt="/">
								<div class="textbox">
									<h4><?php echo htmlentities($result->name); ?></h4>
									<p><?php echo htmlentities($result->details); ?></p>
								</div> 
							</a>
						</div>
				
					  	</div>
						
						
						<?php }}?>	
				
	
			
				
					