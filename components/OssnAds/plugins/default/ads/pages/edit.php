<?php

echo ossn_view_form('edit', array(
    'action' => ossn_site_url() . 'action/ossnads/edit',
    'component' => 'OssnAds',
    'class' => 'ossn-ads-form',
	'params' => $params,
), false);
