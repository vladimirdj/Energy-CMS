<?php
$name=$_GET['name'];
$files = scandir($_GET["name"]);
foreach($files as $file)
{
if($file === '.' or $file === '..')
{
continue;
}
else
{
unlink($_GET["name"] . '/' . $file);
}
}
if(rmdir($_GET["name"]))
{
echo 'Folder Deleted';
echo "<script>alert('Poruka je obrisana!')</script>";
echo "<script>window.history.back();</script>";
}
?>
