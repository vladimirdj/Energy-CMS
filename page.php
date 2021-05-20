<?php
include 'install/dbconnect.php';
session_start();


$theme="SELECT * FROM theme where status='yes'";
$the=mysqli_query($conection,$theme);
$th=mysqli_fetch_array($the);

$setings="SELECT * FROM site_setings";
$set=mysqli_query($conection,$setings);
$se=mysqli_fetch_array($set);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $se['title']; ?></title>

<link rel="stylesheet" href="theme/<?php echo $th['title']; ?>/css/<?php echo $th['css']; ?>">
</head>
<body>
<div class="header">

<h1>  <?php echo $se['title']; ?></h1>
</div>

<div id="content">
<?php


if ( isset( $_GET['st_id'] ) ) {
$st_id= $_GET['st_id'];

$sql="SELECT * from pages where st_id='$st_id'";
$result=mysqli_query($conection,$sql);
$row=mysqli_fetch_array($result);
$subject=$row['subject'];
$title=$row['title'];
?>
</div>
<?php echo $subject;
echo "<br>";
echo $title;
}
?>
