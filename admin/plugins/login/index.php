
<div class="card">
<form action="admin/plugins/<?php echo $pl2['title']; ?>/<?php echo $pl2['function']; ?>" method="post">
<div class="form-group">
<label for="user">User:</label>
<input type="text" id="user" class="form-input" name="user"  required value="vlada">
</div>
<div class="form-group">
<label for="password">Password:</label>
<input type="password" id="password" class="form-input" name="password" required value="vlada">
</div>
<br>
<div class="btn-group">
<button class="btn-2" type="submit" name="login">Login</button>
</div>
</form>
</div>
