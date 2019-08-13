<?php
/*
  Display Template Name: About Page
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

<div class="about-page-section">

<div class="container">
<div class="row">
  <?php
  if( have_rows('family_owned') ):

     
    while ( have_rows('family_owned') ) : the_row();

        if( get_row_layout() == 'family_owned_content_and_title' ):
          ?>
        <?php $image = get_sub_field( 'family_owned_image', 'full' ); ?>


          <div class="col-md-7 family-left">
 
         <h3 class="heading2"><?php the_sub_field('family_owned_title');?></h3>
         <div class="para1">
         <?php the_sub_field('family_owned_content');?>
         </div>
           </div>

         <div class="col-md-5 family-right"><img src="<?php echo $image['url']; ?>"></div>
                  
        <?php

        endif;

    endwhile;

endif;
  ?>
  </div>
  </div>

</div>
<div class="our_story_section" id="ourstorysection">
<div class="container">


<?php
  if( have_rows('our_story') ): 
    while ( have_rows('our_story') ) : the_row();
    if( get_row_layout() == 'our_story_content' ):
     ?>
     
<h2 class="heading2"><?php the_sub_field('our_story_title');?></h2>
<?php
 endif;
endwhile;
endif;
  ?>
<div class="row">
<?php
  if( have_rows('our_story') ): 
    while ( have_rows('our_story') ) : the_row();
    if( get_row_layout() == 'our_story_content' ):
     ?>
 <?php $image = get_sub_field( 'our_story_image', 'full' ); ?>
<div class="col-lg-12"><img src="<?php echo $image['url']; ?>" alt=""></div>
 <?php
 endif;
endwhile;
endif;
  ?>
</div>




<div class="session-content-section">
	<div class="row">
		<?php
  if( have_rows('about_session_and_content') ): 
  	$i = 1;
    while ( have_rows('about_session_and_content') ) : the_row();
     ?>
		<div class="col-lg-6 about_session_<?php echo $i;?>">
			<div class="session_content_title">
			<div class="session_title"><h2><?php the_sub_field('session_title');?></h2></div>
			<div class="session_content"><?php the_sub_field('session_content');?></div>
			</div>
		</div>

  <?php
  $i++;
  endwhile;
  
  endif;
  ?>

	</div>
</div>

</div>
</div>


<?php
get_footer();
?>