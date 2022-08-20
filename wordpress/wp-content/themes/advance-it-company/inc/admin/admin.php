<?php
//about theme info
add_action( 'admin_menu', 'advance_it_company_abouttheme' );
function advance_it_company_abouttheme() {    	
	add_theme_page( esc_html__('About IT Company Theme', 'advance-it-company'), esc_html__('About IT Company Theme', 'advance-it-company'), 'edit_theme_options', 'advance_it_company_guide', 'advance_it_company_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function advance_it_company_admin_theme_style() {
   wp_enqueue_style('advance-it-company-custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'advance_it_company_admin_theme_style');

//guidline for about theme
function advance_it_company_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
	 	<h2><?php esc_html_e('Welcome to Advance It Company Theme', 'advance-it-company'); ?></h2>
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'advance-it-company'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( ADVANCE_IT_COMPANY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'advance-it-company'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_IT_COMPANY_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'advance-it-company'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_IT_COMPANY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'advance-it-company'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button role="tab" class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'advance-it-company'); ?></button>
	<button role="tab" class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'advance-it-company'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'advance-it-company'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( ADVANCE_IT_COMPANY_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'advance-it-company'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_IT_COMPANY_CONTACT ); ?>"><?php esc_html_e('Support', 'advance-it-company'); ?></a>
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'advance-it-company'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'advance-it-company'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'advance-it-company'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'advance-it-company'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'advance-it-company'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'advance-it-company'); ?></b> <?php esc_html_e('Set the front page: Go to Setting -> Reading --> Set the front page display static page to home page', 'advance-it-company'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'advance-it-company'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( ADVANCE_IT_COMPANY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'advance-it-company'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_IT_COMPANY_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'advance-it-company'); ?></a>
			<a href="<?php echo esc_url( ADVANCE_IT_COMPANY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'advance-it-company'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/screenshot.png" alt="" />
	  			<p><?php esc_html_e( 'IT Company WordPress theme is known for its flexibility and it is SEO optimised apart from being fast in loading. It is a professionally developed one and is programmed for cleanliness as well as efficiency. It is known for its visual innovation and is structurally well designed besides being original as well as unique as far as the concepts are concerned. Known for its total responsiveness, it is multipurpose in nature and accompanied with an important feature called creativity. Known for its shape shifting nature and because of this, you have the option to use it as per the requirement. It is inherently designed and there is no need of writing a single line of code thus making it highly beneficial for the webmasters who do not have the knowledge of coding. Apart from that, it has a developer friendly codebase as well as the annotations and comments making it dream of a programmer.', 'advance-it-company' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'advance-it-company' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'advance-it-company' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'advance-it-company' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script>
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
</script>
<?php } ?>