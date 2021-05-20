<?php
$name=$_GET['name'];
$file_data = scandir($_GET["name"]);
?>
<form action="n.php?name=<?php echo $name; ?>" method="post" id="upload_form" enctype='multipart/form-data'>
<p>Name
<input type="text" name="folder_name" /></p>
<br>

<input type="hidden" name="name" value=<?php echo $_GET['name'];?>>
<input type="submit" name="update" class="btn btn-info" value="Upload" />
</form>
