<?php

// Customizer CSS
if(!function_exists('coblog_css_generator')){
    function coblog_css_generator(){
        $output = '';

        // Coblog "Header"
        $output .= 'img.coblog-logo{ width: '.esc_attr( get_theme_mod( 'logo_width', '120' ) ) .'px; }';
        $height = get_theme_mod( 'logo_height', '' );
        if( $height ){
            $output .= 'img.coblog-logo{ height: '.esc_attr( $height ) .'px; }';
        }
        $logo_responsive_width = get_theme_mod( 'logo_responsive_width', '' );
        if( $logo_responsive_width ){
            $output .= '.header-responsive-wrap img.coblog-logo{ width: '.esc_attr( $logo_responsive_width ) .'px; }';
        }

        // Coblog "Theme Color"
        $tc_primary_color = get_theme_mod( 'tc_primary_color', '#FD4145' );

        //primary color
        if( $tc_primary_color ){
            $output .= 'a, .coblog-search .search-button:hover, .coblog-header-four .coblog-logo-branding, .coblog-header-four .coblog-social-icon span,
            .coblog-entry-header .coblog-post-grid-category a, .coblog-entry-header .coblog-post-grid-category a:hover,
            .coblog-entry-meta span a:hover, .coblog-post-single .nav-links >div a:hover,
            .widget_categories ul li a:hover, .widget_recent_entries ul li a:hover,
            .widget_recent_comments ul li a:hover, .widget_pages ul li a:hover, .widget_meta ul li a:hover,
            .widget_archive ul li a:hover, .widget_nav_menu ul li a:hover, .coblog-blog-widget-title a:hover, .coblog-footer-menu li a:hover, #coblog-header-trigger:hover,
            .coblog-offcanvas-menu ul li a:hover, .coblog-social-icon ul li a:hover, .coblog-header-one .coblog-social-icon ul li a:hover, .coblog-offcanvas-header .coblog-trigger:hover, .coblog-trigger-bottom:hover,
            .click-open-btn:hover, .woocommerce-widget-layered-nav-list li a:hover,
            .woocommerce ul.products li.product .woocommerce-loop-product__title:hover,
            .woocommerce div.product form.cart .group_table td.woocommerce-grouped-product-list-item__label a:hover,
            .woocommerce div.product .product_meta > span a:hover,
            .woocommerce table.shop_table td.product-name a:hover, .widget_product_categories ul li a:hover,
            .woocommerce ul.cart_list li a:hover, .woocommerce ul.product_list_widget li a:hover,
            .woocommerce .star-rating span::before, .coblog-search-user-cart .coblog-user a:hover { color: '.esc_attr( get_theme_mod( 'tc_primary_color', '#FD4145' ) ) .'; }';
        }

        //background
        if( $tc_primary_color ){
            $output .= '.coblog-post-grid-category a, .coblog-entry-header .coblog-post-grid-category a:before,
            .coblog-layout-inside .nav-links .page-numbers:hover,
            .coblog-layout-inside .nav-links .page-numbers.current,
            .coblog-tags-links a:hover, .coblog-comment-text span.reply a:hover, .coblog-top-footer .tagcloud a:hover,
            .coblog-btn-dark:hover, #coblog-header-trigger:hover .coblog-icon-bar,
            #coblog-header-trigger:hover .coblog-icon-bar:after,
            #coblog-header-trigger:hover .coblog-icon-bar:before, .not-found .search-button,
            .coblog-footer-one .coblog-footer-social-icon li a:hover,
            .coblog-footer-two .coblog-footer-social-icon li a:hover, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-range,.woocommerce nav.woocommerce-pagination ul li a:hover,
            .woocommerce nav.woocommerce-pagination ul li span.current { background: '.esc_attr( get_theme_mod( 'tc_primary_color', '#FD4145' ) ) .'; }';
        }

        //border
        if( $tc_primary_color ){
            $output .= '.coblog-tags-links a:hover, .coblog-top-footer .tagcloud a:hover { border-color: '.esc_attr( get_theme_mod( 'tc_primary_color', '#FD4145' ) ) .'; }';
        }

        // hover color 
        $tc_secendary_color = get_theme_mod( 'tc_secendary_color', '#E4282C' );
        if( $tc_secendary_color ){
            $output .= 'a:hover, a:active{ color: '.esc_attr( get_theme_mod( 'tc_secendary_color', '#E4282C' ) ) .'; }';
        }

        //header color
        $header_bg = get_theme_mod( 'header_bg_color', '' );
        if($header_bg){
            $output .= '.site-header { background: '.esc_attr( $header_bg ) .'; }';
        }
        
        //body color
        $output .= 'body{ color: '.esc_attr( get_theme_mod( 'tc_body_color', '#3f4044' ) ) .'; }';
        $output .= 'body{ background-color: '.esc_attr( get_theme_mod( 'tc_body_bg', '#ffffff' ) ) .'; }';
        $body_bg_img = get_theme_mod( 'body_bg_img', '' );
        if($body_bg_img) {
            $output .= 'body{ background-image: url('.esc_attr( get_theme_mod( 'body_bg_img', '')).'); }';
        }

        //button
        $tc_btn_color = get_theme_mod( 'tc_btn_color', '#fff' );
        $tc_btn_hover_color = get_theme_mod( 'tc_btn_hover_color', '#fff' );
        $tc_btn_bgcolor = get_theme_mod( 'tc_btn_bgcolor', '#FD4145' );
        $tc_btn_bg_hover_color = get_theme_mod( 'tc_btn_bg_hover_color', '#E4282C' );
        if( $tc_btn_color ){
            $output .= '.coblog-btn-primary, button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce a.button, 
            .woocommerce .widget_price_filter .price_slider_amount .button,
            .woocommerce button.button.alt, .woocommerce button.button,
            .woocommerce #respond input#submit { color: '.esc_attr( get_theme_mod( 'tc_btn_color', '#ffffff' ) ) .'; }';
        }
        if( $tc_btn_hover_color ){
            $output .= '.coblog-btn-primary:hover,button, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .woocommerce a.button:hover,
            .woocommerce .widget_price_filter .price_slider_amount .button:hover,
            .woocommerce button.button.alt:hover, .woocommerce button.button:hover,
            .woocommerce #respond input#submit:hover { color: '.esc_attr( get_theme_mod( 'tc_btn_hover_color', '#ffffff' ) ) .'; }';
        }
        if( $tc_btn_bgcolor ){
            $output .= '.coblog-btn-primary, .coblog-btn-primary, button, input[type="button"], input[type="reset"], input[type="submit"], .woocommerce a.button,
            .woocommerce .widget_price_filter .price_slider_amount .button,
            .woocommerce button.button.alt, .woocommerce button.button, 
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
            .woocommerce-MyAccount-navigation-link.is-active a,
            .woocommerce #respond input#submit { background: '.esc_attr( get_theme_mod( 'tc_btn_bgcolor', '#FD4145' ) ) .'; }';
        }
        if( $tc_btn_bg_hover_color ){
            $output .= '.coblog-btn-primary:hover, button, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .woocommerce a.button:hover,
            .woocommerce .widget_price_filter .price_slider_amount .button:hover,
            .woocommerce button.button.alt:hover, .woocommerce button.button:hover,
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
            .woocommerce #respond input#submit:hover { background: '.esc_attr( get_theme_mod( 'tc_btn_bg_hover_color', '#000000' ) ) .'; }';
        }

        //menu color
        $tc_menu_color = get_theme_mod( 'tc_menu_color', '' );
        if( $tc_menu_color ){
            $output .= '.site-header ul.primary-menu > li > a, .coblog-header-four .coblog-social-icon ul li a, 
            .coblog-header-four .coblog-search .search-button, .coblog-header-four #coblog-header-trigger,
            .coblog-header-three .coblog-social-icon ul li a, .coblog-header-three .coblog-search .search-button { color: '.esc_attr( get_theme_mod( 'tc_menu_color', '' ) ) .'; }';
        }
        $output .= 'ul.primary-menu > li.current-menu-item > a, 
            ul.primary-menu > li > a:hover, ul.primary-menu > li.menu-item-has-children.current-menu-item:after, 
            ul.primary-menu > li.menu-item-has-children:hover:after, .coblog-header-four #coblog-header-trigger:hover,
            .coblog-header-four .coblog-social-icon ul li a:hover, .coblog-header-three .coblog-social-icon ul li a:hover, ul.primary-menu > li.menu-item-has-children:hover > a { color: '.esc_attr( get_theme_mod( 'tc_menu_hover_color', '#FD4145' ) ) .'; }
            ul.primary-menu > li > a:after{ background:'.esc_attr( get_theme_mod( 'tc_menu_hover_color', '#FD4145' ) ) .'; }';
        $output .= 'ul.sub-menu li a { color: '.esc_attr( get_theme_mod( 'tc_submenu_color', '#000' ) ) .'; }';
        $output .= 'ul.sub-menu li a:hover{ color: '.esc_attr( get_theme_mod( 'tc_submenu_hover_color', '#FD4145' ) ) .'; }';

        // Coblog "Footer Top bar"
        $tb_color = get_theme_mod( 'tb_color', '' );
        if( $tb_color ){
            $output .= '.coblog-topbar, .coblog-topbar a,  ul.coblog-topbar-menu > li > a { color: '.esc_attr( get_theme_mod( 'tb_color', '' ) ) .'; }';
        }
        $tb_bg_color = get_theme_mod( 'tb_bg_color', '' );
        if( $tb_bg_color ){
            $output .= '.coblog-topbar{ background: '.esc_attr( get_theme_mod( 'tb_bg_color', '' ) ) .'; }';
        }
        $output .= '.coblog-topbar a:hover,  ul.coblog-topbar-menu > li > a:hover{ color: '.esc_attr( get_theme_mod( 'tb_link_hover_color', '#FD4145' ) ) .'; }';
        $output .= '.coblog-topbar{ padding-top: '.esc_attr( get_theme_mod( 'tb_padding_top', '8' ) ) .'px; }';
        $output .= '.coblog-topbar{ padding-bottom: '.esc_attr( get_theme_mod( 'tb_padding_bottom', '8' ) ) .'px; }';
        
        // Coblog "Footer Top Options"
        $output .= '.coblog-top-footer, .coblog-top-footer .footer-item ul li a,  .coblog-top-footer a { color: '.esc_attr( get_theme_mod( 'ft_color', '#000' ) ) .'; }';
        $output .= '.coblog-top-footer{ background: '.esc_attr( get_theme_mod( 'ft_bg_color', '#f8f8f8' ) ) .'; }';
        $output .= '.coblog-top-footer a:hover, .coblog-top-footer .footer-item ul li a:hover{ color: '.esc_attr( get_theme_mod( 'ft_link_hover_color', '#FD4145' ) ) .'; }';
        $output .= '.coblog-top-footer{ padding-top: '.esc_attr( get_theme_mod( 'ft_padding_top', '80' ) ) .'px; }';
        $output .= '.coblog-top-footer{ padding-bottom: '.esc_attr( get_theme_mod( 'ft_padding_bottom', '80' ) ) .'px; }';

        // Coblog "Footer Options"
        $output .= '.coblog-footer-info, .coblog-footer-social-icon ul li a { color: '.esc_attr( get_theme_mod( 'fb_color', '#596172' ) ) .'; }';
        $output .= '.coblog-footer{ background: '.esc_attr( get_theme_mod( 'fb_bg_color', '#ffffff' ) ) .'; }';
        $output .= '.coblog-footer a:hover, .coblog-footer-social-icon ul li a:hover{ color: '.esc_attr( get_theme_mod( 'fb_link_hover_color', '#FD4145' ) ) .'; }';
        $output .= '.coblog-footer-info{ padding-top: '.esc_attr( get_theme_mod( 'fb_padding_top', '60' ) ) .'px; }';
        $output .= '.coblog-footer-info{ padding-bottom: '.esc_attr( get_theme_mod( 'fb_padding_bottom', '60' ) ) .'px; }';

        return $output;
    }
}

//theme setup
if ( ! function_exists( 'coblog_setup' ) ) :
	function coblog_setup() {
        
        //add language string
		load_theme_textdomain( 'coblog', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );

        //woocommerce integration
        add_theme_support( 'woocommerce' );

		// Registe wp_nav_menu
        register_nav_menus(
            array(
                'primary' => __( 'Primary Menu', 'coblog' ),
                'topbar-menu' => __( 'Topbar Menu', 'coblog' ),
                'footer-menu' => __( 'Footer Menu', 'coblog' )
            )
        );
        
        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

        add_theme_support( 'custom-header', array(
            'width'            => 1920,
            'height'           => 380,
            'flex-height'      => true,
            'wp-head-callback' => 'coblog_header_style',
        ));

        # Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', array(
            'default-color' => 'ffffff',
        ));

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        
        // Add custom styles for visual editor to resemble the theme style.
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'editor-styles' );
        add_editor_style( array( 'assets/css/editor-style.css' ) );
        // Gutenberg support
        add_theme_support( 'editor-color-palette', array(
            array(
            'name' => esc_html__( 'Tan', 'coblog' ),
            'slug' => 'tan',
            'color' => '#D2B48C',
            ),
            array(
                'name' => esc_html__( 'Yellow', 'coblog' ),
                'slug' => 'yellow',
                'color' => '#FDE64B',
            ),
            array(
                'name' => esc_html__( 'Orange', 'coblog' ),
                'slug' => 'orange',
                'color' => '#ED7014',
            ),
            array(
                'name' => esc_html__( 'Red', 'coblog' ),
                'slug' => 'red',
                'color' => '#D0312D',
            ),
            array(
                'name' => esc_html__( 'Pink', 'coblog' ),
                'slug' => 'pink',
                'color' => '#b565a7',
            ),
            array(
                'name' => esc_html__( 'Purple', 'coblog' ),
                'slug' => 'purple',
                'color' => '#A32CC4',
            ),
            array(
                'name' => esc_html__( 'Blue', 'coblog' ),
                'slug' => 'blue',
                'color' => '#4E97D8',
            ),
            array(
                'name' => esc_html__( 'Green', 'coblog' ),
                'slug' => 'green',
                'color' => '#00B294',
            ),
            array(
                'name' => esc_html__( 'Brown', 'coblog' ),
                'slug' => 'brown',
                'color' => '#231709',
            ),
            array(
                'name' => esc_html__( 'Grey', 'coblog' ),
                'slug' => 'grey',
                'color' => '#7D7D7D',
            ),
            array(
                'name' => esc_html__( 'Black', 'coblog' ),
                'slug' => 'black',
                'color' => '#000000',
            ),
        ));
        
        add_theme_support( 'editor-font-sizes', array(
            array(
                'name' => esc_html__( 'small', 'coblog' ),
                'shortName' => esc_html__( 'S', 'coblog' ),
                'size' => 12,
                'slug' => 'small'
            ),
            array(
                'name' => esc_html__( 'regular', 'coblog' ),
                'shortName' => esc_html__( 'M', 'coblog' ),
                'size' => 16,
                'slug' => 'regular'
            ),
            array(
                'name' => esc_html__( 'larger', 'coblog' ),
                'shortName' => esc_html__( 'L', 'coblog' ),
                'size' => 36,
                'slug' => 'larger'
            ),
            array(
                'name' => esc_html__( 'huge', 'coblog' ),
                'shortName' => esc_html__( 'XL', 'coblog' ),
                'size' => 48,
                'slug' => 'huge'
            )
        ));
        
        add_theme_support('woocommerce');

        add_image_size( 'coblog-1140-600', 1140, 600, true );
	}
endif;
add_action( 'after_setup_theme', 'coblog_setup' );

function coblog_content_width() {
    global $content_width;
	$GLOBALS['content_width'] = apply_filters( 'coblog_content_width', 640 );
}
add_action( 'after_setup_theme', 'coblog_content_width', 0 );


//header style
if( ! function_exists( 'coblog_header_style' ) ):
    function coblog_header_style(){
        $header_text_color = get_header_textcolor();
        if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
            return;
        }
        ?>
        <style id="coblog-custom-header-styles" type="text/css">
            .wrap-inner-banner .page-header .page-title,
            body.home.page .wrap-inner-banner .page-header .page-title {
                color: #<?php echo esc_attr( $header_text_color ); ?>;
            }
        </style>
    <?php
    }
