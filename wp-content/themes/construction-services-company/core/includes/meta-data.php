<?php

// Construction Services Meta Data
function construction_services_company_custom_meta_services_icon() {
    add_meta_box( 
    	'bn_meta', __( 'Construction Services Icon Meta Feilds', 'construction-services-company' ), 
    	'construction_services_company_meta_callback_services_icon', 
    	'post', 
    	'normal', 
    	'high' 
    );
}

/* Hook things in for admin*/
if (is_admin()){
  add_action('admin_menu', 'construction_services_company_custom_meta_services_icon');
}

function construction_services_company_meta_callback_services_icon( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'construction_services_company_meta_nonce_services_icon' );
    $bn_stored_meta = get_post_meta( $post->ID );
    $construction_services_company_service_icon = get_post_meta( $post->ID, 'construction_services_company_icon', true );
    ?>
    <div id="services_icon_meta">
        <table id="list">
            <tbody id="the-list" data-wp-lists="list:meta">
                <tr id="meta-8">
                    <td class="left">
                        <h3 style="margin:0"><?php esc_html_e( 'Services Icon', 'construction-services-company' )?></h3>
                        <p style="margin-top:0"><?php esc_html_e( 'Add the fontawesome icon class. Example: "far fa-building".', 'construction-services-company' )?></p>
                        <input type="text" placeholder="far fa-building" name="construction_services_company_icon" id="construction_services_company_icon" value="<?php echo esc_attr($construction_services_company_service_icon); ?>" />
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
}

/* Saves the custom meta input */
function construction_services_company_meta_save_services_icon( $post_id ) {
    if (!isset($_POST['construction_services_company_meta_nonce_services_icon']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['construction_services_company_meta_nonce_services_icon']) ), basename(__FILE__))) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save Package Amount
    if( isset( $_POST[ 'construction_services_company_icon' ] ) ) {
        update_post_meta( $post_id, 'construction_services_company_icon', strip_tags( wp_unslash( $_POST[ 'construction_services_company_icon' ]) ) );
    }   
}
add_action( 'save_post', 'construction_services_company_meta_save_services_icon' );