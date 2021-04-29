// Block non-administrators from accessing the WordPress back-end
function wpabsolute_block_users_backend() {
	if ( is_admin() && ! current_user_can( 'administrator' ) && ! wp_doing_ajax() ) {
		wp_redirect( home_url() );
		exit;
	}
}
add_action( 'init', 'wpabsolute_block_users_backend' );
