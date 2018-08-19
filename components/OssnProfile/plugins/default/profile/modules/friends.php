<?php

$friends = $params['user']->getFriends(false, array(
		'limit' => 9
));
echo '<div class="ossn-profile-module-friends">';
if($friends) {
		foreach($friends as $friend) {
				$url       = $friend->iconURL()->large;
				$profile   = $friend->profileURL();
				$user_name = $friend->fullname;
				echo "<a href='{$profile}'>
          <div class='user-image'>
            <img src='{$url}' title='{$friend->fullname}'/>
			<div class='user-name'>{$user_name}</div>
		   </div>
       </a>";
		}
} else {
		echo '<h3>' . ossn_print('no:friends') . '</h3>';
}
echo '</div>';
