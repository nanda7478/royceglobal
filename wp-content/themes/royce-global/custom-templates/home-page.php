<?php
/*
  Display Template Name: Home Page
*/

get_header();
?>

<div class="royce_global_slider">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- <ol class="carousel-indicators">
              <?php
                 $i=0;            
                 while( have_rows('home_slider') ): the_row();            
                 if ($i == 0) {            
               echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';            
               } else {            
               echo '<li data-target="#myCarousel" data-slide-to="'.$i.'"></li>';            
               }            
               $i++;            
            endwhile; ?>
        </ol> -->
        <div class="carousel-inner">
        <?php
              $z = 0;            
              while( have_rows('home_slider') ): the_row();            
              $image = get_sub_field( 'slider_image' ); ?>

          <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>" style="background-image:url(<?php echo $image['url']; ?>);">
          <div class="home-video">
           <video width="100%" height="100%" autoplay loop="loop" muted="muted">
          <source src="<?php echo site_url();?>/wp-content/uploads/2018/07/Royce_Home_vide0.mp4" type="video/mp4">
         <source src="<?php echo site_url();?>/wp-content/uploads/2018/07/royce_home_vide0.ogg" type="video/ogg">
          Your browser does not support the video tag.
         </video> 
         </div>
            <div class="container carousel-caption-table">
           
              <div class="carousel-caption-table-cell text-center">
                <h1 class="big_heading"><?php the_sub_field('slider_title');?></h1>
                <!-- <a class="btn btn-lg btn-primary small_outline_btn outline_btn_hover" href="<?php the_sub_field('slider_button_url');?>" role="button"><?php the_sub_field('slider_button');?></a> -->
              <a href="#expected_delivery"><span class="learns">  Learn More <br /><img src="<?php bloginfo('template_url');?>/images/arrow_down_circle.svg" /> </span></a>
                
              </div>
             
            </div>
          </div>
       <?php
        $z++;           
        endwhile; 
        ?>

        </div>
      </div>
</div>

 

<div class="container">
<div class="newsticker">
<div class="news-image">
<img src="<?php echo site_url();?>/wp-content/uploads/2018/07/calendar.png"> News
</div>
<div class="news-right">
<?php
$args = array(
	'post_type' => 'post',
    'posts_per_page' => 1
	);
$query1 = new WP_Query( $args );

if ( $query1->have_posts() ) {
	// The Loop
	while ( $query1->have_posts() ) {
		$query1->the_post();
    ?>

 

<div class="ticker-title"> <strong> <?php the_date('m/d');?> : </strong> <?php echo get_the_title() ?>... <a href="<?php the_permalink();?>">Read More</a></div>
 

<?php
}	
wp_reset_postdata();
}
?>
 
</div>

<div class="clr"></div>
</div>
</div>



<section id="expected_delivery" class="expected_delivery">
<div class="container">
<div class="expectations_delivered">
<div class="row">
  <?php
  if( have_rows('expectations_delivered') ):

     
    while ( have_rows('expectations_delivered') ) : the_row();

        if( get_row_layout() == 'image_and_content' ):
          ?>
        <?php $image = get_sub_field( 'delivered_image', 'full' ); ?>

         <div class="col-lg-6 delivered_royce_image"><img src="<?php echo $image['url']; ?>"></div>
         <div class="col-lg-6 delivered_royce_content_title">
         <div class="royce_content_section">
         <?php twentysixteen_the_custom_logo(); ?>
         <h1 class="heading2"><?php the_sub_field('delivered_title');?></h1>
         <?php the_sub_field('delivered_content');?>
         </div>
         
         <div class="royce_list_section">
         	<ul>
         	<?php
         	while( have_rows('expectations_delivered_list') ) : the_row();
         	$image = get_sub_field( 'list_image' );
         	?>
         		<li>
         		<img src="<?php echo $image['url']; ?>" alt="">
         		<h6><?php the_sub_field('list_title');?></h6>
         		</li>
            <?php         
            endwhile; 
            ?>
         	</ul>
         </div>

        <a class="btn1" href="<?php echo site_url();?>/products/" role="button">Learn More</a>

         </div>
                  
        <?php

        endif;

    endwhile;

endif;
  ?>
  </div>
  </div>
</div>

</section>
<section class="market_expertise_section">
<?php
  if( have_rows('market_expertise') ): 
    while ( have_rows('market_expertise') ) : the_row();
     ?>
   <?php $image = get_sub_field('market_image', 'full'); ?>
<div class="market_expertise_image" style="background-image:url(<?php echo $image['url'];?>);">
 
 <div class="container">
 <div class="market_expertise_content_section">
 <h2 class="white_heading"><?php the_sub_field('market_title');?></h2>
 <div class="market_content"><?php the_sub_field('market_content');?></h2></div>
 <a class="btn1" href="<?php the_sub_field('market_button_url');?>" role="button"><?php the_sub_field('market_button');?></a>

  </div>
 </div>

</div>

<?php
endwhile;
endif;
  ?>

</section>

<div class="royce_colors_section home-blocks">
<div class="container">
<?php
  if( have_rows('royce_colors') ): 
    while ( have_rows('royce_colors') ) : the_row();
    if( get_row_layout() == 'royce_colors_content' ):
     ?>
