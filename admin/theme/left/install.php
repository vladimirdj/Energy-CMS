<link rel='stylesheet' href='../../../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Energy CMS</h2>
<h3>Install</h3>
<h3>Thmplate confing</h3>

<?php
session_start();
require '../../../install/dbconnect.php';

$name=$_GET['name'];

$sql = "INSERT INTO theme (user,title,status,css,js)  VALUES ('{$_SESSION["user"]}','{$name}','yes','moj.css','moj.php')";
if (mysqli_query($conection, $sql)){
echo "Template is istalled";
echo "<script>window.history.back();</script>";
unlink('install.php');
} else {
echo "Greska";
}

?>
