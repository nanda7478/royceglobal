<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.css"> 
  
     <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/carousel.css"> 
      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/main.css">

      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/li-scroller.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url');?>/js/owl.carousel.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
	jQuery(document).ready(function($) {

	var owl = $("#owl-demo-2");
  owl.owlCarousel({
  	  loop:true,
  	  autoplaySpeed:1000,
	    margin:20,
      items : 3,
      autoplay:true,
      responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: true
                }
            }
  });
  $(".next").click(function(){ owl.trigger('owl.next'); });
  $(".prev").click(function(){ owl.trigger('owl.prev'); });

$('.latest-blog-posts .thumbnail.item').matchHeight();
	
});
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {

	var owl = $("#owl-demo-3");
  owl.owlCarousel({
  	  loop:true,
  	  autoplaySpeed:2000,
	    margin:20,
      items : 3, 
      autoplay:true,
      responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: true
                }
            }
  });
  $(".next").click(function(){ owl.trigger('owl.next'); });
  $(".prev").click(function(){ owl.trigger('owl.prev'); });

$('.latest-blog-posts .thumbnail.item').matchHeight();
	
});
</script>
<script type="text/javascript">
	jQuery(document).ready(function(){

    jQuery('a[href^="#expected_delivery"]').on('click', function(event) {

    var target = jQuery(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top-20
        }, 1100);
    }

     });
    });
</script>
<script type="text/javascript">
$(document).ready(function() {
  $('.humbers').on('click', function() {
  $('body').addClass('fixed-mobile-menu');
   });
});

$(document).ready(function() {
  $('.closebtn').on('click', function() {
  $('body').removeClass('fixed-mobile-menu');
   });
});
</script>

	<?php wp_head(); ?>
    
    
      <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/custom.css"> 
      
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header id="masthead" class="site-header" role="banner">
		<div class="container">
            <div class="row">
 
            <div class="col-sm-6 col-xs-5 col-lg-4">
				<div class="site-branding">
					<?php twentysixteen_the_custom_logo(); ?>

					<!-- <?php if ( is_front_page() && is_home() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif;?> -->
                     <!-- <?php
					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<span class="site-description"><?php echo $description; ?></span>
					<?php endif; ?> -->
                 <span class="royce-blobal-tag-line">Defining Excellence Since 1929</span>

				</div><!-- .site-branding -->
                </div>
                
<span class="humbers" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.marginLeft = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}
</script>
     
 
 
                <div class="col-sm-6 col-xs-7 col-lg-8">
                <div class="site_menu">
                <div class="royce-global-menu manusection sidenav" id="mySidenav">
                
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


				<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
					 

					<div id="site-header-menu" class="site-header-menu">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'primary',
										'menu_class'     => 'primary-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<?php if ( has_nav_menu( 'social' ) ) : ?>
							<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentysixteen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'social',
										'menu_class'     => 'social-links-menu',
										'depth'          => 1,
										'link_before'    => '<span class="screen-reader-text">',
										'link_after'     => '</span>',
									) );
								?>
							</nav><!-- .social-navigation -->
						<?php endif; ?>
					</div><!-- .site-header-menu -->
				<?php endif; ?>
               </div>
               
               <div class="royce-blobal-phone">
               <i class="fa fa-phone"></i> <a href="tel:+1-201-438-5200">1-201-438-5200</a>
               </div>
</div>
               </div>
              </div>
            
			</div><!-- .site-header-main -->

			<?php if ( get_header_image() ) : ?>
				<?php
					/**
					 * Filter the default twentysixteen custom header sizes attribute.
					 *
					 * @since Twenty Sixteen 1.0
					 *
					 * @param string $custom_header_sizes sizes attribute
					 * for Custom Header. Default '(max-width: 709px) 85vw,
					 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
					 */
					$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
				?>
				<div class="header-image">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					</a>
				</div><!-- .header-image -->
			<?php endif; // End header image check. ?>
		</header><!-- .site-header -->

		<div id="content" class="site-content">
