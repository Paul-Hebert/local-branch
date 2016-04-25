<?php
	date_default_timezone_set('Etc/UTC');

	require 'PHPMailer/PHPMailerAutoload.php';

	//PHPMailer Object
	$mail = new PHPMailer;

	$mail->IsSMTP(); 				   // telling the class to use SMTP
	$mail->Host       	= "localhost"; // SMTP server
	$mail->SMTPAuth   	= false;       // enable SMTP authentication
	$mail->Port       	= 25;       
	//$mail->SMTPDebug 	= 2;
	//$mail->Debugoutput = 'html';

	//From email address and name
	$mail->From 		= $_POST['your_email'];
	$mail->FromName 	= $_POST['your_name'];

	//To address and name
	$mail->addAddress("paul.hebert@paulhebertdesigns.com", "Paul Hebert");

	//Address to which recipient will reply
	$mail->addReplyTo($_POST['your_email'], $_POST['your_name']);

	//Send HTML or Plain Text email
	$mail->isHTML(true);

	if ( !isset($_POST['add-a-plant']) ){
		$mail->Subject 	= 	$_POST['your_subject'];

		$message 		= 	$_POST['your_message'];

		$success 		= 	'Thanks for reaching out. We\'ll get back to you quickly.';
	} else{
		$mail->Subject = 'Plant Submission: ' . $_POST['plant_name'];

		$message =  
			'Plant Name: ' . $_POST['plant_name'] . '<br>' .
			'Latin Name: ' . $_POST['latin_name'] . '<br>' .
			'Plant Type: ' . $_POST['plant_type'] . '<br>' .
			'Description: ' . $_POST['description']
		;	

		$success = '
			<h1>Thanks!</h1> 
			<p>After a moderator has reviewed your submission we\'ll add it to the site and send you an email notification.
		';		
	}

	$mail->Body = $message;	// HTML
	$mail->AltBody = $message; // Plain text

	if(!$mail->send()) 
	{
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
		echo $success;
	}
?>