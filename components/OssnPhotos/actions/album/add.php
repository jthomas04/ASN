<?php

$add = new OssnAlbums;
if ($add->CreateAlbum(ossn_loggedin_user()->guid, input('title'), input('privacy'))) {
    redirect(REF);
} else {
    redirect(REF);
}