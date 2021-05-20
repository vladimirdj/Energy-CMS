<?php
session_start();
require '../install/dbconnect.php';
if (isset($_POST['post'])) {

$image = $_FILES['image']['name'];
$target = "../images/".basename($image);

$cat_id= $_POST['cat_id'];
$title = $_POST['title'];
$subject = $_POST['subject'];

$sql = "INSERT INTO posts (cat_id, title, subject, user, image,status) VALUES('{$cat_id}','{$title}', '{$subject}','{$_SESSION["user"]}','{$image}','no')";


mysqli_query($conection, $sql);

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
echo "Add is good.";
echo "<script>window.history.go(-2);</script>";

}else{
echo  "Error";
}
}

?>
