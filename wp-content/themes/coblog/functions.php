<?php
/**
 * Theme functions and definitions
 * @package coblog
*/
defined('ABSPATH') || exit;

define( 'COBLOG_VERSION', '1.0.9' );
define( 'COBLOG_URI', get_template_directory_uri() );
define( 'COBLOG_DIR', get_stylesheet_directory() );

// Custom template tags for this theme.
require_once get_parent_theme_file_path( '/inc/template-tags.php' );

// Customizer additions.
require_once get_parent_theme_file_path( '/inc/customizer.php' );

// Functions which enhance the theme by hooking into WordPress.
require_once get_parent_theme_file_path( '/inc/template-functions.php' );

// tgm plugin
require_once get_parent_theme_file_path( '/inc/class-tgm-plugin-activation.php' );

// Add Widget
require_once get_parent_theme_file_path( '/inc/widget/latest-posts.php' );

// Add admin dashboard
require_once get_parent_theme_file_path( '/inc/coblog-admin-settings.php' );

// Metabox
require_once get_parent_theme_file_path( '/inc/metabox/metabox.php' );

// Customizer
require_once get_parent_theme_file_path( '/inc/customizer/Customizer.php' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @link https://git.io/vWdr2
 */
function coblog_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- js/skip-link-focus-fix.js`.
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'coblog_skip_link_focus_fix' );

function wpb_sender_email( $original_email_address ) {
    return 'admin@blog.teenjob.by';
}

// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'TeenTeam';
}

// Hooking up our functions to WordPress filters
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );


add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );

function extra_user_profile_fields( $user ) { ?>
    <h3><?php _e("Extra profile information", "blank"); ?></h3>

    <table class="form-table">
        <tr>
            <th><label for="address"><?php _e("Address"); ?></label></th>
            <td>
                <input type="text" name="education" id="address" value="<?php echo esc_attr( get_user_meta( 'address', $user->education, false ) ); ?>" class="regular-text" /><br />
                <span class="description"><?php _e("Please enter your address."); ?></span>
            </td>
        </tr>

    </table>
<?php }

add_action( 'personal_options_update', 'save_extra_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_extra_user_profile_fields' );

function save_extra_user_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) ) {
        return false;
    }
    update_user_meta( $user_id, 'education', $_POST['education'] );
}