<?php

?>
<div class="reset-notice"><?php echo ossn_print('enter:new:password'); ?></div>
<input type="password" name="password"/>

<input type="hidden" name="user" value="<?php echo input('user'); ?>"/>
<input type="hidden" name="c" value="<?php echo input('c'); ?>"/>
<div>
		<?php echo ossn_fetch_extend_views('forms/resetpassword/before/submit'); ?>
</div>
<input type="submit"  class="btn btn-success" value="<?php echo ossn_print('reset'); ?>"/>