endif;

if( ! function_exists( 'is_wc_active' ) ):
    function is_wc_active(){
        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' )))) {
            return true;
        } else {
            return false;
        }
    }
endif;

/**
* Register widget area.
*/
function coblog_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'coblog' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'coblog' ),
		'before_widget' => '<div id="%1$s" class="coblog-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="coblog-widget-title">',
		'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
		'name'          => esc_html__( 'Offcanvas', 'coblog' ),
		'id'            => 'offcanavs-1',
		'description'   => esc_html__( 'Add widgets here.', 'coblog' ),
		'before_widget' => '<div id="%1$s" class="coblog-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="coblog-widget-title">',
		'after_title'   => '</h2>',
    ) );
    
    for( $i = 1; $i <= 4; $i++ ){
		register_sidebar( array(
			'name'          => esc_html__( 'Footer', 'coblog' ) . $i,
			'id'            => 'coblog-footer-sidebar-' . $i,
			'description'   => esc_html__( 'Add widgets here.', 'coblog' ),
			'before_widget' => '<div id="%1$s" class="coblog-widget %2$s"><div class="footer-item">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h2 class="coblog-widget-title">',
			'after_title'   => '</h2>',
		) );
    }
    
    if (is_wc_active()) {
        register_sidebar( array(
            'name'          => esc_html__( 'WooCommerce Sidebar', 'coblog' ),
            'id'            => 'woocommerce-sidebar-area',
            'description'   => esc_html__( 'WooCommerce Store Page Sidebar.', 'coblog' ),
            'before_widget' => '<div id="%1$s" class="coblog-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="coblog-widget-title">',
            'after_title'   => '</h2>',
        ) );
    
        register_sidebar( array(
            'name'          => esc_html__( 'Product Sidebar', 'coblog' ),
            'id'            => 'woocommerce-single-area',
            'description'   => esc_html__( 'Single Product Page Sidebar.', 'coblog' ),
            'before_widget' => '<div id="%1$s" class="coblog-widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="coblog-widget-title">',
            'after_title'   => '</h2>',
        ) );
    }

}
add_action( 'widgets_init', 'coblog_widgets_init' );

