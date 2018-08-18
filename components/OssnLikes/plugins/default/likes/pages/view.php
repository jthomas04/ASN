<?php

echo '<div class="ossn-likes-view">';
$likes = new OssnLikes;
$guid = input('guid');
$type = input('type');
if (empty($type)) {
    $type = 'post';
}
$likes = $likes->GetLikes($guid, $type);
if ($likes) {
    foreach ($likes as $us) {
        //empty liker list #686
		//if ($us->guid !== ossn_loggedin_user()->guid) {
            $users[] = ossn_user_by_guid($us->guid);
        //}
    }
}
$users['users'] = $users;
$users['icon_size'] = 'small';
echo ossn_plugin_view("output/users_list", $users);
echo '</div>';
