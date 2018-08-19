<?php

echo ossn_view_form('album/add', array(
    'action' => ossn_site_url() . 'action/ossn/album/add',
    'component' => 'OssnPhotos',
), false);