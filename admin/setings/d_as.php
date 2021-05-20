<?php
session_start();
require '../../install/dbconnect.php';

if ( isset( $_GET['id'] ) ) {

echo $id= $_GET['id'];

$delete_post = "DELETE from admin_setings where id='$id'";
$run_delete = mysqli_query( $conection, $delete_post );

if ( $run_delete ) {

echo "<script>alert('Tutorial je obrisan!')</script>";
echo "<script>window.history.back();</script>";
}

}


?>
