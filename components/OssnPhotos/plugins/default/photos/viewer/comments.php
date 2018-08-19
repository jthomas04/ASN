<?php

echo '<div class="ossn-viewer-comments">';
	echo ossn_plugin_view('comments/base', array('entity_guid' => $params['entity_guid']));
echo '</div>';