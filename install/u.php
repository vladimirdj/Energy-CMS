<link rel='stylesheet' href='../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Energy CMS</h2>
<h3>Install</h3>
<h3>Site confing</h3>
</div>
<?php
include 'dbconnect.php';
if(isset($_POST['ubaci'])){
$user = $_POST['user'];
$title = $_POST['title'];
$description = $_POST['description'];
$keywords = $_POST['keywords'];
$header = $_POST['header'];
$footer = $_POST['footer'];
$logo = $_POST['logo'];
$analytic = $_POST['analytic'];
$seo = $_POST['seo'];

$sql = "INSERT INTO site_setings (user, title, description, keywords, header, footer , logo, analytic, seo) VALUES ('{$user}','{$title}','{$description}', '{$keywords}','{$header}','{$footer}','{$logo}','{$analytic}','{$seo}')";
if (mysqli_query($conection, $sql)){
echo "<div class='box'>
<form class='ins' action='admin.php' method='post'>
<h2 align=center color=red>Site Config Info Succecfully Entered<h2>
<input class='btn-1' type='submit' value='NEXT' name='next'/>
</form>
</div>";
} else {
echo "Error";
}
}
?>
