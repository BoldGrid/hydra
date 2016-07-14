<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	// Text Domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-hydra';

	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;

	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;

	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = '1';

	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Give page_home.php a fluid container.
	$boldgrid_framework_configs['template']['pages']['page_home.php']['container_class'] = 'container-fluid';

	// Give the default page a regular container.
	$boldgrid_framework_configs['template']['pages']['default']['container_class'] = 'container-fluid';

	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'12' => array( '[menu]secondary' ),
		'5' => array( '[widget]boldgrid-widget-2' ),
		'8' => array( '[action]boldgrid_primary_navigation' ),
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[menu]social' ),
		'13' => array( '[menu]tertiary' ),
	);

	// Set the Call To Action Widget to be on Home Page Only.
	$boldgrid_framework_configs['template']['call-to-action'] = 'home-only';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array(
			'default' => true,
			'format' => 'palette-primary',
			'colors' => array(
				'#ffffff',
				'#1bbc9b',
				'#3e3e3e',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#89c4f4',
				'#446cb3',
				'#3e3e3e',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#555555',
				'#f7ca18',
				'#ffffff',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#fde3a7',
				'#f27935',
				'#555555',
			),
		),
		array(
			'format' => 'palette-primary',
			'colors' => array(
				'#c0392b',
				'#f4b350',
				'#ffffff',
			),
		),
	);

	// Override Options per Subcategory.
	switch (  $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Home Repair':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;

		// Default Behavior.
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 160;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.mod-alpha h2'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 2.6,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.p-button-primary a, .p-button-secondary a, .call-to-action a.button-primary, .form-submit a, .ninja-forms-all-fields-wrap input.btn'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.25,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'large';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Header';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Upper Right';

	// Enable Sticky Nav in Header.
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

	// Widget 1.
	$boldgrid_framework_configs['widget']['widget_instances']['boldgrid-widget-1'][] = array(
		'title' => 'Call To Action',
		'text' => $widget_markup['call-to-action'],
		'type' => 'visual',
		'filter' => 1,
		'label' => 'black-studio-tinymce',
	);

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Below Primary Navigation';

	// Configs above will override framework defaults.
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
