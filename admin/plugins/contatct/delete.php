<?php
require '../../../install/dbconnect.php';


$e_id = $_GET['e_id'];

$sql = "DELETE FROM contact WHERE e_id=$e_id";
$query = mysqli_query($conection, $sql);

if ( $query) {

echo "<script>alert('User is delited!')</script>";

echo "<script>window.history.back();</script>";

}

?>
