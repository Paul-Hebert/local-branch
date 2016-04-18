<?php
	include('PHPMailer/class.phpmailer.php');

	//PHPMailer Object
	$mail = new PHPMailer;

	//From email address and name
	$mail->From = $_POST['your_email'];
	$mail->FromName = $_POST['your_name'];

	//To address and name
	$mail->addAddress("paul.hebert@paulhebertdesigns.com", "Paul Hebert");

	//Address to which recipient will reply
	$mail->addReplyTo($_POST['your_email'], $_POST['your_name']);

	//Send HTML or Plain Text email
	$mail->isHTML(true);

	$mail->Subject = $_POST['your_subject'];
	$mail->Body = $_POST['your_message'];
	$mail->AltBody = $_POST['your_message'];

	if(!$mail->send()) 
	{
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} 
	else 
	{
		echo 'Thanks for reaching out. We\'ll get back to you quickly.';
	}
?>