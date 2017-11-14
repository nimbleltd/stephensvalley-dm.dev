<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mimic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head();
	overwritecss();
	?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'mimic' ); ?></a>
    <header id="<?php
    if (  is_front_page()  )
    { echo "masterhead"; }
    else
        { echo "normal-header"; }
        ?>
" class="site-header ">
        <section class="container">
            <div class="row">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="site-branding">
	                            <?php
	                            if (  is_front_page()  )
	                            { the_custom_logo();  }
	                            else
	                            {?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                                    <img src="<?php echo get_theme_mod( 'm1_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                                </a>
                                <?php }

								if ( is_front_page() && is_home() ) : ?>
                                    <h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
								<?php else : ?>
                                    <h3 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h3>
									<?php
								endif;

								$description = get_bloginfo( 'description', 'display' );
								if ( $description || is_customize_preview() ) : ?>
                                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
									<?php
								endif; ?>
                            </div>
                        </div>

						<?php
						wp_nav_menu( array(
								'menu'              => 'primary',
								'theme_location'    => 'menu-1',
								'depth'             => 2,
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'bs-example-navbar-collapse-1',
								'menu_class'        => 'nav navbar-nav pull-right',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker())
						);
						?>
                    </div>
                </nav>
                <!--row-->
            </div>
            <!--container-->
        </section>
    </header>


    <div class="clearfix"></div><!-- #masthead -->

	<div id="content" class="site-content container">
