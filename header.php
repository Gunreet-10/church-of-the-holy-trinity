<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Church_Of_The_Holy_Trinity
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'church-of-the-holy-trinity'); ?></a>

		<header id="masthead" class="site-header">
			
				<?php
				/* the_custom_logo(); */
				if (is_front_page() && is_home()) :
				?>
					<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				<?php
				else :
				?>
					<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
				<?php
				endif;
				$church_of_the_holy_trinity_description = get_bloginfo('description', 'display');
				if ($church_of_the_holy_trinity_description || is_customize_preview()) :
				?>
					<p class="site-description"><?php echo $church_of_the_holy_trinity_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
												?></p>
				<?php endif; ?>
			<!-- .site-branding -->
			<!-- #site-navigation -->
			<?php
			$block_code = '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"vivid-purple","textColor":"white","layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group has-white-color has-vivid-purple-background-color has-text-color has-background has-link-color"><!-- wp:site-logo {"width":105,"shouldSyncIcon":true,"className":"is-style-rounded","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

			<!-- wp:navigation {"ref":4,"layout":{"type":"flex","justifyContent":"left"}} /--></div>
			<!-- /wp:group -->';
			echo do_blocks($block_code);
			?>



		</header><!-- #masthead -->