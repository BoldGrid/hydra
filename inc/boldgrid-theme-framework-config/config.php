<?php 
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-hydra'; // Text domain
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array (
		array (
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#ffffff',
				'#1bbc9b',
				'#3e3e3e',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#89c4f4',
				'#446cb3',
				'#3e3e3e',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#555555',
				'#f7ca18',
				'#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#fde3a7',
				'#f27935',
				'#555555',
			)
		),
		array (
			'format' => 'palette-primary',
			'colors' => array(
				'#c0392b',
				'#f4b350',
				'#ffffff',
			)
		)
	);

	// Get Subcategory ID from the Database
	$boldgrid_install_options = get_option( 'boldgrid_install_options', array() );
	$subcategory_id = null;
	if ( !empty( $boldgrid_install_options['subcategory_id'] ) ) {
		$subcategory_id = $boldgrid_install_options['subcategory_id'];
	}

	// Override Options per Subcategory
	switch ( $subcategory_id ) {
		case 14: //<-- Fashion
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 17: //<-- Home Repair
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;

		// Default Behavior
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Fonts & Icons 
	$boldgrid_framework_configs['font']['types'] = array ( 'Oswald:300,400,700|Open+Sans' );
	$boldgrid_framework_configs['font']['translators'] = array ( 'on' );
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Below Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Upper Right";

	// Enable Sticky Nav in Header
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-nav'] = true;

	/**
	 * Widgets
	 */
	$widget_markup['call-to-action'] = <<<HTML
		<div class="row call-to-action-wrapper">
			<div class="col-md-12">
				<div class="call-to-action">
					<a class="button-primary" href="about-us">LEARN MORE</a>
				</div>
			</div>
		</div>
HTML;
	
	// Widget 1
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array (
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce'
	);

	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Primary Navigation';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Site Title';
	
	// Configs above will override framework defaults
	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_size']['default'] = 48;

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
