<?php

?>
<div class="reset-notice"><?php echo ossn_print('enter:emai:reset:pwd'); ?></div>
<input type="text" name="email" />
<div>
		<?php echo ossn_fetch_extend_views('forms/resetlogin/before/submit'); ?>
</div>
<input type="submit" class="btn btn-primary" value="<?php echo ossn_print('reset'); ?>"/>