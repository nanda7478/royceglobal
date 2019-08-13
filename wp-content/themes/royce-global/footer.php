<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>



      
		<footer id="colophon" class="site-footer" role="contentinfo">
     
     <div class="footer-top-section">
     <div class="container">
       <div class="row">
 	<div class="col-sm-12 block-head"><h2 class="heading2">The latest from Royce.</h2> <a class="btn1 right" href="<?php echo site_url();?>/news/" role="button">View All</a></div>
   </div>
 
 
<div class="row">	
<div class="col-lg-12 col-md-12 news-left">
          <?php $args = array(
           'post_type' => 'post' ,
           'posts_per_page' => 1,
            'order' => 'ASC' ,
            ); ?>
            <?php query_posts($args); ?>
			<?php

			// Start the loop.
			while ( have_posts() ) : the_post();

			?>
            <div class="blog-img-content">
			<div class="news-img">

			<?php
			if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';
        
    }
}
?>
			
			<?php //twentysixteen_post_thumbnail(); ?>
				
			</div>
			<div class="news-content">
            <header class="entry-header">
            <div class="author_date">
              <?php echo get_the_date('F jS, Y'); ?> 
              
			</div>
            
			<?php the_title( sprintf( '<h3 class="small_colored_heading"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			</header>

	 <div class="entry-content">
			<?php $content = get_the_content();
            $trimmed_content = wp_trim_words( $content, 20, '... <br /> <a class="links" href="'. get_permalink() .'"> Read More </a>' ); ?>
              <p class="black_content"><?php echo $trimmed_content; ?></p>
				</div>

            <div class="blog-category"><?php the_category();?></div>
  
			</div>
            </div>
              <?php
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;
	       ?>
        </div>
    </div>
 </div>
 </div>

  <div class="container f-bottom">

        <div class="row">
       <div class="col-lg-4">
       
<div class="thanks">       Thank you for visiting. </div>
        
       	<div class="footer-logo"><?php twentysixteen_the_custom_logo(); ?><span class="royce-blobal-tag-line">Defining Excellence Since 1929</span></div>
       </div> 	

       <div class="col-lg-8">
       <div class="royce-global-footer-menu">
       	<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'footer',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>
         </div>

         <div class="royce-blogal-social-icon">
           <ul>
           <li><a href=""><i class="fa fa-google-plus"></i></a></li>
           <li><a href=""><i class="fa fa-facebook"></i></a></li>
           <li><a href=""><i class="fa fa-twitter"></i></a></li>
           <li><a href=""><i class="fa fa-instagram"></i></a></li>
           </ul>
         </div>

       </div>

        </div>  

 
       <div class="fp20">
       <a class="btn1 center" href="<?php echo site_url(); ?>/contact/#contact_form_section" role="button"> <img src="<?php echo site_url(); ?>/wp-content/themes/royce-global/images/email.png" /> Contact Royce Now</a>
       </div>
 

         </div>


			

			
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->



<?php wp_footer(); ?>
</body>
</html>

<script type="text/javascript">
	
$('.main-navigation ul.sub-menu').each(function(){
  
  var LiN = $(this).find('li').length;
  
  if( LiN > 4){    
    $('li', this).eq(3).nextAll().hide().addClass('toggleable');
    $(this).append('<li class="more">View all</li>');    
  }
  
});


$('.main-navigation ul.sub-menu').on('click','.more', function(){
  
  if( $(this).hasClass('less') ){    
    $(this).text('View all').removeClass('less');    
  }else{
    $(this).text('Less').addClass('less'); 
  }
  
  $(this).siblings('li.toggleable').slideToggle();
    
}); 
</script>
