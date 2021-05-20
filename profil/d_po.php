<?php
require '../install/dbconnect.php';


$id = $_GET['id'];

$sql = "DELETE FROM posts WHERE id=$id";
$query = mysqli_query($conection, $sql);

if ( $query) {

echo "<script>alert('User is delited!')</script>";

echo "<script>window.history.back();</script>";

}

?>
