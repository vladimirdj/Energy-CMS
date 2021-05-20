<?php
session_start();
require '../../../install/dbconnect.php';

if (isset($_POST['login'])) {

$password = $_POST['password'];
$user = $_POST['user'];

$upit = "SELECT * FROM users WHERE user = '$user' AND password = '$password'";

$pokretanje_upita = mysqli_query($conection, $upit);

$row=mysqli_num_rows($pokretanje_upita);

$row=mysqli_fetch_assoc($pokretanje_upita);


$status=$row['status'];

$role=$row['role'];

if($status == 1) {

$_SESSION['user']=$user;
$_SESSION['role']=$role;

switch($role){
case 'user':
header('location:user/index.php');
break;
case 'moderator':
header('location:moderator/index.php');
break;
case 'admin':
header('location:../../../admin/index.php');
break;
}
}else{
echo "<h1>Error</h1>";
}
}
?>
