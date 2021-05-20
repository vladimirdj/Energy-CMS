<?php
session_start();
require '../../../install/dbconnect.php';

if(isset($_GET['id'])){

$id = $_GET['id'];

}



if(isset($_GET['c_id'])){

$reply_id = $_GET['c_id'];

}


if(isset($_POST['add'])){
$com = $_POST['com'];
$reply_id = $_POST['reply_id'];


$sql = "INSERT INTO come (reply_id,p_id,user, com) VALUES ('{$reply_id}','{$id}','{$_SESSION["user"]}', '{$com}')";

if (mysqli_query($conection, $sql)){
echo "Add is good.";

echo"<script>document.location='post.php?id=$id';</script>";

} else {
echo "Eror";
}
}

?>
