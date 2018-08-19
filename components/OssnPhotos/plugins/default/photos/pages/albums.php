<?php


$albums = new OssnAlbums;
$photos = $albums->GetAlbum($params['album']);
echo '<div class="ossn-photos">';
echo '<h2>' . $photos->album->title . '</h2>';
if ($photos->photos) {
    foreach ($photos->photos as $photo) {
        $image = str_replace('album/photos/', '', $photo->value);
        $image = ossn_site_url() . "album/getphoto/{$params['album']}/{$image}?size=album";
        $view_url = ossn_site_url() . 'photos/view/' . $photo->guid;
        echo "<li><a href='{$view_url}'><img src='{$image}'  class='pthumb'/></a></li>";
    }
}
echo '</div>';
echo ossn_plugin_view('photos/pages/gallery', array(
		'photos' => $photos->photos,													
));