<?php
$filename = file_exists('install');
if (file_exists('install/index.php')) {
?>

<a href="">
<script> window.location.href="install/index.php";  </script>

<?php
}else{
include 'install/dbconnect.php';
session_start();

$theme="SELECT * FROM theme where status='yes'";
$the=mysqli_query($conection,$theme);
$th=mysqli_fetch_array($the);

$setings="SELECT * FROM site_setings";
$set=mysqli_query($conection,$setings);
$se=mysqli_fetch_array($set);

function levo() {
global $conection;
$plugins="SELECT * FROM plugins where status='yes' and position='left'";
$plu=mysqli_query($conection,$plugins);
while($pl=mysqli_fetch_assoc($plu)){
?>
<div align="center"><h2><?php
echo $pl['title'];
?></h2></div>
<?php
include ("admin/plugins/$pl[title]/index.php");
?>
<br>
<?php
}
}

function centar() {
global $conection;
$plugins="SELECT * FROM	plugins where status='yes' and	position='center'";
$plu1=mysqli_query($conection,$plugins);
while($pl1=mysqli_fetch_assoc($plu1)){
?>

<div align="center"><h2><?php
echo $pl1['title'];
?></h2></div>

<?php
include ("admin/plugins/$pl1[title]/index.php");
?>
<br>
<?php
}
}

function desno() {
global $conection;
$plugins="SELECT * FROM plugins where status='yes' and	position='right'";
$plu2=mysqli_query($conection,$plugins);
while($pl2=mysqli_fetch_assoc($plu2)){
?>

<div align="center"><h2><?php
echo $pl2['title'];
?></h2></div>

<?php
include ("admin/plugins/$pl2[title]/index.php");
?>
<br>
<?php
}
}

?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="admin/theme/css/<?php echo $th['css'] ?>.css">

<link rel="stylesheet" href="css/se.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
</head>
<body>

<?php
include_once("admin/theme/$th[title]/index.php");
?>
<script  src="theme/<?php echo $th['title']; ?>/js/<?php echo $th['js']; ?>"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$('nav li').hover(
function() {
$('ul', this).stop().slideDown(200);
},
function() {
$('ul', this).stop().slideUp(200);
}
);
</script>
</body>
</html>
<?php
}
?>
