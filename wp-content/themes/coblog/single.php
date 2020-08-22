<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <div class="coblog-post-single-wrap <?php coblog_set_class();?>"> 
                <?php do_action('single_before_content'); ?> 
                <div class="coblog-post-single">
                    <?php while ( have_posts() ) :
                        the_post();
                        do_action('single_loop_start');
                        get_template_part( 'template-parts/content/content', 'single' );
                        do_action('single_loop_end');
                    endwhile; // End of the loop.
                    ?>
                </div><!--/.coblog-post-single -->
                <?php do_action('single_after_content'); ?> 
            </div><!--/.coblog-post-single-wrap -->
        </div><!--/.container -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
