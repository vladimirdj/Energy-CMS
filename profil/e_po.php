<?php
session_start();
require '../install/dbconnect.php';


$theme="SELECT * FROM theme where status='yes'";
$the=mysqli_query($conection,$theme);
$th=mysqli_fetch_array($the);

$setings="SELECT * FROM site_setings";
$set=mysqli_query($conection,$setings);
$se=mysqli_fetch_array($set);
$tag = urlencode (base64_decode($_SESSION['user']));


$query = "SELECT * FROM posts WHERE user= '$_SESSION[user]'";
$select_posts = mysqli_query($conection, $query);

while ($row = mysqli_fetch_assoc($select_posts)) {
$id = $row['id'];
$title = $row['title'];
$subject = $row['subject'];
$image = $row['image'];

}

if (isset($_POST['edit_post'])) {
$image = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];
move_uploaded_file($image_temp, "../images/$image");

$title = $_POST['title'];
$subject = $_POST['subject'];

$result = mysqli_query($conection, "UPDATE posts SET  image='$image', title='$title',subject='$subject',user='$_SESSION[user]' WHERE id=$id");
echo "<script>alert('Profile has been updated!')</script>";
echo "<script>window.history.go(-2);</script>";
}
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
<h2>Edit</h2>
</div>
<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<a href="../index.php" class="link"><i style="cursor:pointer;" class="fa fa-home" aria-hidden="true" title="HOME"></i></a>

</div>

</nav>
<br><br>

<h3>User: <?php echo  $_SESSION['user'];?></h3>
<br>
<div class="card">
<form action="" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="title"><h2>Title</h2></label>
<input type="text" name="title" class="form-input" value="<?php echo $title; ?>">
</div>
<label for="image"><h2>Image</h2></label>
<div align="center">
<img width="20%" height="20%" src="../images/<?php echo $image ?>">
</div>
</div>
<div class="form-group">
<label for="image"><h2>New Image</h2></label>

<input type="file" name="image" class="form-input">
</div>
<br>
<div class="form-group">
<label for="cat_id">Category</label>
<div>
<select name="cat_id" id="cat_id" class="form-input">
<?php

$query = "SELECT * FROM category";
$select_categories = mysqli_query($conection,$query);

while($row = mysqli_fetch_assoc($select_categories)){
$cat_id = $row['cat_id'];
$cat_title =  $row['cat_title'];
echo "<option value='$cat_id'>$cat_title</option>";
}
?>
</select>
</div>
</div>
<div class="form-group">
<label for="subject"><h2>Subject</h2></label>
<input type="text" name="subject" class="form-input" value="<?php echo $subject; ?>">
</div>
<div class="form-group">

<input type="hidden" id="user" class="form-input" name="<?php echo $_SESSION["user"];?>">
</div>

</div>

<div class="btn-group">
<div align="center">
<input type="button" class="btn-2" onclick="location.href='index.php?tag=<?php echo base64_encode($_SESSION['user']) ?>';" value="Cancel" />
<input type="submit" class="btn-1" name="edit_post" value="Edit Post">
</div>
</div>
</form>
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
