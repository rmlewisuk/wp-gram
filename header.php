<html>

	<head>
		
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta description="<?php bloginfo('description'); ?>">
		
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/apple-touch-icon.png"/>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
		
		<?php wp_head(); ?>
	</head>
	
	<body>

		<header>
			<h1><a href="/"><?php bloginfo('name'); ?></a></h1>
			<p class="description"><?php echo html_entity_decode(get_bloginfo('description')); ?></p>
		</header>