/**
* Enqueue scripts and styles for Frontend.
*/
function coblog_scripts() {
    wp_enqueue_style( 'coblog-google-font-style', '//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900', false );
    wp_enqueue_style( 'coblog-grid', COBLOG_URI . '/assets/css/grid.css', null, 'all' );
    wp_enqueue_style( 'coblog-cbfont', COBLOG_URI . '/assets/css/cbfont.css', null, 'all' );
    wp_enqueue_style( 'coblog-blocks-styles', COBLOG_URI . '/assets/css/blocks.css', null, 'all' );
    wp_enqueue_style( 'coblog-style', get_stylesheet_uri() );

    if ( has_nav_menu( 'primary' ) ) {
        wp_enqueue_script( 'coblog-navigation', COBLOG_URI . '/assets/js/navigation.js', array(), COBLOG_VERSION, true );
	}
    wp_enqueue_script( 'coblog-main', COBLOG_URI . '/assets/js/main.js', array('jquery'), COBLOG_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
    }
    wp_add_inline_style( 'coblog-style', coblog_css_generator() );
}
add_action( 'wp_enqueue_scripts', 'coblog_scripts' );

/**
* Enqueue scripts and styles for Editor.
*/
function coblog_scripts_editor() {
    wp_enqueue_style( 'coblog-google-font-style', '//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900', false ); 
}
add_action('enqueue_block_editor_assets', 'coblog_scripts_editor');

