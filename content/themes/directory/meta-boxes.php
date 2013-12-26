<?php
 /* Example: 

	$page_images = new WPAlchemy_MetaBox(array(
	   	'id' => '_page_images',
	   	'title' => "Page Images",
	   	'types' => array('page'), // added only for pages
	   	'context' => 'normal', // same as above, defaults to "normal"
	   	'priority' => 'high', // same as above, defaults to "high"
	   	'autosave' => 'true',
	   	'template' => get_stylesheet_directory() . '/meta-boxes/page.php'
	   ));
	
	
	then in the template, include: 
	global $page_images; 
	$page_images->the_meta(); 
	
	*/
	
?>