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

<main id="primary" class="site-main">
    <div class="blogs-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="discover-sec">
                        <h2 class="dis-c-h">Discover the Latest</h2>
                        <h2 class="insight-h">Insight and Ideas</h2>
                        <p>Dive into our collection of thought-provoking blogs, where we explore a wide range of topics
                            from technology trends to wellness tips.</p>
                        <button class="explore-btn">Explore Our Blogs</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="discover-img">
                        <img src="images/header (1).png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="latest-blogs container">
        <div class="row">
            <h2 class="col-md-12">Latest Blogs</h2>
            <div class="col-md-6">
                <div class="l-blogs-s">
                    <div class="card">
                        <img class="img-fluid card-img" alt="100%x280" src="">
                        <button class="btn-life-s">Lifestyle</button>
                        <div class="s-card card-body">
                            <h4 class="card-title">Integrating Traditional Chinese Medicine into Your Daily Routine</h4>
                            <p class="card-text">Learn how to incorporate principles of Traditional Chinese Medicine
                                (TCM) into your daily life for improved health and vitality. Discover simple practices
                                and dietary tips inspired by TCM to support your well-being.</p>
                        </div>
                        <div class="footer-sec">
                            <div class="row">
                                <div class="col-md-2 col-lg-2"><img class=" card-img-1 img-responsive"
                                        src="images/coach pfp 1.png"></div>
                                <div class="col-md-9 col-lg-9 ">
                                    <h5 class=" ">Tilmann althoff</h5>
                                    <p>March 25, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
			<div class="col-md-6">
               <div class="blogs-right-sec">
					<div class="col-md-4">
						<img src="images/">
					
					</div>
					<div class="col-md-8">
						<h3>The Art of Mindful Vacuming</h3>
						<p>Explore the transformative power of vacuuming as a mindfulness practice.  Learn how simple household chores can become opportunities for inner  peace and clarity. Discover practical tips for incorporating mindfulness  into your daily cleaning routine and experience the joy of being  present in the moment.</P>
						<div class="footer-sec">
                            <div class="row">
                                <div class="col-md-2 col-lg-2"><img class=" card-img-1 img-responsive"
                                        src="images/coach pfp 1.png"></div>
                                <div class="col-md-9 col-lg-9 ">
                                    <h5 class=" ">Tilmann althoff</h5>
                                    <p>March 25, 2024</p>
                                </div>
                          
                        </div>
					</div>
			   </div>

            </div>
        </div>
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