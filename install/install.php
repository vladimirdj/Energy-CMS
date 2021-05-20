<link rel='stylesheet' href='../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Energy CMS</h2>
<h3>Install</h3>
<?php
include 'dbconnect.php';

$table_admin_setings = "admin_setings";
$id = "id";
$user = "user";
$title = "title";
$description = "description";
$footer = "footer";
$header = "header";
$logo = "logo";
$date = "date";

$table_site_setings = "site_setings";
$id = "id";
$user = "user";
$title = "title";
$description = "description";
$keywords = "keywords";
$header = "header";
$footer = "footer";
$logo = "logo";
$analytic = "analytic";
$seo = "seo";
$date = "date";

$table_category= "category";
$cat_id = "cat_id";
$cat_title = "cat_title";
$date = "date";
$user = "user";

$table_users = "users";
$user_id = "user_id";
$user = "user";
$first_name = "first_name";
$last_name = "last_name";
$email = "email";
$password = "password ";
$role = "role";
$status = "status";
$date = "date";
$image = "image";

$table_come = "come";
$c_id = "c_id";
$p_id = "p_id";
$user = "user";
$com = "com ";
$date = "date";
$reply_id = "reply_id";

$table_contact = "contact";
$e_id = "e_id";
$email = "email";
$user = "user";
$title = "title";
$subject = "subject";
$date = "date";

$table_menu = "menu";
$id = "id";
$title = "title";
$url = "url";
$user = "user";
$position = "position";

$table_pages = "pages";
$st_id = "st_id";
$user = "user";
$title = "title";
$subject = "subject";
$date = "date";
$url = "url";

$table_plugins = "plugins";
$id = "id";
$user = "user";
$title = "title";
$status = "status";
$position = "position";
$function = "function";
$install = "install";
$date = "date";
$admin = "admin";

$table_posts = "posts";
$id = "id";
$cat_id = "cat_id";
$user = "user";
$title = "title";
$subject = "subject";
$image = "image";
$status = "status";
$date = "date";

$table_sub = "sub";
$parent_id = "parent_id";
$title = "title";
$user = "user";
$s_id = "s_id";
$url = "url";
$position = "position";

$table_theme = "theme";
$t_id = "t_id";
$user = "user";
$title = "title";
$status = "status";
$css = "css";
$js = "js";
$date = "date";

$sql1 = "create table $table_admin_setings(
$id int(20) NOT NULL AUTO_INCREMENT,
$user varchar(200) NOT NULL,
$title varchar(200) NOT NULL,
$description varchar(200) NOT NULL,
$footer varchar(200) NOT NULL,
$header varchar(200) NOT NULL,
$logo varchar(200) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
primary key($id)
)";

$sql2 = "create table $table_site_setings(
$id int(20) NOT NULL AUTO_INCREMENT,
$user varchar(200) NOT NULL,
$title varchar(200) NOT NULL,
$description varchar(200) NOT NULL,
$keywords varchar(200) NOT NULL,
$header varchar(200) NOT NULL,
$footer varchar(200) NOT NULL,
$logo varchar(200) NOT NULL,
$analytic varchar(200) NOT NULL,
$seo varchar(200) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
primary key($id)
)";

$sql3 = "create table $table_category(
$cat_id int(20) NOT NULL AUTO_INCREMENT,
$cat_title varchar(200) NOT NULL,
$user varchar(200) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
primary key($cat_id)
)";

$sql4 = "create table $table_users(
$user_id int(20) NOT NULL AUTO_INCREMENT,
$user varchar(200) NOT NULL,
$first_name varchar(200) NOT NULL,
$last_name varchar(200) NOT NULL,
$email varchar(200) NOT NULL,
$password varchar(200) NOT NULL,
$role varchar(200) NOT NULL,
$status int(200) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
$image text NOT NULL,
primary key($user_id)
)";

$sql5 = "create table $table_come(
$c_id int(20) NOT NULL AUTO_INCREMENT,
$p_id int(20) NOT NULL,
$user varchar(200) NOT NULL,
$com varchar(200) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
$reply_id int(20) NOT NULL,
primary key($c_id)
)";

$sql6 = "create table $table_contact(
$e_id int(11) NOT NULL AUTO_INCREMENT,
$email varchar(255) NOT NULL,
$user varchar(255) NOT NULL,
$title varchar(255) NOT NULL,
$subject varchar(255) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
primary key($e_id)
)";

