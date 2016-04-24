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
		$mail->Subject = $_POST['your_subject'];
		$message = $_POST['your_message'];
	} else{
		$mail->Subject = 'Plant Submission: ' . $_POST['plant_name'];
		$message =  'Plant Name: ' . $_POST['plant_name'] . '\r\n' .
					'Latin Name: ' . $_POST['latin_name'] . '\r\n' .
					'Description: ' . $_POST['description'];	
	}

	$mail->Body = $message;	// HTML
	$mail->AltBody = $message; // Plain text

	if(!$mail->send()) 
	{
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
		echo 'Thanks for reaching out. We\'ll get back to you quickly.';
	}
?>