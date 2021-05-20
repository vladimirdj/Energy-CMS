<?php
require '../../install/dbconnect.php';

$cat_id = $_GET['cat_id'];

$sql = "DELETE FROM category WHERE cat_id=$cat_id";
$query = mysqli_query($conection, $sql);

if ( $query) {

echo "<script>alert('User is delited!')</script>";

echo "<script>window.history.back();</script>";

}

?>