/**
* Add Body Class
*/
function coblog_body_classes( $classes ) {
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
    }
    if(get_theme_mod( 'box_layout', '0' )){
        $box_layout = get_theme_mod( 'box_layout', '0' );
        $classes[] = 'coblog-box-layout';
    }
    $header_layout = get_theme_mod( 'header_layout', 'one' );	
    $classes[] = 'coblog-body-header-'.$header_layout.'';
	return $classes;
}
add_filter( 'body_class', 'coblog_body_classes' );


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function coblog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'coblog_pingback_header' );

/**
 * footer widget active check
 */
function coblog_is_active_footer_sidebar(){
	for( $i = 1; $i <= 4; $i++ ){
		if ( is_active_sidebar( 'coblog-footer-sidebar-'.$i ) ) :
			return true;
		endif;
	}
	return false;
}

/**
 * Excerpt
 */
if(!function_exists('coblog_excerpt_max_charlength')):
	function coblog_excerpt_max_charlength($charlength) {
		$excerpt = get_the_excerpt();
		$charlength++;

		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			if ( $excut < 0 ) {
				return mb_substr( $subex, 0, $excut );
			} else {
				return $subex;
			}
		} else {
			return $excerpt;
		}
	}
endif;

/**
 * Comment List
 */
function coblog_comments($comment, $args, $depth) { ?>
    <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
        <div class="coblog-the-comment">	
            <div class="coblog-author-img">
                <?php echo get_avatar($comment,$args['avatar_size']); ?>
            </div>
            <div class="coblog-comment-text">
                <span class="reply">
                    <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply', 'coblog'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
                    <?php edit_comment_link(__('Edit', 'coblog')); ?>
                </span>
                <h6 class="coblog-author"><?php echo get_comment_author_link(); ?></h6>
                <span class="coblog-date"><?php printf(esc_html__('%1$s at %2$s', 'coblog'), wp_kses_post(get_comment_date()),  wp_kses_post(get_comment_time())) ?></span>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><i class="cb-font-info-circled"></i><?php esc_html_e('Comment awaiting approval', 'coblog'); ?></em>
                    <br />
                <?php endif; ?>
                <?php comment_text(); ?>
            </div>	
        </div>	
    </li>
    <?php 
}

