<?php
$file=$_GET['file'];
unlink($_GET["file"]);

if(rmdir($_GET["file"]))
{
echo 'Folder Deleted';
echo "<script>alert('Poruka je obrisana!')</script>";
echo "<script>window.history.back();</script>";
}
?>
