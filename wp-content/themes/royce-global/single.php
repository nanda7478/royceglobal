<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>


<?php while ( have_posts() ) : the_post(); ?>
<div class="inner-pages-banner">
 <div class="container inner-pages-content-table">
 <div id="post-<?php the_ID(); ?>" class="inner-pages-content-table-cell text-center">
 <h1><?php echo get_the_date('F jS, Y'); ?></h1>
<div class="content_part">
<?php the_title( ); ?>
</div>
</div>
</div>
</div>
<?php endwhile;?> 


<div class="container">
<div class="news-sub-page">

<div class="news-details">
<div class="row">

<div class="col-xs-12 col-md-12">
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

		?>

		
		
		<div class="news-content-deatils">
        			<?php twentysixteen_post_thumbnail(); ?>
<!--<div class="details-matter">-->
			

			<div class="entry-content">
			<?php the_content();?>
			</div>
           <div class="post_category_name"><?php the_category() ?></div>
<!--</div>-->
		</div>

            <?php
			// Include the single post content template.
			//get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.

			
           
			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation( array(
					'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
				) );
			} elseif ( is_singular( 'post' ) ) {
				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ',
				) );
			}

			// End of the loop.
		endwhile;
		?>

		
	</main><!-- .site-main -->

	<?php //get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->
</div>
</div></div>


</div>
</div>
<?php get_footer(); ?>
