<link rel='stylesheet' href='../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Energy CMS</h2>
<h3>Install</h3>
<?php
    if(isset($_POST['next'])){


//rename('/instal/index.php','/instal/index_1.php');
rename ('index.php', 'index_old.php');

        echo"<h2 align=center >Finished</h2>";
        echo "<div class='box'>
            <form class='ins' action='../index.php' method='post'>

                <input class='btn-4' type='submit' value='Finish' name='next'/>
            </form>
            </div>";

 //rename($files_folder."/".$folder_name."/un_approved/".$approve_employee_username, $files_folder."/".$folder_name."/approved/".$approve_employee_username);



    }else{
        echo"<h2 align=center >Error</h2>";
    }
?>
