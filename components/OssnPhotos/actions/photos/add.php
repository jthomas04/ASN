<?php


$files      = ossn_input_images('ossnphoto');
$add        = new OssnPhotos;
$album_guid = input('album');

if($files) {
		foreach($files as $item) {
				$_FILES['ossnphoto'] = $item;
				if($guid = $add->AddPhoto($album_guid, 'ossnphoto', input('privacy'))) {
						$files_added[] = $guid;
				}
		}
		$args['photo_guids'] = $files_added;
		$args['album']       = $album_guid;
		ossn_trigger_callback('ossn:photo', 'add:multiple', $args);
		redirect(REF);
} else {
		redirect(REF);
}