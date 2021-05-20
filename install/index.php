<link rel='stylesheet' href='../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Energy CMS</h2>
<h3>Install</h3>
<?php  // create form
    $HOST_name = "<input class='form-input' type='text' name='dbhost' placeholder='Enter Host Name' />";
    $DB_username = "<input class='form-input' type='text' name='dbuser' placeholder='Enter DB User Name' />";
    $DB_password = "<input class='form-input' type='password' name='dbpass' placeholder='***********' />";
    $DB_name = "<input class='form-input' type='text' name='dbname' placeholder='Enter DB Name' />";
    echo "<div class='box' >
            <form class='ins' method='post' action='installing.php' >
                    <p>Enter Host Name:<p>
                    $HOST_name
                    <p>Enter DB User Name:<p>
                    $DB_username
                    <p>Enter DB PassWord:<p>
                    $DB_password
                    <p>Enter DB Name:<p>
                    $DB_name
                    <input class='btn-2' type='submit'name='install' value='NEXT' />
            </form>
        </div>";
?>
