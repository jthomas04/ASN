<?php

$OssnClasses = array(
		'Session',
		'Factory',
		'SiteException',
		'DatabaseException',
		'Base',
		'Translit',
		'Mail',
		'Pagination',
		'Database',
		'Site',
		'Entities',
		'User',
		'Object',
		'Annotation',
		'Themes',
		'File',
		'Components',
		'Menu',
		'System',
		'Kernel',
);
foreach($OssnClasses as $class){
		$loadClass['Ossn'.$class] = ossn_route()->classes . "Ossn{$class}.php";
}
ossn_register_class($loadClass);
