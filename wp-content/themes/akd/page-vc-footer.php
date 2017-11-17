<?php

/**

 * Template Name: Visual Composer -footer

 *

 * This is the template that displays all pages by default.

 * Please note that this is the WordPress construct of pages

 * and that other 'pages' on your WordPress site may use a

 * different template.

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package mimic

 */

get_header(); ?>



    <div id="primary-vc" class="content-area">

        <main id="main-vc" class="site-main vc-page">



			<?php

			while (have_posts()) : the_post();

				get_template_part('template-parts/content', 'vc');

				// If comments are open or we have at least one comment, load up the comment template.

				if (comments_open() || get_comments_number()) :

					comments_template();

				endif;

			endwhile; // End of the loop.

			?>



        </main><!-- #main -->

    </div><!-- #primary -->
    
</div>   




 
<div id="Custom_ID_363110030" style="padding-top:70px; padding-bottom:26px; background:#fff;" class="col-lg-12">
<div class="container">
<p class="text_border" style="font-size: 24px; letter-spacing: 2px; text-align:center; color: #4a4a4a;">OUR BUILDING PARTNERS</p>
</div>
</div>

<div class="col-lg-12" style="background-color:#fff; padding-bottom:80px;">
<div class="container">
<div class="col-lg-2">
<img src="http://designingmedia.com/wordpress/stephens/wp-content/uploads/2017/11/partner-logo6.jpg" alt="" />
</div>
<div class="col-lg-2">
<img width="210" height="113" src="http://designingmedia.com/wordpress/stephens/wp-content/uploads/2017/11/partner-logo5.jpg" class="vc_single_image-img attachment-full" alt="">
</div>
<div class="col-lg-2">
<img width="210" height="113" src="http://designingmedia.com/wordpress/stephens/wp-content/uploads/2017/11/partner-logo2.jpg" class="vc_single_image-img attachment-full" alt="">
</div>
<div class="col-lg-2">
<img width="210" height="113" src="http://designingmedia.com/wordpress/stephens/wp-content/uploads/2017/11/partner-logo3.jpg" class="vc_single_image-img attachment-full" alt="">
</div>
<div class="col-lg-2">
<img width="150" height="113" src="http://designingmedia.com/wordpress/stephens/wp-content/uploads/2017/11/partner-logo4-150x113.jpg" class="vc_single_image-img attachment-thumbnail" alt="">
</div>
<div class="col-lg-2">
<img width="210" height="113" src="http://designingmedia.com/wordpress/stephens/wp-content/uploads/2017/11/partner-logo1.jpg" class="vc_single_image-img attachment-full" alt="">
</div>
</div>
</div>








<div class="container">
<?php

get_footer();

