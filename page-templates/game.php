<?php
include /var/www/wp-content/themes/Bexcellent-Theme/navmenu.php;
/**
 * Template Name: NavBar
 *
 * Description: No header or sidebar, Includes Navigation bar
 *
 * @package WordPress
 * @subpackage BeXcellent
 * @since Twenty Twelve 1.0
 */
?>
	</div>
		<div id="content" role="main">
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/game.css" media="screen" />
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="entry-page-image">
						<?php the_post_thumbnail(); ?>
					</div><!-- .entry-page-image -->
				<?php endif; ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->