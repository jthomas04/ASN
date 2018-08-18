<?php

 
echo ossn_view_form('administrator/settings', array(
    'action' => ossn_site_url() . 'action/smilies/admin/settings',
    'component' => 'OssnSmilies',
    'class' => 'ossn-admin-form'	
), false);