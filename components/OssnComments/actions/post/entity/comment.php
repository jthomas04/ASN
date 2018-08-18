<?php

$OssnComment = new OssnComments;
$image       = input('comment-attachment');
//comment image check if is attached or not
if(!empty($image)) {
		$OssnComment->comment_image = $image;
}
//entity on which comment is going to be posted
$entity = input('entity');

//comment text
$comment = input('comment');
if($OssnComment->PostComment($entity, ossn_loggedin_user()->guid, $comment, 'entity')) {
		$vars            = array();
		$vars['comment'] = (array) ossn_get_comment($OssnComment->getCommentId());
		$data            = ossn_comment_view($vars);
		if(!ossn_is_xhr()) {
				redirect(REF);
		} else {
				header('Content-Type: application/json');
				echo json_encode(array(
						'comment' => $data,
						'process' => 1
				));
		}
} else {
		if(!ossn_is_xhr()) {
				redirect(REF);
		} else {
				header('Content-Type: application/json');
				echo json_encode(array(
						'process' => 0
				));
		}
}