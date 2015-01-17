<!DOCTYPE html>
<html>
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
	    <!-- Bootstrap -->
	    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->	
	    <?php wp_head(); ?>	
	</head>
	<body>
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-md-5 logo">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php bloginfo('stylesheet_directory') ?>/img/the-information-logo.svg" alt="logo">
						</a>
					</div>
					<div class="col-md-7 header-right">
						<?php
				            $args = array(
				                'theme_location' => 'main-menu',
				            );
				            wp_nav_menu( $args ); 
						?>
					</div>
				</div>
			</div>
		</header>