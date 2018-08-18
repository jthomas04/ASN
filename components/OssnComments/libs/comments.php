<?php


function ossn_get_comment($id) {
    $get = new OssnComments;
    return $get->GetComment($id);
}