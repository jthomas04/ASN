<?php



ossn_generate_server_config('apache');
ossn_version_upgrade($upgrade, '4.3.1');

$factory = new OssnFactory(array(
		'callback' => 'installation',
		'website' => ossn_site_url(),
		'email' => ossn_site_settings('owner_email'),
		'version' => '4.3.1'
));
$factory->connect;
