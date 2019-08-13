<?php
/*

*/
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>
  <?php $image = get_field('all_pages_banner'); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1 class="big_heading">Products / <?php the_title(); ?>
 </h1>
  <div class="content_part"> <?php the_title(); ?> </div>


</div>
</div>
</div>

<div class="container">
<div class="product_post_section">
 <?php the_content();?>
</div>
</div>
<?php endwhile;?> 

<div class="container">
<div class="product-single-post">


<div class="row">
<div class="col-lg-12">

<div class="table-responsive">
<div class="product_table">
<!-- Table Heading Part Start Here -->
<div class="p_row table_head">
<?php
 while(have_rows('product_table_repeater')) : the_row();
?>
<div class="p_col"><?php the_sub_field('product_table_heading');?></div>
<?php endwhile;?>
</div>
<!-- Table Heading Part End Here -->

<!-- Table Rows And Collumn Part Start Here -->
<?php
while( have_rows('product_table_content_repeater') ) : the_row();
?>
<div class="p_row">
<div class="p_col"><?php the_sub_field('product_table_col');?></div>
<div class="p_col"><p><?php the_sub_field('product_table_col_two');?></p></div>
<div class="p_col"><?php the_sub_field('product_table_col_three');?></div>
<div class="p_col"><a href="<?php the_sub_field('download_link');?>"><?php the_sub_field('product_table_col_four');?></a>
</div>
</div>
<?php endwhile;?>
<!-- Table Rows And Collumn Part End Here -->
</div>

<!-- If have second table in page than start here -->
<?php if(have_rows('product_table_content_two_repeater')): ?>
<h2 class="heading2"><?php the_field('product_table_title');?></h2>
<div class="product_table">
<!-- Table Heading Part Start Here -->
<div class="p_row table_head">
<?php
 while(have_rows('product_table_repeater')) : the_row();
?>
<div class="p_col"><?php the_sub_field('product_table_heading');?></div>
<?php endwhile;?>
</div>
<!-- Table Heading Part End Here -->

<!-- Table Rows And Collumn Part Start Here -->
<?php
while( have_rows('product_table_content_two_repeater') ) : the_row();
?>
<div class="p_row">
<div class="p_col"><?php the_sub_field('product_table_col');?></div>
<div class="p_col"><?php the_sub_field('product_table_col_two');?></div>
<div class="p_col"><?php the_sub_field('product_table_col_three');?></div>
<div class="p_col"><a href="<?php the_sub_field('download_link');?>"><?php the_sub_field('product_table_col_four');?></a>
</div>
</div>
<?php endwhile;?>
<!-- Table Rows And Collumn Part End Here -->
</div>
<?php endif;?>
<!-- If have second table in page than End here -->
</div>



</div>
</div>

</div>


</div>

 <div class="beyond-product-section">
<?php $args = array(
           'post_type' => 'page',
           'name' => 'products',
            ); ?>
<?php query_posts($args); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
 if( have_rows('quality_products_service') ): 
    while ( have_rows('quality_products_service') ) : the_row();
    if( get_row_layout() == 'quality_products_service_title_and_image' ):
     ?>
   <?php $image = get_sub_field('quality_products_service_image', 'full'); ?>
<div class="beyond-product_image" style="background-image:url(<?php echo $image['url'];?>);">
 
<div class="container">
 
 <h2 class="big_white_heading"><?php the_sub_field('quality_products_service_title');?></h2>
 

<div class="beyond_reach_list">
	<div class="row">
	<?php
	if( have_rows('products_service_list') ):
	while( have_rows('products_service_list') ) : the_row(); 
	?>
	<?php $image = get_sub_field('quality_products_service_image', 'full'); ?>
		<div class="col-md-4 col-sm-6 iteams">
			<img src="<?php echo $image['url'];?>" >

		<h4><?php the_sub_field('quality_products_service_title');?></h4>
       <div class="beyond_reach_content"><?php the_sub_field('quality_products_service_content');?></div>
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