<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package mimic
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail()) : ?>
		<div class="entry-media">
			<div class="mimic-thumbnail">

				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('full'); ?>
				</a>

			</div>
		</div>
	<?php endif; ?>
	<div class="post-content-wrapper">
		<header class="entry-header">
			<?php
			if (is_singular()) :
				the_title('<h1 class="entry-title">', '</h1>');
			else :
				the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			endif;
			?>
		</header><!-- .entry-header -->
        <div class="postedon">
	        <?php if ('post' === get_post_type()) : ?>
                <div class="entry-meta">
			        <?php mimic_posted_on(); ?>
                </div><!-- .entry-meta -->
		        <?php
	        endif;
	        ?>
        </div>

		<div class="entry-content">
			<?php
			the_content(sprintf(
				wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'mimic'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			));
			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'mimic'),
				'after' => '</div>',
			));
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php mimic_entry_footer();?>


		</footer><!-- .entry-footer -->

	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<?php
if ( ! empty ( the_author_meta('description') ) )
{
?>

<div class="mimic-author-box">

    <div class="media-figure">
		<?php echo get_avatar( get_the_author_meta('email'), '100' ); ?>
    </div>

    <div class="media-body">
        <h2><?php the_author_posts_link(); ?></h2>
        <p><?php the_author_meta('description'); ?></p>

    </div>

</div>
<?php }  ?>