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
<?php

echo'<nav>';
echo '<div class="container">';
echo'<ul>';
$sql="SELECT * FROM pages";

$result=mysqli_query($conection,$sql);

while($row3=mysqli_fetch_object($result))

{
echo '<li><a href="page.php?st_id='.$row3->st_id.'">'.$row3->title.'</a></li>';
}
$sql="SELECT * FROM menu ORDER BY position";
$r=mysqli_query($conection,$sql);

while($row=mysqli_fetch_assoc($r)){
$id=$row['id'];
$naziv=$row['title'];
$url=$row['url'];
?>
<li><a href="<?php echo $url ?>"><?php echo $naziv ?></a>

<?php
echo "<ul>";
$sql1="SELECT * FROM menu JOIN sub ON menu.id=sub.s_id where s_id='$id'";
$m=mysqli_query($conection,$sql1);

while($row1=mysqli_fetch_assoc($m)){
$parent_id=$row1['parent_id'];
$url=$row1['url'];
$title=$row1['title'];
$s_id=$row1['s_id'];
echo "<li><a href='$url'>".$title."</a></li>";
}
echo "</ul>";
echo "</li>";

}

echo'</nav> ';
?>

<br>

<div class="sekcija2 grupa2">
<div class="colona2 raspon_6_of_2">
<div align="center">
<h2>Center</h2><br>
</div>
<?php
if (empty(centar())) {

}else {
centar();
}
?>
</div>
<div class="colona2 raspon_7_of_2">
<div align="center">
<h2>Right</h2><br>
</div>
<?php
if (empty(desno())) {
?>

<?php
}else {
desno();
}
?>
</div>
</div>


<br>
<div class="footer">
<?php echo $se['footer']; ?>
<?php echo date("Y");?>. All Rights Reserved.
</div>
</body>
</html>
