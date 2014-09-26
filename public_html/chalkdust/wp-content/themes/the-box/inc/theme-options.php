<?php

add_action( 'admin_init', 'thebox_options_init' );
add_action( 'admin_menu', 'thebox_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function thebox_options_init(){
	register_setting( 'thebox_options', 'thebox_theme_options', 'thebox_options_validate' );
}

/**
 * Load up the menu page
 */
function thebox_options_add_page() {
	add_theme_page( __( 'Theme Options', 'thebox' ), __( 'Theme Options', 'thebox' ), 'edit_theme_options', 'theme_options', 'thebox_options_do_page' );
}

/**
 * Create the options page
 */
function thebox_options_do_page() {

	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . wp_get_theme() . __( ' Theme Options', 'thebox' ) . "</h2>"; ?>
		<p><?php _e( 'These options will let you setup the social icons at the top of the theme. You can enter the URLs of your profiles to have the icons show up.', 'thebox' ); ?></p>
		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
		<div class="updated fade"><p><strong><?php _e( 'Options saved', 'thebox' ); ?></strong></p></div>
		<?php endif; ?>
			
		<div class="updated" style="background:#E9F7DF;">
			<table class="form-table">
				<tr valign="top"><th scope="row"><strong><?php _e( 'Support thebox Theme', 'thebox' ); ?></strong></th>
					<td>
						<p><?php _e( 'If you enjoy my theme, please consider making a secure donation using the PayPal button. Anything is appreciated!', 'thebox' ); ?></p>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/it_IT/i/scr/pixel.gif" width="1" height="1">
</form>
					</td>
				</tr>
			</table>		
		</div>	

		<form method="post" action="options.php">
		<?php settings_fields( 'thebox_options' ); ?>
		<?php $options = get_option( 'thebox_theme_options' ); ?>
			
			<table class="form-table">

				<?php
				/**
				 * RSS Icon
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Hide RSS Icon?', 'thebox' ); ?></th>
					<td>
						<input id="thebox_theme_options[hiderss]" name="thebox_theme_options[hiderss]" type="checkbox" value="1" <?php checked( '1', $options['hiderss'] ); ?> />
						<label class="description" for="thebox_theme_options[hiderss]"><?php _e( 'Hide the RSS feed icon?', 'thebox' ); ?></label>
					</td>
				</tr>

				<?php
				/**
				 * Facebook Icon
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Facebook URL', 'thebox' ); ?></th>
					<td>
						<input id="thebox_theme_options[facebookurl]" class="regular-text" type="text" name="thebox_theme_options[facebookurl]" value="<?php echo esc_attr( $options['facebookurl'] ); ?>" />
						<label class="description" for="thebox_theme_options[facebookurl]"><?php _e( 'Leave blank to hide Facebook Icon', 'thebox' ); ?></label>
					</td>
				</tr>
				
				<?php
				/**
				 * Twitter URL
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Twitter URL', 'thebox' ); ?></th>
					<td>
						<input id="thebox_theme_options[twitterurl]" class="regular-text" type="text" name="thebox_theme_options[twitterurl]" value="<?php echo esc_attr( $options['twitterurl'] ); ?>" />
						<label class="description" for="thebox_theme_options[twitterurl]"><?php _e( 'Leave blank to hide Twitter Icon', 'thebox' ); ?></label>
					</td>
				</tr>
				
				<?php
				/**
				 * Google +
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Google + URL', 'thebox' ); ?></th>
					<td>
						<input id="thebox_theme_options[googleplusurl]" class="regular-text" type="text" name="thebox_theme_options[googleplusurl]" value="<?php echo esc_attr( $options['googleplusurl'] ); ?>" />
						<label class="description" for="thebox_theme_options[googleplusurl]"><?php _e( 'Leave blank to hide Google + Icon', 'thebox' ); ?></label>
					</td>
				</tr>
				
				<?php
				/**
				 * Instagram
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Enter your Instagram URL', 'thebox' ); ?></th>
					<td>
						<input id="thebox_theme_options[instagramurl]" class="regular-text" type="text" name="thebox_theme_options[instagramurl]" value="<?php echo esc_attr( $options['instagramurl'] ); ?>" />
						<label class="description" for="thebox_theme_options[instagramurl]"><?php _e( 'Leave blank to hide Instagram Icon', 'thebox' ); ?></label>
					</td>
				</tr>
				
			</table>

			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'thebox' ); ?>" />
			</p>
			
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function thebox_options_validate( $input ) {

	// Our checkbox value is either 0 or 1
	if ( ! isset( $input['hiderss'] ) )
		$input['hiderss'] = null;
		$input['hiderss'] = ( $input['hiderss'] == 1 ? 1 : 0 );

	// Our text option must be safe text with no HTML tags
	$input['twitterurl'] = wp_filter_nohtml_kses( $input['twitterurl'] );
	$input['facebookurl'] = wp_filter_nohtml_kses( $input['facebookurl'] );
	$input['googleplusurl'] = wp_filter_nohtml_kses( $input['googleplusurl'] );
	$input['instagramurl'] = wp_filter_nohtml_kses( $input['instagramurl'] );
	
	// Encode URLs
	$input['twitterurl'] = esc_url_raw( $input['twitterurl'] );
	$input['facebookurl'] = esc_url_raw( $input['facebookurl'] );
	$input['googleplusurl'] = esc_url_raw( $input['googleplusurl'] );
	$input['instagramurl'] = esc_url_raw( $input['instagramurl'] );
	
	return $input;
}