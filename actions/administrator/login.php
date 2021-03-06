<?php

if (ossn_isAdminLoggedin()) {
    redirect('administrator/dashboard');
}

$username = input('username');
$password = input('password');

//check if username is email
if (strpos($username, '@') !== false){
	$user = ossn_user_by_email($username);
	$username = $user->username;
}

if (ossn_user_by_username($username)->type !== 'admin') {
    ossn_trigger_message(ossn_print('login:error'), 'error');
    redirect(REF);
}
if (empty($username) || empty($password)) {
    ossn_trigger_message(ossn_print('login:error'), 'error');
    redirect(REF);
}

$login = new OssnUser;
$login->username = $username;
$login->password = $password;
if ($login->Login()) {
    ossn_trigger_message(ossn_print('login:success'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('login:error'), 'error');
    redirect(REF);
}