<?php
session_start();
require '../../install/dbconnect.php';
if(isset($_POST['ubaci'])){
$title = $_POST['title'];
$subject = $_POST['subject'];
$sql = "INSERT INTO pages (title, subject, user) VALUES ('{$title}', '{$subject}','{$_SESSION["user"]}')";

if (mysqli_query($conection, $sql)){
echo "Add is good.";

echo "<script>window.history.go(-2);</script>";

} else {
echo "Eror";
}
}
?>
