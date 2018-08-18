<?php

echo ossn_view_form('list', array(
        'action' => ossn_site_url() . 'action/ossnads/delete',
        'component' => 'OssnAds',
    ), false);
