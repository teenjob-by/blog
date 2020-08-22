<?php
defined( 'ABSPATH' ) || exit;

if (!class_exists('Coblog_Customizer')) {
	class Coblog_Customizer{
		public function __construct(){
			$this->includes();
			add_action( 'customize_controls_enqueue_scripts', array( $this, 'customizer_controls_scripts' ) );
		}

		public function includes(){
			require_once get_parent_theme_file_path('/inc/customizer/Base.php');
		}

		public function customizer_controls_scripts() {
			wp_enqueue_style( 'coblog-customizer-css', COBLOG_URI . '/inc/customizer/assets/css/customizer.css', array(), COBLOG_VERSION, false );
			wp_enqueue_script( 'coblog-customizer-js', COBLOG_URI . '/inc/customizer/assets/js/customizer.js', array('jquery'), COBLOG_VERSION, false );

			wp_localize_script( 'coblog-customizer-js', 'coblog_kit', array(
				'ajax_url' 		 => admin_url('admin-ajax.php'),
				'import_success' => esc_html__('Success! Your theme data successfully imported. Page will be reloaded within 2 sec.', 'coblog'),
				'import_error'   => esc_html__('Error! Your theme data importing failed.', 'coblog'),
				'file_error' 	 => esc_html__('Error! Please upload a file.', 'coblog')
			));
		}
	}
	new Coblog_Customizer();
}
