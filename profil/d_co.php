<?php
require '../install/dbconnect.php';


$c_id = $_GET['c_id'];

$sql = "DELETE FROM come WHERE c_id=$c_id";
$query = mysqli_query($conection, $sql);

if ( $query) {

  echo "<script>alert('User is delited!')</script>";

echo "<script>window.history.back();</script>";

}

?>
