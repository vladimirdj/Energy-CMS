<?php
require '../../install/dbconnect.php';

if(isset($_POST['add'])){

$image = $_FILES['image']['name'];
$target = "../images/".basename($image);


$first_name = $_POST['first_name'];
$email = $_POST['email'];
$last_name = $_POST['last_name'];
$role = $_POST['role'];
$user = $_POST['user'];
$role = $_POST['role'];
$password	 = $_POST['password'];
$status	 = $_POST['status'];

$sql = "INSERT INTO users (first_name, email, last_name, user, role, password, image, status) VALUES ('{$first_name}', '{$email}','{$last_name}','{$user}','{$role}','{$password}','{$image}','{$status}')";

mysqli_query($conection, $sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
echo "Add is good.";
echo "<script>window.history.go(-2);</script>";


}else{
echo  "Error";
}
}
?>
