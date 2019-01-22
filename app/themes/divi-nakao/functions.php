<?php

//*============================================
//Require necessary files
//=============================================*/

require_once('post-types/post-types.php');

//*============================================
//Enqueue child theme styles
//=============================================*/

function nakao_ceramics_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'nakao_ceramics_enqueue_styles' );

//*============================================
// Create footer options page
//=============================================*/

// create custom plugin settings menu
add_action('admin_menu', 'footer_options_menu');

function footer_options_menu() {
    // create new top-level menu
    add_menu_page('Footer Options', 'Footer Options', 'manage_options', 'footer-options', 'footer_options');

    // call register settings function
  	add_action( 'admin_init', 'register_footer_options_settings' );
}

function register_footer_options_settings() {
  	register_setting( 'footer-options-settings-group', 'street_address' );
  	register_setting( 'footer-options-settings-group', 'city_state_zip' );
  	register_setting( 'footer-options-settings-group', 'phone' );
}

function footer_options() {
    ?>
    <div class="wrap">
        <h2>Footer Options</h2>
        <form method="post" action="options.php">

        <?php settings_fields( 'footer-options-settings-group' ); ?>
        <?php do_settings_sections( 'footer-options-settings-group' ); ?>
            <table class="form-table">
                <tr valign="top">
                <th scope="row">Street Address</th>
                <td><input type="text" name="street_address" value="<?php echo esc_attr( get_option('street_address') ); ?>" /></td>
                </tr>

                <tr valign="top">
                <th scope="row">City, State, Zip</th>
                <td><input type="text" name="city_state_zip" value="<?php echo esc_attr( get_option('city_state_zip') ); ?>" /></td>
                </tr>

                <tr valign="top">
                <th scope="row">Phone</th>
                <td><input type="text" name="phone" value="<?php echo esc_attr( get_option('phone') ); ?>" /></td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}
