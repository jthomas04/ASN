<?php

 $user = ossn_loggedin_user();
 $notification = new OssnNotifications;
 if($notification->clearAll($user->guid)){
	ossn_trigger_message(ossn_print('ossn:notification:mark:read:success'));
	redirect(REF);	 
 } else {
	ossn_trigger_message(ossn_print('ossn:notification:mark:read:error'), 'error');
	redirect(REF);	 
 }