<?php
defined('ABSPATH') || exit;

if( class_exists( 'WP_Customize_Control' ) && !class_exists( 'Coblog_Social_Control' ) ){
    return null;
}

class Coblog_Social_Control extends WP_Customize_Control {
    
    public $type = 'social';

    public function enqueue() {
		wp_enqueue_script( 'coblog-social-js', COBLOG_URI . '/inc/customizer/assets/js/social.js', array( 'jquery' ), COBLOG_VERSION, true );
	}
    
    public function render_content() {
        $social = ['facebook','twitter','dribbble','pinterest','github','instagram','tumblr','flickr'];
        ?>
        <div class="coblog-customizer-warp">
            <?php if ( isset( $this->label ) && '' !== $this->label ): ?>
				<span class="customize-control-title"><?php echo esc_attr(sanitize_text_field( $this->label )); ?></span>
			<?php endif; ?>
            <div class="coblog-customizer-social">
                <input class="coblog-customizer-social" <?php esc_attr($this->link()); ?> type="text" value="<?php echo esc_attr($this->value()); ?>" />

                <div class="coblog-repeatable-field">
                    <select class="coblog-field-social-class">
                        <?php
                        foreach ($social as $val) {
                            echo '<option'.($val==$this->value()?' selected':'').'>'.esc_attr($val).'</option>';
                        }
                        ?>
                    </select>
                    <input class="coblog-field-social-url" value=""/>
                </div>

                <button class="coblog-field-social-add"><?php esc_attr_e('+ Add New','coblog'); ?></button>
            </div>
        </div>
        <?php
    }
}
