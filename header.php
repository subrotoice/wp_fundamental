<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php wp_title('&raquo;','true','right'); ?><?php if ( is_single() ) { ?> Blog Archive &raquo; <?php } ?><?php bloginfo('name'); ?></title>
		<link href="http://fonts.googleapis.com/css?family=<?php $font=cs_get_option( 'body_font' ); echo str_replace(" ", "+", $font[family]);?>:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<link href="http://fonts.googleapis.com/css?family=<?php $font=cs_get_option( 'heading_font' ); echo $font[family]; ?>:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
		<style type="text/css">
			body{
				font-family: '<?php $a=cs_get_option( 'body_font' ); echo $a[family]; ?>', sans-serif;">
			}
			h1,h2,h3,h4{
				font-family: '<?php $a=cs_get_option( 'heading_font' ); echo $a[family]; ?>', sans-serif;">
			}
		</style>
		<?php wp_head(); ?>
    </head>
    <body>
        <section class="heaser_area">
			<div class="container">
				<div class="row banner">
					<?php if(cs_get_option( 'googleads1' )): ?>
						<?php echo cs_get_option( 'googleads1' );?>
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/banner.jpg" alt="" />
					<?php endif; ?>
				</div>
				<div class="row header_middle">
					<div class="col-md-3">
						<div class="secondary_logo">
							<a href="">
								<?php if(cs_get_option( 'secondary_logo' )): ?>
									<?php $image_id = cs_get_option( 'secondary_logo' );$attachment = wp_get_attachment_image_src( $image_id, 'full' );echo '<img src="'.$attachment[0].'" alt="" />';?>
									<?php else: ?>
										<img src="<?php echo get_template_directory_uri(); ?>/images/secondary_logo.jpg" alt="secondary logo" />
								<?php endif; ?>
							</a>
							<h1><?php bloginfo('name'); ?></h1>
							<h2><?php bloginfo('description'); ?></h2>
						</div>
					</div>
					<div class="col-md-7">
						<div class="logo">
							<a href="<?php bloginfo('home'); ?>">
								<?php if(cs_get_option( 'logo' )): ?>
									<?php $image_id = cs_get_option( 'logo' );$attachment = wp_get_attachment_image_src( $image_id, 'full' );echo '<img src="'.$attachment[0].'" alt="" />';?>
									<?php else: ?>
										<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" />
								<?php endif; ?>
							</a>
						</div>
					</div>
					<div class="col-md-2">
						<div class="social text-right">
							<a href="<?php echo cs_get_option( 'facebook_url' ); ?>"><i class="fa fa-facebook"></i></a>
							<a href="<?php echo cs_get_option( 'LinkedIn_URL' ); ?>"><i class="fa fa-linkedin"></i></a>
							<a href="<?php echo cs_get_option( 'Twitter_URL' ); ?>"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="navbar-header">
							<a href="<?php bloginfo('home'); ?>" class="hidden-lg" >
								<?php if(cs_get_option( 'logo' )): ?>
									<?php $image_id = cs_get_option( 'logo' );$attachment = wp_get_attachment_image_src( $image_id, 'full' );echo '<img src="'.$attachment[0].'" alt="" />';?>
									<?php else: ?>
										<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" />
								<?php endif; ?>
							</a>
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainmenu" aria-expanded="false">
						  <i class="fa fa-bars"></i>
						  </button>
						</div>
						 <?php
							wp_nav_menu( array(
								'menu'              => 'primary',
								'theme_location'    => 'primary',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'mainmenu',
								'menu_class'        => 'nav navbar-nav',
								'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
								'walker'            => new wp_bootstrap_navwalker())
							);
						?>
					</div><!-- /.navbar-collapse -->
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php wp_nav_menu(array('theme_location' => 'secondary_menu', 'container' => 'div', 'container_class' => 'secondary_menu')); ?>
					</div><!-- /.navbar-collapse -->
				</div>
			</div>
		</section>