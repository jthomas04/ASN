<?php

?>
<div class="message-sender" id="ossn-message-item-<?php echo $params['id'];?>">
    <div class="ossn-chat-text-data-right">
        <div class="ossn-chat-triangle ossn-chat-triangle-blue"></div>
        <div class="text">
            <div class="inner" title="<?php echo OssnChat::messageTime($params['time']); ?>">
                <?php echo ossn_call_hook('chat', 'message:smilify', null, linkify_chat($params['message'])); ?>
            </div>
        </div>
    </div>
</div>
