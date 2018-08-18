<?php

$poke = new OssnPoke;
$user = input('user');
if ($poke->addPoke(ossn_loggedin_user()->guid, $user)) {
    $user = ossn_user_by_guid($user);
    ossn_trigger_message(ossn_print('user:poked', array($user->fullname)), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('user:poke:error'), 'error');
    redirect(REF);
}