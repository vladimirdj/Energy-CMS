<?php
session_start();
require '../install/dbconnect.php';

$user = base64_decode($_GET['tag']);

$theme="SELECT * FROM theme where status='yes'";
$the=mysqli_query($conection,$theme);
$th=mysqli_fetch_array($the);

$setings="SELECT * FROM site_setings";
$set=mysqli_query($conection,$setings);
$se=mysqli_fetch_array($set);
?>
<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title><?php echo $se['title']; ?></title>

<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/se.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="zaglavlje">

<h1><?php echo $se['title']; ?></h1>
<h2>User profil</h2>
</div>
<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<a href="../index.php" class="link"><i style="cursor:pointer;" class="fa fa-home" aria-hidden="true" title="HOME"></i></a>
</div>
</nav>
<br><br>
<div align="center">
<h2>User: <?php echo  $_SESSION['user'];?></h2>
<a href="../logout.php"><button class="btn-6">Logout</button></>
<div class="container3">
<table class="responsive-table">
<thead>
<tr>

<th scope="col">Id</th>
<th scope="col">First name</th>
<th scope="col">Lst name</th>
<th scope="col">Email</a></th>
<th scope="col">User</a></th>
<th scope="col">Password</a></th>
<th scope="col">Role</a></th>
<th scope="col">Date</a></th>
<th scope="col">Image</a></th>

<th scope="col">Actiona</th>
</tr>

</thead>

<tbody>
<?php

$sql = "SELECT * FROM users where user = '$_SESSION[user]'";

$result = mysqli_query($conection, $sql);

while($row = mysqli_fetch_array($result)){
$user_id= $row['user_id'];
$first_name= $row['first_name'];
$last_name= $row['last_name'];
$email= $row['email'];
$user= $row['user'];
$password= $row['password'];
$role= $row['role'];
$date= $row['date'];
$image= $row['image'];
?>

<tr>
<td data-title="id"><?php echo $user_id; ?></td>
<td data-title="first_name"><?php echo $first_name; ?></td>
<td data-title="last_name"><?php echo $last_name; ?></td>
<td data-title="email"><?php echo $email; ?></td>
<td data-title="user"><?php echo $user; ?></td>
<td data-title="password"><?php echo $password; ?></td>
<td data-title="role"><?php echo $role; ?></td>
<td data-title="date"><?php echo $date; ?></td>
<td data-title="date">
<img width="30%" height="30%" src="../images/<?php echo $image ?>">
</td>
<td>
<a href="e_us.php?tag=<?php echo base64_encode($_SESSION['user']) ?>"><button class="btn-2">Edit acaunt</button></a>
<a href="d_u.php?user_id=<?php echo $user_id; ?>" onClick="return confirm('Delete ?')\"><button class="btn-5">Delete acaunt</button></a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<br>


<h2>Your writtes</h2>
<a href="add.php"><button class="btn-6"><h3>Add writte</h3></button></a>
<div class="container3">
<table class="responsive-table">

<thead>

<tr>

<th scope="col">Id</th>
<th scope="col">Cat id</th>
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

$sql = "SELECT * FROM posts where user='$_SESSION[user]'";
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
<td data-title="title"><?php echo $title; ?></td>
<td data-title="subject"><?php echo $subject; ?></td>
<td data-title="imege"><img src="../images/<?php echo $image;  ?>" width="100px" height="100px" alt="<?php echo $image;?>"></td>
<td data-title="status"><?php echo $status; ?></td>
<td data-title="date"><?php echo $date; ?></td>
<td data-title="action">
<a href="e_po.php?tag=<?php echo base64_encode($_SESSION['user']) ?>"><button class="btn-2">Edit</button></a>
<a href="d_po.php?id=<?php echo $id; ?>"><button class="btn-3">Delete</button></a>
</tr>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<br>
<div align="center">
<h2>Your comments</h2>
<div class="container3">
<table class="responsive-table">

<thead>

<tr>

<th scope="col">Id</th>
<th scope="col">Post id</th>
<th scope="col">Commentar</th>

<th scope="col">Date</a></th>

<th scope="col">Delete</th>
</tr>

</thead>


<tbody>
<?php


$sql = "SELECT * FROM come where user = '$_SESSION[user]'";

$result = mysqli_query($conection, $sql);

while($row = mysqli_fetch_array($result)){
$c_id= $row['c_id'];
$p_id= $row['p_id'];
$com= $row['com'];
$date= $row['date'];
?>

<tr>
<td data-title="c_id"><?php echo $c_id; ?></td>
<td data-title="p_id"><?php echo $p_id; ?></td>
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

</table>
</div>

<br>
<button onclick="topFunction()" id="Btn" title="Go to top">Top</button>

<div class="footer">
<?php echo $se['footer']; ?>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../js/se.js"></script>
</body>
</html>
