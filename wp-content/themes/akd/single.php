<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mimic
 */

get_header(); ?>

	<div id="primary" class="content-area  content-area col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content-single', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
    <div class="sidebar sidebar-blog col-lg-4 col-md-4 col-sm-12 col-xs-12"
<?php
get_sidebar(); ?>
    </div> <?php
get_footer();
