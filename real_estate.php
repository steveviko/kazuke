<?php 

$sql = "SELECT * from services order by id asc ";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
					

?>

<div class="container">
			<div class="banner-bottom-grids">
			<?php foreach($results as $result)
{?>
				<div class="col-md-3 banner-bottom-grid w3-agileits" >
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->image);?>" style="width:231px; height:115px;" alt=" " class="img-responsive" />
					<div class="banner-bottom-grid-info">
						<div class="col-xs-4 banner-bottom-grid-infol">
							<p><?php echo htmlentities($result->id);?></p>
						</div>
						<div class="col-xs-8 banner-bottom-grid-infor"  >
							<h3 style="margin: .6em 0 .6em;" ><?php echo htmlentities($result->service_name);?></h3>
							<span class="more">
								<a href="single.php">View More</a>
							</span>
						</div>
						<div class="clearfix"> </div>
						
					</div>
				</div>
				
				<?php }?>

<?php 
}?>
				<div class="clearfix"> </div>
			</div>
		</div>