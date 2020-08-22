<?php

if ( ! function_exists( 'coblog_posted_meta' ) ) :
	function coblog_posted_meta() {
        $coblog_author = get_theme_mod( 'enable_author', 1 );	
        $coblog_date = get_theme_mod( 'enable_date', 1 );

        $coblog_single_author = get_theme_mod( 'enable_single_author', 1 );	
        $coblog_single_date = get_theme_mod( 'enable_single_date', 1 );	
        $coblog_single_comment_count = get_theme_mod( 'enable_single_comment_count', 1 );	
        $coblog_single_view = get_theme_mod( 'enable_single_view', 1 );	
        
        $coblog_time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        $coblog_time_string = sprintf( $coblog_time_string,
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date() ),
            esc_attr( get_the_modified_date( 'c' ) ),
            esc_html( get_the_modified_date() )
        );
    
        if( (!is_singular() && $coblog_author==1) || (is_singular() && $coblog_single_author == 1 ) ) {
            echo '<span class="coblog-meta-img"><a href="'.esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )).'"><img src="'.esc_url(get_avatar_url( get_the_author_meta('email') )).'" alt="'.esc_html__( 'image', 'coblog' ).'"></a></span>';
            echo '<span class="coblog-meta-author">'.esc_html__( "By", "coblog" ).'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author_meta('first_name'). ' ' . get_the_author_meta('last_name')) . '</a></span>';
        }
        if ( is_singular() ) {
            if( ( $coblog_single_date == 1) ) {
                echo '<span class="coblog-meta-date">' . esc_attr( get_the_date( ) ) . '</span>';
            }
            if( ! post_password_required() && ( comments_open() || get_comments_number() ) &&  ( $coblog_single_comment_count == 1 ) ) { ?>
                <span class="coblog-meta-comment">
                    <i class="cb-font-commenting-o"></i><?php comments_popup_link( '<span class="leave-reply">' . esc_html__( '0', 'coblog' ) . '</span>', esc_html__( 'Post a comment', 'coblog' ), esc_html__( '%', 'coblog' ) ); ?>
                </span>
            <?php }
        }
        if( !is_singular() && ($coblog_date == 1 ) ) {
            echo '<span class="coblog-meta-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . esc_attr( get_the_date( ) ) . '</a></span>';
        }
    }
endif;

if ( ! function_exists( 'coblog_entry_footer' ) ) :
	function coblog_entry_footer() {
		if ( 'post' === get_post_type() ) {
			$tags_list = get_the_tag_list( '' );
			if ( $tags_list ) {
				printf( '<div class="coblog-tags-links">'. $tags_list. '</div>' ); // WPCS: XSS OK.
			}
		}
	}
endif;

if ( ! function_exists( 'coblog_post_thumbnail' ) ) :
	function coblog_post_thumbnail() {
		if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
			return;
		}
		if ( is_singular() ) :
			?>
			<div class="coblog-post-thumbnail">
                <?php 
                the_post_thumbnail( 'coblog-1140-600', array(
                    'alt' => the_title_attribute( array(
                        'echo' => false,
                    ) ),
                ) );
                ?>
			</div><!-- .post-thumbnail -->
        <?php else : ?>
        <div class="coblog-post-thumbnail">
            <a href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail( 'coblog-1140-600', array(
                    'alt' => the_title_attribute( array(
                        'echo' => false,
                    ) ),
                ) );
                ?>
            </a>
        </div>
		<?php
		endif; // End is_singular().
	}
endif;

if ( ! function_exists( 'coblog_post_entry_content' ) ) :
	function coblog_post_entry_content() {
        if ( get_theme_mod( 'enable_excerpt', 1 ) ) { 
            if ( get_theme_mod( 'character_limit', 280 ) ) {
                $coblog_limit = get_theme_mod( 'character_limit', 280 );
                echo wp_kses_post(coblog_excerpt_max_charlength($coblog_limit));
            } else {
                the_content();
            }
            if ( get_theme_mod( 'enable_readmore', 1 ) ) { 
                if ( get_theme_mod( 'readmore_text', __('Читать больше', 'coblog') ) ) {
                    $coblog_continue = get_theme_mod( 'readmore_text', __('Читать больше', 'coblog') );
                    echo '<p class="coblog-btn-post"><a class="coblog-btn-common coblog-btn-primary" href="'.esc_url(get_permalink()).'">'. esc_html($coblog_continue) .'</a></p>';
                } 
            } 
        }
	}
endif;


/* -------------------------------------------
 *   show header cart
 * ------------------------------------------- */

if ( ! function_exists( 'coblog_header_cart' ) ) {
    function coblog_header_cart() {
        if(!function_exists('wc_get_cart_url')) return;
        ?>
        <ul id="site-header-cart" class="site-header-cart">
            <li class="cart-icon">
                <div class="cart-contents">
                    <span class="cb-font-shopping-basket"></span>
                    <span class="cart-count"><?php echo wp_kses_data( sprintf( _n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'coblog' ), WC()->cart->get_cart_contents_count() ) );?></span>
                </div>
            </li>
            <li>
                <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
            </li>
        </ul>
        <?php
    }
}