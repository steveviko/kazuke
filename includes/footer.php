<!--footer-->
	<div class="footer w3layouts">
		<div class="container">
			<div class="footer-row w3layouts-agile">
				<div class="col-md-4 footer-grids w3l-agileits">
					<h2><a href="index.html">Kazuke Contacts</a></h2>
					<p><a href="mailto:kazungukenneth3@gmail.com">kazungukenneth3@gmail.com</a></p>
					<p><span ><i class="fa fa-whatsapp" style="color:green"></i></span>  (+256) 752 023 210 </p>
					<p><span ><i class="fa fa-phone" style="color:green"></i></span>  (+256) 712-073-247 </p>
					<p><span ><i class="fa fa-phone" style="color:green"></i></span>  (+256) 704-010-004 </p>
					<p><span ><i class="fa fa-whatsapp" style="color:green"></i></span>  (+256) 784 327 165  </p>
				
				</div>
				<div class="col-md-3 footer-grids w3l-agileits">
					<h3>Navigation</h3>	
					<?php 
					

					$sql = "SELECT * from tblpages order by rand() ";
					$query = $dbh->prepare($sql);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
					if($query->rowCount() > 0)
					{
										

					?>				
					<ul class="b-nav">
					
						<li><a href="index.php">Home</a></li>						
						<?php foreach($results as $result)
					{?>
						<li><a href="page.php?type=<?php echo htmlentities($result->type); ?>"><?php echo htmlentities($result->name);?></a></li>
						<?php }}?>	
						
					</ul>
				</div>
				<div class="col-md-2 footer-grids w3l-agileits">
					<h3>Support</h3>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							
							
							<li><a style="background:green" class="icon " href="#"><i class="fa fa-whatsapp "></i></a></li>
							
						</ul>
					</section>
				</div>
				<?php 

				$sql = "SELECT * from services order by rand() ";
				$query = $dbh->prepare($sql);
				$query->execute();
				$results=$query->fetchAll(PDO::FETCH_OBJ);
				$cnt=1;
				if($query->rowCount() > 0)
				{
									

				?>	
				<div class="col-md-3 footer-grids w3l-agileits">
				<h4 class="h3_title" style=" text-transform: uppercase;padding:15px;font-weight:bolder;">View By Top Categories </h4>
						<div class="clearfix"> </div>

				<ul class="b-nav">	
				<?php foreach($results as $result)
							{?>
							<li><a href="category.php?cat=<?php echo htmlentities($result->id); ?>"><?php echo htmlentities($result->service_name);?></a></li>
						<?php }}?>	
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
	 

	<div class="footer-bottom wtrhee-agileinfo">
		<div class="footer">
				<p> &copy; 2021 Kazuke. All Rights Reserved.Design by
					<a href="#" target="=_blank">Venviko</a>
				</p>
			</div>
			
	</div>
	
 <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--//footer-->	
<!-- for bootstrap working -->
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
		<script src="js/bootstrap.js"> </script>
		<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //for bootstrap working -->
</body>
</html>
