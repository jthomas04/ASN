<?php

$component = new OssnComponents;
$mode  = input('compatibility_mode');
$modes = array(
		'off',
		'on'
);
if(!in_array($mode, $modes)) {
		ossn_trigger_message(ossn_print('ossn:smilies:admin:settings:save:error'), 'error');
		redirect(REF);
}
if($component->setSettings('OssnSmilies', array('compatibility_mode' => $mode))) {
		ossn_trigger_message(ossn_print('ossn:smilies:admin:settings:saved'));
} else {
		ossn_trigger_message(ossn_print('ossn:smilies:admin:settings:save:error'), 'error');
}
redirect(REF);