<link rel='stylesheet' href='../../css/se.css' />
<div align="center">
<h1>Sensation Energy</h1>
<h2>Energy CMS</h2>
<h3>Install</h3>
<h3>Template confing</h3>

<table class="responsive-table">
<div align="center">
<h2>Install</h2>
</div>
      <thead>

        <tr>
<th scope="col">Folder Name</th>

          <th scope="col">Install</th>
<th scope="col">View</th>
<th scope="col">Edit</th>
<th scope="col">Upload</th>
<th scope="col">Delete</th>

        </tr>

      </thead>

      <tbody>
        <?php

$folder = array_filter(glob('*'), 'is_dir');

foreach($folder as $name)
{
if(file_exists($name.'/install.php')){
//  if (file_exists($name)) {

?>

        <tr>

          <td data-title="name"><?php echo $name; ?></td>
<td data-title="install"> <a href="<?php echo $name ?>/install.php?name=<?php echo $name ?>"><button class="btn-1">Install</button></a></td>
<td data-title="view"> <a href="v_te.php?name=<?php echo $name; ?>"><button class="btn-2">View</button></a></td>
<td data-title="edit"> <a href="e_te.php?name=<?php echo $name; ?>"><button class="btn-2">Edit</button></a></td>
<td data-title="upload"> <a href="upload2.php?name=<?php echo $name; ?>"><button class="btn-2" name="upload" data-name="<?php echo $name; ?>">Upload</button></a></td>

<td data-title="delete"> <a href="obrisi1.php?name=<?php echo $name; ?>"><button class="btn-4">Delete</button></a></td>

        </tr>

  <?php
}

  }

  ?>

      </tbody>

    </table>

  </div>

<div class='box'>
<form class='ins' action='../plugins/plugins.php' method='post'>
<h2 align=center color=red>Template install Succecfully<h2>
<input class='btn-1' type='submit' value='NEXT' name='next'/>
</form>
</div>
