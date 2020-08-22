<?php

class Coblog_Admin_Settings {
    public function __construct() {
        if ( is_admin() ) {
		    add_action('admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		    add_action('admin_menu', array( $this, 'theme_info' ));
        }
    }
	/**
	 * Enqueue scripts for admin page
	 */
	function admin_scripts( $hook ) {
		if ( $hook === 'widgets.php' || $hook === 'appearance_page_ft_coblog'  ) {
			wp_enqueue_style( 'coblog-admin-css', get_template_directory_uri() . '/assets/css/admin-settings.css' );
		}
	}

	function theme_info() {
		$menu_title = "<span class='coblog-menu-item'>".esc_html__('Coblog Options', 'coblog')."</span>";
		add_theme_page( esc_html__( 'Coblog Dashboard', 'coblog' ), $menu_title, 'edit_theme_options', 'ft_coblog', array( $this, 'theme_info_page' ));
	}

	function theme_info_page() {
		$theme_data = wp_get_theme('coblog');
		?>
        <div class="coblog-theme-dashboard-wrap">
            <div class="coblog-theme-dashboard-container">
                <div class="coblog-theme-overview">
                    <div class="coblog-dashboard-container">
                        <div class="coblog-theme-overview-version">
                            <img src="<?php echo esc_url(get_template_directory_uri().'/assets/images/logo.png');?>" alt="<?php esc_attr_e('Site Logo', 'coblog'); ?>"/>
                            <span><?php echo esc_attr($theme_data->Version);?></span>
                        </div>
                        <div class="coblog-theme-overview-slogan">
                        <?php esc_html_e( 'Fast & Fully Customizable Gutenberg WordPress theme.', 'coblog'); ?>
                        </div>
                    </div>
                </div>
                <div class="coblog-theme-content-wrap">
                    <div class="coblog-dashboard-container ">
                        <div class="coblog-dashboard-intro">
                            <div class="infoBox">
                                <h2 class="coblog-dashboard-title"><?php esc_html_e( 'Getting started', 'coblog' ); ?></h2>
                                <?php esc_html_e( 'Coblog is beautifully designed clean WordPress blog theme. Easy to setup and has a nice set of features that make your site stand out. It is suitable for personal, fashion, food, travel, business, professional, portfolio, photography and any kind of blogging sites. Coblog is super fast, fully customizable and ready for your next store. It working great with the Elementor, Oxygen, Beaver Builder, Visual Composer, SiteOrigin, Divi etc. This theme is WooCommerce and Gutenberg blocks ready theme. Regular update and maintain by a group of people. You can build anykind of website using this theme.', 'coblog' ); ?>
                                    <div class="coblog-dashboard-btn"><a href="<?php echo esc_url(admin_url('customize.php')); ?>#accordion-section-sub_header_banner" class="button button-primary"><?php esc_html_e('Start Customizing', 'coblog'); ?></a></div>
                            
                                    <div class="coblog-overview-feature">
                                        <h3 class="coblog-dashboard-title"><?php esc_html_e( 'Core Features', 'coblog' ); ?></h3>
                                        <ul class="coblog-dashboard-list">
                                            <li><?php esc_html_e( 'Header Variations', 'coblog' ); ?></li>
                                            <li><?php esc_html_e( 'Three Footer Variations', 'coblog' ); ?></li>
                                            <li><?php esc_html_e( 'Boxwidth layout', 'coblog' ); ?></li>
                                            <li><?php esc_html_e( 'Fullwidth layout', 'coblog' ); ?></li>
                                            <li><?php esc_html_e( 'Woocommerce Integration', 'coblog' ); ?></li>
                                            <li><?php esc_html_e( 'Rich Option Panel', 'coblog' ); ?></li>
                                            <li><?php esc_html_e( 'Unlimted Color Options', 'coblog' ); ?></li>
                                            <li><?php esc_html_e( 'Advanced Post Settings', 'coblog' ); ?></li>
                                            <li><?php esc_html_e( 'Blog Details Settings', 'coblog' ); ?></li>
                                            <li><?php esc_html_e( 'Social Icons', 'coblog' ); ?></li>

                                        </ul>
                                    </div>
                            
                                </div><!--/.coblog-theme-dashboard-card-->
                        </div><!--/.coblog-theme-dashboard-card-->
                        <div class="coblog-dashboard-intro coblog-dashboard-gap">
                            <div class="coblog-dashboard-intro-inner infoBox coblog-dashboard-red">
                                <h3 class="coblog-sidebar-title"><?php esc_html_e( 'Gutenberg Product Blocks Plugin', 'coblog' ); ?></h3>
                                <?php esc_html_e('Product Blocks is a WooCommerce block plugin, helping to create beautiful WooCommerce product grid, Product listing, product slider and Product carousel within a few seconds.', 'coblog'); ?>
                                <div class="coblog-dashboard-btn"><a href="https://wordpress.org/plugins/product-blocks/" target="_blank" class="button button-success"><?php esc_html_e('Free Download', 'coblog'); ?></a></div>
                            </div>
                            <div class="coblog-dashboard-intro-inner infoBox coblog-dashboard-blue">
                                <h3 class="coblog-sidebar-title"><?php esc_html_e( 'Gutenberg Post Blocks Plugin', 'coblog' ); ?></h3>
                                <?php esc_html_e('Gutenberg post block plugins for creating beautiful Gutenberg post grid blocks, post listing blocks, post slider blocks and post carousel blocks within a few seconds.', 'coblog'); ?>
                                <div class="coblog-dashboard-btn"><a href="https://wordpress.org/plugins/ultimate-post/" target="_blank" class="button button-success"><?php esc_html_e('Free Download', 'coblog'); ?></a></div>
                            </div>
                        </div>
                    </div><!--/.coblog-theme-dashboard-card-->
                </div><!--/.coblog-theme-dashboard-row-->    
            </div><!--/.coblog-theme-dashboard-row-->    
        </div> <!--/.coblog-theme-dashboard-wrap-->
		<?php
	}
}

new Coblog_Admin_Settings();



