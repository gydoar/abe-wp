<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'Página de inicio', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __('Banner 1','options_framework_theme'),
		'desc' => __('Tamaño del banner 1500px x 520px'),
		'id'   => 'banner1',
		'type' => 'upload');

	$options[] = array(
		'name' => __('Banner 2','options_framework_theme'),
		'desc' => __('Tamaño del banner 1500px x 520px'),
		'id'   => 'banner2',
		'type' => 'upload');

	$options[] = array(
		'name' => __('ATENCION CON CALIDAD','options_framework_theme'),
		'desc' => __('Texto de ATENCION CON CALIDAD'),
		'id'   => 'atencion_calidad',
		'std'  => 'Es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido.',
		'type' => 'text');

	$options[] = array(
		'name' => __('CUIDADO INTEGRAL EN CASA','options_framework_theme'),
		'desc' => __('Texto de CUIDADO INTEGRAL EN CASA'),
		'id'   => 'cuidado_integral',
		'std'  => 'Es simplemente el texto de relleno de las imprentas y archivos de texto.',
		'type' => 'text');

	$options[] = array(
		'name' => __('SERVICIODE TRANSPORTE','options_framework_theme'),
		'desc' => __('Texto de SERVICIO DE TRANSPORTE'),
		'id'   => 'servicio_transporte',
		'std'  => 'Es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto.',
		'type' => 'text');

	$options[] = array(
		'name' => __('POLITICAS DE CALIDAD 1','options_framework_theme'),
		'desc' => __('Texto de POLITICAS DE CALIDAD lado izquierdo'),
		'id'   => 'politicas_1',
		'std'  => 'Prestar atención con CALIDAD Y PUNTUALIDAD mediante la actividad y decidida participación de todo el personal, satisfaciendo las necesidades y expectativas de todos los usuarios',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('POLITICAS DE CALIDAD 2','options_framework_theme'),
		'desc' => __('Texto de POLITICAS DE CALIDAD lado derecho'),
		'id'   => 'politicas_2',
		'std'  => 'con un alto sentido de humanización, asegurándoles la mejora continua en los procesos para el logro de los objetivos.',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('HISTORIA','options_framework_theme'),
		'desc' => __('Texto de HISTORIA'),
		'id'   => 'historia',
		'std'  => 'Desde hace 5 años ABE ASISTENCIA BÁSICA EN ENFERMERÍA DOMICILIARIA presta sus servicios de manera no formal en la ciudad de Bogotá, gracias a la gran acogida de nuestros clientes la compañía toma un giro para establecerse como pionera en los municipios de Funza, Mosquera, Madrid, Facatativá, Cota y Chía. Buscando expandirse en la sabana Occidental. Desde el 2014, decide constituirse como una empresa debidamente legalizada, ampliando así un poco más su portafolio, brindando así un servicio integral entre sus clientes y nuestra Entidad.',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('MISION','options_framework_theme'),
		'desc' => __('Texto de MISION'),
		'id'   => 'mision',
		'std'  => 'Prestar Servicios de Salud de manera integral a domicilio en donde demos calidad y Confiabilidad a nuestros usuarios de los municipios de Funza, Mosquera, Madrid, Facatativá, Cota y Chía, entregando un servicio oportuno y Saludable para cualquier situación pre-hospitalaria, evitando desplazamientos a sus EPS.',
		'type' => 'textarea');

	$options[] = array(
		'name' => __('VISION','options_framework_theme'),
		'desc' => __('Texto de VISION'),
		'id'   => 'vision',
		'std'  => 'Para el 2019 ABE será una Entidad reconocida en la Atención Integral domiciliaria en la sabana occidental, dando facilidades a los usurarios y a sus IPS para el acceso a los diferentes servicios prestados por nuestra Entidad, mostrándose con grandes estándares de calidad, cobertura, servicio y excelencia, sobrepasando las expectativas de nuestros usuarios y las Entidades Aliadas.',
		'type' => 'textarea');

	/********** Footer ***********/
	$options[] = array(
		'name' => __( 'Pie de Página', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __('Dirección','options_framework_theme'),
		'desc' => __('Agrege la dirección de su empresa'),
		'id'   => 'direccion',
		'std'  => 'Kra 20 Bis # 9C - 34 Funza - Cundinamarca',
		'type' => 'text');

	$options[] = array(
		'name' => __('Teléfonos','options_framework_theme'),
		'desc' => __('Agrege los teléfonos de su empresa'),
		'id'   => 'telefono',
		'std'  => '3194590541 - 3105844411 - 3194282897',
		'type' => 'text');

	$options[] = array(
		'name' => __('Atencion al usuario','options_framework_theme'),
		'desc' => __('Agrege el teéfono principal de su empresa'),
		'id'   => 'atencion',
		'std'  => 'Atención al Usuario: 1 8234443',
		'type' => 'text');


	$options[] = array(
		'name' => __('Facebook','options_framework_theme'),
		'desc' => __('Agrege el link de su fanpage de Facebook'),
		'id'   => 'link_facebook',
		'std'  => 'https://www.facebook.com/ABEdomiciliaria',
		'type' => 'text');

	$options[] = array(
		'name' => __('Twitter','options_framework_theme'),
		'desc' => __('Agrege el link de su usurio twitter'),
		'id'   => 'link_twitter',
		'std'  => 'https://twitter.com/ABEdomiciliaria',
		'type' => 'text');

	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	

	return $options;
}