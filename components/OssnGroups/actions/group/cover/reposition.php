<?php

header('Content-Type: application/json');
$group = ossn_get_group_by_guid(input('group'));
if ($group->owner_guid !== ossn_loggedin_user()->guid && !ossn_isAdminLoggedin()) {
    exit;
}
if ($group->repositionCOVER($group->guid, input('top'), input('left'))) {
    $params = $group->coverParameters($group->guid);
    echo json_encode(array(
            'top' => $params[0],
            'left' => $params[1]
        ));
}
