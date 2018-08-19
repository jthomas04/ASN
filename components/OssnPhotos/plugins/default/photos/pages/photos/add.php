<?php

$album = input('album');
echo ossn_view_form('photos/add', array(
    'action' => ossn_site_url() . 'action/ossn/photos/add?album=' . $album,
    'method' => 'POST',
    'component' => 'OssnPhotos',
), false);
