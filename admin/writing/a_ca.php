<?php
require '../../install/dbconnect.php';

if(isset($_POST['add'])){


$title = $_POST['title'];

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
