<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


// the message
$msg="";
$msg .= "Name: ".$_POST['name'];
$msg .= "\n Mobile: ".$_POST['mobile'];
$msg .= "\n Email: ".$_POST['email'];
$msg .= "\n Address: ".$_POST['address'];
$msg .= "\n Education: ".$_POST['education'];
$msg .= "\n City: ".$_POST['city'];
$msg .= "\n state: ".$_POST['State'];
$msg .= "\n Technically Education: ".$_POST['technically_education'];
$msg .= "\n working_experience_time: ".$_POST['working_experience_time'];
$msg .= "\n working_experience_field: ".$_POST['working_experience_field'];
$subject="Shkams Job Form";
$to_mail="shkams01@gmail.com, saiwaytech@gmail.com";
 // send email 
if(mail($to_mail,$subject,$msg)){
	header('Location: /thank-you.php');
} else{
	echo "not send";
}; 

?>
