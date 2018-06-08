<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
                <meta name="google-site-verification" content="vD6v_S4XrCHmds1QEUYju4ECePm-Oe_wVvYToHy4GIc" />
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	
	<header>
   		<div id="mobile-nav-cont" class="hide-for-large">
   			<div id="mobile-nav-menu">
				<nav role="navigation">
					<?php tessalynne_main_nav('main-nav') ?>
				</nav>
			</div>
			<div id="mobile-nav-button">
				<i class="fa fa-bars"></i>
			</div>
   		</div>
    	<div id="masthead">
    		<div class="row">
    			<div id="logo" class="small-9 medium-6 large-4 columns">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
  						<h1>
   							<span class="grey">Tessa</span><span class="dark-purple">Lynne</span>
							<span class="logo-small"><span class="dark-purple">Full-Stack</span> <span class="grey">Web Developer</span></span>
   						</h1>
					</a>
    			</div>
				<div id="mainNav" class="show-for-large large-8 columns">
					<nav role="navigation">
						<?php tessalynne_main_nav('main-nav') ?>
					</nav>
				</div>
    		</div>
    	</div>
    </header>
		<?php do_action( 'foundationpress_after_header' );?>
		
