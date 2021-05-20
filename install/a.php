<link rel='stylesheet' href='../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Energy CMS</h2>
<h3>Install</h3>
<h3>Admin confing</h3>
</div>
<?php
include 'dbconnect.php';
if(isset($_POST['ubaci'])){
$user = $_POST['user'];
$title = $_POST['title'];
$description = $_POST['description'];
$header = $_POST['header'];
$footer = $_POST['footer'];
$logo = $_POST['logo'];


$sql = "INSERT INTO admin_setings (user, title, description, header, footer, logo) VALUES ('{$user}','{$title}','{$description}','{$header}','{$footer}','{$logo}')";
if (mysqli_query($conection, $sql)){
echo "<div class='box'>
<form class='ins' action='../admin/theme/template.php' method='post'>
<h2 align=center color=red>Admin Config Succecfully Entered<h2>
<input class='btn-1' type='submit' value='NEXT' name='next'/>
</form>
</div>";
} else {
echo "Error";
}
}
?>
