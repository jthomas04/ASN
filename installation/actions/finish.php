<?php

define('OSSN_ALLOW_SYSTEM_START', TRUE);
require_once(dirname(dirname(dirname(__FILE__))) . '/system/start.php');
file_put_contents(ossn_installation_paths()->root . 'INSTALLED', 1);

$factory = new OssnFactory(array(
		'callback' => 'installation',
		'website' => ossn_site_url(),
		'email' => ossn_site_settings('owner_email'),
		'version' => ossn_site_settings('site_version')
));
$factory->connect;

$installed = ossn_installation_paths()->ossn_url . 'administrator';
header("Location: {$installed}");
  
