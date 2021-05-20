<?php

$perpage=2;
if(isset($_GET['page'])){
$page=intval($_GET['page']);
}else{
$page=1;
}
$cal=$page*$perpage;
$start=$cal-$perpage;

$query = "SELECT * FROM posts LIMIT $start,$perpage";
$result_query = mysqli_query($conection,$query);

while($row = mysqli_fetch_assoc($result_query)) {

$id = $row['id'];
$title = $row['title'];
$subject = $row['subject'];
$user = $row['user'];
$image = $row['image'];
$status = $row['status'];
$date = $row['date'];

if($status == 'approved'){
?>
<div class="card">
<h1><?php echo $title ?></h1>
<h5> <?php echo $date;?> </h5>
<img  src="images/<?php echo $image; ?>" alt="<?php echo $image; ?>" style="width:20%; height:20%;">
<br>

<p> <h2><?php echo $subject ?></h2> </p>
<p><a href="profil/index.php?tag=<?php echo base64_encode($user); ?>"> <?php echo $user;?></a> <br>
<br>
<br>

<a  href="admin/plugins/blog/post.php?id=<?php echo "{$id}"?>">Read More </a>
<br>
</div>

<?php } } ?>
<br>
<div class="pagination">
<?php
if(isset($page)){

$result=mysqli_query($conection,"select count(*)as total from posts");
$rows=$result->num_rows;
if($rows){
$rs=$result->fetch_assoc();
$total=$rs['total'];
}

$totalPages=ceil($total/$perpage);
if($page<=1){

echo "<a href=# class=active>  </a><br>";
}else{
$j=$page-1;

echo"<a href='index.php?page=$j'><button class='btn-circle'><i class='fa fa-angle-left'></i></button></a><br>";
}
for($i=1;$i<=$totalPages;$i++){
if($i<>$page)
{
echo "<a href='index.php?page=$i'>$i </a><br>";
}else{
echo "<a href=# class=active>".$i." </a><br>";
}
}
if($page==$totalPages){
echo "<a href=# class=active>  </a><br>";
}else{
$front=$page+1;
echo"<a href='index.php?page=$front'><button class='btn-circle'><i class='fa fa-angle-right'></i></button></a><br>";

}
}
?>
</div>
