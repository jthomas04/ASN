<?php

$user = $params['user'];
$message = ossn_message_print($params['message']);
if($user->guid == ossn_loggedin_user()->guid){
					?>
                    	<div class="row">
                                <div class="col-md-10">
                                	<div class="message-box-sent text">
						<?php echo ossn_call_hook('messages', 'message:smilify', null, ossn_message_print($message)); ?>
                                        	<div class="time-created"><?php echo ossn_user_friendly_time(time());?></div>
                                        </div>
                                </div>
                        	<div class="col-md-2">
                                	<a href="<?php echo $user->profileURL();?>"><img  class="user-icon" src="<?php echo $user->iconURL()->small;?>" /></a>
                                </div>                                
                        </div>
                    <?php	
					} else {
						?>
                    	<div class="row">
                        	<div class="col-md-2">
                                	<a href="<?php echo $user->profileURL();?>"><img  class="user-icon" src="<?php echo $user->iconURL()->small;?>" /></a>
                                </div>                                
                                <div class="col-md-10">
                                	<div class="message-box-recieved text">
						<?php echo ossn_call_hook('messages', 'message:smilify', null, ossn_message_print($message)); ?>
                                        	<div class="time-created"><?php echo ossn_user_friendly_time(time());?></div>    
                                        </div>
                                </div>
                        </div>                       
                        <?php
					}
