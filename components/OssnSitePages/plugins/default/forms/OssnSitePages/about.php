<?php

$OssnSitePages = new OssnSitePages;
$OssnSitePages->pagename = 'about';
$OssnSitePages = $OssnSitePages->getPage();
?>
<div>
	<label> <?php echo ossn_print('site:about'); ?> </label>
	<textarea name="pagebody" class="ossn-editor"><?php echo html_entity_decode($OssnSitePages->description); ?></textarea>
<div>
<div>
	<input type="submit" class="btn btn-primary" value="<?php echo ossn_print('save'); ?>"/>
</div>