<?php



$guid = input('guid');
$group = ossn_get_group_by_guid($guid);

if(($group->owner_guid === ossn_loggedin_user()->guid) || ossn_isAdminLoggedin()){
	if ($group->deleteGroup($group->guid)) {
    	ossn_trigger_message(ossn_print('group:deleted'));
    	redirect();
	} 
}
ossn_trigger_message(ossn_print('group:delete:fail'), 'error');
redirect(REF);	
