<?php


ossn_generate_server_config('apache');
ossn_version_upgrade($upgrade, '4.0');

$theme = new OssnThemes;
$theme->Enable('goblue');

$factory = new OssnFactory(array(
		'callback' => 'installation',
		'website' => ossn_site_url(),
		'email' => ossn_site_settings('owner_email'),
		'version' => ossn_site_settings('site_version')
));
$factory->connect;
