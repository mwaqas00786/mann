<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mann_und_natur
 */

get_header();
?>

<main id="details-page" class="site-main">
    <div class="details-p">
        <?php  while ( have_posts() ) :
		 	the_post();?>
        <div class="container">
             <div class="details-h">
                <div class="img-d">
                    <img class="img-d-p" src="<?php $image_source = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); echo $image_source[0]; ?>">
                </div>
                <div class="text-detail">
                    <h2><?php the_title();?></h2>
                    <p class="para-d"><?php the_content();?></p>
                </div>
             </div>
        </div>
        <?php  endwhile;?>
    </div>
   
    <?php
		// while ( have_posts() ) :
		// 	the_post();

		// 	get_template_part( 'template-parts/content', get_post_type() );

		// 	the_post_navigation(
		// 		array(
		// 			'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'mann' ) . '</span> <span class="nav-title">%title</span>',
		// 			'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'mann' ) . '</span> <span class="nav-title">%title</span>',
		// 		)
		// 	);

		// 	// If comments are open or we have at least one comment, load up the comment template.
		// 	if ( comments_open() || get_comments_number() ) :
		// 		comments_template();
		// 	endif;

		// endwhile; // End of the loop.
		// ?>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();