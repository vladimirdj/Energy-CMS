<?php
require '../../install/dbconnect.php';

$user_id = $_GET['user_id'];

$sql = "DELETE FROM users WHERE user_id=$user_id";
$query = mysqli_query($conection, $sql);

if ( $query) {

  echo "<script>alert('User is delited!')</script>";

echo "<script>window.history.back();</script>";

}

?>
