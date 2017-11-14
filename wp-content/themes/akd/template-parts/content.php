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
	<?php if (is_sticky() && is_home() && !is_paged()) : ?>
        <div class="featurepost stickypost">

            <?php if (has_post_thumbnail()) : ?>
                <div class="entry-media-sticky">
                    <div class="mimic-thumbnail-sticky">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail('full'); ?> </a>
                    </div>
                </div>

                <div class="post-content-sticky">
                    <header class="entry-header-sticky">
			            <?php
			            if (is_singular()) :
				            the_title('<h1 class="entry-title-sticky">', '</h1>');
			            else :
				            the_title('<h2 class="entry-title-sticky"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
			            endif;
			            ?>
                    </header><!-- .entry-header -->

                    <footer class="entry-footer-sticky">
			            <?php //mimic_entry_footer();
			            if ('post' === get_post_type()) : ?>
                            <div class="entry-meta-sticky">
					            <?php mimic_posted_on(); ?>
                            </div><!-- .entry-meta -->
				            <?php
			            endif;
			            ?>
                    </footer><!-- .entry-footer -->
                </div>
			<?php else: ?>
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

                    <div class="entry-content">
			            <?php
			            the_excerpt(sprintf(
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
			            <?php //mimic_entry_footer();
			            if ('post' === get_post_type()) : ?>
                            <div class="entry-meta">
					            <?php mimic_posted_on(); ?>
                            </div><!-- .entry-meta -->
				            <?php
			            endif;
			            ?>
                    </footer><!-- .entry-footer -->

                </div>

			<?php endif; ?>
        </div>
	<?php else: ?>

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

            <div class="entry-content">
				<?php
				the_excerpt(sprintf(
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
				<?php //mimic_entry_footer();
				if ('post' === get_post_type()) : ?>
                    <div class="entry-meta">
						<?php mimic_posted_on(); ?>
                    </div><!-- .entry-meta -->
					<?php
				endif;
				?>
            </footer><!-- .entry-footer -->

        </div>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
