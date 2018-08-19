<?php

?>
    <label><?php echo ossn_print('album:name'); ?></label>
    <input type="text" name="title"/>
    <input type="submit" class="ossn-hidden" id="ossn-album-submit"/>
<?php
echo ossn_plugin_view('input/privacy');
?>