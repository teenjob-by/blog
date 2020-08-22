<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coblog
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="container">
                <div class="coblog-page-layout-wrap <?php coblog_set_class(); ?>">
                    <?php do_action('page_before_content'); ?>
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content/content', 'page' );
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    endwhile; // End of the loop.
                    ?>
                    <?php do_action('page_after_content'); ?>
                </div><!-- .container -->
            </div><!-- .container -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
