<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
</head>
<body>
<?php 

$to = "chris.davis5440@gmail.com,gooseandd@aol.com"; 
$subject = "Inquiry from Brunswick BBQ & Brew Website"; 
$name_field = $_POST['name']; 
$email_field = $_POST['userEmail'];
$message = $_POST['message'];
$email = $_POST['email'];

$headers = "From: $email_field";
$body = "From: $name_field\n Email: $email_field\n Message:\n $message";

if(!empty($_POST)) {
	if($email != ""){
		echo "You are a bot!";
		return false;
	}else {
		mail($to, $subject, $body, $headers);
		echo "Thank You $name_field your message has been sent."; 
		echo "<script>setTimeout(\"location.href = 'http://www.brunswickbbq.com/contact.html';\",3000);</script>"; 
	}
}else {
	echo "Error";
}
 
?> 

</body>
</html>


