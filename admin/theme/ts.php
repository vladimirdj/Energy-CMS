<?php
require '../../install/dbconnect.php';
$msg = "";

if (isset($_POST['edit_post'])) {

$id=$_POST['t_id'];

$status = $_POST['status'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
$sql = "UPDATE  theme SET status='$status[$i]' where t_id='$id[$i]'";

$vlada=mysqli_query($conection, $sql);
}

}

if($vlada){

echo "<script>alert('Post has been updated!')</script>";
echo "<script>window.history.go(-2);</script>";
}
else {
echo "ERROR";
}
?>
