<?php
if(isset($_POST['submit'])){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$message = trim($_POST['message']);

	$myMail= "babalolakehinde22@gmail.com";
	$header = "from:". $email;
// compose message 
		$txt="Name :".$name."\n".
				"Email from :".$email."\n".
				"phone:".$phone."\n\n".
				"Wrote the following message :".$message;
				
	mail($myMail, $phone,$txt , $header); 
	header("location:index.html?email sent!");
	
}
?>