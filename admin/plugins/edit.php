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
<a href="../index.php" class="link">Home</a>
<a href="../../index.php" class="link">Website</a>


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
<b>Hi, <a href="../../profil/index.php?tag=<?php echo base64_encode($_SESSION['user']);?>" class="link"><?php echo  $_SESSION['user'];?></a></b>

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
<li>  <a href="../setings/a_settings.php" class="link">Admin Setings &#8657;</a></li>
<li>  <a href="../setings/s_settings.php" class="link">Site Setings &#8657;</a></li>

</ul>
</div>

<button id="dugme2" class="harmonika">Users<span>&#8659;</span></button>
<div class="ploca" id="ploca2">
<ul class="se1">
<li>  <a href="../users/index.php" class="link">Users &#8657;</a></li>
<li>  <a href="../users/add_user.php" class="link">Add users &#8657;</a></li>

</ul>
</div>

<button id="dugme3" class="harmonika">Writing<span>&#8659;</span></button>
<div class="ploca" id="ploca3">
<ul class="se1">
<li>  <a href="../writing/index.php" class="link">View &#8657;</a></li>
<li>  <a href="../writing/category.php" class="link">Category &#8657;</a></li>

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
<li>  <a href="../theme/index.php" class="link">Template &#8657;</a></li>

</ul>
</div>

<button id="dugme6" class="harmonika">Menu<span>&#8659;</span></button>
<div class="ploca" id="ploca6">
<ul class="se1">
<li>  <a href="../menu/index.php" class="link">Menu &#8657;</a></li>
<li>  <a href="../menu/add_menu.php" class="link">Add menu &#8657;</a></li>
<li>  <a href="../menu/add_sub_menu.php" class="link">Add sub menu &#8657;</a></li>

</ul>
</div>
<button id="dugme7" class="harmonika">Page<span>&#8659;</span></button>
<div class="ploca" id="ploca7">
<ul class="se1">
<li>  <a href="../pages/index.php" class="link">Pages &#8657;</a></li>
<li>  <a href="../pages/add_page.php" class="link">Add page &#8657;</a></li>

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
<div class="card">
<h2>Plugins </h2>
</div>

<?php


if(isset($_POST['update']))
{

$id =  $_POST['id'];
$title =  $_POST['title'];
$position =  $_POST['position'];
$status = $_POST['status'];
$function = $_POST['function'];
$result = mysqli_query($conection, "UPDATE plugins SET title='$title',position='$position',status='$status',function='$function' WHERE id=$id");
echo "<script>window.history.go(-2);</script>";
}
?>

<?php
//getting id from url
$id = $_GET['id'];


$result = mysqli_query($conection, "SELECT * FROM plugins WHERE id = $id");

while($res = mysqli_fetch_array($result))
{
$title = $res['title'];
$position =  $res['position'];
$status = $res['status'];
$function = $res['function'];
}
?>

<form action="" method="post">
<div class="form-group">
<label for="title">Fuction</label>
<input type="text" class="form-input" name="function" value="<?php echo $function; ?>"> <br>
</div>
<div class="form-group">
<label for="title">Title</label>
<input type="text" class="form-input" name="title" value="<?php echo $title; ?>"> <br>
</div>
<div class="form-group">
<label for="title">Status</label>
<select  name="status" id="status" class="form-input">
<option value='<?php echo $status?>'><?php echo $status?></option>

<option value='yes'>yes</option>;
<option value='no'>no</option>;

</select>

</div>

<div class="form-group">
<label for="title">Positions</label>
<select  name="position" id="position" class="form-input">
<option value='<?php echo $position?>'><?php echo $position?></option>
<option value='left'>Left</option>;
<option value='center'>Center</option>;
<option value='right'>Right</option>;
</select>

</div>

<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
<div class="btn-group">
<input type="submit" name="update" class="btn-3" value="Update">
<input type="button" class="btn-2" onclick="location.href='index.php';" value="Cancel" />
</form>

<br>
<br>
<button onclick="topFunction()" id="Btn" title="Go to top">Top</button>

<div class="footer">
<?php echo $as['footer']; ?>
</div>
<?php
} else {
echo '<meta http-equiv="refresh" content="0;URL=../index.php" />';
} ?>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../../js/se.js"></script>

</body>
</html>