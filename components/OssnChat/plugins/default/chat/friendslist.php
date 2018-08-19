<?php

$friends = ossn_chat()->getOnlineFriends('', 10);
$have = '';
if ($friends) {
    foreach ($friends as $friend) {
        $friend = arrayObject($friend, 'OssnUser');
        $friend->fullname = $friend->first_name . ' ' . $friend->last_name;
        $vars['entity'] = $friend;
        $vars['icon'] = $friend->iconURL()->smaller;
        $have = 1;
        echo ossn_plugin_view('chat/friends-item', $vars);
    }
}
if ($have !== 1) {
    echo '<div class="ossn-chat-none">'.ossn_print('ossn:chat:no:friend:online').'</div>';
}