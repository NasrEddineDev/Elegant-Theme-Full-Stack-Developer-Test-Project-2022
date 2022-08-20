<?php
/**
 * Advance IT Company Theme Customizer
 *
 * @package advance-it-company
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function advance_it_company_customize_register($wp_customize) {
	//add home page setting pannel
	$wp_customize->add_panel('advance_it_company_panel_id', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
		'title'          => __('Theme Settings', 'advance-it-company'),
	));	

	// font array
	$advance_it_company_font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );

	$wp_customize->add_section( 'advance_it_company_typography', array(
    	'title'      => __( 'Typography', 'advance-it-company' ),
		'priority'   => 30,
		'panel' => 'advance_it_company_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'advance_it_company_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_paragraph_color', array(
		'label' => __('Paragraph Color', 'advance-it-company'),
		'section' => 'advance_it_company_typography',
		'settings' => 'advance_it_company_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('advance_it_company_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_it_company_sanitize_choices',
	));
	$wp_customize->add_control(
	    'advance_it_company_paragraph_font_family', array(
	    'section'  => 'advance_it_company_typography',
	    'label'    => __( 'Paragraph Fonts','advance-it-company'),
	    'type'     => 'select',
	    'choices'  => $advance_it_company_font_array,
	));

	$wp_customize->add_setting('advance_it_company_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','advance-it-company'),
		'section'	=> 'advance_it_company_typography',
		'setting'	=> 'advance_it_company_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'advance_it_company_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_atag_color', array(
		'label' => __('"a" Tag Color', 'advance-it-company'),
		'section' => 'advance_it_company_typography',
		'settings' => 'advance_it_company_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('advance_it_company_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_it_company_atag_font_family', array(
	    'section'  => 'advance_it_company_typography',
	    'label'    => __( '"a" Tag Fonts','advance-it-company'),
	    'type'     => 'select',
	    'choices'  => $advance_it_company_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'advance_it_company_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_li_color', array(
		'label' => __('"li" Tag Color', 'advance-it-company'),
		'section' => 'advance_it_company_typography',
		'settings' => 'advance_it_company_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('advance_it_company_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_it_company_li_font_family', array(
	    'section'  => 'advance_it_company_typography',
	    'label'    => __( '"li" Tag Fonts','advance-it-company'),
	    'type'     => 'select',
	    'choices'  => $advance_it_company_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'advance_it_company_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_h1_color', array(
		'label' => __('H1 Color', 'advance-it-company'),
		'section' => 'advance_it_company_typography',
		'settings' => 'advance_it_company_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('advance_it_company_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_it_company_h1_font_family', array(
	    'section'  => 'advance_it_company_typography',
	    'label'    => __( 'H1 Fonts','advance-it-company'),
	    'type'     => 'select',
	    'choices'  => $advance_it_company_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('advance_it_company_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_h1_font_size',array(
		'label'	=> __('h1 Font Size','advance-it-company'),
		'section'	=> 'advance_it_company_typography',
		'setting'	=> 'advance_it_company_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'advance_it_company_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_h2_color', array(
		'label' => __('h2 Color', 'advance-it-company'),
		'section' => 'advance_it_company_typography',
		'settings' => 'advance_it_company_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('advance_it_company_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_it_company_h2_font_family', array(
	    'section'  => 'advance_it_company_typography',
	    'label'    => __( 'h2 Fonts','advance-it-company'),
	    'type'     => 'select',
	    'choices'  => $advance_it_company_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('advance_it_company_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_h2_font_size',array(
		'label'	=> __('h2 Font Size','advance-it-company'),
		'section'	=> 'advance_it_company_typography',
		'setting'	=> 'advance_it_company_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'advance_it_company_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_h3_color', array(
		'label' => __('h3 Color', 'advance-it-company'),
		'section' => 'advance_it_company_typography',
		'settings' => 'advance_it_company_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('advance_it_company_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_it_company_h3_font_family', array(
	    'section'  => 'advance_it_company_typography',
	    'label'    => __( 'h3 Fonts','advance-it-company'),
	    'type'     => 'select',
	    'choices'  => $advance_it_company_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('advance_it_company_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_h3_font_size',array(
		'label'	=> __('h3 Font Size','advance-it-company'),
		'section'	=> 'advance_it_company_typography',
		'setting'	=> 'advance_it_company_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'advance_it_company_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_h4_color', array(
		'label' => __('h4 Color', 'advance-it-company'),
		'section' => 'advance_it_company_typography',
		'settings' => 'advance_it_company_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('advance_it_company_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_it_company_h4_font_family', array(
	    'section'  => 'advance_it_company_typography',
	    'label'    => __( 'h4 Fonts','advance-it-company'),
	    'type'     => 'select',
	    'choices'  => $advance_it_company_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('advance_it_company_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_h4_font_size',array(
		'label'	=> __('h4 Font Size','advance-it-company'),
		'section'	=> 'advance_it_company_typography',
		'setting'	=> 'advance_it_company_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'advance_it_company_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_h5_color', array(
		'label' => __('h5 Color', 'advance-it-company'),
		'section' => 'advance_it_company_typography',
		'settings' => 'advance_it_company_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('advance_it_company_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_it_company_h5_font_family', array(
	    'section'  => 'advance_it_company_typography',
	    'label'    => __( 'h5 Fonts','advance-it-company'),
	    'type'     => 'select',
	    'choices'  => $advance_it_company_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('advance_it_company_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_h5_font_size',array(
		'label'	=> __('h5 Font Size','advance-it-company'),
		'section'	=> 'advance_it_company_typography',
		'setting'	=> 'advance_it_company_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'advance_it_company_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_h6_color', array(
		'label' => __('h6 Color', 'advance-it-company'),
		'section' => 'advance_it_company_typography',
		'settings' => 'advance_it_company_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('advance_it_company_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control(
	    'advance_it_company_h6_font_family', array(
	    'section'  => 'advance_it_company_typography',
	    'label'    => __( 'h6 Fonts','advance-it-company'),
	    'type'     => 'select',
	    'choices'  => $advance_it_company_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('advance_it_company_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_h6_font_size',array(
		'label'	=> __('h6 Font Size','advance-it-company'),
		'section'	=> 'advance_it_company_typography',
		'setting'	=> 'advance_it_company_h6_font_size',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_background_skin_mode',array(
        'default' => 'Transpert Background',
        'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control('advance_it_company_background_skin_mode',array(
        'type' => 'select',
        'label' => 'Background Type',
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','advance-it-company'),
            'Transpert Background' => __('Transparent Background','advance-it-company'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('advance_it_company_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','advance-it-company'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('advance_it_company_show_wooproducts_border',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','advance-it-company'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'advance_it_company_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'advance_it_company_sanitize_choices',
	) );
	$wp_customize->add_control( 'advance_it_company_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'advance-it-company' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	)  );

	$wp_customize->add_setting('advance_it_company_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));	
	$wp_customize->add_control('advance_it_company_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','advance-it-company'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_it_company_top_bottom_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control( 'advance_it_company_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','advance-it-company' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_it_company_left_right_wooproducts_padding',array(
		'default' => 0,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control( 'advance_it_company_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','advance-it-company' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'advance_it_company_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_it_company_sanitize_number_range',
	));
	$wp_customize->add_control('advance_it_company_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','advance-it-company' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'advance_it_company_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_it_company_sanitize_number_range',
	));
	$wp_customize->add_control('advance_it_company_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','advance-it-company' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting('advance_it_company_products_navigation',array(
       'default' => 'Yes',
       'sanitize_callback'	=> 'advance_it_company_sanitize_choices'
    ));
    $wp_customize->add_control('advance_it_company_products_navigation',array(
       'type' => 'radio',
       'label' => __('Woocommerce Products Navigation','advance-it-company'),
       'choices' => array(
            'Yes' => __('Yes','advance-it-company'),
            'No' => __('No','advance-it-company'),
        ),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_section('advance_it_company_product_button_section', array(
		'title'    => __('Product Button Settings', 'advance-it-company'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'advance_it_company_top_bottom_product_button_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','advance-it-company' ),
		'section' => 'advance_it_company_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'advance_it_company_left_right_product_button_padding',array(
		'default' => 16,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','advance-it-company' ),
		'section' => 'advance_it_company_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'advance_it_company_product_button_border_radius',array(
		'default' => 3,
		'sanitize_callback'    => 'advance_it_company_sanitize_number_range',
	));
	$wp_customize->add_control('advance_it_company_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','advance-it-company' ),
		'section' => 'advance_it_company_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_section('advance_it_company_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'advance-it-company'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('advance_it_company_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control('advance_it_company_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','advance-it-company'),
        'section' => 'advance_it_company_product_sale_section',
        'choices' => array(
            'Right' => __('Right','advance-it-company'),
            'Left' => __('Left','advance-it-company'),
        ),
	) );

	$wp_customize->add_setting( 'advance_it_company_border_radius_product_sale',array(
		'default' => 50,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','advance-it-company'),
        'section'  => 'advance_it_company_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('advance_it_company_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float'
	));
	$wp_customize->add_control('advance_it_company_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','advance-it-company'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_it_company_product_sale_section',
		'type'=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'advance_it_company_theme_color_option', array( 
		'panel' => 'advance_it_company_panel_id', 'title' => esc_html__( 
		'Theme Color Option', 'advance-it-company' ) )
	);

  	$wp_customize->add_setting( 'advance_it_company_theme_color_first', array(
	    'default' => '#abda37',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_theme_color_first', array(
  		'label' => 'First Color Option',
  		'description' => __('One can change complete theme color on just one click.', 'advance-it-company'),
	    'section' => 'advance_it_company_theme_color_option',
	    'settings' => 'advance_it_company_theme_color_first',
  	)));

  	$wp_customize->add_setting( 'advance_it_company_theme_color_second', array(
	    'default' => '#179cd7',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_theme_color_second', array(
  		'label' => 'Second Color Option',
  		'description' => __('One can change complete theme color on just one click.', 'advance-it-company'),
	    'section' => 'advance_it_company_theme_color_option',
  	)));

	//Layouts
	$wp_customize->add_section('advance_it_company_left_right', array(
		'title'    => __('Layout Settings', 'advance-it-company'),
		'priority' => null,
		'panel'    => 'advance_it_company_panel_id',
	));

	$wp_customize->add_setting('advance_it_company_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','advance-it-company'),
       'section' => 'advance_it_company_left_right'
    ));

    $wp_customize->add_setting( 'advance_it_company_loader_background_color_settings', array(
	    'default' => '#222',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'advance_it_company_loader_background_color_settings', array(
  		'label' => __('Preloader Background Color', 'advance-it-company'),
	    'section' => 'advance_it_company_left_right',
	    'settings' => 'advance_it_company_loader_background_color_settings',
  	)));

    $wp_customize->add_setting( 'advance_it_company_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_it_company_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','advance-it-company'),
		'section' => 'advance_it_company_left_right'
    ));

	$wp_customize->add_setting( 'advance_it_company_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_it_company_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','advance-it-company'),
		'section' => 'advance_it_company_left_right'
    ));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('advance_it_company_layout_options', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'advance_it_company_sanitize_choices',
	));
	$wp_customize->add_control('advance_it_company_layout_options',array(
		'type'           => 'radio',
		'label'          => __('Change Layouts', 'advance-it-company'),
		'section'        => 'advance_it_company_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-it-company'),
			'Right Sidebar' => __('Right Sidebar', 'advance-it-company'),
			'One Column'    => __('One Column', 'advance-it-company'),
			'Grid Layout'   => __('Grid Layout', 'advance-it-company')
		),
	));

	$wp_customize->add_setting('advance_it_company_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'advance_it_company_sanitize_choices',
	));
	$wp_customize->add_control('advance_it_company_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'advance-it-company'),
		'section'        => 'advance_it_company_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-it-company'),
			'Right Sidebar' => __('Right Sidebar', 'advance-it-company'),
			'One Column'    => __('One Column', 'advance-it-company'),
		),
	));

	$wp_customize->add_setting('advance_it_company_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'advance_it_company_sanitize_choices',
	));
	$wp_customize->add_control('advance_it_company_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'advance-it-company'),
		'section'        => 'advance_it_company_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'advance-it-company'),
			'Right Sidebar' => __('Right Sidebar', 'advance-it-company'),
			'One Column'    => __('One Column', 'advance-it-company'),
		),
	));

	$wp_customize->add_setting('advance_it_company_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control('advance_it_company_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','advance-it-company'),
        'description' => __('Here you can change the Width layout. ','advance-it-company'),
        'section' => 'advance_it_company_left_right',
        'choices' => array(
            'Default' => __('Default','advance-it-company'),
            'Container' => __('Container','advance-it-company'),
            'Box Container' => __('Box Container','advance-it-company'),
        ),
	));

	// Button
	$wp_customize->add_section( 'advance_it_company_theme_button', array(
		'title' => __('Button Option','advance-it-company'),
		'panel' => 'advance_it_company_panel_id',
	));

	$wp_customize->add_setting('advance_it_company_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','advance-it-company'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_it_company_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_it_company_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','advance-it-company'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_it_company_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'advance_it_company_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_it_company_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','advance-it-company' ),
		'section'     => 'advance_it_company_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Top Bar
	$wp_customize->add_section('advance_it_company_topbar',array(
		'title'	=> __('Topbar Section','advance-it-company'),
		'description'	=> __('Add topbar content','advance-it-company'),
		'priority'	=> null,
		'panel' => 'advance_it_company_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'advance_it_company_display_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_it_company_display_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Topbar','advance-it-company' ),
        'section' => 'advance_it_company_topbar'
    ));

    //Sticky Header
	$wp_customize->add_setting( 'advance_it_company_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_it_company_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','advance-it-company' ),
        'section' => 'advance_it_company_topbar'
    ));

    $wp_customize->add_setting( 'advance_it_company_sticky_header_padding_settings', array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_it_company_sticky_header_padding_settings', array(
		'label'       => esc_html__( 'Sticky Header Padding','advance-it-company' ),
		'section'     => 'advance_it_company_topbar',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );
    
	$wp_customize->add_setting('advance_it_company_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_it_company_mail',array(
		'label'	=> __('Add Email Text','advance-it-company'),
		'section'	=> 'advance_it_company_topbar',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('advance_it_company_mail1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email',
	));
	$wp_customize->add_control('advance_it_company_mail1',array(
		'label'	=> __('Mail Address','advance-it-company'),
		'section'	=> 'advance_it_company_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_phone',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_it_company_phone',array(
		'label'	=> __('Add Phone Text','advance-it-company'),
		'section'	=> 'advance_it_company_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_phone1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'advance_it_company_sanitize_phone_number',
	));
	$wp_customize->add_control('advance_it_company_phone1',array(
		'label'	=> __('Phone Number','advance-it-company'),
		'section'	=> 'advance_it_company_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_it_company_address',array(
		'label'	=> __('Add Address Text','advance-it-company'),
		'section'	=> 'advance_it_company_topbar',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_address1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_it_company_address1',array(
		'label'	=> __('Add Address','advance-it-company'),
		'section'	=> 'advance_it_company_topbar',
		'type'	=> 'text'
	));

	// Social Icons
	$wp_customize->add_section('advance_it_company_social_icons',array(
		'title'	=> __('Social Icons','advance-it-company'),
		'description'	=> __('Add topbar content','advance-it-company'),
		'priority'	=> null,
		'panel' => 'advance_it_company_panel_id',
	));

	$wp_customize->add_setting('advance_it_company_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_it_company_facebook_url',array(
		'label'	=> __('Add Facebook link','advance-it-company'),
		'section'	=> 'advance_it_company_social_icons',
		'setting'	=> 'advance_it_company_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_it_company_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_it_company_twitter_url',array(
		'label'	=> __('Add Twitter link','advance-it-company'),
		'section'	=> 'advance_it_company_social_icons',
		'setting'	=> 'advance_it_company_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_it_company_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_it_company_linkedin_url',array(
		'label'	=> __('Add Linkedin link','advance-it-company'),
		'section'	=> 'advance_it_company_social_icons',
		'setting'	=> 'advance_it_company_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_it_company_instagram_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_it_company_instagram_url',array(
		'label'	=> __('Add Instagram link','advance-it-company'),
		'section'	=> 'advance_it_company_social_icons',
		'setting'	=> 'advance_it_company_instagram_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('advance_it_company_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('advance_it_company_youtube_url',array(
		'label'	=> __('Add You Tube link','advance-it-company'),
		'section'	=> 'advance_it_company_social_icons',
		'setting'	=> 'advance_it_company_youtube_url',
		'type'	=> 'url'
	));

	//Slider
	$wp_customize->add_section( 'advance_it_company_slider' , array(
    	'title'      => __( 'Slider Settings', 'advance-it-company' ),
		'priority'   => null,
		'panel' => 'advance_it_company_panel_id'
	) );

	$wp_customize->add_setting('advance_it_company_slider_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','advance-it-company'),
       'section' => 'advance_it_company_slider'
    ));

    $wp_customize->add_setting('advance_it_company_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','advance-it-company'),
       'section' => 'advance_it_company_slider'
    ));

    $wp_customize->add_setting('advance_it_company_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','advance-it-company'),
       'section' => 'advance_it_company_slider'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'advance_it_company_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'advance_it_company_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'advance_it_company_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'advance-it-company' ),
			'description'	=> __('Size of image should be 1500 x 600','advance-it-company'),
			'section'  => 'advance_it_company_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('advance_it_company_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','advance-it-company'),
		'description'    => __('This option will add colors over the slider.','advance-it-company'),
       'section' => 'advance_it_company_slider'
    ));

    $wp_customize->add_setting('advance_it_company_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_it_company_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'advance-it-company'),
		'section'  => 'advance_it_company_slider',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','advance-it-company'),
		'settings' => 'advance_it_company_slider_image_overlay_color',
	)));

	//content layout
    $wp_customize->add_setting('advance_it_company_slider_content_alignment',array(
    'default' => 'Left',
        'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control('advance_it_company_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','advance-it-company'),
        'section' => 'advance_it_company_slider',
        'choices' => array(
            'Center' => __('Center ','advance-it-company'),
            'Left' => __('Left','advance-it-company'),
            'Right' => __('Right','advance-it-company'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'advance_it_company_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_it_company_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','advance-it-company' ),
		'section'     => 'advance_it_company_slider',
		'type'        => 'number',
		'settings'    => 'advance_it_company_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('advance_it_company_slider_image_opacity',array(
      'default'              => 0.5,
      'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control( 'advance_it_company_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','advance-it-company' ),
	'section'     => 'advance_it_company_slider',
	'type'        => 'select',
	'settings'    => 'advance_it_company_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','advance-it-company'),
		'0.1' =>  esc_attr('0.1','advance-it-company'),
		'0.2' =>  esc_attr('0.2','advance-it-company'),
		'0.3' =>  esc_attr('0.3','advance-it-company'),
		'0.4' =>  esc_attr('0.4','advance-it-company'),
		'0.5' =>  esc_attr('0.5','advance-it-company'),
		'0.6' =>  esc_attr('0.6','advance-it-company'),
		'0.7' =>  esc_attr('0.7','advance-it-company'),
		'0.8' =>  esc_attr('0.8','advance-it-company'),
		'0.9' =>  esc_attr('0.9','advance-it-company')
	),
	));

	$wp_customize->add_setting( 'advance_it_company_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'advance_it_company_sanitize_number_range',
	));
	$wp_customize->add_control( 'advance_it_company_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','advance-it-company' ),
		'section' => 'advance_it_company_slider',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('advance_it_company_slider_image_height',array(
		'default'=> __('550','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_slider_image_height',array(
		'label'	=> __('Slider Image Height','advance-it-company'),
		'section'=> 'advance_it_company_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_slider_button',array(
		'default'=> __('READ MORE','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_slider_button',array(
		'label'	=> __('Slider Button','advance-it-company'),
		'section'=> 'advance_it_company_slider',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_top_bottom_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_top_bottom_slider_content_space',array(
		'label'	=> __('Top Bottom Slider Content Space','advance-it-company'),
		'section'=> 'advance_it_company_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_it_company_left_right_slider_content_space',array(
		'default'=> '',
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_left_right_slider_content_space',array(
		'label'	=> __('Left Right Slider Content Space','advance-it-company'),
		'section'=> 'advance_it_company_slider',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'type'=> 'number'
	));

	//How it works Section
	$wp_customize->add_section('advance_it_company_post_category',array(
		'title'	=> __('How it works Section','advance-it-company'),
		'panel' => 'advance_it_company_panel_id',
	));

	$wp_customize->add_setting('advance_it_company_title',array(
	    'default' => '',
	    'sanitize_callback' => 'sanitize_text_field',
   	));
   	$wp_customize->add_control('advance_it_company_title',array(
	    'label' => __('Section Title','advance-it-company'),
	    'section' => 'advance_it_company_post_category',
	    'type'  => 'text'
   	));

   	$arg =  array( 'numberposts' => 0 );
   	$post_list = get_posts( $arg );
	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
	$pst[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('advance_it_company_setting',array(
	  'sanitize_callback' => 'advance_it_company_sanitize_choices',
	));
	$wp_customize->add_control('advance_it_company_setting',array(
	 'type'    => 'select',
	 'choices' => $pst,
	 'label' => __('Select post','advance-it-company'),
	 'section' => 'advance_it_company_post_category',
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('advance_it_company_works_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'advance_it_company_sanitize_choices',
	));	
	$wp_customize->add_control('advance_it_company_works_category',array(
		'type'    => 'select',
		'choices' => $cat_post,		
		'label' => __('Select Category to display post','advance-it-company'),
		'description'	=> __('Size of image should be 370 x 240','advance-it-company'),
		'section' => 'advance_it_company_post_category',
	));

	//404 Page Setting
	$wp_customize->add_section('advance_it_company_404_page_setting',array(
		'title'	=> __('404 Page','advance-it-company'),
		'panel' => 'advance_it_company_panel_id',
	));	

	$wp_customize->add_setting('advance_it_company_title_404_page',array(
		'default'=> __('404 Not Found','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_title_404_page',array(
		'label'	=> __('404 Page Title','advance-it-company'),
		'section'=> 'advance_it_company_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_content_404_page',array(
		'label'	=> __('404 Page Content','advance-it-company'),
		'section'=> 'advance_it_company_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_button_404_page',array(
		'default'=> __('Back to Home Page','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_button_404_page',array(
		'label'	=> __('404 Page Button','advance-it-company'),
		'section'=> 'advance_it_company_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('advance_it_company_responsive_setting',array(
		'title'	=> __('Responsive Settings','advance-it-company'),
		'panel' => 'advance_it_company_panel_id',
	));

    $wp_customize->add_setting('advance_it_company_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','advance-it-company'),
       'section' => 'advance_it_company_responsive_setting'
    ));

    $wp_customize->add_setting('advance_it_company_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','advance-it-company'),
       'section' => 'advance_it_company_responsive_setting'
    ));

    $wp_customize->add_setting('advance_it_company_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','advance-it-company'),
       'section' => 'advance_it_company_responsive_setting'
    ));

    $wp_customize->add_setting('advance_it_company_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','advance-it-company'),
       'section' => 'advance_it_company_responsive_setting'
    ));

    $wp_customize->add_setting('advance_it_company_responsive_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','advance-it-company'),
       'section' => 'advance_it_company_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('advance_it_company_blog_post',array(
		'title'	=> __('Blog Page Settings','advance-it-company'),
		'panel' => 'advance_it_company_panel_id',
	));	

	$wp_customize->add_setting('advance_it_company_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','advance-it-company'),
       'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting('advance_it_company_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','advance-it-company'),
       'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting('advance_it_company_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','advance-it-company'),
       'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting('advance_it_company_time_hide',array(
       'default' => false,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_time_hide',array(
       'type' => 'checkbox',
       'label' => __('Time','advance-it-company'),
       'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting('advance_it_company_show_featured_image_post',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_show_featured_image_post',array(
       'type' => 'checkbox',
       'label' => __('Blog Post Image','advance-it-company'),
       'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting('advance_it_company_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','advance-it-company'),
       'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting('advance_it_company_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','advance-it-company'),
       'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting( 'advance_it_company_featured_img_border_radius', array(
		'default'=> 0,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_it_company_featured_img_border_radius', array(
		'label'       => esc_html__( 'Blog Post Image Border Radius','advance-it-company' ),
		'section'     => 'advance_it_company_blog_post',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 100,
		),
	) );

	$wp_customize->add_setting( 'advance_it_company_featured_img_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_featured_img_box_shadow',array(
		'label' => esc_html__( 'Blog Post Image Shadow','advance-it-company' ),
		'section' => 'advance_it_company_blog_post',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type' => 'number'
	));

    $wp_customize->add_setting('advance_it_company_blog_post_description_option',array(
    	'default'   => 'Excerpt Content',
        'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control('advance_it_company_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','advance-it-company'),
        'section' => 'advance_it_company_blog_post',
        'choices' => array(
            'No Content' => __('No Content','advance-it-company'),
            'Excerpt Content' => __('Excerpt Content','advance-it-company'),
            'Full Content' => __('Full Content','advance-it-company'),
        ),
	) );

    $wp_customize->add_setting( 'advance_it_company_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	) );
	$wp_customize->add_control( 'advance_it_company_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','advance-it-company' ),
		'section'     => 'advance_it_company_blog_post',
		'type'        => 'number',
		'settings'    => 'advance_it_company_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'advance_it_company_post_suffix_option', array(
		'default'   => __('...','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_it_company_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','advance-it-company' ),
		'section'     => 'advance_it_company_blog_post',
		'type'        => 'text',
		'settings'    => 'advance_it_company_post_suffix_option',
	) );

	$wp_customize->add_setting('advance_it_company_button_text',array(
		'default'=> __('READ MORE','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_button_text',array(
		'label'	=> __('Add Button Text','advance-it-company'),
		'section'=> 'advance_it_company_blog_post',
		'type'=> 'text'
	));

    $wp_customize->add_setting( 'advance_it_company_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'advance_it_company_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','advance-it-company' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'advance-it-company' ),
        ),
		'section'     => 'advance_it_company_blog_post',
		'type'        => 'text',
		'settings'    => 'advance_it_company_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('advance_it_company_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control('advance_it_company_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','advance-it-company'),
        'section' => 'advance_it_company_blog_post',
        'choices' => array(
            'In Box' => __('In Box','advance-it-company'),
            'Without Box' => __('Without Box','advance-it-company'),
        ),
	) );

	$wp_customize->add_setting('advance_it_company_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','advance-it-company'),
       'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting('advance_it_company_show_single_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_show_single_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Single Post Pagination','advance-it-company'),
       'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting( 'advance_it_company_show_related_post',array(
		'default' => true,
      	'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ) );
    $wp_customize->add_control('advance_it_company_show_related_post',array(
    	'type' => 'checkbox',
        'label' => __( 'Related Post','advance-it-company' ),
        'section' => 'advance_it_company_blog_post'
    ));

    $wp_customize->add_setting('advance_it_company_related_posts_taxanomies_options',array(
        'default' => 'categories',
        'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control('advance_it_company_related_posts_taxanomies_options',array(
        'type' => 'radio',
        'label' => __('Related Post Taxonomies','advance-it-company'),
        'section' => 'advance_it_company_blog_post',
        'choices' => array(
            'categories' => __('Categories','advance-it-company'),
            'tags' => __('Tags','advance-it-company'),
        ),
	) );

	$wp_customize->add_setting('advance_it_company_related_post_title',array(
		'default'=> __('Related Posts','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_related_post_title',array(
		'label'	=> __('Related Post Title','advance-it-company'),
		'section'=> 'advance_it_company_blog_post',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('advance_it_company_related_posts_number',array(
		'default'=> 3,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_related_posts_number',array(
		'label'	=> __('Related Post Number','advance-it-company'),
		'section'=> 'advance_it_company_blog_post',
		'type'=> 'number',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
	));

	//no Result Found
	$wp_customize->add_section('advance_it_company_noresult_found',array(
		'title'	=> __('No Result Found','advance-it-company'),
		'panel' => 'advance_it_company_panel_id',
	));	

	$wp_customize->add_setting('advance_it_company_nosearch_found_title',array(
		'default'=> __('Nothing Found','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','advance-it-company'),
		'section'=> 'advance_it_company_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','advance-it-company'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('advance_it_company_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','advance-it-company'),
		'section'=> 'advance_it_company_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('advance_it_company_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
    ));
    $wp_customize->add_control('advance_it_company_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','advance-it-company'),
       'section' => 'advance_it_company_noresult_found'
    ));

	//Footer
	$wp_customize->add_section('advance_it_company_footer_section', array(
		'title'       => __('Footer Text', 'advance-it-company'),
		'priority'    => null,
		'panel'       => 'advance_it_company_panel_id',
	));

	$wp_customize->add_setting('advance_it_company_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'advance_it_company_sanitize_choices',
    ));
    $wp_customize->add_control('advance_it_company_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'advance-it-company'),
        'section'     => 'advance_it_company_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'advance-it-company'),
        'choices' => array(
            '1'     => __('One', 'advance-it-company'),
            '2'     => __('Two', 'advance-it-company'),
            '3'     => __('Three', 'advance-it-company'),
            '4'     => __('Four', 'advance-it-company')
        ),
    ));

    $wp_customize->add_setting('advance_it_company_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'advance_it_company_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'advance-it-company'),
		'section'  => 'advance_it_company_footer_section',
	)));

	$wp_customize->add_setting('advance_it_company_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'advance_it_company_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','advance-it-company'),
        'section' => 'advance_it_company_footer_section'
	)));

	$wp_customize->add_setting('advance_it_company_footer_copy', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('advance_it_company_footer_copy', array(
		'label'   => __('Copyright Text', 'advance-it-company'),
		'section' => 'advance_it_company_footer_section',
		'type'    => 'text',
	));

	$wp_customize->add_setting('advance_it_company_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control('advance_it_company_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','advance-it-company'),
        'section' => 'advance_it_company_footer_section',
        'choices' => array(
            'left' => __('Left','advance-it-company'),
            'right' => __('Right','advance-it-company'),
            'center' => __('Center','advance-it-company'),
        ),
	) );

	$wp_customize->add_setting('advance_it_company_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','advance-it-company' ),
		'section'=> 'advance_it_company_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('advance_it_company_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_copyright_padding',array(
		'label'	=> __('Copyright Padding','advance-it-company'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'advance_it_company_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('advance_it_company_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'advance_it_company_sanitize_checkbox'
	));
	$wp_customize->add_control('advance_it_company_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','advance-it-company'),
      	'section' => 'advance_it_company_footer_section',
	));

	$wp_customize->add_setting('advance_it_company_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'advance_it_company_sanitize_choices'
	));
	$wp_customize->add_control('advance_it_company_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','advance-it-company'),
        'section' => 'advance_it_company_footer_section',
        'choices' => array(
            'Left' => __('Left','advance-it-company'),
            'Right' => __('Right','advance-it-company'),
            'Center' => __('Center','advance-it-company'),
        ),
	) );

	$wp_customize->add_setting('advance_it_company_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'advance_it_company_sanitize_float',
	));
	$wp_customize->add_control('advance_it_company_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','advance-it-company'),
		'section'=> 'advance_it_company_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	)	);
}
add_action('customize_register', 'advance_it_company_customize_register');

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Advance_It_Company_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if (is_null($instance)) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action('customize_register', array($this, 'sections'));

		// Register scripts and styles for the conadvance_it_company_Customizetrols.
		add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections($manager) {

		// Load custom sections.
		load_template(trailingslashit(get_template_directory()).'/inc/section-pro.php');

		// Register custom section types.
		$manager->register_section_type('Advance_It_Company_Customize_Section_Pro');

		// Register sections.
		$manager->add_section(
			new Advance_It_Company_Customize_Section_Pro(
				$manager,
				'advance_it_company_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__('IT Company Pro ', 'advance-it-company'),
					'pro_text' => esc_html__('Go Pro', 'advance-it-company'),
					'pro_url'  => esc_url('https://www.themeshopy.com/themes/it-company-wordpress-theme/'),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script('advance-it-company-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/js/customize-controls.js', array('customize-controls'));
		wp_enqueue_style('advance-it-company-customize-controls', trailingslashit(esc_url(get_template_directory_uri())).'/css/customize-controls.css');
	}
}

// Doing this customizer thang!
Advance_It_Company_Customize::get_instance();