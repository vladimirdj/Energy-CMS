<?php
require '../../install/dbconnect.php';

$st_id = $_GET['st_id'];

$sql = "DELETE FROM pages WHERE st_id=$st_id";
$query = mysqli_query($conection, $sql);

if ( $query) {

echo "<script>alert('User is delited!')</script>";

echo "<script>window.history.back();</script>";

}

?>
