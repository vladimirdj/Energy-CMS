<?php
session_start();

  require '../../../install/dbconnect.php';

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
<link rel="stylesheet" href="../../../css/se.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="zaglavlje">

<h1><?php echo $se['title']; ?></h1>
<h2>Posts</h2>
</div>
<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
<a href="../../../index.php" class="link"><i style="cursor:pointer;" class="fa fa-home" aria-hidden="true" title="HOME"></i></a>

</div>

</nav>
<br><br>
<div align="center">

</div>
<h3>User: <?php echo  $_SESSION['user'];?></h3>
<br>
<div class="card">
<?php
if(isset($_SESSION['user'])){

if(isset($_GET['id'])){

$url_post_id = $_GET['id'];

}
}
if(isset($_GET['id'])){

$id = $_GET['id'];

}
$query = "SELECT * FROM posts JOIN users ON posts.user = users.user  WHERE id = $id";
$all_posts_query = mysqli_query($conection,$query);
$rows=mysqli_fetch_array($all_posts_query);
?>
<h2>Posts:</h2>
<h3>Title: <?php echo $rows['title'];?></h3>

<h3>User:  <?php echo $rows['user'];?></h3>

<h3>Subject:  <?php echo $rows['subject'];?></h3>

<h3>Date:  <?php echo $rows['date']; ?></h3>

<img src="../../../images/<?php echo $rows['image']; ?>"  alt="<?php echo $rows['poruke_slika']; ?>" height="200" width="200">
<br>
</div>
<div class="card">

<?php
$query = "SELECT * FROM come JOIN users ON come.user = users.user  WHERE  p_id = '$id' and reply_id='0'";
$select_comment_query = mysqli_query($conection,$query);
while($row = mysqli_fetch_array($select_comment_query)){
$c_id = $row['c_id'];
$date = $row['date'];
$com = $row['com'];
$user = $row['user'];

?>

<div align="left">
<h2>Comments:</h2>
<h3>Comment: <?php echo $row['com']; ?></h3>
<h3>User: <?php echo $row['user']; ?></h3>
<h3>Date: <?php echo $row['date']; ?> </h3>

</div>
<br>
<?php


$sql2 = "SELECT * FROM come JOIN users ON come.user = users.user WHERE p_id = '$id' AND reply_id = $c_id";

$result2 = mysqli_query($conection, $sql2);
while ($reply = mysqli_fetch_array($result2)) {

$reply_id = $reply['reply_id'];
$com = $reply['com'];

?>

<div align="right">
<h2>Answers:</h2>
<h3>Comment: <?php echo $reply['com']; ?></h3>
<h3>User: <?php echo $reply['user']; ?></h3>
<h3>Date: <?php echo $reply['date']; ?> </h3>
</div>
<?php } ?>
<?php
if (isset($_SESSION['user'])) {
?>

<form action="add.php?id=<?php echo "{$id}"?>" id="comment_form" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="thread_title">Replay:</label>
<input type="text" id="com" class="form-input" name="com" >
</div>
<div class="form-group">
<input type="hidden" id="user" class="form-input" name="<?php echo $_SESSION["user"];?>">
</div>


<div class="btn-group">
<input name="reply_id" type="hidden" value="<?php echo $c_id; ?>">

<button class="btn-1">Cancel</button>
<button type="submit" class="btn-2" name="add" onClick="refreshPage()">Submit</button>
</div>

</form>
<?php
} else {
echo 'You must be logged in';
}
?>
<br>

<?php  } ?>
<?php
if(isset($_GET['id'])){

$id = $_GET['id'];

}
if(isset($_POST['add'])){
$com = $_POST['com'];

$sql = "INSERT INTO come (p_id,user, com) VALUES ('{$id}','{$_SESSION["user"]}', '{$com}')";
if (mysqli_query($conection, $sql)){
echo "Add is good.";

echo"<script>document.location='post.php?id=$id';</script>";

} else {
echo "Eror";
}
}

?>
<?php
if (isset($_SESSION['user'])) {
?>

<form action="" method="post">

<div class="form-group">
<label for="thread_title">Comment:</label>
<input type="text" id="com" class="form-input" name="com" >
</div>

<div class="form-group">

<input type="hidden" id="user" class="form-input" name="<?php echo $_SESSION["user"];?>">
</div>

<div class="btn-group">

<button class="btn-1">Cancel</button>
<button type="submit" class="btn-2" name="add" onClick="refreshPage()">Submit</button>
</div>

</form>
<?php
} else {
echo 'You must be logged in';
}
?>
<br>
<button onclick="topFunction()" id="Btn" title="Go to top">Top</button>

<div class="footer">
<?php echo $se['footer']; ?>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../js/se.js"></script>
</body>
</html>
