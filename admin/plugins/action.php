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
<link rel="stylesheet" href="../css/se.css">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>


<div class="container3">
<table class="responsive-table">
<div align="center">
<h2>Installed</h2>
</div>
<thead>

<tr>

<th scope="col">Folder Name</th>
<th scope="col">Status</th>
<th scope="col">User</th>
<th scope="col">Position</th>
<th scope="col">Function</th>

<th scope="col">Date</a></th>
<th scope="col">Akcija</th>
</tr>

</thead>

<tbody>
<?php
session_start();
require '../../conection.php';

$folder = array_filter(glob('*'), 'is_dir');
$upit = "SELECT * FROM plugins";
$procedural = mysqli_query($conection, $upit);

while($folder = mysqli_fetch_array($procedural)){

$install=$folder['install'];
$status=$folder['status'];
$user=$folder['user'];
$date=$folder['date'];
$function=$folder['function'];
$title=$folder['title'];
$id=$folder['id'];
$position=$folder['position'];
$admin=$folder['admin'];
?>
<tr>

<td data-title="naziv"><?php echo $naziv; ?></td>
<td data-title="status"><?php echo $status; ?></td>
<td data-title="korisnik"><?php echo $korisnik; ?></td>
<td data-title="status"><?php echo $pozicija; ?></td>
<td data-title="status"><?php echo $funkcija; ?></td>
<td data-title="pozicija"><?php echo $datum; ?></td>

<td><a href="pogledaj.php?naziv=<?php echo $naziv; ?>"><button class="btn-1"> Pogledaj </button></a><a href="uredi.php?id=<?php echo $id; ?>"><button class="btn-2">Uredi</button></a><a href="obrisi.php?naziv=<?php echo $naziv; ?>" onClick=\"return confirm('Zelis da obrises?')\"><button class="btn-5">Obisi</button></a>
<a href="upload1.php?naziv=<?php echo $naziv; ?>"><button class="btn-2" name="upload" data-name="<?php echo $naziv; ?>">Upload</button></a></td>

</tr>
<?php
}
?>

</tbody>

</table>
<br><div align="center">
<a href="upload.php"><button class="btn-2"><h2>Upload Zip File</h2></button></a>
</div>
<br>
<table class="responsive-table">
<div align="center">
<h2>Install</h2>
</div>
<thead>

<tr>
<th scope="col">Folder Name</th>

<th scope="col">Install</th>
<th scope="col">View</th>
<th scope="col">Edit</th>
<th scope="col">Upload</th>
<th scope="col">Delete</th>
</tr>

</thead>

<tbody>
<?php

$folder = array_filter(glob('*'), 'is_dir');

foreach($folder as $name)
{
if(file_exists($name.'/install.php')){
?>
<tr>

<td data-title="name"><?php echo $name; ?></td>
<td data-title="install"> <a href="<?php echo $name ?>/install.php?name=<?php echo $name ?>"><button class="btn-1">Install</button></a></td>
<td data-title="view"> <a href="pogledaj1.php?name=<?php echo $name; ?>"><button class="btn-2">View</button></a></td>
<td data-title="edit"> <a href="uredi1.php?name=<?php echo $name; ?>"><button class="btn-2">Edit</button></a></td>
<td data-title="upload"> <a href="upload2.php?name=<?php echo $name; ?>"><button class="btn-2" name="upload" data-name="<?php echo $name; ?>">Upload</button></a></td>

<td data-title="delete"> <a href="obrisi1.php?name=<?php echo $name; ?>"><button class="btn-4">Delete</button></a></td>

</tr>

<?php
} }
?>

</tbody>

</table>

</div>

<div class="footer">
<?php echo $as['footer']; ?>
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../js/se.js"></script>

</body>
</html>
