<?php

session_start();
require '../../install/dbconnect.php';
if(isset($_POST['add'])){

$title = $_POST['title'];
$description = $_POST['description'];
$keywords = $_POST['keywords'];
$header  = $_POST['header'];
$footer = $_POST['footer'];
$logo = $_POST['logo'];
$analytic = $_POST['analytic'];
$seo = $_POST['seo'];

$query = "INSERT INTO site_setings (title,user,description,header,keywords,footer,analytic,logo,seo)" ;
$query .= "VALUES('{$title}', '{$_SESSION["user"]}','{$description}','{$header}','{$keywords}','{$footer}','{$analytic}','{$logo}','{$seo}')";

$q = mysqli_query($conection,$query);
if($q){
echo "<div align='center'>";
echo "Successful after Admin check<BR>";
echo "</div>";
echo "<script>window.history.back();</script>";
}
else {
echo "ERROR";
}
}
?>
