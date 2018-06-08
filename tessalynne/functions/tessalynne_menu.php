<?php

function tessalynne_main_nav($slug) {
	$menu_locations = get_nav_menu_locations();
	$menu_items = wp_get_nav_menu_items($menu_locations['main-nav']);
	
	if($menu_items) {
		echo "<ul>";
		foreach($menu_items as $item): 
			
			$classes = "";
			foreach($item->classes as $class) {
				$classes .= $class." ";
			}
			
?>
				<li><a href="<?=$item->url; ?>" title="<?=$item->title; ?>" class="<?=$classes; ?> <?=is_current_page($item); ?>"><?=$item->title; ?></a></li>

		<?php
		endforeach;
		echo "</ul>";
	}
}

function is_current_page($menu_item) {
	global $wp_query;
	$current_pagename = $wp_query->queried_object->post_name;
	$is_current_page = false;
	
	$item = str_replace(" ", "-", strtolower($menu_item->title));
	
	if($current_pagename == $item) {
		return "active";
	} else {
		return "";
	}
}

?>