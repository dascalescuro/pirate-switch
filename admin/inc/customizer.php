<?php
require_once( plugin_dir_path( __FILE__ ) . 'customizer-repeater/inc/customizer.php' );

function pirate_switch_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'panel_pirate_switch', array(
		'title'    => esc_html__( 'Pirate Switch', 'pirate-switch' ),
		'priority' => 1
	) );

	/* Buy now button */
	/* Layouts/Demos */
	$wp_customize->add_section( 'pirate_switch_buy_button_section', array(
		'title'    => esc_html__( 'Buy button', 'pirate-switch' ),
		'panel'    => 'panel_pirate_switch',
		'priority' => 0
	) );

	$wp_customize->add_setting( 'pirate_switch_buy_button_title', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_buy_button_title', array(
		'label'    => esc_html__( 'Label', 'pirate-switch' ),
		'section'  => 'pirate_switch_buy_button_section',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'pirate_switch_buy_button_link', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_buy_button_link', array(
		'label'    => esc_html__( 'Link', 'pirate-switch' ),
		'section'  => 'pirate_switch_buy_button_section',
		'priority' => 2
	) );

	$wp_customize->add_setting( 'pirate_switch_buy_button_new_tab', array(
		'sanitize_callback' => '',
		'default'           => 1
	) );

	$wp_customize->add_control( 'pirate_switch_buy_button_new_tab', array(
		'type'     => 'checkbox',
		'label'    => esc_html__( 'Open link in a new tab?', 'pirate-switch' ),
		'section'  => 'pirate_switch_buy_button_section',
		'priority' => 3
	) );

	/* Layouts/Demos */
	$wp_customize->add_section( 'pirate_switch_layouts_demos_section', array(
		'title'    => esc_html__( 'Layouts', 'pirate-switch' ),
		'panel'    => 'panel_pirate_switch',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'pirate_switch_layouts_demos_title', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_layouts_demos_title', array(
		'label'    => esc_html__( 'Title', 'pirate-switch' ),
		'section'  => 'pirate_switch_layouts_demos_section',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'pirate_switch_layouts_demos_text', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_layouts_demos_text', array(
		'label'    => esc_html__( 'Text', 'pirate-switch' ),
		'section'  => 'pirate_switch_layouts_demos_section',
		'priority' => 2
	) );

	$wp_customize->add_setting( 'pirate_switch_layouts_demos_new_tab', array(
		'sanitize_callback' => '',
		'default'           => 1
	) );

	$wp_customize->add_control( 'pirate_switch_layouts_demos_new_tab', array(
		'type'     => 'checkbox',
		'label'    => esc_html__( 'Open links in a new tab?', 'pirate-switch' ),
		'section'  => 'pirate_switch_layouts_demos_section',
		'priority' => 3
	) );

	$wp_customize->add_setting( 'pirate_switch_layouts_demos_box', array(
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( new Pirate_Switch_General_Repeater( $wp_customize, 'pirate_switch_layouts_demos_box', array(
		'label'                      => esc_html__( 'Add new layout/demo', 'pirate-switch' ),
		'section'                    => 'pirate_switch_layouts_demos_section',
		'pirate_switch_link_control' => true,
		'pirate_switch_text_control' => true,
		'priority'                   => 4
	) ) );

	/* Styles */
	$wp_customize->add_section( 'pirate_switch_styles_section', array(
		'title'    => esc_html__( 'Styles', 'pirate-switch' ),
		'panel'    => 'panel_pirate_switch',
		'priority' => 2
	) );

	$wp_customize->add_setting( 'pirate_switch_styles_title', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_styles_title', array(
		'label'    => esc_html__( 'Title', 'pirate-switch' ),
		'section'  => 'pirate_switch_styles_section',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'pirate_switch_styles_text', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_styles_text', array(
		'label'    => esc_html__( 'Text', 'pirate-switch' ),
		'section'  => 'pirate_switch_styles_section',
		'priority' => 2
	) );

	$wp_customize->add_setting( 'pirate_switch_styles_new_tab', array(
		'sanitize_callback' => '',
		'default'           => 1
	) );

	$wp_customize->add_control( 'pirate_switch_styles_new_tab', array(
		'type'     => 'checkbox',
		'label'    => esc_html__( 'Open links in a new tab?', 'pirate-switch' ),
		'section'  => 'pirate_switch_styles_section',
		'priority' => 3
	) );

	$wp_customize->add_setting( 'pirate_switch_styles_box', array(
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( new Pirate_Switch_General_Repeater( $wp_customize, 'pirate_switch_styles_box', array(
		'label'                      => esc_html__( 'Add new style', 'pirate-switch' ),
		'section'                    => 'pirate_switch_styles_section',
		'pirate_switch_text_control' => true,
		'pirate_switch_link_control' => true,
		'priority'                   => 4
	) ) );

	/* Colors */
	$wp_customize->add_section( 'pirate_switch_colors_section', array(
		'title'    => esc_html__( 'Colors', 'pirate-switch' ),
		'panel'    => 'panel_pirate_switch',
		'priority' => 3
	) );

	$wp_customize->add_setting( 'pirate_switch_colors_title', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_colors_title', array(
		'label'    => esc_html__( 'Title', 'pirate-switch' ),
		'section'  => 'pirate_switch_colors_section',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'pirate_switch_colors_text', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_colors_text', array(
		'label'    => esc_html__( 'Text', 'pirate-switch' ),
		'section'  => 'pirate_switch_colors_section',
		'priority' => 2
	) );

	$wp_customize->add_control( 'pirate_switch_colors_elements_background', array(
		'label'       => esc_html__( 'Change the background-color property for this list of elements.', 'pirate-switch' ),
		'description' => esc_html__( 'Separated by a comma.' ),
		'section'     => 'pirate_switch_colors_section',
		'priority'    => 4
	) );

	$wp_customize->add_setting( 'pirate_switch_colors_box', array(
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( new Pirate_Switch_General_Repeater( $wp_customize, 'pirate_switch_colors_box', array(
		'label'                       => esc_html__( 'Add new color', 'pirate-switch' ),
		'section'                     => 'pirate_switch_colors_section',
		'pirate_switch_color_control' => true,
		'pirate_switch_text_control'  => true,
		'priority'                    => 5
	) ) );

	/* Child Themes */
	$wp_customize->add_section( 'pirate_switch_child_themes_section', array(
		'title'    => esc_html__( 'Child themes', 'pirate-switch' ),
		'panel'    => 'panel_pirate_switch',
		'priority' => 4
	) );

	$wp_customize->add_setting( 'pirate_switch_child_themes_title', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_child_themes_title', array(
		'label'    => esc_html__( 'Title', 'pirate-switch' ),
		'section'  => 'pirate_switch_child_themes_section',
		'priority' => 1
	) );

	$wp_customize->add_setting( 'pirate_switch_child_themes_text', array(
		'default'           => '',
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( 'pirate_switch_child_themes_text', array(
		'label'    => esc_html__( 'Text', 'pirate-switch' ),
		'section'  => 'pirate_switch_child_themes_section',
		'priority' => 2
	) );

	$wp_customize->add_setting( 'pirate_switch_child_themes_new_tab', array(
		'sanitize_callback' => '',
		'default'           => 1
	) );

	$wp_customize->add_control( 'pirate_switch_child_themes_new_tab', array(
		'type'     => 'checkbox',
		'label'    => esc_html__( 'Open links in a new tab?', 'pirate-switch' ),
		'section'  => 'pirate_switch_child_themes_section',
		'priority' => 3
	) );

	$wp_customize->add_setting( 'pirate_switch_child_themes_box', array(
		'sanitize_callback' => ''
	) );

	$wp_customize->add_control( new Pirate_Switch_General_Repeater( $wp_customize, 'pirate_switch_child_themes_box', array(
		'label'                       => esc_html__( 'Add new child theme', 'pirate-switch' ),
		'section'                     => 'pirate_switch_child_themes_section',
		'pirate_switch_link_control'  => true,
		'pirate_switch_image_control' => true,
		'priority'                    => 4
	) ) );

}

add_action( 'customize_register', 'pirate_switch_customize_register', 999 );

?>