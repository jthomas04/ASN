<?php


$photoid = input('id');

$delete = ossn_photos();
$delete->photoid = $photoid;

$photo = $delete->GetPhoto($delete->photoid);

$owner = ossn_albums();
$owner = $owner->GetAlbum($photo->owner_guid);

if (($owner->album->owner_guid == ossn_loggedin_user()->guid) || ossn_isAdminLoggedin()) {
    if ($delete->deleteAlbumPhoto()) {
        ossn_trigger_message(ossn_print('photo:deleted:success'), 'success');
        redirect("album/view/{$owner->album->guid}");
    } else {
        ossn_trigger_message(ossn_print('photo:delete:error'), 'error');
        redirect(REF);
    }
} else {
    ossn_trigger_message(ossn_print('photo:delete:error'), 'error');
    redirect(REF);
}
