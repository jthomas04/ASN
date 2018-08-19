<?php

 ?>
<div class="panel-group" id="accordion">
   	<?php
	$themes = new OssnThemes;
	$list = $themes->getThemes();
	if($list){
		foreach ($list as $id) {
			$vars = array();
			$vars['OssnThemes'] = $themes;
			$vars['id'] = $id;
			$vars['theme'] = $themes->getTheme($id);;
			echo ossn_plugin_view("admin/themes/list/item", $vars);
		}
	}
	?>
</div> 