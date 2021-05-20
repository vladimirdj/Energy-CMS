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
.container3 {
overflow-x: auto;
width: 100%;
}
@media (min-width: 48em) {
.container3 {
margin: 2%;
box-shadow: 0 4px 8px 0 #3D6AAD;

}
}
@media (min-width: 75em) {
.container3 {
margin: 2em auto;
max-width: 100%;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
}

.responsive-table {
width: 100%;
margin-bottom: 1.5em;
border-spacing: 0;
box-shadow: 0 4px 8px 0 #3D6AAD;

}
@media (min-width: 48em) {
.responsive-table {
font-size: .9em;
box-shadow: 0 4px 8px 0 #3D6AAD;

}
}
@media (min-width: 62em) {
.responsive-table {
font-size: 1em;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
}
.responsive-table thead {
position: absolute;
clip: rect(1px 1px 1px 1px);

padding: 0;
border: 0;
height: 1px;
width: 1px;
overflow: hidden;

box-shadow: 0 4px 8px 0 #3D6AAD;
}
@media (min-width: 48em) {
.responsive-table thead {
position: relative;
clip: auto;
height: auto;
width: auto;
overflow: auto;
}
}
.responsive-table thead th {
background-color: #2c2f33;
border: 1px solid #3D6AAD;
font-weight: normal;
text-align: center;
color: #fe5026;
border: 1px solid #3D6AAD;
box-shadow: 0 4px 8px 0 #3D6AAD;

}
.responsive-table thead th:first-of-type {
text-align: left;
}
.responsive-table tbody,
.responsive-table tr,
.responsive-table th,
.responsive-table td {
display: block;
padding: 0;
text-align: left;
white-space: normal;
}
@media (min-width: 48em) {
.responsive-table tr {
display: table-row;
}
}
.responsive-table th,
.responsive-table td {
padding: .5em;
vertical-align: middle;
}
@media (min-width: 30em) {
.responsive-table th,
.responsive-table td {
padding: .75em .5em;
}
}
@media (min-width: 48em) {
.responsive-table th,
.responsive-table td {
display: table-cell;
padding: .5em;
}
}
@media (min-width: 62em) {
.responsive-table th,
.responsive-table td {
padding: .75em .5em;
}
}
@media (min-width: 75em) {
.responsive-table th,
.responsive-table td {
padding: .75em;
}
}
.responsive-table caption {
margin-bottom: 1em;
font-size: 1em;
font-weight: bold;
text-align: center;
}
@media (min-width: 48em) {
.responsive-table caption {
font-size: 1.5em;
}
}
.responsive-table tfoot {
font-size: .8em;
font-style: italic;
}
@media (min-width: 62em) {
.responsive-table tfoot {
font-size: .9em;
}
}
@media (min-width: 48em) {
.responsive-table tbody {
display: table-row-group;
}
}
.responsive-table tbody tr {
margin-bottom: 1em;
}
@media (min-width: 48em) {
.responsive-table tbody tr {
display: table-row;
border-width: 1px;
}
}
.responsive-table tbody tr:last-of-type {
margin-bottom: 0;
}
@media (min-width: 48em) {
.responsive-table tbody tr:nth-of-type(even) {
background-color: #2c2f33;
}
}
.responsive-table tbody th[scope="row"] {
background-color: #2c2f33;
color: white;
}
@media (min-width: 30em) {
.responsive-table tbody th[scope="row"] {
border: 1px solid #3D6AAD;

}
}
@media (min-width: 48em) {
.responsive-table tbody th[scope="row"] {
background-color: transparent;
color: #fe5026;
text-align: left;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
}
.responsive-table tbody td {
text-align: right;
}
@media (min-width: 48em) {
.responsive-table tbody td {

border: 1px solid#3D6AAD;
text-align: center;
}
}
@media (min-width: 48em) {
.responsive-table tbody td:last-of-type {
border: 1px solid #3D6AAD;
}
}
.responsive-table tbody td[data-type=currency] {
text-align: right;
}
.responsive-table tbody td[data-title]:before {
content: attr(data-title);
float: left;
font-size: .8em;
color:  #fe5026;
}
@media (min-width: 30em) {
.responsive-table tbody td[data-title]:before {
font-size: .9em;
}
}
@media (min-width: 48em) {
.responsive-table tbody td[data-title]:before {
content: none;
}
}
table {
border-collapse: collapse;
width: 100%;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
th {
background-color: #2c2f33;
border: 1px solid #3D6AAD;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
th:hover {
background-color: #2c2f33;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
th a {
display: block;
text-decoration:none;
padding: 10px;
color: #fe5026;
font-weight: bold;
font-size: 13px;
box-shadow: 0 4px 8px 0 #3D6AAD;
}
th a i {
margin-left: 5px;
color: #fe5026;
}
td {
padding: 10px;
color: #fe5026;
border: 1px solid #3D6AAD;
}
tr {
background-color: #2c2f33;
}
tr .highlight {
background-color: #2c2f33;
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
<li>  <a href="index.php" class="link">View &#8657;</a></li>
<li>  <a href="category.php" class="link">Cateory &#8657;</a></li>
</ul>
</div>

<button id="dugme4" class="harmonika">Plugins<span>&#8659;</span></button>
<div class="ploca" id="ploca4">
<ul class="se1">
<li>  <a href="../plugins/index.php" class="link">View plugins &#8657;</a></li>


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
<div class="card">
<h2>Blog</h2>
</div>
<div class="card">
<div class="container3">
<table class="responsive-table">

<thead>

<tr>

<th scope="col">Id</th>
<th scope="col">Cat id</th>
<th scope="col">User</th>
<th scope="col">Title</th>
<th scope="col">Subject</th>
<th scope="col">Image</th>
<th scope="col">Status</th>
<th scope="col">Date</th>
<th scope="col">Actiona</th>
</tr>

</thead>


<tbody>
<?php


$sql = "SELECT * FROM posts";

$result = mysqli_query($conection, $sql);

while($row = mysqli_fetch_array($result)){
$id= $row['id'];
$cat_id= $row['cat_id'];
$user= $row['user'];
$title= $row['title'];
$image= $row['image'];
$status= $row['status'];
$date= $row['date'];
$subject= $row['subject'];
?>

<tr>
<td data-title="id"><?php echo $id; ?></td>
<td data-title="cat_id"><?php echo $cat_id; ?></td>
<td data-title="user"><?php echo $user; ?></td>
<td data-title="title"><?php echo $title; ?></td>
<td data-title="subject"><?php echo $subject; ?></td>
<td data-title="imege"><img src="../../images/<?php echo $image;  ?>" width="100px" height="100px" alt="<?php echo $image;?>"></td>
<td data-title="status"><?php echo $status; ?></td>
<td data-title="date"><?php echo $date; ?></td>
<td><a href="v_w.php?id=<?php echo $id; ?>"><button class="btn-1">View</button></a>
<a href="e_w.php?id=<?php echo $id; ?>"><button class="btn-2">Edit</button></a>
<a href="edit.php?id=<?php echo $id; ?>"><button class="btn-6">Edit Status</button></a>
<a href="d_w.php?id=<?php echo $id; ?>" onClick="return confirm('Delete ?')\"><button class="btn-5">Delete</button></a></td>
</tr>
<?php


}

?>

</tbody>

</table>
</div>
<br>

</div>
<br>
<div class="card">
<h2>Comments</h2>
</div>
<div class="card">

<div class="container3">
<table class="responsive-table">

<thead>

<tr>

<th scope="col">Id</th>
<th scope="col">Post id</th>
<th scope="col">User</th>
<th scope="col">Comment</th>
<th scope="col">Date</th>
<th scope="col">Delete</th>
</tr>

</thead>


<tbody>

<?php


$sql = "SELECT * FROM come";

$result = mysqli_query($conection, $sql);

while($row = mysqli_fetch_array($result)){
$c_id= $row['c_id'];
$p_id= $row['p_id'];
$user= $row['user'];
$com= $row['com'];

$date= $row['date'];

?>

<tr>
<td data-title="c_id"><?php echo $c_id; ?></td>
<td data-title="p_id"><?php echo $p_id; ?></td>
<td data-title="user"><?php echo $user; ?></td>
<td data-title="com"><?php echo $com; ?></td>

<td data-title="date"><?php echo $date; ?></td>
<td data-title="delete">

<a href="d_co.php?c_id=<?php echo $c_id; ?>" onClick="return confirm('Delete ?')\"><button class="btn-5">Delete</button></a></td>
</td>

</tr>
<?php


}

?>

</tbody>
</form>
</table>
<input type="button" class="btn-3" name="delete" value="Delete"  onClick="Obr();" />
</div>
<br>

</div>
<br>
<button onclick="topFunction()" id="Btn" title="Go to top">Top</button>

<div class="footer">
<?php echo $as['footer']; ?>
</div>
<?php
} else {
echo '<meta http-equiv="refresh" content="0;URL=../index.php" />';
} ?>
<script>
function Obr() {
if(confirm("Are you sure want to delete these rows?")) {
document.Com.action = "d_co.php";
document.Com.submit();
}
}
</script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../../js/se.js"></script>

</body>
</html>
