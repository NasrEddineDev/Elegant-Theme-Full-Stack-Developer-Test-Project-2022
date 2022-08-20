<?php

	$advance_it_company_theme_color_first = get_theme_mod('advance_it_company_theme_color_first');

	$advance_it_company_custom_css = '';

	$advance_it_company_custom_css .='input[type="submit"], .social-icons i:hover, #slider .inner_carousel .readbtn a:hover, #slider .inner_carousel .readbtn a i, #work_cat h5, .cat-posts:hover, .read-more-btn a:hover, .read-more-btn a i, #footer input[type="submit"], .copyright, #footer .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, #sidebar h3, #sidebar .tagcloud a:hover, #sidebar input[type="submit"],#sidebar input[type="submit"],#comments a.comment-reply-link, #menu-sidebar input[type="submit"], .pagination a:hover, .meta-nav:hover, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button, #footer .woocommerce a.button, #footer .woocommerce button.button{';
		$advance_it_company_custom_css .='background-color: '.esc_attr($advance_it_company_theme_color_first).';';
	$advance_it_company_custom_css .='}';

	$advance_it_company_custom_css .='#comments input[type="submit"].submit, nav.woocommerce-MyAccount-navigation ul li{';
		$advance_it_company_custom_css .='background-color: '.esc_attr($advance_it_company_theme_color_first).'!important;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_custom_css .='h4,h5,h6,  #slider .carousel-control-next-icon i, section h4, #footer h3, #comments a time, .woocommerce-message::before,.metabox i, #footer li a:hover,.primary-navigation ul ul a:focus,  .primary-navigation ul ul a:hover, .metabox a:hover, .mail i,.phone i,.address i,.woocommerce .quantity .qty,.cart_totals h2, #footer table#wp-calendar a{';
		$advance_it_company_custom_css .='color: '.esc_attr($advance_it_company_theme_color_first).';';
	$advance_it_company_custom_css .='}';

	$advance_it_company_custom_css .=' #footer input[type="search"], .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .pagination a:hover, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button,.woocommerce .quantity .qty{';
		$advance_it_company_custom_css .='border-color: '.esc_attr($advance_it_company_theme_color_first).';';
	$advance_it_company_custom_css .='}';

	$advance_it_company_custom_css .='.woocommerce-message ,.primary-navigation ul ul{';
		$advance_it_company_custom_css .='border-top-color: '.esc_attr($advance_it_company_theme_color_first).';';
	$advance_it_company_custom_css .='}';
	
	/*---------------------------Theme color option-------------------*/
	$advance_it_company_theme_color_second = get_theme_mod('advance_it_company_theme_color_second');

	$advance_it_company_custom_css .='.search-box i, #slider .inner_carousel .readbtn a, #slider .inner_carousel .readbtn a:hover i, .read-more-btn a, .read-more-btn a:hover i, .read-moresec a:hover,.tags p a:hover, #sidebar ul li a:hover:before{';
		$advance_it_company_custom_css .='background-color: '.esc_attr($advance_it_company_theme_color_second).';';
	$advance_it_company_custom_css .='}';

	$advance_it_company_custom_css .='.woocommerce .quantity .qty, .read-moresec a{';
		$advance_it_company_custom_css .='border-color: '.esc_attr($advance_it_company_theme_color_second).'!important;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_custom_css .='.woocommerce .quantity .qty, #work_cat h2, .new-text h2 a,.content-ts h1, .content-ts h3,.cart_totals h2, .read-moresec a, .tags i{';
		$advance_it_company_custom_css .='color: '.esc_attr($advance_it_company_theme_color_second).';';
	$advance_it_company_custom_css .='}';

	$advance_it_company_custom_css .=' #sidebar ul li a:hover,#sidebar ul li:active, #sidebar ul li:focus{';
		$advance_it_company_custom_css .='color: '.esc_attr($advance_it_company_theme_color_second).'!important;';
	$advance_it_company_custom_css .='}';
	
	// media
	$advance_it_company_custom_css .='@media screen and (max-width:1000px) {';
	if($advance_it_company_theme_color_second != false || $advance_it_company_theme_color_first != false){
	$advance_it_company_custom_css .='#menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a, #contact-info, .primary-navigation a:focus, #contact-info, #menu-sidebar, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .primary-navigation li a:focus, .primary-navigation li:hover a{
	background-image: linear-gradient(-90deg, '.esc_attr($advance_it_company_theme_color_second).' 0%, '.esc_attr($advance_it_company_theme_color_first).' 120%);
		} ';
	}
	$advance_it_company_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$advance_it_company_theme_lay = get_theme_mod( 'advance_it_company_theme_options','Default');
    if($advance_it_company_theme_lay == 'Default'){
		$advance_it_company_custom_css .='body{';
			$advance_it_company_custom_css .='max-width: 100%;';
		$advance_it_company_custom_css .='}';
		$advance_it_company_custom_css .='.page-template-custom-home-page .middle-header{';
			$advance_it_company_custom_css .='width: 97.3%';
		$advance_it_company_custom_css .='}';
	}else if($advance_it_company_theme_lay == 'Container'){
		$advance_it_company_custom_css .='body{';
			$advance_it_company_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$advance_it_company_custom_css .='}';
		$advance_it_company_custom_css .='.page-template-custom-home-page .middle-header{';
			$advance_it_company_custom_css .='width: 97.7%';
		$advance_it_company_custom_css .='}';
		$advance_it_company_custom_css .='.serach_outer{';
			$advance_it_company_custom_css .='width: 97.7%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$advance_it_company_custom_css .='}';
	}else if($advance_it_company_theme_lay == 'Box Container'){
		$advance_it_company_custom_css .='body{';
			$advance_it_company_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$advance_it_company_custom_css .='}';
		$advance_it_company_custom_css .='.serach_outer{';
			$advance_it_company_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$advance_it_company_custom_css .='}';
	}

	// css
	$advance_it_company_show_header = get_theme_mod( 'advance_it_company_display_topbar', true);
	if($advance_it_company_show_header == false){
		$advance_it_company_custom_css .='.main-menu{';
			$advance_it_company_custom_css .='margin: 10px 0;';
		$advance_it_company_custom_css .='}';
		$advance_it_company_custom_css .='.logo{';
			$advance_it_company_custom_css .='padding: 10px 0;';
		$advance_it_company_custom_css .='}';
	}

	$advance_it_company_show_slider = get_theme_mod( 'advance_it_company_slider_hide', false);
	if($advance_it_company_show_slider == false){
		$advance_it_company_custom_css .='.page-template-custom-front-page #header{';
			$advance_it_company_custom_css .='border-bottom: 1px solid #272b46;';
		$advance_it_company_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/

	$advance_it_company_theme_lay = get_theme_mod( 'advance_it_company_slider_content_alignment','Left');
    if($advance_it_company_theme_lay == 'Left'){
		$advance_it_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_it_company_custom_css .='text-align:left; left:15%; right:45%;';
		$advance_it_company_custom_css .='}';
	}else if($advance_it_company_theme_lay == 'Center'){
		$advance_it_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_it_company_custom_css .='text-align:center !important; left:20%; right:20%;';
		$advance_it_company_custom_css .='}';
	}else if($advance_it_company_theme_lay == 'Right'){
		$advance_it_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$advance_it_company_custom_css .='text-align:right !important; left:45%; right:15%;';
		$advance_it_company_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$advance_it_company_theme_lay = get_theme_mod( 'advance_it_company_slider_image_opacity','0.5');
	if($advance_it_company_theme_lay == '0'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0';
		$advance_it_company_custom_css .='}';
		}else if($advance_it_company_theme_lay == '0.1'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0.1';
		$advance_it_company_custom_css .='}';
		}else if($advance_it_company_theme_lay == '0.2'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0.2';
		$advance_it_company_custom_css .='}';
		}else if($advance_it_company_theme_lay == '0.3'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0.3';
		$advance_it_company_custom_css .='}';
		}else if($advance_it_company_theme_lay == '0.4'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0.4';
		$advance_it_company_custom_css .='}';
		}else if($advance_it_company_theme_lay == '0.5'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0.5';
		$advance_it_company_custom_css .='}';
		}else if($advance_it_company_theme_lay == '0.6'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0.6';
		$advance_it_company_custom_css .='}';
		}else if($advance_it_company_theme_lay == '0.7'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0.7';
		$advance_it_company_custom_css .='}';
		}else if($advance_it_company_theme_lay == '0.8'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0.8';
		$advance_it_company_custom_css .='}';
		}else if($advance_it_company_theme_lay == '0.9'){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:0.9';
		$advance_it_company_custom_css .='}';
		}

	/*------------------------------ Button Settings option-----------------------*/
	$advance_it_company_button_padding_top_bottom = get_theme_mod('advance_it_company_button_padding_top_bottom');
	$advance_it_company_button_padding_left_right = get_theme_mod('advance_it_company_button_padding_left_right');
	$advance_it_company_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"]{';
		$advance_it_company_custom_css .='padding-top: '.esc_attr($advance_it_company_button_padding_top_bottom).'px; padding-bottom: '.esc_attr($advance_it_company_button_padding_top_bottom).'px; padding-left: '.esc_attr($advance_it_company_button_padding_left_right).'px; padding-right: '.esc_attr($advance_it_company_button_padding_left_right).'px; display:inline-block;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_button_border_radius = get_theme_mod('advance_it_company_button_border_radius');
	$advance_it_company_custom_css .='.new-text .read-more-btn a, #slider .inner_carousel .readbtn a, #comments .form-submit input[type="submit"]{';
		$advance_it_company_custom_css .='border-radius: '.esc_attr($advance_it_company_button_border_radius).'px;';
	$advance_it_company_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/
	$advance_it_company_slider = get_theme_mod( 'advance_it_company_responsive_slider',false);
	if($advance_it_company_slider == true && get_theme_mod( 'advance_it_company_slider_hide', false) == false){
    	$advance_it_company_custom_css .='#slider{';
			$advance_it_company_custom_css .='display:none;';
		$advance_it_company_custom_css .='} ';
	}
    if($advance_it_company_slider == true){
    	$advance_it_company_custom_css .='@media screen and (max-width:575px) {';
		$advance_it_company_custom_css .='#slider{';
			$advance_it_company_custom_css .='display:block;';
		$advance_it_company_custom_css .='} }';
	}else if($advance_it_company_slider == false){
		$advance_it_company_custom_css .='@media screen and (max-width:575px) {';
		$advance_it_company_custom_css .='#slider{';
			$advance_it_company_custom_css .='display:none;';
		$advance_it_company_custom_css .='} }';
	}

	$advance_it_company_slider = get_theme_mod( 'advance_it_company_responsive_scroll',true);
	if($advance_it_company_slider == true && get_theme_mod( 'advance_it_company_enable_disable_scroll', true) == false){
    	$advance_it_company_custom_css .='#scroll-top{';
			$advance_it_company_custom_css .='display:none;';
		$advance_it_company_custom_css .='} ';
	}
    if($advance_it_company_slider == true){
    	$advance_it_company_custom_css .='@media screen and (max-width:575px) {';
		$advance_it_company_custom_css .='#scroll-top{';
			$advance_it_company_custom_css .='visibility: visible !important;';
		$advance_it_company_custom_css .='} }';
	}else if($advance_it_company_slider == false){
		$advance_it_company_custom_css .='@media screen and (max-width:575px) {';
		$advance_it_company_custom_css .='#scroll-top{';
			$advance_it_company_custom_css .='visibility: hidden !important;';
		$advance_it_company_custom_css .='} }';
	}

	$advance_it_company_sidebar = get_theme_mod( 'advance_it_company_responsive_sidebar',true);
    if($advance_it_company_sidebar == true){
    	$advance_it_company_custom_css .='@media screen and (max-width:575px) {';
		$advance_it_company_custom_css .='#sidebar{';
			$advance_it_company_custom_css .='display:block;';
		$advance_it_company_custom_css .='} }';
	}else if($advance_it_company_sidebar == false){
		$advance_it_company_custom_css .='@media screen and (max-width:575px) {';
		$advance_it_company_custom_css .='#sidebar{';
			$advance_it_company_custom_css .='display:none;';
		$advance_it_company_custom_css .='} }';
	}

	$advance_it_company_loader = get_theme_mod( 'advance_it_company_responsive_preloader', true);
	if($advance_it_company_loader == true && get_theme_mod( 'advance_it_company_preloader_option', true) == false){
    	$advance_it_company_custom_css .='#loader-wrapper{';
			$advance_it_company_custom_css .='display:none;';
		$advance_it_company_custom_css .='} ';
	}
    if($advance_it_company_loader == true){
    	$advance_it_company_custom_css .='@media screen and (max-width:575px) {';
		$advance_it_company_custom_css .='#loader-wrapper{';
			$advance_it_company_custom_css .='display:block;';
		$advance_it_company_custom_css .='} }';
	}else if($advance_it_company_loader == false){
		$advance_it_company_custom_css .='@media screen and (max-width:575px) {';
		$advance_it_company_custom_css .='#loader-wrapper{';
			$advance_it_company_custom_css .='display:none;';
		$advance_it_company_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$advance_it_company_theme_lay = get_theme_mod( 'advance_it_company_background_skin_mode','Transpert Background');
    if($advance_it_company_theme_lay == 'With Background'){
		$advance_it_company_custom_css .='.page-box,#sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.post-sec,.front-page-content,.background-img-skin, .noresult-content{';
			$advance_it_company_custom_css .='background-color: #fff; padding:10px;';
		$advance_it_company_custom_css .='}';
	}else if($advance_it_company_theme_lay == 'Transpert Background'){
		$advance_it_company_custom_css .='.page-box-single{';
			$advance_it_company_custom_css .='background-color: transparent;';
		$advance_it_company_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$advance_it_company_top_bottom_product_button_padding = get_theme_mod('advance_it_company_top_bottom_product_button_padding', 10);
	$advance_it_company_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$advance_it_company_custom_css .='padding-top: '.esc_attr($advance_it_company_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($advance_it_company_top_bottom_product_button_padding).'px;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_left_right_product_button_padding = get_theme_mod('advance_it_company_left_right_product_button_padding', 16);
	$advance_it_company_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$advance_it_company_custom_css .='padding-left: '.esc_attr($advance_it_company_left_right_product_button_padding).'px; padding-right: '.esc_attr($advance_it_company_left_right_product_button_padding).'px;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_product_button_border_radius = get_theme_mod('advance_it_company_product_button_border_radius', 3);
	$advance_it_company_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$advance_it_company_custom_css .='border-radius: '.esc_attr($advance_it_company_product_button_border_radius).'px;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_show_related_products = get_theme_mod('advance_it_company_show_related_products',true);
	if($advance_it_company_show_related_products == false){
		$advance_it_company_custom_css .='.related.products{';
			$advance_it_company_custom_css .='display: none;';
		$advance_it_company_custom_css .='}';
	}

	$advance_it_company_show_wooproducts_border = get_theme_mod('advance_it_company_show_wooproducts_border', false);
	if($advance_it_company_show_wooproducts_border == true){
		$advance_it_company_custom_css .='.products li{';
			$advance_it_company_custom_css .='border: 1px solid #d4d2d2;';
		$advance_it_company_custom_css .='}';
	}

	$advance_it_company_top_bottom_wooproducts_padding = get_theme_mod('advance_it_company_top_bottom_wooproducts_padding',0);
	$advance_it_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_it_company_custom_css .='padding-top: '.esc_attr($advance_it_company_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($advance_it_company_top_bottom_wooproducts_padding).'px !important;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_left_right_wooproducts_padding = get_theme_mod('advance_it_company_left_right_wooproducts_padding',0);
	$advance_it_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_it_company_custom_css .='padding-left: '.esc_attr($advance_it_company_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($advance_it_company_left_right_wooproducts_padding).'px !important;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_wooproducts_border_radius = get_theme_mod('advance_it_company_wooproducts_border_radius',0);
	$advance_it_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_it_company_custom_css .='border-radius: '.esc_attr($advance_it_company_wooproducts_border_radius).'px;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_wooproducts_box_shadow = get_theme_mod('advance_it_company_wooproducts_box_shadow',0);
	$advance_it_company_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$advance_it_company_custom_css .='box-shadow: '.esc_attr($advance_it_company_wooproducts_box_shadow).'px '.esc_attr($advance_it_company_wooproducts_box_shadow).'px '.esc_attr($advance_it_company_wooproducts_box_shadow).'px #eee;';
	$advance_it_company_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$advance_it_company_copyright_content_align = get_theme_mod('advance_it_company_copyright_content_align');
	if($advance_it_company_copyright_content_align != false){
		$advance_it_company_custom_css .='.copyright{';
			$advance_it_company_custom_css .='text-align: '.esc_attr($advance_it_company_copyright_content_align).';';
		$advance_it_company_custom_css .='}';
	}

	$advance_it_company_footer_content_font_size = get_theme_mod('advance_it_company_footer_content_font_size', 16);
	$advance_it_company_custom_css .='.copyright p{';
		$advance_it_company_custom_css .='font-size: '.esc_attr($advance_it_company_footer_content_font_size).'px !important;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_copyright_padding = get_theme_mod('advance_it_company_copyright_padding', 15);
	$advance_it_company_custom_css .='.copyright{';
		$advance_it_company_custom_css .='padding-top: '.esc_attr($advance_it_company_copyright_padding).'px; padding-bottom: '.esc_attr($advance_it_company_copyright_padding).'px;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_footer_widget_bg_color = get_theme_mod('advance_it_company_footer_widget_bg_color');
	$advance_it_company_custom_css .='#footer{';
		$advance_it_company_custom_css .='background-color: '.esc_attr($advance_it_company_footer_widget_bg_color).';';
	$advance_it_company_custom_css .='}';

	$advance_it_company_footer_widget_bg_image = get_theme_mod('advance_it_company_footer_widget_bg_image');
	if($advance_it_company_footer_widget_bg_image != false){
		$advance_it_company_custom_css .='#footer{';
			$advance_it_company_custom_css .='background: url('.esc_attr($advance_it_company_footer_widget_bg_image).');';
		$advance_it_company_custom_css .='}';
	}

	// scroll to top
	$advance_it_company_scroll_font_size_icon = get_theme_mod('advance_it_company_scroll_font_size_icon', 22);
	$advance_it_company_custom_css .='#scroll-top .fas{';
		$advance_it_company_custom_css .='font-size: '.esc_attr($advance_it_company_scroll_font_size_icon).'px;';
	$advance_it_company_custom_css .='}';

	// Slider Height 
	$advance_it_company_slider_image_height = get_theme_mod('advance_it_company_slider_image_height');
	$advance_it_company_custom_css .='#slider img{';
		$advance_it_company_custom_css .='height: '.esc_attr($advance_it_company_slider_image_height).'px;';
	$advance_it_company_custom_css .='}';

	// Display Blog Post 
	$advance_it_company_display_blog_page_post = get_theme_mod( 'advance_it_company_display_blog_page_post','In Box');
    if($advance_it_company_display_blog_page_post == 'Without Box'){
		$advance_it_company_custom_css .='.page-box{';
			$advance_it_company_custom_css .='border:none; margin:25px 0; box-shadow: none;';
		$advance_it_company_custom_css .='}';
	}

	// slider overlay
	$advance_it_company_slider_overlay = get_theme_mod('advance_it_company_slider_overlay', true);
	if($advance_it_company_slider_overlay == false){
		$advance_it_company_custom_css .='#slider img{';
			$advance_it_company_custom_css .='opacity:1;';
		$advance_it_company_custom_css .='}';
	} 
	$advance_it_company_slider_image_overlay_color = get_theme_mod('advance_it_company_slider_image_overlay_color', true);
	if($advance_it_company_slider_overlay != false){
		$advance_it_company_custom_css .='#slider{';
			$advance_it_company_custom_css .='background-color: '.esc_attr($advance_it_company_slider_image_overlay_color).';';
		$advance_it_company_custom_css .='}';
	}

	// site title and tagline font size option
	$advance_it_company_site_title_size_option = get_theme_mod('advance_it_company_site_title_size_option', 30);{
	$advance_it_company_custom_css .='.logo h1 a, .logo p a{';
	$advance_it_company_custom_css .='font-size: '.esc_attr($advance_it_company_site_title_size_option).'px;';
		$advance_it_company_custom_css .='}';
	}

	$advance_it_company_site_tagline_size_option = get_theme_mod('advance_it_company_site_tagline_size_option', 12);{
	$advance_it_company_custom_css .='.logo p{';
	$advance_it_company_custom_css .='font-size: '.esc_attr($advance_it_company_site_tagline_size_option).'px !important;';
		$advance_it_company_custom_css .='}';
	}

	// woocommerce product sale settings
	$advance_it_company_border_radius_product_sale = get_theme_mod('advance_it_company_border_radius_product_sale',50);
	$advance_it_company_custom_css .='.woocommerce span.onsale {';
		$advance_it_company_custom_css .='border-radius: '.esc_attr($advance_it_company_border_radius_product_sale).'%;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_align_product_sale = get_theme_mod('advance_it_company_align_product_sale', 'Right');
	if($advance_it_company_align_product_sale == 'Right' ){
		$advance_it_company_custom_css .='.woocommerce ul.products li.product .onsale{';
			$advance_it_company_custom_css .=' left:auto; right:0;';
		$advance_it_company_custom_css .='}';
	}elseif($advance_it_company_align_product_sale == 'Left' ){
		$advance_it_company_custom_css .='.woocommerce ul.products li.product .onsale{';
			$advance_it_company_custom_css .=' left:0; right:auto;';
		$advance_it_company_custom_css .='}';
	}

	$advance_it_company_product_sale_font_size = get_theme_mod('advance_it_company_product_sale_font_size',14);
	$advance_it_company_custom_css .='.woocommerce span.onsale{';
		$advance_it_company_custom_css .='font-size: '.esc_attr($advance_it_company_product_sale_font_size).'px;';
	$advance_it_company_custom_css .='}';


	// preloader background option
	$advance_it_company_loader_background_color_settings = get_theme_mod('advance_it_company_loader_background_color_settings');
	$advance_it_company_custom_css .='#loader-wrapper .loader-section{';
		$advance_it_company_custom_css .='background-color: '.esc_attr($advance_it_company_loader_background_color_settings).';';
	$advance_it_company_custom_css .='} ';

	// fixed header padding option
	$advance_it_company_sticky_header_padding_settings = get_theme_mod('advance_it_company_sticky_header_padding_settings', 0);
	$advance_it_company_custom_css .=' .fixed-header, .header-fixed{';
		$advance_it_company_custom_css .='padding: '.esc_attr($advance_it_company_sticky_header_padding_settings).'px;';
	$advance_it_company_custom_css .='}';
	$advance_it_company_custom_css .='@media screen and (max-width:1000px) {';
	$advance_it_company_custom_css .=' .fixed-header{';
		$advance_it_company_custom_css .='padding: 0 !important; }';
	$advance_it_company_custom_css .='}';

	// woocommerce Product Navigation
	$advance_it_company_products_navigation = get_theme_mod('advance_it_company_products_navigation', 'Yes');
	if($advance_it_company_products_navigation == 'No'){
		$advance_it_company_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$advance_it_company_custom_css .='display: none;';
		$advance_it_company_custom_css .='}';
	}

	// featured image setting
	$advance_it_company_featured_img_border_radius = get_theme_mod('advance_it_company_featured_img_border_radius', 0);
	$advance_it_company_custom_css .='.our-services img, .box-img img{';
		$advance_it_company_custom_css .='border-radius: '.esc_attr($advance_it_company_featured_img_border_radius).'px;';
	$advance_it_company_custom_css .='}';

	$advance_it_company_featured_img_box_shadow = get_theme_mod('advance_it_company_featured_img_box_shadow',0);
	$advance_it_company_custom_css .='.our-services img, .page-box-single img{';
		$advance_it_company_custom_css .='box-shadow: '.esc_attr($advance_it_company_featured_img_box_shadow).'px '.esc_attr($advance_it_company_featured_img_box_shadow).'px '.esc_attr($advance_it_company_featured_img_box_shadow).'px #ccc;';
	$advance_it_company_custom_css .='}';

	// slider top and bottom padding
	$advance_it_company_top_bottom_slider_content_space = get_theme_mod('advance_it_company_top_bottom_slider_content_space');
	$advance_it_company_left_right_slider_content_space = get_theme_mod('advance_it_company_left_right_slider_content_space');
	$advance_it_company_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .know-btn{';
		$advance_it_company_custom_css .='top: '.esc_attr($advance_it_company_top_bottom_slider_content_space).'%; bottom: '.esc_attr($advance_it_company_top_bottom_slider_content_space).'%;left: '.esc_attr($advance_it_company_left_right_slider_content_space).'%;right: '.esc_attr($advance_it_company_left_right_slider_content_space).'%;';
	$advance_it_company_custom_css .='}';









	
