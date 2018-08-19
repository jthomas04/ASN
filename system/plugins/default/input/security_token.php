<?php

 $timestamp = time();
 $token = ossn_generate_action_token($timestamp);
 ?>
 <input type="hidden" name="ossn_ts" value="<?php echo $timestamp;?>" />
 <input type="hidden" name="ossn_token" value="<?php echo $token;?>" />