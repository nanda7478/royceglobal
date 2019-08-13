<?php
/*
  Display Template Name: Contact Page
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

  <div class="map-location-section">

<div class="container">
    <div class="row">
    <div class="col-lg-6">
    	<h2 class="heading2"><?php the_field('royce_global_locations_title');?></h2>
    	<div class="location-list">
    	<ul>
    	<?php
	   if( have_rows('royce_global_locations__list') ):
	    while( have_rows('royce_global_locations__list') ) : the_row(); 
	     ?>
    	<li>
    	<div class="map-location-title"><h4><?php the_sub_field('location_list_title');?></h4></div>
    	<div class="map-address"><?php the_sub_field('location_list__address');?></div>
    	<div class="map-phone"><span>P : </span> <a href="tel:<?php the_sub_field('location_list_phone');?>"><?php the_sub_field('location_list_phone');?></a> </div>
    	<div class="map-email"><span>E : </span> <a href="mailto:<?php the_sub_field('location_list_email');?>"><?php the_sub_field('location_list_email');?> </a></div>
    	</li>

    	<?php 
	   endwhile;
	   endif;
	  ?>
    	</ul>
    	</div>
    </div>
    <div class="col-lg-6">
    	<?php $image = get_field('royce_global_locations_image'); ?>
    	<div class="map-image"><img src="<?php echo $image['url'];?>" alt=""></div>
    </div>
    </div>
  </div>

</div>
<div id="contact_form_section" class="contact-form-section">
<div class="container">

 <div class="row">
  <?php
  if( have_rows('specific_questions') ):
  while ( have_rows('specific_questions') ) : the_row();
   if( get_row_layout() == 'specific_questions_content_and_form' ):
          ?>
    <?php $image = get_sub_field( 'specific_questions_image', 'full' ); ?>
    <div class="col-lg-6 contact-left2"><img src="<?php echo $image['url']; ?>"></div> 
     <div class="col-lg-6 content_right">
         <div class="content_section">
         <h5><?php the_sub_field('specific_questions_title');?></h5>
         <?php the_sub_field('specific_questions_subtitle');?>
         </div>
         <div class="specific_questions_form">
           <?php the_sub_field('specific_questions_form');?>
         </div>
         </div>
           <?php
        endif;
    endwhile;
      endif;
     ?>
  </div>	
</div>
</div>

 
<?php
get_footer();
?>