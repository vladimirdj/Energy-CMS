<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title><?php echo $res['name'];?></title>
<link rel="shortcut icon" href="http://www.sensationenergy.com/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../public/css/mvc.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
.raspon_1_of_2 {
width: 31.70%;
}
.raspon_2_of_2 {
width: 66.7%;
}
@media only screen and (max-width:480px) {
.raspon_1_of_2 {
width: 100%
}
.raspon_2_of_2 {
width: 100%
}
}
</style>
</head>
<body>

<div class="zaglavlje">
<h1><?php echo $res['site_name'];?></h1>
</div>
<div class="gore">
<nav class="gornji_meni">
<a href="#" class="toggle"><i class="fa fa-reorder"></i></a>
<div class="left">
  <a href="../index.php" class="link"><i style="cursor:pointer;" class="fa fa-home" aria-hidden="true" title="HOME"></i></a>
<a href="app/admin/index.php" class="link" title="Admin">Admin</a>
<a href="register.php" class="link" title="Register">Register</a>

</div>

</nav>
<br>
<br>
<div class="card">
<div align="center">
<h1> Page not found !!! </h1>
</div>
</div>
<br><br>
<div class="podnozije">
Copyright @ Sensation Energy
    <?php echo date("Y");?>. All Rights Reserved.
</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../public/js/mvc.js"></script>
</body>
</html>
