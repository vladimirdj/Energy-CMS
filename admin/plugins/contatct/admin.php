<?php
session_start();
require '../../../install/dbconnect.php';

$bas = "SELECT * FROM users";
$sql = mysqli_query($conection, $bas);
$us=mysqli_fetch_array($sql);
$user_id 	    = $us['user_id'];

$b = "SELECT * FROM admin_setings";
$qu = mysqli_query($conection, $b);
$as=mysqli_fetch_array($qu);

?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $as['title']; ?></title>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="../../../css/se.css">
<meta name="description" content="<?php echo $as["description"];?>">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
margin: 0;
padding: 0;

max-width:  100%;
}


@media screen and (min-width: 550px) {

body {
margin-left: 200px;
}
body.non-margin {
margin-left: 0px !important;
}
.klizac {
z-index: 10;
width: 200px;
}
.klizac.aktivan {
width: 0px;
}
}

.klizac:hover,
.klizac.active,
.klizac.hovered {
width: 200px;
-webkit-transition: all 0.2s ease-in-out;
transition: all 0.2s ease-in-out;
background-color: #343c42;
color: #fe5026;
}

</style>

</head>
<body>


<header>

<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
 <a href="../../index.php" class="link">Home</a>
 <a href="../../../index.php" class="link">Website</a>


</div>

</nav>

</div>
</header>

<div class="klizac">

<div align="center">
<div class="logo">
<b><?php echo $as['logo']; ?></b>
</div>

</div>

<div class="card">
<br>
<b>Hi, <a href="../../../profil/index.php?<?php echo urlencode('SE24;s1x:3')?>=<?php echo base64_encode($_SESSION['user']);?>" class="link"><?php echo  $_SESSION['user'];?></a></b>

<br>
<br>
</div>

<br>

<div class="meni">
<h2>Menu</h2>
</div>

<div class="card">
<button id="dugme1" class="harmonika">Setings <span>&#8659;</span></button>
<div class="ploca" id="ploca1">

<ul class="se1">
<li>  <a href="../../a_settings.php" class="link">Admin Setings &#8657;</a></li>
<li>  <a href="../../s_settings.php" class="link">Site Setings &#8657;</a></li>

</ul>
</div>

<button id="dugme2" class="harmonika">Users<span>&#8659;</span></button>
<div class="ploca" id="ploca2">
<ul class="se1">
<li>  <a href="../../user.php" class="link">Users &#8657;</a></li>
<li>  <a href="../../add_user.php" class="link">Add users &#8657;</a></li>

</ul>
</div>

<button id="dugme3" class="harmonika">Blog<span>&#8659;</span></button>
<div class="ploca" id="ploca3">
<ul class="se1">
<li>  <a href="../../blog.php" class="link">Pogledaj &#8657;</a></li>
<li>  <a href="../../kategorija.php" class="link">Kategorije &#8657;</a></li>
<li>  <a href="../../oznake_blog.php" class="link">Oznake &#8657;</a></li>
</ul>
</div>

<button id="dugme4" class="harmonika">Plugins<span>&#8659;</span></button>
<div class="ploca" id="ploca4">
<ul class="se1">
<li>  <a href="../../plugins/index.php" class="link">View plugins &#8657;</a></li>
</ul>
</div>

<button id="dugme5" class="harmonika">Template<span>&#8659;</span></button>
<div class="ploca" id="ploca5">
<ul class="se1">
<li>  <a href="../../theme/index.php" class="link">Template &#8657;</a></li>

</ul>
</div>

<button id="dugme6" class="harmonika">Menu<span>&#8659;</span></button>
<div class="ploca" id="ploca6">
<ul class="se1">
<li>  <a href="../../menu/index.php" class="link">Menu &#8657;</a></li>
<li>  <a href="../../menu/add_menu.php" class="link">Add menu &#8657;</a></li>
<li>  <a href="../../menu/add_sub_menu.php" class="link">Add sub menu &#8657;</a></li>

</ul>
</div>
<button id="dugme7" class="harmonika">Page<span>&#8659;</span></button>
<div class="ploca" id="ploca7">
<ul class="se1">
<li>  <a href="../../pages/index.php" class="link">Pages &#8657;</a></li>
<li>  <a href="../../pages/add_page.php" class="link">Add page &#8657;</a></li>

</ul>
</div>
</div>
<br>
<div class="meni">
<h2>Plugins</h2>
</div>

<div class="card">
<br>
<?php
$theme="SELECT * FROM plugins where admin='yes'";
$the=mysqli_query($conection,$theme);
while($pl=mysqli_fetch_assoc($the)){
?>
<a href="plugins/<?php echo $pl['title']; ?>/admin.php" class="link" title="Forum"><?php echo $pl['title']; ?></a><br><br>
<?php } ?>


</div>
<br>



</div>



<div id="telo">
<button class="dugme">
<i class="fa fa-bars"></i>
</button>

<div class="card">
<h2><?php echo $as['header']; ?></h2>
</div>
<br>

<div class="card">
<h2>Plugins</h2>
</div>

<div class="container3">
<table class="responsive-table">
<div align="center">
<h2>Contact</h2>
</div>
<thead>

<tr>

<th scope="col">Id</th>
<th scope="col">Email</th>
<th scope="col">User</th>
<th scope="col">Title</th>
<th scope="col">Subject</th>
  <th scope="col">Date</a></th>
<th scope="col">Action</th>
</tr>

</thead>

<tbody>
<?php

$upit = "SELECT * FROM contact";
$procedural = mysqli_query($conection, $upit);

while($folder = mysqli_fetch_array($procedural)){
$e_id=$folder['e_id'];
$email=$folder['email'];
$user=$folder['user'];
$title=$folder['title'];
$subject=$folder['subject'];
$date=$folder['date'];
 ?>

<tr>
<td data-title="e_id"><?php echo $e_id; ?></td>
<td data-title="email"><?php echo $email; ?></td>
<td data-title="user"><?php echo $user; ?></td>
<td data-title="title"><?php echo $title; ?></td>
<td data-title="subject"><?php echo $subject; ?></td>
<td data-title="date"><?php echo $date; ?></td>

<td><a href="edit.php?e_id=<?php echo $e_id; ?>"><button class="btn-2">Edit</button></a><a href="delete.php?e_id=<?php echo $e_id; ?>" onClick=\"return confirm('Delete?')\"><button class="btn-5">Delete</button></a>
</tr>
<?php
}


?>

</tbody>

</table>

</div>
<br>

<div class="footer">
<?php echo $as['footer']; ?>
</div>


</div>

</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../../../js/se.js"></script>

</body>
</html>
