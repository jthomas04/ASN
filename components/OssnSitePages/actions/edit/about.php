<?php

$save = new OssnSitePages;
$save->pagename = 'about';
$save->pagebody = input('pagebody');
if ($save->SaveSitePage()) {
    ossn_trigger_message(ossn_print('page:saved'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('page:save:error'), 'error');
    redirect(REF);
}
