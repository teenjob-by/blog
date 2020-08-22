<?php

// Call in Theme Function
function coblog_customizer_callback($prams) {
	$new_prams = array(
        array(
            'key'     => 'coblog_options',
            'type'    => 'panel',
            'priority'=> 10,
            'title'   => __( 'Coblog Options', 'coblog' ),
            'options' => array(

                array(
                    'key'    => 'logo_options',
                    'type'   => 'section',
                    'title'  => __( 'Logo', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'logo_type',
                            'type'    => 'select',
                            'title'   => __( 'Select Logo Type', 'coblog' ),
                            'default' => 'logo_img',
                            'options'   => array(
                                'logo_img'   => __('Image Logo', 'coblog'),
                                'logo_text'  => __('Text Logo', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'logo_img',
                            'type'    => 'media',
                            'title'   => __( 'Logo', 'coblog' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/logo.svg' ),
                        ),
                        array(
                            'key'     => 'offcanvas_logo_img',
                            'type'    => 'media',
                            'title'   => __( 'offcanvas Logo', 'coblog' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/logo.svg' ),
                        ),
                        array(
                            'key'     => 'logo_text',
							'type'    => 'text',
                            'title'   => __( 'Logo Text', 'coblog' ),
                            'default' => 'Coblog',
                        ),
                        array(
                            'key'     => 'logo_slogan',
							'type'    => 'text',
                            'title'   => __( 'Slogan Text', 'coblog' ),
                            'default' => 'Self Made Intrepreneurs',
                        ),
                        array(
                            'key'     => 'logo_width',
                            'type'    => 'number',
                            'title'   => __( 'Logo Width', 'coblog' ),
                            'default' => 120,
                        ),
                        array(
                            'key'     => 'logo_responsive_width',
                            'type'    => 'number',
                            'title'   => __( 'Logo Responsive Width', 'coblog' ),
                            'default' => 100,
                        ),
                        array(
                            'key'     => 'logo_height',
                            'type'    => 'number',
                            'title'   => __( 'Logo Height', 'coblog' ),
                            'default' => '',
                        ),
					)
                ),

                array(
                    'key'    => 'header_options',
                    'type'   => 'section',
                    'title'  => __( 'Header', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'header_layout',
                            'type'    => 'layout',
                            'title'   => __( 'Header layout', 'coblog' ),
                            'default' => 'one',
                            'options' => array(
                                'one'   => COBLOG_URI.'/assets/images/header-one.png',
                                'two'   => COBLOG_URI.'/assets/images/header-two.png',
                                'three' => COBLOG_URI.'/assets/images/header-three.png',
                                'four'  => COBLOG_URI.'/assets/images/header-four.png',
                                'five'  => COBLOG_URI.'/assets/images/header-five.png',
                            ),
                            // 'depends' => 'tb_padding_bottom#=#one, tb_padding_top#=#one, email#=#one, contact_number#=#one'
                        ),
                        array(
                            'key'     => 'enable_search',
                            'type'    => 'switch',
                            'title'   => __( 'Enable Search', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'cart_search',
                            'type'    => 'switch',
                            'title'   => __( 'Enable Cart', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'woo_myaccount_url',
							'type'    => 'text',
                            'title'   => __( 'Add My Account Page URL', 'coblog' ),
                            'default' => '',
						),
						array(
                            'key'     => 'subscribe_url',
							'type'    => 'text',
                            'title'   => __( 'Subscribe URL', 'coblog' ),
                            'default' => '#',
						),
						array(
                            'key'     => 'subscribe_text',
							'type'    => 'text',
                            'title'   => __( 'Subscribe Text', 'coblog' ),
                            'default' => __('Subscribe', 'coblog' ),
                        ),

                        array(
                            'key'     => 'topbar_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Topbar Options', 'coblog' ),
                        ),
                        array(
                            'key'     => 'contact_number',
							'type'    => 'text',
                            'title'   => __( 'Contact Number', 'coblog' ),
                            'default' => __('(123)456 7890', 'coblog' ),
                        ),
                        array(
                            'key'     => 'email',
							'type'    => 'text',
                            'title'   => __( 'Email', 'coblog' ),
                            'default' => 'demo@coblog.com',
                        ),
                        array(
                            'key'     => 'topbar_short_note',
							'type'    => 'text',
                            'title'   => __( 'Add Topbar Text', 'coblog' ),
                            'default' => __('FREE Returns. Standard Shipping Orders $99+', 'coblog' ),
                        ),
                        array(
                            'key'     => 'tb_padding_top',
                            'title'   => __( 'Topbar Padding Top', 'coblog' ),
                            'type'    => 'number',
                            'default' => 8,
                        ),
                        array(
                            'key'     => 'tb_padding_bottom',
                            'title'   => __( 'Topbar Padding Bottom', 'coblog' ),
                            'type'    => 'number',
                            'default' => 8,
                        ),
					)
                ),

                // array(
                //     'key'    => 'typography',
                //     'type'   => 'section',
                //     'title'  => __( 'Typography', 'coblog' ),
				// 	'options'=> array(
                //         array(
                //             'key'     => 'body',
                //             'type'    => 'typography',
                //             'title'   => __( 'Body Font', 'coblog' ),
                //             'default' => 'Source Sans Pro#sans-serif#400',
                //         ),
                //         array(
                //             'key'     => 'menu',
                //             'type'    => 'typography',
                //             'title'   => __( 'Menu Font', 'coblog' ),
                //             'default' => 'Libre Baskerville#serif#400',
                //         ),
                //         array(
                //             'key'     => 'submenu',
                //             'type'    => 'typography',
                //             'title'   => __( 'Sub Menu Font', 'coblog' ),
                //             'default' => 'Libre Baskerville#serif#400',
                //         ),
                //         array(
                //             'key'     => 'heading',
                //             'type'    => 'typography',
                //             'title'   => __( 'Heading Font', 'coblog' ),
                //             'default' => 'Libre Baskerville#serif#700',
                //         ),
				// 	)
				// ),

                array(
                    'key'    => 'style_options',
                    'type'   => 'section',
                    'title'  => __( 'Theme Style', 'coblog' ),
					'options'=> array(
                        // array(
                        //     'key'     => 'skin_style',
                        //     'type'    => 'select',
                        //     'title'   => __( 'Select Skin', 'coblog' ),
                        //     'default' => 'white',
                        //     'options'   => array(
                        //         'white'   => __('White', 'coblog'),
                        //         'dark'  => __('Dark', 'coblog'),
                        //     )
                        // ),
                        array(
                            'key'     => 'box_layout',
                            'type'    => 'switch',
                            'title'   => __( 'Body Box Layout', 'coblog' ),
                            'default' => 0,
                            'depends' => 'body_bg_img#=#1'
                        ),
                        array(
                            'key'     => 'body_bg_img',
                            'type'    => 'media',
                            'title'   => __( 'Upload Body Background', 'coblog' ),
                            'default' => '',
                        ),
                        array(
                            'key'     => 'tc_body_color',
                            'type'    => 'color',
                            'title'   => __( 'Body Text Color', 'coblog' ),
                            'default' => '#3f4044',
                        ),
                        array(
                            'key'     => 'tc_body_bg',
                            'type'    => 'color',
                            'title'   => __( 'Body Background Color', 'coblog' ),
                            'default' => '#ffffff',
                        ),

                        //topbar
                        array(
                            'key'     => 'topbar_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Topbar Style', 'coblog' ),
                        ),
                        array(
                            'key'     => 'tb_color',
                            'title'   => __( 'Topbar Text Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '',
                        ),
                        array(
                            'key'     => 'tb_link_hover_color',
                            'title'   => __( 'Topbar Link Hover Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tb_bg_color',
                            'title'   => __( 'Topbar Background Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '',
                        ),

                        //Header
                        array(
                            'key'     => 'header_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Header Style', 'coblog' ),
                        ),
                        array(
                            'key'     => 'ht_color',
                            'title'   => __( 'Header Text Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '',
                        ),
                        array(
                            'key'     => 'header_bg_color',
                            'title'   => __( 'Header Background Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '',
                        ),

                        //Menu
                        array(
                            'key'     => 'menu_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Menu Style', 'coblog' ),
                        ),
                        array(
                            'key'     => 'tc_menu_color',
                            'type'    => 'color',
                            'title'   => __( 'Menu Color', 'coblog' ),
                            'default' => '',
                        ),
                        array(
                            'key'     => 'tc_menu_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Menu Hover Color', 'coblog' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_submenu_color',
                            'type'    => 'color',
                            'title'   => __( 'Sub Menu Text Color', 'coblog' ),
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'tc_submenu_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Sub Menu Hover Color', 'coblog' ),
                            'default' => '#FD4145',
                        ),


                        array(
                            'key'     => 'tc_primary_color',
                            'type'    => 'color',
                            'title'   => __( 'Primary Color', 'coblog' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_secendary_color',
                            'type'    => 'color',
                            'title'   => __( 'Secendary Color', 'coblog' ),
                            'default' => '#E4282C',
                        ),
                        //button
                        array(
                            'key'     => 'button_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Button Style', 'coblog' ),
                        ),
                        array(
                            'key'     => 'tc_btn_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Color', 'coblog' ),
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'tc_btn_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Hover Color', 'coblog' ),
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'tc_btn_bgcolor',
                            'type'    => 'color',
                            'title'   => __( 'Button background Color', 'coblog' ),
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'tc_btn_bg_hover_color',
                            'type'    => 'color',
                            'title'   => __( 'Button Background Hover Color', 'coblog' ),
                            'default' => '#000000',
                        ),

                        //footer top
                        array(
                            'key'     => 'footer_top_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Footer Top Style', 'coblog' ),
                        ),
                        array(
                            'key'     => 'ft_color',
                            'title'   => __( 'Text Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#000',
                        ),
                        array(
                            'key'     => 'ft_bg_color',
                            'title'   => __( 'Background Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#ffffff',
                        ),
                        array(
                            'key'     => 'ft_link_hover_color',
                            'title'   => __( 'Link Hover Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),

                        //footer bottom
                        array(
                            'key'     => 'footer_bottom_style_separator',
                            'type'    => 'separator',
                            'title'   => __( 'Footer Bottom Style', 'coblog' ),
                        ),
                        array(
                            'key'     => 'fb_color',
                            'type'    => 'color',
                            'title'   => __( 'Text Color', 'coblog' ),
                            'default' => '#596172',
                        ),
                        array(
                            'key'     => 'fb_link_hover_color',
                            'title'   => __( 'Link Hover Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#FD4145',
                        ),
                        array(
                            'key'     => 'fb_bg_color',
                            'title'   => __( 'Background Color', 'coblog' ),
                            'type'    => 'color',
                            'default' => '#ffffff',
                        ),

					)
                ),

                array(
                    'key'    => 'latest_post_options',
                    'type'   => 'section',
                    'title'  => __( 'Latest Post Grid', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'enable_post_grid',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Post Grid', 'coblog' ),
                            'default' => 1,
                        ),
					)
                ),

                array(    
                    'key'    => 'archive_options',
                    'type'   => 'section',
                    'title'  => __( 'Archive Options', 'coblog' ),
                    'options'=> array(
                        array(
                            'key'     => 'archive_layout',
                            'type'    => 'select',
                            'title'   => __( 'Archive Layout', 'coblog' ),
                            'default' => 'right',
                            'options'   => array(
                                'full'   => __('Full Width', 'coblog'),
                                'right'  => __('Right Sidebar', 'coblog'),
                                'left'  => __('left Sidebar', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'blog_post_column',
                            'type'    => 'select',
                            'title'   => __( 'Archive Column', 'coblog' ),
                            'default' => '1',
                            'options'   => array(
                                '1'   => __('1', 'coblog'),
                                '2'  => __('2', 'coblog'),
                                '3'  => __('3', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'enable_author',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Author', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_date',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Date', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_excerpt',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Excerpt', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'character_limit',
                            'type'    => 'text',
                            'title'   => __( 'Characher Limit', 'coblog' ),
                            'default' => 100,
                        ),
                        array(
                            'key'     => 'enable_readmore',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Read More', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'readmore_text',
                            'type'    => 'text',
                            'title'   => __( 'Read More Text', 'coblog' ),
                            'default' => __( 'Read More', 'coblog' ),
                        ),
                    )
                ),
            
                array(    
                    'key'    => 'single_options',
                    'type'   => 'section',
                    'title'  => __( 'Single Options', 'coblog' ),
                    'options'=> array(
                        array(
                            'key'     => 'single_layout',
                            'type'    => 'select',
                            'title'   => __( 'Single Layout', 'coblog' ),
                            'default' => 'full',
                            'options'   => array(
                                'full'   => __('Full Width', 'coblog'),
                                'right'  => __('Right Sidebar', 'coblog'),
                                'left'  => __('left Sidebar', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'enable_single_author',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Author', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_date',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Date', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_view',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single View', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_comment_count',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Comment Count', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_tag',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Tags', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_nav',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Navigation', 'coblog' ),
                            'default' => 1,
                        ),
                        array(
                            'key'     => 'enable_single_comment',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Single Comment', 'coblog' ),
                            'default' => 1,
                        ),
                    )
                ),

                array(
                    'key'    => 'footer_top',
                    'type'   => 'section',
                    'title'  => __( 'Footer Top', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'ft_column',
                            'title'   => __( 'Footer Column', 'coblog' ),
                            'type'    => 'select',
                            'default' => '4',
                            'options'   => array(
                                '12'   => __('1', 'coblog'),
                                '6'  => __('2', 'coblog'),
                                '4'  => __('3', 'coblog'),
                                '3'  => __('4', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'ft_padding_top',
                            'title'   => __( 'Padding Top', 'coblog' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'ft_padding_bottom',
                            'title'   => __( 'Padding Bottom', 'coblog' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
					)
				),

                array(
                    'key'    => 'footer_bottom',
                    'type'   => 'section',
                    'title'  => __( 'Footer Bottom', 'coblog' ),
					'options'=> array(
                        array(
                            'key'     => 'footer_layout',
                            'type'    => 'layout',
                            'title'   => __( 'Footer layout', 'coblog' ),
                            'default' => 'ftone',
                            'options' => array(
                                'ftone'   => COBLOG_URI.'/assets/images/footer-one.png',
                                'fttwo'   => COBLOG_URI.'/assets/images/footer-two.png',
                                'fthree'   => COBLOG_URI.'/assets/images/footer-three.png',
                            ),
                        ),
                        array(
                            'key'     => 'fb_padding_top',
                            'title'   => __( 'Padding Top', 'coblog' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'fb_padding_bottom',
                            'title'   => __( 'Padding Bottom', 'coblog' ),
                            'type'    => 'number',
                            'default' => 80,
                        ),
                        array(
                            'key'     => 'footer_logo',
                            'type'    => 'media',
                            'title'   => __( 'Footer Image', 'coblog' ),
                            'default' => get_parent_theme_file_uri( '/assets/images/footer-logo.png' ),
                        ),
                        array(
                            'key'     => 'copyright',
							'type'    => 'textarea',
                            'title'   => __( 'Facebook URL', 'coblog' ),
                            'default' => __('Created by <strong>WPesta</strong>. Powered by <strong>WordPress</strong><br> Code is Poetry.', 'coblog'),
                        ),
                        array(
                            'key'     => 'enable_footer_share',
                            'type'    => 'switch',
                            'title'   => __( 'Disable Social Button', 'coblog' ),
                            'default' => 1,
                        ),
					)
				),

                array(
                    'key'    => 'social_share_options',
                    'type'   => 'section',
                    'title'  => __( 'Social Share', 'coblog' ),
					'options'=> array(
						array(
                            'key'     => 'share_facebook',
							'type'    => 'text',
                            'title'   => __( 'Facebook URL', 'coblog' ),
                            'default' => '#',
                        ),
                        array(
                            'key'     => 'share_instagram',
							'type'    => 'text',
                            'title'   => __( 'Instagram URL', 'coblog' ),
                            'default' => '#',
                        ),
						array(
                            'key'     => 'share_twitter',
							'type'    => 'text',
                            'title'   => __( 'Twitter URL', 'coblog' ),
                            'default' => '#',
                        ),
						array(
                            'key'     => 'share_linkedin',
							'type'    => 'text',
                            'title'   => __( 'Linkedin URL', 'coblog' ),
                            'default' => '',
                        ),
					)
                ),
                
                array(
                    'key'    => 'woocommerce_options',
                    'type'   => 'section',
                    'title'  => __( 'WooCommerce Store', 'coblog' ),
                    'options'=> array(
						array(
                            'key'     => 'woocommerce_sidebar',
                            'title'   => __( 'Shop Sidebar', 'coblog' ),
                            'type'    => 'select',
                            'default' => 'left_sidebar',
                            'options' => array(
                                'full'      => __('None', 'coblog'),
                                'left'      => __('Left Sidebar', 'coblog'),
                                'right'     => __('Right Sidebar', 'coblog'),
                            )
                        ),
                        array(
                            'key'     => 'product_sidebar',
                            'title'   => __( 'Single Product Sidebar', 'coblog' ),
                            'type'    => 'select',
                            'default' => 'none',
                            'options' => array(
                                'full'  => __('None', 'coblog'),
                                'left'  => __('Left Sidebar', 'coblog'),
                                'right' => __('Right Sidebar', 'coblog'),
                            )
                        ),
                    )
                )


				
            )
        ),
    );
	return array_merge($new_prams, $prams);
}
add_filter('coblog_customizer', 'coblog_customizer_callback'); 