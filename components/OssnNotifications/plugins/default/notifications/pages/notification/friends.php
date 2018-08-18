<?php

?>
<div class="messages-inner">
    <div class="notification-friends">
        <?php
        if ($params['friends']) {
            $confirmbutton = ossn_print('ossn:notifications:friendrequest:confirmbutton');
            $denybutton = ossn_print('ossn:notifications:friendrequest:denybutton');
            foreach ($params['friends'] as $users) {
                $baseurl = ossn_site_url();
                $url = $users->profileURL();
                $img = "<img src='{$users->iconURL()->small}' />";
                $messages[] = "<li id='notification-friend-item-{$users->guid}'>
		              <div class='ossn-notifications-friends-inner'>
		                <div class='image'>{$img}</div> 
		                <div class='notfi-meta'>
		                
						<a href='{$url}' class='user'>{$users->fullname}</a>
						  <div class='controls' id='ossn-nfriends-{$users->guid}'>
						  <script>
						  Ossn.AddFriend($users->guid); 
						  Ossn.removeFriendRequset($users->guid);
						  </script>
						  <form id='add-friend-{$users->guid}'>
                           <input class='btn btn-primary' type='submit' value='{$confirmbutton}' />
						   </form>
						   	<form id='remove-friend-{$users->guid}'>
						   <input class='btn btn-default' type='submit' value='{$denybutton}' />
						   </form>

                           </div>
  
						</div>
						</div>
						</li>";
            }
        }
        echo implode('', $messages);
        ?>
    </div>
</div>
<div class="bottom-all">
    <!-- <a href="#">See All</a> -->
</div>
