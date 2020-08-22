<?php
defined('ABSPATH') || exit;

if( !class_exists( 'WP_Customize_Control' ) ){
	return null;
}

class Coblog_Rgba_Control extends WP_Customize_Control {

	public $type = 'rgba';
	public $palette;
	public $show_opacity;

	public function enqueue() {
		wp_enqueue_script( 'alpha-color-picker-js', COBLOG_URI . '/inc/customizer/assets/js/alpha-color-picker.js', array( 'jquery', 'wp-color-picker' ), COBLOG_VERSION, true );
		wp_enqueue_style( 'alpha-color-picker-css', COBLOG_URI . '/inc/customizer/assets/css/alpha-color-picker.css', array( 'wp-color-picker' ), COBLOG_VERSION );
	}

	public function render_content() {
		if ( is_array( $this->palette ) ) {
			$palette = implode( '|', $this->palette );
		} else {
			$palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
		}
		$show_opacity = ( false === $this->show_opacity || 'false' === $this->show_opacity ) ? 'false' : 'true'; 
		?>
		<div class="coblog-customizer-warp">
			<?php if ( isset( $this->label ) && '' !== $this->label ): ?>
				<span class="customize-control-title"><?php echo esc_attr(sanitize_text_field( $this->label )); ?></span>
			<?php endif; ?>
			<div class="coblog-customizer-rgba">
				<input class="alpha-color-control" type="text" data-show-opacity="<?php echo esc_attr($show_opacity); ?>" data-palette="<?php echo esc_attr( $palette ); ?>" data-default-color="<?php echo esc_attr( $this->settings['default']->default ); ?>" <?php esc_attr($this->link()); ?>  />
			</div>
		</div>
	<?php }
}