/*-------------------------------------------------------
*           Include the TGM Plugin Activation class
*-------------------------------------------------------*/
add_action( 'tgmpa_register', 'coblog_plugins_include');

if(!function_exists('coblog_plugins_include')):

    function coblog_plugins_include()
    {
        $plugins = array( 
                array(
                    'name'                  => esc_html__( 'Gutenberg Post Blocks', 'coblog' ),
                    'slug'                  => 'ultimate-post',
                    'source'                => esc_url('https://downloads.wordpress.org/plugin/ultimate-post.zip'),
                    'required'              => false,
                    'version'               => '',
                    'force_activation'      => false,
                    'force_deactivation'    => false,
                    'external_url'          => '',
                ),   
                array(
                    'name'                  => esc_html__( 'Gutenberg Product Blocks', 'coblog' ),
                    'slug'                  => 'product-blocks',
                    'source'                => esc_url('https://downloads.wordpress.org/plugin/product-blocks.zip'),
                    'required'              => false,
                    'version'               => '',
                    'force_activation'      => false,
                    'force_deactivation'    => false,
                    'external_url'          => '',
                )
            );

    $config = array(
        'id'           => 'coblog',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.                  
    );

    tgmpa( $plugins, $config );

    }

endif;


if(!function_exists('coblog_set_class')):
    function coblog_set_class($page = 'single'){
        $single_layout = 'full';
        $class_name = 'coblog-layout-full';

        if( is_wc_active() ){
            if( is_shop() || is_product_category() || is_product_tag() ) {
                $page = 'shop';
            } else {
                if( is_product() ){
                    $page = 'shop_single';
                }
            }
        }

        if($page == 'shop' || $page == 'shop_single' || is_single()) {
            if ($page == 'single') {
                $single_layout = get_theme_mod( 'single_layout', 'full' );
            } else if($page == 'shop') {
                $single_layout = get_theme_mod('woocommerce_sidebar', 'full');
            } else if ($page == 'shop_single') {
                $single_layout = get_theme_mod('product_sidebar', 'full');
            }
    
            if ($single_layout == 'left') {
                $class_name = 'coblog-layout-left-sidebar';
            } else if($single_layout == 'right') {
                $class_name = 'coblog-layout-right-sidebar';
            }
            echo $class_name;
        }
    }
