<?php
/*
Plugin Name: MG Dynamic Contact Email
Description: Create a field to set the contact email
Version:     1.0
Author:      Mauricio Gelves
Author URI:  https://maugelves.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: mgdce
Domain Path: /languages
*/


function mg_customize_contact_email( $wp_customize ) {

	$wp_customize->add_section( 'mg_dynamic_contact', array(
		'title'       => __( 'Formulario de contacto', 'mgdce' ),
		'description' => __( 'Define la dirección de correo para el envío de formularios de contacto', 'mgdce' ),
		'priority'    => 130
	) );

	$wp_customize->add_setting( 'mg_dynamic_contact_email', array() );

	$wp_customize->add_control( 'mg_dynamic_contact_email_control', array(
		'label' => __( 'Dirección de correo', 'mgdce'),
		'type' => 'text',
		'section' => 'mg_dynamic_contact',
		'settings' => 'mg_dynamic_contact_email'
	) );

}
add_action('customize_register','mg_customize_contact_email');