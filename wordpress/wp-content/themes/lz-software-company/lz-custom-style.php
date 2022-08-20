<?php 

	$lz_software_company_custom_style = '';

	// Logo Size
	$lz_software_company_logo_top_padding = get_theme_mod('lz_software_company_logo_top_padding');
	$lz_software_company_logo_bottom_padding = get_theme_mod('lz_software_company_logo_bottom_padding');
	$lz_software_company_logo_left_padding = get_theme_mod('lz_software_company_logo_left_padding');
	$lz_software_company_logo_right_padding = get_theme_mod('lz_software_company_logo_right_padding');

	if( $lz_software_company_logo_top_padding != '' || $lz_software_company_logo_bottom_padding != '' || $lz_software_company_logo_left_padding != '' || $lz_software_company_logo_right_padding != ''){
		$lz_software_company_custom_style .=' .logo {';
			$lz_software_company_custom_style .=' padding-top: '.esc_attr($lz_software_company_logo_top_padding).'px; padding-bottom: '.esc_attr($lz_software_company_logo_bottom_padding).'px; padding-left: '.esc_attr($lz_software_company_logo_left_padding).'px; padding-right: '.esc_attr($lz_software_company_logo_right_padding).'px;';
		$lz_software_company_custom_style .=' }';
	}

	// service section padding
	$lz_software_company_service_section_padding = get_theme_mod('lz_software_company_service_section_padding');

	if( $lz_software_company_service_section_padding != ''){
		$lz_software_company_custom_style .=' #our_service {';
			$lz_software_company_custom_style .=' padding-top: '.esc_attr($lz_software_company_service_section_padding).'px; padding-bottom: '.esc_attr($lz_software_company_service_section_padding).'px;';
		$lz_software_company_custom_style .=' }';
	}

	// Site Title Font Size
	$lz_software_company_site_title_font_size = get_theme_mod('lz_software_company_site_title_font_size');
	if( $lz_software_company_site_title_font_size != ''){
		$lz_software_company_custom_style .=' .logo h1{';
			$lz_software_company_custom_style .=' font-size: '.esc_attr($lz_software_company_site_title_font_size).'px;';
		$lz_software_company_custom_style .=' }';
	}

	// Site Tagline Font Size
	$lz_software_company_site_tagline_font_size = get_theme_mod('lz_software_company_site_tagline_font_size');
	if( $lz_software_company_site_tagline_font_size != ''){
		$lz_software_company_custom_style .=' .logo p.site-description {';
			$lz_software_company_custom_style .=' font-size: '.esc_attr($lz_software_company_site_tagline_font_size).'px;';
		$lz_software_company_custom_style .=' }';
	}