<?php
session_start();
require '../../install/dbconnect.php';
if (isset($_SESSION['user']) && $_SESSION['role'] == 'admin'){

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
<link rel="stylesheet" href="../../css/se.css">
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
hr {
border: 1px solid #3D6AAD;
}

</style>




</head>
<body>


<header>

<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<a href="index.php" class="link">Home</a>
<a href="../index.php" class="link">Website</a>


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
<b>Hi, <a href="../../profil/index.php?<?php echo urlencode('SE24;s1x:3')?>=<?php echo base64_encode($_SESSION['user']);?>" class="link"><?php echo  $_SESSION['user'];?></a></b>

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
<li>  <a href="a_settings.php" class="link">Admin Setings &#8657;</a></li>
<li>  <a href="s_settings.php" class="link">Site Setings &#8657;</a></li>

</ul>
</div>

<button id="dugme2" class="harmonika">Users<span>&#8659;</span></button>
<div class="ploca" id="ploca2">
<ul class="se1">
<li>  <a href="user.php" class="link">Users &#8657;</a></li>
<li>  <a href="add_user.php" class="link">Add users &#8657;</a></li>

</ul>
</div>

<button id="dugme3" class="harmonika">Blog<span>&#8659;</span></button>
<div class="ploca" id="ploca3">
<ul class="se1">
<li>  <a href="blog.php" class="link">Pogledaj &#8657;</a></li>
<li>  <a href="kategorija.php" class="link">Kategorije &#8657;</a></li>
<li>  <a href="oznake_blog.php" class="link">Oznake &#8657;</a></li>
</ul>
</div>

<button id="dugme4" class="harmonika">Plugins<span>&#8659;</span></button>
<div class="ploca" id="ploca4">
<ul class="se1">
<li>  <a href="plugins/index.php" class="link">View plugins &#8657;</a></li>


</ul>
</div>

<button id="dugme5" class="harmonika">Template<span>&#8659;</span></button>
<div class="ploca" id="ploca5">
<ul class="se1">
<li>  <a href="theme/index.php" class="link">Template &#8657;</a></li>

</ul>
</div>

<button id="dugme6" class="harmonika">Menu<span>&#8659;</span></button>
<div class="ploca" id="ploca6">
<ul class="se1">
<li>  <a href="menu.php" class="link">Menu &#8657;</a></li>
<li>  <a href="add_menu.php" class="link">Add menu &#8657;</a></li>

</ul>
</div>
<button id="dugme7" class="harmonika">Page<span>&#8659;</span></button>
<div class="ploca" id="ploca7">
<ul class="se1">
<li>  <a href="pages.php" class="link">Pages &#8657;</a></li>
<li>  <a href="add_page.php" class="link">Add page &#8657;</a></li>
<li>  <a href="add_sub_page.php" class="link">Add sub page &#8657;</a></li>

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
<a href="../plugins/<?php echo $pl['title']; ?>/admin.php" class="link" title="Forum"><?php echo $pl['title']; ?></a><br><br>
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

<form method="POST" action="a_u.php" enctype="multipart/form-data">
<input type="hidden" name="size" value="1000000">
<div class="form-group">
<label for="image"><center><h2>Image</h2></center></label>
<input type="file" name="image" class="form-input">
</div>


<div class="form-group">
<label for="first_name"><center><h2>First name</h2></center></label>
<input type="text" name="first_name" class="form-input">
</div>

<div class="form-group">
<label for="last_name"><center><h2>Last name</h2></center></label>
<input type="text" name="last_name" class="form-input">
</div>


<div class="form-group">
<label for="email"><center><h2>Email</label>
<input type="email" class="form-input" name="email">
</div>

<div class="form-group">
<label for="user"><center><h2>User</h2></center></label>
<input type="text" class="form-input" name="user">
</div>

<div class="form-group">
<label for="password"><center><h2>Password</h2></center></label>
<input type="password" class="form-input" name="password">
</div>


<div class="form-group">
<label for="role"><center><h2>Role</h2></center></label>
<div>
<select class="form-input" name="role" id="role">
<option value='user'>Select Options</option>;
<option value='user'>User</option>;
<option value='admin'>Admin</option>;
<option value='moderator'>Moderator</option>;
</select>
</div>
</div>

<div class="form-group">
<label for="status"><center><h2>Status</h2></center></label>
<div>
<select class="form-input" name="status" id="status">
<option value='0'>Select Options</option>;
<option value='1'>Active</option>;
<option value='0'>Deactive</option>;
</select>
</div>
</div>
<br>
<div align="center">
<div class="form-group">
<input type="button" class="btn-2" onclick="location.href='index.php" value="Cancel" />
<input type="submit" class="btn-1" value="Add user" name="add">
</div>
</div>

</form>
</div>
<br>

<br>

<div class="footer">
<?php echo $as['footer']; ?>
</div>


</div>

<?php
} else {
echo '<meta http-equiv="refresh" content="0;URL=../index.php" />';
} ?>
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../../js/se.js"></script>

</body>
</html>
