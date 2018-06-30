<?
	if($_POST)
	

	$to_email = "ivilinchuk@gmail.com";
	$subject = "Testing form";
	$message_body = $_POST["data"];
	$headers = 'From: ivilinchuk@gmail.com';
	mail($to_email, $subject, $message_body, $headers);
?>