<?php
require '../../install/dbconnect.php';

$parent_id = $_GET['parent_id'];

$sql = "DELETE FROM sub WHERE parent_id=$parent_id";
$query = mysqli_query($conection, $sql);

if ( $query) {

echo "<script>alert('delited!')</script>";

echo "<script>window.history.back();</script>";

}

?>
