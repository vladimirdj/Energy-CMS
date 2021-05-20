<link rel='stylesheet' href='../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Sensation Framework</h2>
<h3>Install</h3>
</div>
<?php
include 'dbconnect.php';
if(isset($_POST['ubaci'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$user = $_POST['user'];
$password = $_POST['password'];
$email = $_POST['email'];
$role = $_POST['role'];
$sql = "INSERT INTO users (first_name, last_name, user, password, email, role, status) VALUES ('{$first_name}', '{$last_name}', '{$user}', '{$password}', '{$email}', '{$role}', '0')";
if (mysqli_query($conection, $sql)){
echo "<div class='box'>
<form class='ins' action='config.php' method='post'>
<h2 align=center color=red>Add user Succecfully Entered<h2>
<input class='btn-4' type='submit' value='NEXT' name='next'/>
</form>
</div>";
} else {
echo "Error";
}
}
?>
