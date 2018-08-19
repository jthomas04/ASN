<?php


$photoid         = input('id');
$delete          = ossn_photos();
$delete->photoid = $photoid;
$photo           = $delete->GetPhoto($delete->photoid);
if(($photo->owner_guid == ossn_loggedin_user()->guid) || ossn_isAdminLoggedin()) {
		if($delete->deleteProfilePhoto()) {
				
				$user                  = ossn_user_by_guid($photo->owner_guid);
				$user->data->icon_time = time();
				$user->save();
				
				ossn_trigger_message(ossn_print('photo:deleted:success'), 'success');
				redirect("album/profile/{$photo->owner_guid}");
		} else {
				ossn_trigger_message(ossn_print('photo:delete:error'), 'error');
				redirect(REF);
		}
} else {
		ossn_trigger_message(ossn_print('photo:delete:error'), 'error');
		redirect(REF);
}
