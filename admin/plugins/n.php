<?php
$name=$_GET['name'];

if(!file_exists($_POST["folder_name"]))
{
$name=$_POST['folder_name'];
mkdir($name, 0777, true);
echo 'Folder Created';
}
else
{
echo 'Folder Already Created';
}
?>
