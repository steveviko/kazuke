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
				<h3>Package Lists</h3>
				<ul class="media-list">
				<?php foreach($results as $result)
{?>
				  <li class="media">
					<div class="media-left">
					  <a href="#">
						<img class="media-object img-responsive" src="admin/pacakgeimages/<?php echo htmlentities($result->image);?>" style="width:550px;"alt="" />
					  </a>
					</div>
					<div class="media-body">
					  <h4 class="media-heading"><?php echo htmlentities($result->service_name);?></h4>
					  <?php echo htmlentities($result->details);?> 
					 
					</div>
				  </li>
				  <?php }?>


				  
			</div>
			
			<?php 
}?>