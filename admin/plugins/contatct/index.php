<div class="card">
<form action="admin/plugins/<?php echo $pl['title']; ?>/<?php echo $pl['function']; ?>" method="post">
<div class="form-group">
<input type="text" name="email" id="email" class="form-input" tabindex="1" placeholder="Email" required="true">
</div>
<div class="form-group">
<input type="text" name="user" id="user" class="form-input" tabindex="1" placeholder="Name" required="true">
</div>
<div class="form-group">
<input type="text" name="title" id="title" class="form-input" tabindex="1" placeholder="Title" required="true">
</div>
<div class="form-group">
<input type="text" name="subject" id="subject" class="form-input" tabindex="1" placeholder="Subject" required="true">
</div>

<br>
<div class="btn-group">
<button class="btn-3" type="submit" name="send">Send</button>
</div>
</form>
</div>
