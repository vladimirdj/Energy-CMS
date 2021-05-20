<?php
require '../../../install/dbconnect.php';

$sql = "SELECT * FROM come";
$result = mysqli_query($conection, $sql);

while($r = mysqli_fetch_array($result)){

$user = $r['user'];
$com = $r['com'];

?>
<br>
text: <? echo $r['com']; ?>
<br>
user: <? echo $user; ?>
<br>
<?php
}
?>
