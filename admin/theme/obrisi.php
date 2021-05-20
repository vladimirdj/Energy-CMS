<?php

require '../../install/dbconnect.php';
if ( isset( $_GET['t_id'] ) ) {
$t_id = $_GET['t_id'];
$delete_post = "DELETE from theme where t_id='$t_id'";
$run_delete = mysqli_query( $conection, $delete_post );

if ( $run_delete ) {

echo "<script>alert('Komentarje obrisana!')</script>";
echo "<script>window.history.back();</script>";
}
}
?>
