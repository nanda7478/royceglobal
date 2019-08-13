<?php
/*
  Display Template Name: Market Page
*/

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('all_pages_banner'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1>
<?php the_title(); ?>
 </h1>
 <div class="content_part"><?php the_content();?></div>
</div>
</div>
</div>
<?php endwhile;?>

<div class="market-page-section">
 <div class="container">


<div class="row">
  <?php
  if( have_rows('market_products') ):
  while ( have_rows('market_products') ) : the_row();
   if( get_row_layout() == 'market_products_content_and_title' ):
          ?>
    <?php $image = get_sub_field( 'market_products_image', 'full' ); ?>
     <div class="col-lg-7 family-left">
         <div class="royce_content_section">
          <h3 class="heading2"><?php the_sub_field('market_products_title');?></h3>
          <div class="para1">         <?php the_sub_field('market_products_contetnt');?> </div>
         </div>
         </div>
         <div class="col-lg-5 family-right"><img src="<?php echo $image['url']; ?>"></div>   <?php
        endif;
    endwhile;
      endif;
     ?>
  </div>
  </div>
</div>

  <div class="many-market-section home-blocks">
   <div class="container">
   <h2 class="heading2 text-center"> <?php the_field('many_market');?></h2>
<div class="product-grid">

  <div class="row">
   <?php $args = array(
           'post_type' => 'market' ,
           'order' => 'ASC' ,
           'posts_per_page' => -1,
        
            ); ?>
            <?php query_posts($args); ?>

            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
					<div class="col-md-4 col-sm-6">

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
		<h4>
        <a href="<?php the_permalink();?>" rel="bookmark"><?php the_title();?></a>
        </h4>
		<?php the_content();?>
		</div>
		</div>
       <?php endwhile; ?>
       <?php endif; ?>
       <?php wp_reset_postdata(); ?>
  </div>
  </div>
  </div>
 
 </div>


 <div class="beyond-product-section">
<?php $args = array(
           'post_type' => 'page' ,
           'name' => 'markets' ,
            ); ?>
<?php query_posts($args); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
 if( have_rows('market_products_service') ): 
    while ( have_rows('market_products_service') ) : the_row();
    if( get_row_layout() == 'market_products_service_title_and_image' ):
     ?>
   <?php $image = get_sub_field('market_products_service_image', 'full'); ?>
<div class="beyond-product_image" style="background-image:url(<?php echo $image['url'];?>); background-repeat: no-repeat; background-size: cover;">
 
<div class="container">
  
 <h2 class="big_white_heading"><?php the_sub_field('market_products_service_title');?></h2>
  

<div class="beyond_reach_list">
	<div class="row">
	<?php
	if( have_rows('market_service_list') ):
	while( have_rows('market_service_list') ) : the_row(); 
	?>
	<?php $image = get_sub_field('market_service_image', 'full'); ?>
	<div class="col-md-4 col-sm-6 iteams">
			<img src="<?php echo $image['url'];?>" >

		<h4><?php the_sub_field('market_service_title');?></h4>
       <div class="beyond_reach_content"><?php the_sub_field('market_service_content');?></div>
		</div>

	<?php 
	endwhile;
	endif;
	?>
	</div>

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