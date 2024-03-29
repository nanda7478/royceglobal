<?php
//$selected_nav = absint( get_user_option( 'nav_menu_recently_edited' ) );
$selected_nav =  ! empty( $_REQUEST['menu'] ) ? (int) $_REQUEST['menu'] : 0;
if ( ! $selected_nav){
	$selected_nav = absint( get_user_option( 'nav_menu_recently_edited' ) );
}

$selected_nav_theme = get_term_meta($selected_nav, 'wpmm_nav_options', true);
$selected_nav_theme = maybe_unserialize($selected_nav_theme);
$selected_theme_id = null;
if ( ! empty($selected_nav_theme)){
	$selected_theme_id = $selected_nav_theme['theme_id'];
}

?>
<div id="wpmm_themes" class="wpmm_themes_div">
    <div class="wpmm_themes_metabox_content">
        <div id="wpmm_themes_response"></div>

        <?php


		$get_attached_location_with_menu = get_attached_location_with_menu($selected_nav);

		if ( ! empty($get_attached_location_with_menu)) {
			foreach ($get_attached_location_with_menu as $current_location => $location_name);


			$wpmm_nav_location_settings = get_wpmm_option($current_location);


			?>


            <table>
                <tbody>
                <tr>
                    <td>Enable</td>
                    <td>
                        <input type="hidden" name="wpmm_nav_settings[<?php echo $current_location; ?>][menu_location]" value="<?php echo $current_location; ?>">

                        <input type="checkbox" class="wpmm_is_enabled" name="wpmm_nav_settings[<?php echo $current_location; ?>][is_enabled]" value="1" <?php checked( ! empty($wpmm_nav_location_settings['is_enabled'])); ?> >
                    </td>
                </tr>
                <tr>
                    <td>Theme</td>
                    <td>

						<?php

						$post_args = array(
							'post_type'   => 'wpmm_theme',
							'post_status' => 'publish',
							'order_by'    => 'desc'
						);
						$query     = new WP_Query( $post_args );

						if ( $query->have_posts() ) {
							echo '<ul>';
							echo "<li> <label class='menu-item-title' > " . __( 'Disable Theme', 'wp-megamenu' ) . " <input type='radio' value='0' name='selected_theme' " . checked( 0, $selected_theme_id, false ) . " />  </label> </li> ";
							while ( $query->have_posts() ): $query->the_post();
								?>

                                <li>
                                    <label class="menu-item-title">
										<?php
										$selected_theme = '';

										if ( $selected_theme_id ) {
											$selected_theme = get_the_ID() == $selected_theme_id ? ' checked="checked" ' : '';
										} elseif ( get_the_title() === 'classic-themes' ) {
											$selected_theme = ' checked="checked" ';
										}
										?>
										<?php echo
										get_the_title(); ?>
                                        <input type="radio" value="<?php echo get_the_ID(); ?>" name="selected_theme" <?php echo $selected_theme ?> />
                                    </label>
                                </li>


								<?php
							endwhile;

							echo '</ul>';
							$query->reset_postdata();
						}
						?>


                    </td>
                </tr>

                </tbody>
            </table>


			<?php
		}else{

			?>
            <div class="wpmm-notice-warning">
                <p>
					<?php _e( 'This menu is not in any location, please set a location first', 'wp-megamenu' ); ?>
                </p>
            </div>
			<?php


		}

		// print_row(get_registered_nav_menus());

		// $nav_menu_locations = get_nav_menu_locations();

		// print_row($nav_menu_locations);


		?>


    </div>
    <p class="button-controls wp-clearfix">



        <span class="add-to-menu">


            <a href="<?php echo add_query_arg( array('action' => 'wp_megamenu_nav_export')); ?>" class="button
            button-primary menu-save" style="margin-right:
            20px;" >Export Menu</a>

            <input type="submit"  class="button-secondary submit-add-to-menu right" value="<?php esc_attr_e('Save', 'wp-megamenu'); ?>" name="save_wpmm_theme_nav" id="save_wpmm_theme_nav" />
        </span>
    </p>
</div><!-- /.wpmm_themes_div -->