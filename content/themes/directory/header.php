<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/reset.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/style.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/font-awesome.min.css" type="text/css" media="screen" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
	<!--[if lt IE 8]>
    	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory')?>/stylesheets/ie.css" />
    <![endif]-->

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	

	<?php wp_head(); ?>

</head>
<body>

<div id="container">
		
	<div id="header" class="clear">
		<a href="/">
			<img src="<?php bloginfo('template_directory'); ?>/images/large.gif" />
		</a>
		<h1>Local Ministry Opportunity Directory</h1>

		<div id="search">
			<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
			<input type="text" value="Search" onclick="value=''" name="s" id="s" />
			
			<i class="icon-search"></i>
		</form>

			
		</div>
	</div>
	<div id="navigation">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="<?php get_bloginfo('url'); ?>purpose">Purpose</a></li>
			<li><a href="<?php get_bloginfo('url'); ?>opportunities">Opportunities</a></li>
			<li><a href="http://fpcnorthshore.com" target="_blank">FPC Main Website</a></li>
		</ul>
	</div>