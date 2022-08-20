<?php
//about theme info
add_action( 'admin_menu', 'lz_software_company_gettingstarted' );
function lz_software_company_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'lz-software-company'), esc_html__('About Theme', 'lz-software-company'), 'edit_theme_options', 'lz_software_company_guide', 'lz_software_company_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function lz_software_company_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'lz_software_company_admin_theme_style');

//guidline for about theme
function lz_software_company_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'lz-software-company' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Software Company WordPress Theme', 'lz-software-company' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'lz-software-company' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'lz-software-company' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'lz-software-company' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'lz-software-company' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'lz-software-company' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'lz-software-company' ); ?> <a href="<?php echo esc_url( LZ_SOFTWARE_COMPANY_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'lz-software-company' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'LZ Software Company is a highly customizable theme suitable for digital products like softwares, themes, eBooks tutorials, plugins or services. It can also be used to sell products like computer, mobile phones, tablet, Mac, Windows, electronics, enterprise, startup, solutions, digital marketing, technical, digital, software, and desktop. Online support, maintenance, services, the theme is Mobile responsive with retina ready design. This is a light weight theme with optimized coding and fast loading speed. Software Company has elegant design with personalization options allowing you to create a stunning website. It has Customization option making it multipurpose. Software Company comes with the beautiful Testimonial section to display the happy clients. You can add social media icons, change colours, fonts etc. to suit your need. LZ Software Company is a multilingual theme to adjust with your demographic. You can use this theme for small businesses, IT Company, Software Company, Web agency Consulting agency even for the large corporate companies. In this theme you have a CTA (Call to action) button making your site more interactive and allowing your customers to register or buy. You can also add a team section and service section displaying more about your Company. So get this SEO friendly theme to enhance your business with an amazing digital footprint.', 'lz-software-company')?></p>
			<hr>
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Software Company Theme', 'lz-software-company' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'lz-software-company'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( LZ_SOFTWARE_COMPANY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'lz-software-company'); ?></a>
			<a href="<?php echo esc_url( LZ_SOFTWARE_COMPANY_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'lz-software-company'); ?></a>
			<a href="<?php echo esc_url( LZ_SOFTWARE_COMPANY_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'lz-software-company'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/lz-software-company.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'lz-software-company'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'lz-software-company'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'lz-software-company'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>