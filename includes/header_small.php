<div class="banner1" style="margin-bottom:20px;">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header" style="float:none">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<h1><a class="navbar-brand" href="index.php">	<img src="images/logo.jpg"  style="width:150px; " alt="" />
						 </a></h1>
						</div>
					</div>
					<?php 
					

					$sql = "SELECT * from tblpages order by rand() ";
					$query = $dbh->prepare($sql);
					$query->execute();
					$results=$query->fetchAll(PDO::FETCH_OBJ);
					$cnt=1;
					if($query->rowCount() > 0)
					{
										

					?>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1" style="float:right">
					
					
						<ul class="nav navbar-nav">
						<li style="background:#E5E5E5;"><a class="" href="index.php">Home</a></li>
						<?php foreach($results as $result)
					{?>
							
							<li style="margin-left:4px;background:#E5E5E5;"><a class="" href="page.php?type=<?php echo htmlentities($result->type); ?>"> <?php echo htmlentities($result->name);?></a></li>
						
							<?php }}?>	
						</ul>

						
							<div class="search">
						     <form action="search.php" method="get"  enctype="multipart/form-data" >
								<input type="search"  name="search_query" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
								<input type="submit" name="submit_search" value=" ">
							</form>
						</div>
					</div><!-- /.navbar-collapse -->	
				</nav>
			</div>
		</div>
	</div>