<?php



ossn_generate_server_config('apache');
ossn_version_upgrade($upgrade, '4.5');

$database = new OssnDatabase;

/**
 * Register a OssnSounds component
 *
 * @access private
 */
$database->statement("INSERT `ossn_components` (`com_id`, `active`) VALUES('OssnSounds', '1')");
$database->execute();

$factory = new OssnFactory(array(
		'callback' => 'installation',
		'website' => ossn_site_url(),
		'email' => ossn_site_settings('owner_email'),
		'version' => '4.5'
));
$factory->connect;
