<?php

if (isset($params['user']->guid)) { ?>
<div class="row ossn-messages">
			<div class="col-md-5">
            	      <?php
	  					echo ossn_plugin_view('widget/view', array(
							'title' => ossn_print('inbox').' ('.OssnMessages()->countUNREAD(ossn_loggedin_user()->guid).')',
							'href' => ossn_site_url('messages/all'),
							'contents' => ossn_plugin_view('messages/pages/view/recent', $params),
							'class' => 'messages-recent',
												   
						));
						?>
            </div>
            <div class="col-md-7">
            	      <?php
	  					echo ossn_plugin_view('widget/view', array(
							'title' => $params['user']->fullname,
							'contents' => ossn_plugin_view('messages/pages/view/with', $params),
							'class' => 'messages-with',
						));
						?>
            </div>            
</div>    
<?php } ?>	
