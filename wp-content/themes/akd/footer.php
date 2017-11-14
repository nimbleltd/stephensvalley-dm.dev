<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mimic
 */
?>

</div><!-- #content -->
</div><!-- #page -->
<div class="footer-outer col-xs-12">
<div id="footer" class="container">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12   footer-logo">
		<?php if (is_active_sidebar('footer1')) : ?>

			<?php dynamic_sidebar('footer1'); ?>

		<?php endif; ?>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 menu-section">
        <div class="col-xs-12 footer-heading">
            LEARN MORE ABOUT STEPHENS VALLEY
        </div>
        <div class="col-xs-6 footer-menu-1">
			<?php if (is_active_sidebar('footer2')) : ?>

				<?php dynamic_sidebar('footer2'); ?>

			<?php endif; ?>

        </div>

        <div class="col-xs-6 footer-menu-2">
			<?php if (is_active_sidebar('footer3')) : ?>

				<?php dynamic_sidebar('footer3'); ?>

			<?php endif; ?>

        </div>
    </div>

    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 contact-us">
        <div class="col-xs-12 footer-heading">
            CONTACT US
        </div>
		<?php if (is_active_sidebar('footer4')) : ?>

			<?php dynamic_sidebar('footer4'); ?>

		<?php endif; ?>
    </div>
</div>
</div>
<div class="copyright container">
	<?php if (is_active_sidebar('footer5')) : ?>

		<?php dynamic_sidebar('footer5'); ?>

	<?php endif; ?>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
	    <?php if (is_active_sidebar('footer6')) : ?>

		    <?php dynamic_sidebar('footer6'); ?>

	    <?php endif; ?>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>
