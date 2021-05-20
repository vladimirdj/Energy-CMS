<link rel='stylesheet' href='../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Energy CMS</h2>
<h3>Install</h3>
<h3>Site confing</h3>
</div>
<form action="u.php" method="post">

<div class="form-group">
<label for="user">User</label>
<div>
<select name="user" id="user"  class="form-input">
<?php
include 'dbconnect.php';
//Show select values dynamically
$query = "SELECT * FROM users";
$select_categories = mysqli_query($conection,$query);

//confirm($select_categories);

//Be careful here since we want to take the id but showing cat_title
while($row = mysqli_fetch_assoc($select_categories)){

$user =  $row['user'];

echo "<option value='$user'>$user</option>";

}
?>
</select>
</div>
</div>
<div class="form-group">
<label>Title</label>
<input type="text" name="title" class="form-input">
</div>
<div class="form-group">
<label>Description</label>
<input type="text" name="description" class="form-input">
</div>
<div class="form-group">
<label>Keywords</label>
<input type="text" name="keywords" class="form-input">
</div>
<div class="form-group">
<label>Header</label>
<input type="text" name="header" class="form-input">
</div>
<div class="form-group">
<label>Footer</label>
<input type="text" name="footer" class="form-input">
</div>
<div class="form-group">
<label>Logo</label>
<input type="text" name="logo" class="form-input">
</div>
<div class="form-group">
<label>Analytic</label>
<input type="text" name="analytic" class="form-input">
</div>
<div class="form-group">
<label>Seo</label>
<input type="text" name="seo" class="form-input">
</div>
<input type="submit" class="btn-2" value="Add" name="ubaci">
</form>
