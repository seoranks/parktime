<?php
	
	include('class.phpmailer.php');
	
	$mail= new PHPMailer(); 
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl'; 
	$mail->Host = 'smtp.sendgrid.net';//'smtp.gmail.com';
	$mail->Port = 465; 
	$mail->CharSet = 'utf-8'; 
	
	$mail->Username = 'busycode';//'support@opentimeclock.com'; //GMail帳號
	$mail->Password = 'zhou2008'; //GMail密碼
	
	$mail->From =  $_POST['emailfrom']; 
	$mail->FromName = 'Customer'; 
	
	$ip="127.0.0.1";
	if ( isset($_SERVER["REMOTE_ADDR"]) )    { 
			$ip= $_SERVER["REMOTE_ADDR"]; 
	} else if ( isset($_SERVER["HTTP_X_FORWARDED_FOR"]) )    { 
		$ip= $_SERVER["HTTP_X_FORWARDED_FOR"]; 
	} else if ( isset($_SERVER["HTTP_CLIENT_IP"]) )    { 
		$ip= $_SERVER["HTTP_CLIENT_IP"]; 
	}
		
	$date = new DateTime();
	$today=$date->format('Y-m-d');
	
	$mail->Subject = "Welcome to Park Time - ".$ip." parktime.com [".$today."]"; 
	$mail->Body =  $_POST['content']; 
	$mail->IsHTML(false); 
	$mail->AddAddress('webnet.swati@gmail.com', 'webnet.swati@gmail.com'); 
	
	if(!$mail->Send()) {
		echo 'Email server returns error. Please try again in a bit later.';
	} else {
		echo "<p><font size='5'>Your message has been sent to us.<br>We will contact you within 24 hours.<br>Thank you very much!</font></p>";
	}

?>