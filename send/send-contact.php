<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


 // the message
$msg="";
$msg .= "Name: ".$_POST['name'];
$msg .= "\n Email: ".$_POST['email'];
$msg .= "\n mobile: ".$_POST['mobile'];
$msg .= "\n subject: ".$_POST['subject'];
$msg .= "\n Message: ".$_POST['message'];
$subject="CARE WELL INDIA TRUST Contact Form";
$to_mail="infocarewellindia@gmail.com, info@carewellindia.org";
 // send email 
if(mail($to_mail,$subject,$msg)){
	header('Location: /thank-you.php');
} else{
	echo "not send";
}; 

?>
