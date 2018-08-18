<?php

$OssnLikes = new OssnLikes;
$anotation = input('post');
$entity = input('entity');
if (!empty($anotation)) {
    $subject = $anotation;
    $type = 'post';
}
if (!empty($entity)) {
    $subject = $entity;
    $type = 'entity';

}

if ($OssnLikes->UnLike($subject, ossn_loggedin_user()->guid, $type)) {
    if (!ossn_is_xhr()) {
        redirect(REF);
    } else {
        header('Content-Type: application/json');
        echo json_encode(array(
                'done' => 1,
                'button' => ossn_print('ossn:like'),
            ));
    }
} else {
    if (!ossn_is_xhr()) {
        redirect(REF);
    } else {
        header('Content-Type: application/json');
        echo json_encode(array(
                'done' => 0,
                'button' => ossn_print('ossn:unlike'),
            ));
    }
}

exit;
