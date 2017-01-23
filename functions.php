function theme_register_menus() {
    register_nav_menus(
        array(
	    'primary-menu' => __( 'Primary Menu', 'text-domain' ),
	    'secondary-menu' => __( 'Secondary Menu', 'text-domain' ),
	     
	)
    );
}

//
add_action( 'init', 'theme_register_menus' );


