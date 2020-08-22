<?php get_header();?>
<?php 
$coblog_post_grid = get_theme_mod( 'enable_post_grid', 1 );
if($coblog_post_grid == 1) {
    get_template_part( 'template-parts/latest/latest', 'post' );
}
?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <?php 
            $coblog_column = get_theme_mod( 'blog_post_column', 1 );		
            $coblog_archive = get_theme_mod( 'archive_layout', 'right' );		
            if( $coblog_archive == 'full' ) {
                $coblog_archive_layout = 'coblog-full-width';
            } elseif ( $coblog_archive == 'left' ) {
                $coblog_archive_layout = 'coblog-left-sidebar';
            } elseif ( $coblog_archive == 'right' ) {
                $coblog_archive_layout = 'coblog-right-sidebar';
            } else {
                $coblog_archive_layout = 'coblog-right-sidebar';
            } 
            ?>
            <?php 
            if ( have_posts() ) : ?>
                <div class="coblog-layout-wrap <?php echo esc_attr($coblog_archive_layout);?>">
                    <?php if ( $coblog_archive == 'left' ) { get_sidebar();}?>    
                    <div class="coblog-layout-inside">
                        <?php if ( is_home() && ! is_front_page() ) :
                            ?>
                            <header>
                                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                            </header>
                            <?php
                        endif;?>
                        <div class="coblog-post-column coblog-post-column<?php echo esc_attr($coblog_column);?>">
                            <?php
                            while ( have_posts() ) :
                                the_post();
                                get_template_part( 'template-parts/content/content', get_post_type() );
                            endwhile;?>
                        </div>
                        <?php 
                        the_posts_pagination( array(
                            'next_text' => '<span>'.esc_html__( 'Next', 'coblog' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Next page', 'coblog' ) . '</span>',
                            'prev_text' => '<span>'.esc_html__( 'Previous', 'coblog' ) .'</span><span class="screen-reader-text">' . esc_html__( 'Previous page', 'coblog' ) . '</span>',
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'coblog' ) . ' </span>',
                        ));
                        ?>
                    </div><!--/.coblog-layout-inside-->
                    <?php if ( $coblog_archive == 'right' ) { get_sidebar();}?> 
                </div><!--/.coblog-layout-wrap-->
            <?php else :
                get_template_part( 'template-parts/content/content', 'none' );
            endif;
            ?>
        </div><!-- .container -->
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();
