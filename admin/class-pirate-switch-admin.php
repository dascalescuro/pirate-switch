<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       -
 * @since      1.0.0
 *
 * @package    pirate-switch
 * @subpackage pirate-switch/admin
 */

require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/inc/customizer.php';

class Pirate_Switch_Admin {

	
	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pirate_Switch_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pirate_Switch_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pirate_Switch_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pirate_Switch_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
	}
	
	/**
	 * Add image sizes
	 *
	 * @since    1.0.0
	 */
	public function pirate_switch_image_sizes() {
		add_image_size( 'pirate_switch_layout', 128, 100, true );
	}
	
	public function pirate_switch_media_uploader_custom_sizes( $sizes ) {
		return array_merge( $sizes, array(
			'pirate_switch_layout' => esc_html__('Pirate Switch Layout Size','pirate-switch'),	
		) );
	}
	
}