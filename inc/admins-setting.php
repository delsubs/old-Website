<?php 

//======================
	//Admin menu 
//======================


function doyok_add_admin_page() {
	add_menu_page( 'Theme Options', 'Nyaa Setting', 'manage_options', 'doyok_admin', 'doyok_theme_create_page',  get_template_directory_uri() . '/static/favicon.png', 120 );
	//add Submenu page
	add_submenu_page( 'doyok_admin', 'Theme Options', 'Setting', 'manage_options', 'doyok_admin', 'doyok_theme_create_page' );

}

add_action( 'admin_menu', 'doyok_add_admin_page' );

//Activate custom settings
add_action( 'admin_init', 'doyok_custom_settings' );

function doyok_custom_settings() {

//CPT =custom Post type
	register_setting( 'doyok-post-type', 'custom_batch' );
	register_setting( 'doyok-post-type', 'custom_ost' );
	register_setting( 'doyok-post-type', 'custom_background' );
	
	add_settings_section( 'kampret-theme-options', 'Theme Options', 'kampret_theme_options', 'doyok_postype' );
	
	
	add_settings_section( 'kampret-theme-options', 'Theme Options', 'doyok_metabox_options', 'doyok_metabox' );


	register_setting( 'doyok-metabox-act', 'metabox_mp4' );
	
	add_settings_field( 'streaming-sub', 'Metabox MP4 360p-480p-MP4HD-FullHD', 'doyok_metabox_mp4', 'doyok_metabox', 'kodok-theme-options' );

	//setting page
	 // MAIN
        // MISC
        register_setting( 'cebong-config', 'config_infoweb' );
        register_setting( 'cebong-config', 'config_aboutweb' );
    // DOWNLOAD
        // mp4 link
        register_setting( 'cebong-config', 'config_mp4_name1' );
        register_setting( 'cebong-config', 'config_mp4_name2' );
        register_setting( 'cebong-config', 'config_mp4_name3' );
        register_setting( 'cebong-config', 'config_mp4_name4' );
    
}

//
function doyok_admin_meta() {
	echo 'Ubah Pengaturan Kato Theme dan lainya disini';
}

//create page/sbpage
function doyok_theme_create_page() {
	require_once( get_template_directory() . '/inc/templates/doyok.php' );
}

