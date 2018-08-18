<?php

?>
<div class="ossn-invite-friends">
    <p><?php echo ossn_print('com:ossn:invite:friends:note');?></p>
    
	<label><?php echo ossn_print('com:ossn:invite:emails:note');?></label>
    <textarea rows="4" name="addresses" placeholder="<?php echo ossn_print("com:ossn:invite:emails:placeholder");?>"></textarea>
    
    <label><?php echo ossn_print('com:ossn:invite:message');?></label>
    <textarea name="message"></textarea>
    
	<input type="submit" class="btn btn-primary" value="<?php echo ossn_print('com:ossn:invite');?>"/>    
</div>