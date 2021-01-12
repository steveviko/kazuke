<?php 

$sql = "SELECT * from services order by rand() ";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
					

?>

	<div class="com">
				<h4 class="h3_title">Offering a wide range of services</h4>
				<ul class="media-list">
				<?php foreach($results as $result)
{?>
				  <li class="media">
					<div class="media-left">
					  <a href="#">
						<img class="media-object img-responsive" src="admin/pacakgeimages/<?php echo htmlentities($result->image);?>" style="height:90px;" alt="" />
					  </a>
					   
					</div>
					
					<div class="media-body">
					 <div style="font-weight:bolder;color:red;" class="media-heading"><?php echo htmlentities($result->service_name);?></div>
					 
					  <?php echo htmlentities($result->details);?> 
					 
					</div>
					<div class="more m1 pull-right">
								<a href="single.php">Learn More</a>
							</div>
				  </li>
				  <?php }?>


				  
			</div>
			
			
			<?php 
}?>