endif;





add_action('page_before_content', 'coblog_left_sidebar_callback');
add_action('single_before_content', 'coblog_left_sidebar_callback');
function coblog_left_sidebar_callback() {
    $single_layout = 'full';
    if( is_wc_active() ){
        if( is_shop() || is_product_category() || is_product_tag() ) {
            $single_layout = get_theme_mod( 'woocommerce_sidebar', 'full' );
        } else {
            if( is_product() ){
                $single_layout = get_theme_mod( 'product_sidebar', 'full' );
            }
        }
    }
    
    if( is_singular('post') ){
        $single_layout = get_theme_mod( 'single_layout', 'full' );
    }
    
    if($single_layout == 'left'){
        get_sidebar();
    }
}

add_action('page_after_content', 'coblog_right_sidebar_callback');
add_action('single_after_content', 'coblog_right_sidebar_callback');
function coblog_right_sidebar_callback() {
    $single_layout = 'full';
    if( is_wc_active() ){
        if( is_shop() || is_product_category() || is_product_tag() ) {
            $single_layout = get_theme_mod( 'woocommerce_sidebar', 'full' );
        } else {
            if( is_product() ){
                $single_layout = get_theme_mod( 'product_sidebar', 'full' );
            }
        }
    }

    if( is_singular('post') ){
        $single_layout = get_theme_mod( 'single_layout', 'full' );
    }

    if($single_layout == 'right'){
        get_sidebar();
    }
}

