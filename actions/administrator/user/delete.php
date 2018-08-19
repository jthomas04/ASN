<?php


$guid = input('guid');
$user = ossn_user_by_guid($guid);
if($user && $user->guid !== ossn_loggedin_user()->guid){
	if($user->deleteUser()){
		ossn_trigger_message(ossn_print('admin:user:deleted'), 'success');
	} else {
		ossn_trigger_message(ossn_print('admin:user:delete:error'), 'error');		
	}
}
redirect(REF);