<h2 class="heading1"><?php the_sub_field('royce_title');?></h2>
<?php
 endif;
endwhile;
endif;
  ?>
 <div class="row">
 	<?php
  if( have_rows('royce_colors') ): 
    while ( have_rows('royce_colors') ) : the_row();
    if( get_row_layout() == 'royce_colors_content' ):
     ?>
<div class="col-lg-9"><?php the_sub_field('royce_content');?></div>
<div class="col-lg-3 text-right"><a class="btn1" href="<?php the_sub_field('royce_button_url');?>" role="button"><?php the_sub_field('royce_button');?></a></div>

  <?php
 endif;
endwhile;
endif;
  ?>
 </div>

<section class="bg-white colors_slider">
	
		<div id="owl-demo-2" class="owl-carousel owl-theme">
			
           <?php $args = array(
           'post_type' => 'product' ,
           'order' => 'DESC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'product_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'royce-colors'
  	                     )
                     )
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
			<article class="thumbnail item" itemscope="" itemtype="http://schema.org/CreativeWork">
				<a class="blog-thumb-img" href="<?php the_permalink();?>" title="">
					<?php
			if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';
        
    }
}
?>
				</a>
				<div class="caption">
					<h4 itemprop="headline">
            <a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a>
          </h4>
					<?php the_content();?>
				</div>
			</article>

			 <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
		</div><!-- #owl-demo-2 -->	
</section>





</div>
</div>


<div class="royce_product_section home-blocks">
<div class="container">
<h2 class="heading1">Royce Specialty Products</h2>
<!-- <?php
  if( have_rows('royce_product') ): 
    while ( have_rows('royce_product') ) : the_row();
    if( get_row_layout() == 'royce_product_content_and_title' ):
     ?>
<h2 class=""><?php the_sub_field('royce_product_title');?></h2>
<?php
 endif;
endwhile;
endif;
  ?> -->
 <div class="row">

<div class="col-lg-9"><p class="para1">Royce is a leading supplier of specialty raw materials used in many industrial applications.</p></div>
<div class="col-lg-3 text-right"><a class="btn1" href="#" role="button">View All</a></div>


 	<!-- <?php
  if( have_rows('royce_product') ): 
    while ( have_rows('royce_product') ) : the_row();
    if( get_row_layout() == 'royce_product_content_and_title' ):
     ?>
<div class="col-lg-9"><?php the_sub_field('royce_product_content');?></div>
<div class="col-lg-3"><a class="btn btn-lg btn-primary small_outline_btn outline_btn_hover" href="<?php the_sub_field('royce_product_button_url');?>" role="button"><?php the_sub_field('royce_product_button');?></a></div>

  <?php
 endif;
endwhile;
endif;
  ?> -->
 </div>

<section class="bg-white colors_slider">
	
		<div id="owl-demo-3" class="owl-carousel owl-theme">
			<?php $args = array(
           'post_type' => 'product' ,
           'order' => 'DESC' ,
           'posts_per_page' => -1,
           'tax_query' => array(
  	              array(
  		                 'taxonomy' => 'product_category',
  		                 'field'  => 'slug',
  		                    'terms' => 'royce-specialty'
  	                     )
                     )

            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
			<article class="thumbnail item" itemscope="" itemtype="http://schema.org/CreativeWork">
				<a class="blog-thumb-img" href="<?php the_permalink();?>" title="">
					<?php
			if ( has_post_thumbnail() ) {
    $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
    if ( ! empty( $large_image_url[0] ) ) {
       
       // echo get_the_post_thumbnail( $post->ID, 'full' ); 
		 echo '<img class="img-responsive flsd"  src="' . esc_url( $large_image_url[0] ) . '" />';
        
    }
}
?>
				</a>
				<div class="caption">
					<h4 itemprop="headline">
            <a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a>
          </h4>
					<?php the_content();?>
				</div>
			</article>

			 <?php endwhile; ?>
              <?php endif; ?>
             <?php wp_reset_postdata(); ?>

		</div><!-- #owl-demo-2 -->	
	

</section>


</div>
</div>

<div class="global_reach_section">
<?php $args = array(
           'post_type' => 'page' ,
           'name' => 'home',
            ); ?>
            <?php query_posts($args); ?>
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
<?php
 if( have_rows('global_reach') ): 
    while ( have_rows('global_reach') ) : the_row();
    if( get_row_layout() == 'global_reach_content_and_title' ):
     ?>
   <?php $image = get_sub_field('global_reach_image', 'full'); ?>
<div class="global_reach_image">
 
 <div class="container">
 <div class="global_reach_content_section">
 <h2 class="big_white_heading"><?php the_sub_field('global_reach_title');?></h2>
 <div class="global_content"><?php the_sub_field('global_reach_content');?></h2></div>
 <a class="btn1 btn-lg" href="<?php the_sub_field('global_reach_button_url');?>" role="button"><?php the_sub_field('global_reach_button');?></a>
 </div>

<div class="imgss">
<img src="<?php echo $image['url'];?>);" />
</div>

 </div>

</div>

<?php
endif;
endwhile;
endif;
  ?>
  <?php endwhile; ?>
 <?php endif; ?>
<?php wp_reset_postdata(); ?>

</div>





<?php
get_footer();
?>


