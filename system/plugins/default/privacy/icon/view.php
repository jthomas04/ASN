<?php

   
  $class = '';
  if(isset($params['class']) && !empty($params['class'])){
	 $class = "class='{$params['class']}'"; 
  }
   $text = ossn_print("title:access:{$params['privacy']}");  
   if(isset($params['text']) && !empty($params['text'])){
	   $inner_text = $params['text'].' ';
   }
  if($params['privacy'] == OSSN_PUBLIC){
	echo "<span {$class} title='{$text}'>{$inner_text}<i class='fa fa-globe'></i></span>";  
  } elseif($params['privacy'] == OSSN_FRIENDS){
	echo "<span {$class} title='{$text}'>{$inner_text}<i class='fa fa-users'></i></span>";  	  
  } elseif($params['privacy'] == OSSN_PRIVATE){
	echo "<span {$class} title='{$text}'>{$inner_text}<i class='fa fa-lock'></i></span>";  	  	  
  }