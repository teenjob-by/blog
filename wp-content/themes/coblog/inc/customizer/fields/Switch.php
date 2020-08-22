<?php
defined('ABSPATH') || exit;

if( !class_exists( 'WP_Customize_Control' ) ){
	return null;
}

class Coblog_Switch_Control extends WP_Customize_Control {

	public $type = 'checkbox';
	public $depends;

	public function render_content(){
	?>
		<?php if( $this->depends ){ ?>
			<div class="coblog-customizer-warp coblog-checkbox" data-condition="<?php echo esc_attr($this->depends); ?>" data-value="<?php echo esc_attr($this->value()); ?>">
		<?php } else { ?>
			<div class="coblog-customizer-warp">
		<?php } ?>
			<?php if( isset($this->label) && '' !== $this->label ): ?>
				<span class="customize-control-title"><?php echo esc_attr(sanitize_text_field($this->label)); ?></span>
			<?php endif; ?>
			<div class="coblog-customizer-switch">
				<input class="<?php echo $this->depends ? 'coblog-checkbox-change' : ''; ?>" type="checkbox" <?php checked( $this->value(), 1 ); ?> <?php $this->link(); ?> >
			</div>
		</div>
	<?php
	}
}