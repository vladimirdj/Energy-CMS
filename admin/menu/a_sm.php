<?php
session_start();
require '../../install/dbconnect.php';
if(isset($_POST['add'])){
$title = $_POST['title'];
$url = $_POST['url'];
$position = $_POST['position'];
$s_id = $_POST['s_id'];

$sql = "INSERT INTO sub (title, url, position, user, s_id) VALUES ('{$title}', '{$url}','{$position}', '{$_SESSION["user"]}','{$s_id}')";

if (mysqli_query($conection, $sql)){
echo "Add is good.";

echo "<script>window.history.go(-2);</script>";

} else {
echo "Eror";
}
}
?>
