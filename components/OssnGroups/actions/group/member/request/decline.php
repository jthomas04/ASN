<?php

$add = new OssnGroup;
$group = input('group');
$user = input('user');

if (ossn_get_group_by_guid($group)->owner_guid !== ossn_loggedin_user()->guid && !ossn_isAdminLoggedin()) {
    ossn_trigger_message(ossn_print('member:add:error'), 'error');
    redirect(REF);
}
if ($add->deleteMember($user, $group)) {
    ossn_trigger_message(ossn_print('member:request:deleted'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('member:request:delete:fail'), 'error');
    redirect(REF);
}