function is_wc_page(){
    if(is_wc_active()){
        if( is_shop() || is_product_category() || is_product_tag() || is_product() || is_cart() || is_checkout() ) {
            return true;
        } else {
            return false;
        }
    }
    return false;
}

add_action('single_loop_end', 'coblog_loop_end_callback');
function coblog_loop_end_callback() {
    if(!is_wc_page()){
        $coblog_tag = get_theme_mod( 'enable_single_tag', 1 );
        $coblog_nav = get_theme_mod( 'enable_single_nav', 1 );
        if($coblog_tag == 1){
            coblog_entry_footer();
        }
        if($coblog_nav == 1){
            the_post_navigation(
                array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'coblog' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Next post:', 'coblog' ) . '</span> <br/>' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'coblog' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Previous post:', 'coblog' ) . '</span> <br/>' .
                        '<span class="post-title">%title</span>',
                )
            );
        }
        if ( comments_open() || get_comments_number() ){
            if( 1 == get_theme_mod( 'enable_single_comment', 1 ) ){
                comments_template();
            }
        }
    }
}


add_action('single_page_meta', 'coblog_single_page_meta_callback');
function coblog_single_page_meta_callback($post_id) { 
    if(is_wc_active()){
        if(is_shop() || is_product_category() || is_product_tag() || is_product()){
            return;
        }
    }
    ?>
    <header class="coblog-entry-header coblog-entry-header-single">
        <div class="coblog-post-grid-category"><?php echo wp_kses_post(get_the_category_list( '', $post_id));?></div>
        <?php the_title( '<h1 class="coblog-entry-title">', '</h1>' );?>
        <div class="coblog-entry-meta">
            <?php coblog_posted_meta();?>
        </div>
    </header>
    <?php coblog_post_thumbnail();
}
