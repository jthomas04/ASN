<?php

?>
<div class="ossn-photos-add-button">
	<input type="file" name="ossnphoto[]" multiple class="hidden"/>
	<button type="button" id="ossn-photos-add-button-inner" class="btn btn-default btn-lg"><i class="fa fa-copy"></i> <?php echo ossn_print('photo:select'); ?></button>
    <div class="images"><i class="fa fa-image"></i> <span class="count">0</span></div>
</div>

<input type="submit" class="ossn-hidden" id="ossn-photos-submit"/>
<?php
// Shouldn't album privacy applied on photos? $dev.arsalan
//echo ossn_plugin_view('input/privacy');
?>
