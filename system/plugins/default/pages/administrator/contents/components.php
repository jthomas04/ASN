<?php

?>
<div class="panel-group" id="accordion">
   	<?php
	$OssnComs = new OssnComponents;
	$list = $OssnComs->getComponents();
	if($list){
		foreach($list as $component) {
			$vars = array();
			$vars['OssnCom'] = $OssnComs;
			$vars['component'] = $OssnComs->getCom($component);
			$vars['name'] = $component;
			echo ossn_plugin_view("admin/components/list/item", $vars);
		}
	}
	?>
</div> 