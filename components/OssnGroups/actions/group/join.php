<?php

$add = new OssnGroup;
$group = input('group');
if (empty($group)) {
    ossn_trigger_message(ossn_print('member:add:error'), 'error');
    redirect(REF);
}
if ($add->sendRequest(ossn_loggedin_user()->guid, $group)) {
    ossn_trigger_message(ossn_print('memebership:sent'), 'success');
    redirect("group/{$group}");
} else {
    ossn_trigger_message(ossn_print('memebership:sent:fail'), 'error');
    redirect(REF);
}