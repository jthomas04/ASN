<?php

echo ossn_view_form('add', array(
    'action' => ossn_site_url() . 'action/ossnads/add',
    'component' => 'OssnAds',
    'class' => 'ossn-ads-form',
), false);
