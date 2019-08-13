<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php $image = get_field('all_pages_banner', get_option('page_for_posts')); ?>
<div class="inner-pages-banner" style="background-image:url(<?php echo $image['url'];?>);">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1>News </h1>
 <div class="content_part"><?php the_field('blog_subtitle', get_option('page_for_posts'));?></div>
</div>
</div>
</div>

<div class="container">
 <div class="sort-by-tag"><?php dynamic_sidebar('sidebar-4');?></div>
</div>

<div class="bolg_page">
<div class="container">     
<div class="news-page">  
		  <div class="row">	
<div class="col-lg-12 col-md-12 news-left">
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
            $trimmed_content = wp_trim_words( $content, 20, '... <br /> <a class="links" href="'. get_permalink() .'">Read More </a>' ); ?>
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


<?php
// Previous/next page navigation.
			// the_posts_pagination( array(
			// 	'prev_text'          => __( 'Previous page', 'twentysixteen' ),
			// 	'next_text'          => __( 'Next page', 'twentysixteen' ),
			// 	'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			// ) );

		// If no content, include the "No posts found" template.
?>
<div class="nav-links">
<?php
		echo paginate_links( array(
			'type'      => 'post',
			'prev_text' => '<i class="fa fa-long-arrow-left" aria-hidden="true"></i>',
			'next_text' => '<i class="fa fa-long-arrow-right" aria-hidden="true"></i>',
		) );
		?>
		</div>

	</div>

	</div>
</div>
<?php get_footer(); ?>
