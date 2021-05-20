<?php

session_start();
require '../../../install/dbconnect.php';

if(isset($_POST['add'])){

$user = $_POST['user'];
$first_name = $_POST['first_name'];
$last_name=$_POST['last_name'];
$email= $_POST['email'];

$sql = "INSERT INTO users (user,first_name,last_name,email,role,status) VALUES('{$user}','{$first_name}','{$last_name}','{$email}','user','0')";


if (mysqli_query($conection, $sql)){

echo "Add is good.";
echo "<script>window.history.go(-2);</script>";

}else{
echo  "Error";
}
}
?>
