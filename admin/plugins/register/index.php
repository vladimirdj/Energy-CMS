<div class="card">
<form action="admin/plugins/<?php echo $pl2['title']; ?>/<?php echo $pl2['function']; ?>" method="post">

<div class="form-group">
<input type="text" name="first_name" id="first_name" class="form-input" tabindex="1" placeholder="First name" required="true">
</div>
<div class="form-group">
<input type="text" name="last_name" id="last_name" class="form-input" tabindex="1" placeholder="Last name" required="true">
</div>
<div class="form-group">
<input type="text" name="user" id="user" class="form-input" tabindex="1" placeholder="Username" required="true">
</div>
<div class="form-group">
<input type="text" name="email" id="email" class="form-input" tabindex="1" placeholder="Email Address" required="true">
</div>
<div class="form-group">
<input type="password" name="password" id="password" class="form-input" tabindex="1" placeholder="Password" required="true">
</div>

<br>
<div class="btn-group">
<button class="btn-3" type="submit" name="add">Register</button>
</div>
</form>
</div>
