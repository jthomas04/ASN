<?php

?>
<div>
    <label><?php echo ossn_print('username'); ?> </label>
    <input type="text" name="username"/>
</div>

<div>
    <label> <?php echo ossn_print('password'); ?> </label>
    <input type="password" name="password"/>
</div>

<div>
	<input type="submit" value="<?php echo ossn_print('admin:login'); ?>" class="btn btn-primary"/>
</div>