<?php
if(isset($_POST["submit"])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$phone=$_POST['phone'];
$message = $_POST['message'];
$headers = 'From:'. $email . "rn"; // Sender's Email
// Message lines should not exceed 70 characters (PHP rule), so wrap it

// Send Mail By PHP Mail Function



    $email_message .= "Name: " .$name."\n";
    $email_message .= "Email: ".$email."\n";
    $email_message .= "Phone: ".$phone."\n";
    $email_message .= "Message: ".$message."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail("sriniarul444@gmail.com", "Visitor's message", $email_message, $headers);  
print "Your mail has been sent successfuly ! Thank you for your feedback";
}

?>