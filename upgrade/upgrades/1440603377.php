<?php

 
$database = new OssnDatabase;
//regenerate .htaccess file
ossn_generate_server_config('apache');

/**
 * Update processed updates in database so user cannot upgrade again and again.
 *
 * can we make this script short? 
 */
$upgrade_json = array_merge(ossn_get_upgraded_files(), array(
		$upgrade
));
$upgrade_json = json_encode($upgrade_json);

$update           = array();
$update['table']  = 'ossn_site_settings';
$update['names']  = array(
		'value'
);
$update['values'] = array(
		$upgrade_json
);
$update['wheres'] = array(
		"name='upgrades'"
);

$upgrade = str_replace('.php', '', $upgrade);
if($database->update($update) && ossn_update_db_version('3.1')) {
		ossn_trigger_message(ossn_print('upgrade:success', array(
				$upgrade
		)), 'success');
} else {
		ossn_trigger_message(ossn_print('upgrade:failed', array(
				$upgrade
		)), 'error');
}
