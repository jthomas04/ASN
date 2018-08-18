<?php

$add = new OssnGroup;
$group = input('group');
$user = ossn_loggedin_user()->guid;
if ($add->deleteMember($user, $group)) {
    ossn_trigger_message(ossn_print('membership:cancel:succes'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('membership:cancel:fail'), 'error');
    redirect(REF);
}