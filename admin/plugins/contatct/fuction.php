<?php
session_start();
require '../../../install/dbconnect.php';

if (isset($_POST['send'])) {
$user = $_POST["user"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$title = $_POST["title"];

$mail = mysqli_query($conection, "INSERT INTO contact (user, email,subject,title) VALUES ('$user', '$email','$subject','$title')");
if(!empty($mail)) {
echo "Your contact information is saved successfully";
}else{
echo 'error';
}

$toEmail = "admin@phppot_samples.com";
$mailHeaders = "From: " . $user . "<". $email .">\r\n";
if(mail($toEmail, $subject, $content, $mailHeaders)) {
$message = "Your contact information is received successfully.";
$type = "success";
}
}

?>
