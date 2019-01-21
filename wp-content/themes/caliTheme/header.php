<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="wp-content/themes/caliTheme/js/myscript.js"></script>
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<style>
	#about{
		background-color: <?php echo get_theme_mod('about_bg_color')?>;
	}

	#header-img {
    	background-image: url(<?php echo get_theme_mod('background_img', get_bloginfo('template_url').'/images/ggbridge.jpg')?>);
    }
    .navbar-inverse {
    	background-color: <?php echo get_theme_mod('navbar_bg_color')?>;
    }
	</style>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead">
		<div class="container-fluid">
			<div id="header-img">
				
			</div><!-- /header-img -->
			<nav class="navbar navbar-inverse">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></a>
			    </div>
			    <ul class="nav navbar-nav">
			     
			    </ul>
			    <ul class="nav navbar-nav navbar-right">
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a></li>
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>?page_id=7">Blog</a></li>
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>#portfolio"><?php echo get_theme_mod('link1', 'Portfolio') ?></a></li>
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>#about"><?php echo get_theme_mod('link2', 'About') ?></a></li>
			       <li><a href="<?php echo get_bloginfo( 'wpurl' );?>#team"><?php echo get_theme_mod('link3', 'Team') ?></a></li> 
			    </ul>
			  </div>
			</nav>
			
		</div>
	</div>
	
	<div class="container-fluid">

		