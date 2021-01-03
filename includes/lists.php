<?php 

$sql = "SELECT * from services order by rand() ";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
					

?>
<?php foreach($results as $result)
{?>

			<div class="banner-bottom-video-grid-rgt" style="margin:10px 4px;">
						<img src="admin/pacakgeimages/<?php echo htmlentities($result->image);?>" style="width:348px;height:196px" alt=" " class="img-responsive" />
						<div class="caption">
							<h3>  <?php echo htmlentities($result->service_name);?></h3>
							<p><?php echo substr_replace(htmlentities($result->details), "...", 35);?></p>
							<div class="more m1">
								<a href="category.php?cat=<?php echo htmlentities($result->id);?>">view more</a>
							</div>
						</div>
					</div>
					
<?php }?>

<?php 
}?>
<div class="clearfix"> </div>
					
				