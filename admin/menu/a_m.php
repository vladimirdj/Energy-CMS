<?php
session_start();
require '../../install/dbconnect.php';
if(isset($_POST['add'])){
$title = $_POST['title'];
$url = $_POST['url'];
$position = $_POST['position'];

$sql = "INSERT INTO menu (title, url, position, user) VALUES ('{$title}', '{$url}','{$position}', '{$_SESSION["user"]}')";

if (mysqli_query($conection, $sql)){
echo "Add is good.";

echo "<script>window.history.go(-2);</script>";

} else {
echo "Eror";
}
}
?>
