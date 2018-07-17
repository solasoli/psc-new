<?php
/* Recheck if user is logged in just to be sure, this should have been done already */
if( !is_user_logged_in() ) {
	wp_redirect( home_url() );
	exit;
}
if ( $_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['action'] ) && $_POST['action'] == 'update-user' ) {
	$current_user = wp_get_current_user();
	/* Check nonce first to see if this is a legit request */
	if( !isset( $_POST['_wpnonce'] ) || !wp_verify_nonce( $_POST['_wpnonce'], 'update-user' ) ) {
		wp_redirect( get_permalink() . '?validation=unknown' );
		exit;
	}
	/* Check honeypot for autmated requests */
	if( !empty($_POST['honey-name']) ) {
		wp_redirect( get_permalink() . '?validation=unknown' );
		exit;
	}
	/* Update profile fields */
	if ( !empty( $_POST['email'] ) ){
		$posted_email = esc_attr( $_POST['email'] );
        if ( !is_email( $posted_email ) ) {
        	wp_redirect( get_permalink() . '?validation=emailnotvalid' );
			exit;
        } elseif( email_exists( $posted_email ) && ( email_exists( $posted_email ) != $current_user->ID ) ) {
        	wp_redirect( get_permalink() . '?validation=emailexists' );
			exit;
        } else{
            wp_update_user( array ('ID' => $current_user->ID, 'user_email' => $posted_email ) );
        }
    }
    if ( !empty($_POST['pass1'] ) || !empty( $_POST['pass2'] ) ) {
        if ( $_POST['pass1'] == $_POST['pass2'] ) {
            wp_update_user( array( 'ID' => $current_user->ID, 'user_pass' => esc_attr( $_POST['pass1'] ) ) );
        }
        else {
        	wp_redirect( get_permalink() . '?validation=passwordmismatch' );
			exit;
        }
            
    }
    if ( !empty( $_POST['first-name'] ) ) {
    	$display_name = esc_attr( $_POST['first-name'] );
        update_user_meta( $current_user->ID, 'first_name', esc_attr( $_POST['first-name'] ) );
    }
    if ( !empty( $_POST['last-name'] ) ) {
    	$display_name .= ' ' . esc_attr( $_POST['last-name'] );
        update_user_meta( $current_user->ID, 'last_name', esc_attr( $_POST['last-name'] ) );
    }
     if (!empty( $_POST['billing_address_1'] ) ) {
     	update_user_meta( $current_user->ID, 'billing_address_1', esc_attr( $_POST['billing_address_1'] ) );
    }
    if ( !empty( $_POST['billing_postcode'] ) ) {
        update_user_meta( $current_user->ID, 'billing_postcode', esc_attr( $_POST['billing_postcode'] ) );
    }
    if ( !empty( $_POST['user_specialisation'] ) ) {
        update_user_meta( $current_user->ID, 'specialisation', esc_attr( $_POST['user_specialisation'] ) );
    }
     if ( !empty( $_POST['billing_country'] ) ) {
        update_user_meta( $current_user->ID, 'billing_country', esc_attr( $_POST['billing_country'] ) );
    }
    if ( !empty(  $_POST['user-profile-picture']) ) {
        update_user_meta( $current_user->ID, 'user-profile-picture', esc_attr( $_POST['user-profile-picture'] ) );
    }
    /* Let plugins hook in, like ACF who is handling the profile picture all by itself. Got to love the Elliot */
    do_action('edit_user_profile_update', $current_user->ID);
    /* We got here, assuming everything went OK */
    wp_redirect( get_permalink() . '?updated=true' );
	exit;
}