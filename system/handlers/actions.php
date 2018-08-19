<?php

define('OSSN_ALLOW_SYSTEM_START', TRUE);
require_once(dirname(dirname(__FILE__)) . '/start.php');
ossn_action(input('action'));
