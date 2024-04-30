<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mann_und_natur
 */

get_header();
?>
<?php
 $category_id = get_queried_object_id();
 // Query posts from the specified category
 $args = array(
	'cat'            => $category_id,
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => -1, // Retrieve all posts
);

$query = new WP_Query( $args );
   // Check if there are posts
   if ( $query->have_posts() ) :
?>
<div class="container">
<div class="row" style="padding:14px">
    <?php  
 while ( $query->have_posts() ) : $query->the_post();
 $post_for_id = get_the_ID();
 $author_id = $query->posts[0]->post_author;
 $url = wp_get_attachment_url( get_post_thumbnail_id($post_for_id), 'thumbnail' );
 $category_name = get_cat_name( $category_id );
 $profile_image = get_user_meta($author_id, 'image', true);
 $content = get_the_content();
 // If there's no explicit excerpt set
 if (empty($post->post_excerpt)) {
	 // Get the first 55 words from the post content
	 $excerpt = wp_trim_words($content, 30);
	 // Append "Read more" link
	 $excerpt .= ' <a href="' . get_permalink() . '" class="read-more">Read more</a>';
 } else {
	 // Use the explicit excerpt set by the user
	 $excerpt = $post->post_excerpt;
	 // Append "Read more" link
	 $excerpt .= ' <a href="' . get_permalink() . '" class="read-more">Read more</a>';
 }

?>
    <div class="col-md-6 col-lg-4 sm-6 mb-3">
        <div class="card blogs-c">
            <?php if(!empty($url)) :?>
            <img decoding="async" class="img-fluid card-img" alt="100%x280" src="<?php echo esc_url($url);?>">
            <?php endif;?>
            <?php if(!empty($category_name)) :?>
            <button class="btn-life-s-b"><?php echo esc_html($category_name)?></button>
            <?php endif;?>
            <div class="s-card card-body">
                <h4 class="card-title "><a href="#"><?php the_title()?></a>
                </h4>
                <p class="card-text"><?php echo $excerpt;?></p>
            </div>
            <div class="footer-sec2">
                <div class="row">
                    <div class="col-md-3 col-lg-3">
                        <?php if(!empty($profile_image)) :?>
                        <img decoding="async" class=" card-img-1 img-responsive"
                            src="<?php echo esc_url($profile_image);?>">
                        <?php endif;?>
                    </div>
                    <div class="col-md-9 col-lg-9 ">
                        <h5 class=" "><?php the_author(); ?></h5>
                        <p><?php the_time(get_option('date_format'))?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile?>
</div>
</div>
<?php
	endif;
	?>

<?php
get_footer();