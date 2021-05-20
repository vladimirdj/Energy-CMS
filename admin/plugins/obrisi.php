<?php

require '../../install/dbconnect.php';
if ( isset( $_GET['id'] ) ) {
$id = $_GET['id'];

$delete_post = "DELETE from plugins where id='$id'";
$run_delete = mysqli_query( $conection, $delete_post );

if ( $run_delete ) {

echo "<script>alert('Komentarje obrisana!')</script>";
echo "<script>window.history.back();</script>";
}
}
?>
