<?php
session_start();
require '../../../install/dbconnect.php';


if(isset($_POST['add'])){
$com = $_POST['com'];
$sql = "INSERT INTO come (user, com) VALUES ('vlada', '{$com}')";
if (mysqli_query($conection, $sql)){
echo "Add is good.";

echo "<script>window.history.go(-2);</script>";

} else {
echo "Eror";
}
}

?>
<form action="" method="post">

<div class="form-group">
<label for="thread_title">Naslov:</label>
<input type="text" id="com" class="form-input" name="com" >
</div>



<div class="btn-group">

<button class="btn-1">Cancel</button>
<button type="submit" class="btn-2" name="add" onClick="refreshPage()">Submit</button>
</div>

</form>

</div>
