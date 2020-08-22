<?php
defined('ABSPATH') || exit;

if( class_exists( 'WP_Customize_Control' ) && !class_exists( 'Coblog_Typography_Control' ) ){
    return null;
}

class Coblog_Typography_Control extends WP_Customize_Control {
    
    public $type = 'typography';

    public function enqueue() {
		wp_enqueue_script( 'coblog-typography-js', COBLOG_URI . 'assets/js/typography.js', array( 'jquery' ), COBLOG_VERSION, true );
	}
    
    public function render_content() { ?>
        <div class="coblog-customizer-warp">
            <?php if ( isset( $this->label ) && '' !== $this->label ): ?>
				<span class="customize-control-title"><?php echo esc_attr(sanitize_text_field( $this->label )); ?></span>
			<?php endif; ?>
            <div class="coblog-customizer-typography">
                <input class="coblog-customizer-typography-input" <?php esc_attr($this->link()); ?> type="text" value="<?php echo esc_attr($this->value()); ?>" />
                <select class="coblog-field-typography-field"></select>
                <select class="coblog-field-typography-weight-field"></select>
            </div>
        </div>
        <?php
    }
}
