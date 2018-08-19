<?php

$friend = $params['entity'];
if ($friend->isOnline(10)) {
    $status = 'ossn-chat-icon-online';
} else {
    $status = '';
}
?>
<div class="friends-list-item" id="friend-list-item-<?php echo $friend->guid; ?>"
     onClick="Ossn.ChatnewTab(<?php echo $friend->guid; ?>);">
    <div class="friends-item-inner">
        <div class="icon"><img src="<?php echo $params['icon']; ?>"/></div>
        <div class="name"><?php echo $friend->fullname; ?></div>
        <div class="<?php echo $status; ?> ustatus"></div>
    </div>
</div>
