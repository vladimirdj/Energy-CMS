
<?php
session_start();
require '../../../install/dbconnect.php';

$name=$_GET['name'];

$sql = "INSERT INTO plugins (user,title,status,position,function,install,admin)  VALUES ('{$_SESSION["user"]}','{$name}','yes','right','login.php','1','no')";

if (mysqli_query($conection, $sql)){
echo "Plugin is istalled";
echo "<script>window.history.back();</script>";
unlink('install.php');
} else {
echo "Error";
}

?>