$sql7 = "create table $table_menu(
$id int(11) NOT NULL AUTO_INCREMENT,
$title varchar(255) NOT NULL,
$url varchar(255) NOT NULL,
$user varchar(255) NOT NULL,
$position int(20) NOT NULL,
primary key($id)
)";

$sql8 = "create table $table_pages(
$st_id int(20) NOT NULL AUTO_INCREMENT,
$user varchar(200) NOT NULL,
$title varchar(200) NOT NULL,
$subject varchar(5000) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
$url varchar(200) NOT NULL,
primary key($st_id)
)";

$sql9 = "create table $table_plugins(
$id int(20) NOT NULL AUTO_INCREMENT,
$user varchar(200) NOT NULL,
$title varchar(200) NOT NULL,
$status varchar(200) NOT NULL,
$position varchar(200) NOT NULL,
$function varchar(200) NOT NULL,
$install varchar(200) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
$admin varchar(20) NOT NULL,
primary key($id)
)";

$sql10 = "create table $table_posts(
$id int(20) NOT NULL AUTO_INCREMENT,
$cat_id int(20) NOT NULL,
$user varchar(200) NOT NULL,
$title varchar(200) NOT NULL,
$subject text NOT NULL,
$image text NOT NULL,
$status varchar(100) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
primary key($id)
)";

$sql11 = "create table $table_sub(
$parent_id int(20) NOT NULL AUTO_INCREMENT,
$title varchar(200) NOT NULL,
$user varchar(200) NOT NULL,
$s_id int(20) NOT NULL,
$url varchar(200) NOT NULL,
$position int(20) NOT NULL,
primary key($parent_id)
)";

$sql12 = "create table $table_theme(
$t_id int(20) NOT NULL AUTO_INCREMENT,
$user varchar(200) NOT NULL,
$title varchar(200) NOT NULL,
$status varchar(200) NOT NULL,
$css varchar(200) NOT NULL,
$js varchar(200) NOT NULL,
$date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
primary key($t_id)
)";
?>

<!DOCTYPE html>
<html>
<head>
<title>installtest</title>
<link rel="stylesheet" type="text/css" href="install-style.css">
</head>
<body>
<div id="alert-area">
<?php

//creating table

if(mysqli_query($conection,$sql1)){
echo 'create table '.$table_admin_setings;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_admin_setings;
echo "<br/>";
echo '</p>';
}

if(mysqli_query($conection,$sql2)){
echo 'create table '.$table_site_setings;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_site_setings;
echo "<br/>";
echo '</p>';
}

if(mysqli_query($conection,$sql3)){
echo 'create table '.$table_category;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_category;
echo "<br/>";
echo '</p>';
}

if(mysqli_query($conection,$sql4)){
echo 'create table '.$table_users;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_users;
echo "<br/>";
echo '</p>';
}
if(mysqli_query($conection,$sql5)){
echo 'create table '.$table_come;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_come;
echo "<br/>";
echo '</p>';
}
if(mysqli_query($conection,$sql6)){
echo 'create table '.$table_contact;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_contact;
echo "<br/>";
echo '</p>';
}
if(mysqli_query($conection,$sql7)){
echo 'create table '.$table_menu;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_menu;
echo "<br/>";
echo '</p>';
}
if(mysqli_query($conection,$sql8)){
echo 'create table '.$table_pages;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_pages;
echo "<br/>";
echo '</p>';
}
if(mysqli_query($conection,$sql9)){
echo 'create table '.$table_plugins;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_plugins;
echo "<br/>";
echo '</p>';
}
if(mysqli_query($conection,$sql10)){
echo 'create table '.$table_posts;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_posts;
echo "<br/>";
echo '</p>';
}
if(mysqli_query($conection,$sql11)){
echo 'create table '.$table_sub;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_sub;
echo "<br/>";
echo '</p>';
}
if(mysqli_query($conection,$sql12)){
echo 'create table '.$table_theme;
echo "<br/>";
}else{
echo '<p class="error-line">';
echo 'failed to create table '.$table_theme;
echo "<br/>";
echo '</p>';
}
mysqli_close($conection);
?>
<div class='box'>
<form class='ins' action='ubaci.php' method='post'>
<h2 align=center color=red>Database Info Succecfully Entered<h2>
<input class='btn-3' type='submit' value='NEXT' name='next'/>
</form>
</div>
</body>
</html>
