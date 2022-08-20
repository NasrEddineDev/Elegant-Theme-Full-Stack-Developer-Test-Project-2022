<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="content-ts">
 *
 * @package advance-it-company
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
  } else {
    do_action( 'wp_body_open' );
  } ?>
  <header role="banner">
    <?php if(get_theme_mod('advance_it_company_preloader_option',true) != '' || get_theme_mod('advance_it_company_responsive_preloader', true) != ''){ ?>
      <div id="loader-wrapper" class="w-100 h-100">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    <?php }?>
    <a class="screen-reader-text skip-link" href="#maincontent"><?php esc_html_e( 'Skip to content', 'advance-it-company' ); ?></a>
    <div id="header">
      <div class="container-fluid">
        <div class="row">
          <div class="offset-lg-1 col-lg-3 col-md-12 align-self-center">
            <div class="logo py-3 px-0 align-self-center">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
                <?php endif; ?>
                <?php $blog_info = get_bloginfo( 'name' ); ?>
                <?php if ( ! empty( $blog_info ) ) : ?>
                  <?php if( get_theme_mod('advance_it_company_site_title',true) != ''){ ?>
                    <?php if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title text-uppercase pb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title m-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="text-uppercase"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif; ?>
                  <?php }?>
                <?php endif; ?>
                <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
                  ?>
                <?php if( get_theme_mod('advance_it_company_tagline',true) != ''){ ?>
                  <p class="site-description m-0">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php }?>
              <?php endif; ?>
            </div>
            <?php 
              if(has_nav_menu('primary')){ ?>
              <div class="toggle-menu responsive-menu <?php if( get_theme_mod( 'advance_it_company_responsive_sticky_header', false) != '') { ?> logo-sticky-header"<?php } else { ?>close-sticky <?php } ?>">
                <button class="mobiletoggle" role="tab"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','advance-it-company'); ?></span></button>
              </div>
              <div id="menu-sidebar" class="nav sidebar resp-menu">
                <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-it-company' ); ?>">
                  <?php 
                    if(has_nav_menu('primary')){ 
                      wp_nav_menu( array( 
                        'theme_location' => 'primary',
                        'container_class' => 'main-menu-navigation clearfix' ,
                        'menu_class' => 'clearfix',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                        'fallback_cb' => 'wp_page_menu',
                      ) );
                    } 
                  ?>
                  <div id="contact-info" class="text-center">
                    <div class="social-icons">
                      <?php if( get_theme_mod( 'advance_it_company_facebook_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f m-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','advance-it-company' );?></span></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'advance_it_company_twitter_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_twitter_url','' ) ); ?>"><i class="fab fa-twitter m-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','advance-it-company' );?></span></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'advance_it_company_linkedin_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in m-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','advance-it-company' );?></span></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'advance_it_company_instagram_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_instagram_url','' ) ); ?>"><span class="screen-reader-text"><?php esc_html_e( 'Instagram','advance-it-company' );?></span><i class="fab fa-instagram m-2"></i></a>
                      <?php } ?>
                      <?php if( get_theme_mod( 'advance_it_company_youtube_url') != '') { ?>
                        <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_youtube_url','' ) ); ?>"><i class="fab fa-youtube m-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','advance-it-company' );?></span></a>
                      <?php } ?>
                    </div>
                    <?php get_search_form();?>
                  </div>
                  <a href="javascript:void(0)" class="closebtn responsive-menu"><i class="far fa-times-circle"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','advance-it-company'); ?></span></a>
                </nav>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-8 col-md-12 align-self-center">
            <?php if( get_theme_mod('advance_it_company_display_topbar') != ''){ ?>
              <div class="menu-color row py-3 px-0">
                <div class="col-lg-3 col-md-4 phone">
                  <?php if( get_theme_mod('advance_it_company_phone') != '' || get_theme_mod( 'advance_it_company_phone1' )!= ''){ ?>
                  <div class="row">
                    <div class="col-lg-3 col-md-2">
                      <i class="fas fa-phone mt-3 me-2"></i>
                    </div>
                    <div class="col-lg-9 col-md-10">
                      <?php if( get_theme_mod('advance_it_company_phone') != ''){ ?>
                        <p class="m-0"><?php echo esc_html( get_theme_mod('advance_it_company_phone','' )); ?></p>
                      <?php } ?>
                      <?php if( get_theme_mod('advance_it_company_phone1') != ''){ ?>
                        <a class="p_color" href="tel:<?php echo esc_attr( get_theme_mod('advance_it_company_phone1','' )); ?>"><?php echo esc_html( get_theme_mod('advance_it_company_phone1','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('advance_it_company_phone1','' )); ?></span></a>
                      <?php } ?>
                    </div>
                  </div>
                  <?php }?>
                </div>
                <div class="col-lg-3 col-md-4 mail">
                  <?php if( get_theme_mod('advance_it_company_mail') != '' || get_theme_mod( 'advance_it_company_mail1' )!= ''){ ?>
                    <div class="row">
                      <div class="col-lg-2 col-md-2">
                        <i class="fas fa-envelope mt-3 me-2"></i>
                      </div>
                      <div class="col-lg-10 col-md-10">
                        <div class="mail">
                          <?php if( get_theme_mod('advance_it_company_mail') != ''){ ?>
                           <p class="m-0"><?php echo esc_html( get_theme_mod('advance_it_company_mail','')); ?></p>
                          <?php } ?>
                          <?php if( get_theme_mod('advance_it_company_mail1') != ''){ ?>
                           <a class="p_color" href="mailto:<?php echo esc_attr( get_theme_mod('advance_it_company_mail1','') ); ?>"><?php echo esc_html( get_theme_mod('advance_it_company_mail1','')); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('advance_it_company_mail1','')); ?></span></a>
                          <?php } ?>
                        </div>  
                      </div>
                    </div>
                  <?php }?>
                </div>
                <div class="col-lg-3 col-md-4 address">
                  <?php if( get_theme_mod('advance_it_company_address') != '' || get_theme_mod( 'advance_it_company_address1' )!= ''){ ?>
                  <div class="row">
                    <div class="col-lg-2 col-md-2">
                      <i class="fas fa-map-marker-alt mt-3 me-2"></i>
                    </div>
                    <div class="col-lg-10 col-md-10">
                      <?php if( get_theme_mod('advance_it_company_address') != ''){ ?>
                        <p class="m-0"><?php echo esc_html( get_theme_mod('advance_it_company_address','')); ?></p>
                      <?php } ?>
                      <?php if( get_theme_mod('advance_it_company_address1') != ''){ ?>
                        <p class="p_color m-0"><?php echo esc_html( get_theme_mod('advance_it_company_address1','')); ?></p>
                      <?php } ?>
                    </div>
                  </div>
                  <?php }?>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="social-icons">
                    <?php if( get_theme_mod( 'advance_it_company_facebook_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','advance-it-company' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'advance_it_company_twitter_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','advance-it-company' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'advance_it_company_linkedin_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','advance-it-company' );?></span></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'advance_it_company_instagram_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_instagram_url','' ) ); ?>"><span class="screen-reader-text"><?php esc_html_e( 'Instagram','advance-it-company' );?></span><i class="fab fa-instagram"></i></a>
                    <?php } ?>
                    <?php if( get_theme_mod( 'advance_it_company_youtube_url') != '') { ?>
                      <a href="<?php echo esc_url( get_theme_mod( 'advance_it_company_youtube_url','' ) ); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','advance-it-company' );?></span></a>
                    <?php } ?>
                  </div>
                </div>
              </div>
            <?php } ?>
            <div class="main-menu <?php if( get_theme_mod( 'advance_it_company_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
              <div class="row m-0 ">
                <div class="col-lg-11 col-md-11 p-0">
                  <div id="menu-sidebar" class="nav sidebar text-center">
                    <nav id="primary-site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'advance-it-company' ); ?>">
                      <?php 
                        if(has_nav_menu('primary')){ 
                          wp_nav_menu( array( 
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu-navigation clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) );
                        } 
                      ?>
                    </nav>
                  </div>
                </div>
                <div class="col-lg-1 col-md-1 col-6 align-self-center">
                  <div class="search-box align-self-center">
                    <button type="button" class="search-open"><i class="fas fa-search m-2 p-3"></i></button>
                  </div>
                </div>
              </div>
              <div class="search-outer">
                <div class="serach_inner w-100 h-100">
                  <?php get_search_form(); ?>
                </div>
                <button type="button" class="search-close">X</span></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>