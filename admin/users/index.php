<?php
session_start();
require '../../install/dbconnect.php';
if (isset($_SESSION['user']) && $_SESSION['role'] == 'admin'){

$bas = "SELECT * FROM users";
$sql = mysqli_query($conection, $bas);
$us=mysqli_fetch_array($sql);
$user_id = $us['user_id'];

$b = "SELECT * FROM admin_setings";
$qu = mysqli_query($conection, $b);
$as=mysqli_fetch_array($qu);
?>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>S.E. CMS</title>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="../../css/se.css">

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
<a href="../index.php" class="link">Home</a>
<a href="../../index.php" class="link">Websait</a>



</div>

</nav>

</div>
</header>

<div class="klizac">

<div align="center">
<div class="logo">
<b> Sensation Energy </b>
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
<!--pisi ovde -->
<!-- pisati ovde -->
<div class="card">
<h2><?php echo $as['header']; ?></h2>
</div>
<br>
<div class="card">
<h2>Users</h2>
</div>
<br>

<div class="container3">
<table class="responsive-table">

<thead>

<tr>

<th scope="col">Id</th>
<th scope="col">User</th>
<th scope="col">First name</th>
<th scope="col">Last name</th>
<th scope="col">Email</a></th>
<th scope="col">Role</a></th>
<th scope="col">Date</th>
<th scope="col">Satatu</a></th>
<th scope="col">Image</a></th>

<th scope="col">Action</th>
</tr>

</thead>

<tbody>
<?php


$sql = "SELECT * FROM users";

$result = mysqli_query($conection, $sql);

while($row = mysqli_fetch_array($result)){
$user_id = $row['user_id'];
$user = $row['user'];
$first_name = $row['first_name'];
$last_name=$row['last_name'];
$email= $row['email'];
$role=$row['role'];
$status=$row['status'];
$date=$row['date'];
$image=$row['image'];
?>

<tr>

<td data-title="id"><?php echo $user_id; ?></td>
<td data-title="userk"><?php echo $user; ?></td>
<td data-title="irst_name"><?php echo $first_name; ?></td>
<td data-title="last_name"><?php echo $last_name; ?></td>
<td data-title="email"><?php echo $email; ?></td>
<td data-title="role"><?php echo $role; ?></td>
<td data-title="date"><?php echo $date; ?></td>
<td data-title="status"><?php echo $status; ?></td>
<td data-title="imege"><img src="../../images/<?php echo $image;  ?>" width="100px" height="100px" alt="<?php echo $image;?>"></td>

<td><a href="v_u.php?user_id=<?php echo $user_id; ?>"><button class="btn-1"> View </button></a><a href="e_u.php?user_id=<?php echo $user_id; ?>"><button class="btn-2">Edit</button></a><a href="d_u.php?user_id=<?php echo $user_id; ?>" onClick="return confirm('Delete?')"><button class="btn-5">Delete</button></a></td>
</tr>
<?php


}

?>

</tbody>

</table>
</div>
<!--pisi ovde -->
<button onclick="topFunction()" id="Btn" title="Go to top">Top</button>
<!--pisi ovde -->
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
<script  src="../../js/moj.js"></script>
</body>
</html>
