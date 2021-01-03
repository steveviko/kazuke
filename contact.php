<?php

error_reporting(0);
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$sql="INSERT INTO  tblissues(name,UserEmail,phone,message) VALUES(:name,:email,:phone,:message)";
$query = $dbh->prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="message successfully submited ";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
}
?>	

<div class="contact w3l-agileits">
	<div class="container" style="margin-top: -80px;">
		<h3>Contact Us</h3>
		<div class="contact-us1-bottom" style="margin:1em 0 0;">
		 <form action="" method="post">
					<input type="text" name="name" placeholder=" Full Name" required=" ">
					<input type="text" name="email" placeholder="Email" >
					<input type="text" name="phone" placeholder="phone Number" required=" ">
					<textarea name="message" placeholder="Meassage" required=" "></textarea>
					<input type="submit" name="submit" value="Send A Meassage">
					<div class="clearfix"> </div>
				</form>
			<div class="home-radio-clock">
				<ul>
					<li><i class="glyphicon glyphicon-home" aria-hidden="true"></i>Our Home</li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email</li>
					<li><i class="glyphicon glyphicon-bullhorn" aria-hidden="true"></i>Call Us</li>
					<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i>Opening Time</li>
					
				</ul>
			</div>
			<div class="home-radio-clock-right">
				<ul>
					<li>Uganda<span>Kampala, Luzira, Biina</span></li>
					<li><span></span><span>kazungukenneth3@gmail.com</span></li>
					<li class="lst">(+256) 704-010-004 <span>(+256) 712-073-247</span></li>
					<li><span>Mon-Fri:</span><span>09am-5pm EST</span></li>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
		
	</div>
	</div>