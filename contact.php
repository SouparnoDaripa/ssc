<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$to = 'daripa.souparno@gmail.com';
$message = 'FROM: '.$name.' Email: '.$email.' Message: '.$message;
$headers = 'From: daripa.souparno@gmail.com' . "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
echo "success"; // success message
}else{
echo "Invalid Email, Please provide a correct Email.";
}

?>