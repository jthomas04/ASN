<?php

$OssnLikes = new OssnLikes;
$anotation = input('annotation');
if ($OssnLikes->Like($anotation, ossn_loggedin_user()->guid, 'annotation')) {
    if (!ossn_is_xhr()) {
        redirect(REF);
    } else {
        header('Content-Type: application/json');
        echo json_encode(array('done' => 1,));
    }
} else {
    if (!ossn_is_xhr()) {
        redirect(REF);
    } else {
        header('Content-Type: application/json');
        echo json_encode(array('done' => 0,));
    }
}