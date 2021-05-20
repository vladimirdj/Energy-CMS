<link rel='stylesheet' href='../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Energy CMS</h2>
<h3>Install</h3>
<?php
    $writer="<?php".'
    '.'$HOST_name = '."'".$_POST['dbhost']."'".';
    '.'$DB_name = '."'".$_POST['dbname']."'".';
    '.'$DB_username = '."'".$_POST['dbuser']."'".';
    '.'$DB_password = '."'".$_POST['dbpass']."'".';
    $conection = mysqli_connect($HOST_name,$DB_username,$DB_password,$DB_name);
    '."?>";

    $write=fopen('dbconnect.php' , 'w');
    if(empty($_POST['dbhost']&&
             $_POST['dbname']&&
             $_POST['dbuser']&&
             $_POST['dbpass'])){
                 echo"<h2 align=center >All Fields are required! Please Re-enter</h2>";

    }else{
        if(isset($_POST['install']))
        {
            fwrite($write,$writer);
            fclose($write);
            echo "<div class='box'>
                <form class='ins' action='install.php' method='post'>
                    <h2 align=center color=red>Database Info Succecfully Entered<h2>
                    <input class='btn-1' type='submit' value='NEXT' name='next'/>
                </form>
                </div>";

  }else{ echo "<h2 align=center >Error<h2>"; }}

  ?>
