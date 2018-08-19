<?php


//regenerate .htaccess file
ossn_generate_server_config('apache');

//Update processed updates in database so user cannot upgrade again and again.

$release = str_replace('.php', '', $upgrade);
if(ossn_update_upgraded_files($upgrade) && ossn_update_db_version('3.3')) {
		ossn_trigger_message(ossn_print('upgrade:success', array(
				$release
		)), 'success');
} else {
		ossn_trigger_message(ossn_print('upgrade:failed', array(
				$release
		)), 'error');
}
