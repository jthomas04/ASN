<?php

$delete = new OssnAds;
$entites = $_REQUEST['entites'];
foreach($entites as $entity){
   $entity = get_ad_entity((int)$entity);
   if(empty($entity->guid)){
 	  ossn_trigger_message(ossn_print('ad:delete:fail'), 'error');
   } else {
       if (!$delete->deleteAd($entity->guid)) {
		ossn_trigger_message(ossn_print('ad:delete:fail'), 'error');
	   } else {
		ossn_trigger_message(ossn_print('ad:deleted', array($entity->title)), 'success');  
	   }	   
   }
}

redirect(REF);