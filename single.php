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
                        <img src="<?php echo get_template_directory_uri() . '/images/blogs1.png'; ?>">
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
                        <img class="img-fluid card-img" alt="100%x280"
                            src="<?php echo get_template_directory_uri() . '/images/card-header.jpg'; ?>">
                        <button class="btn-blogs1-img">Lifestyle</button>
                        <div class="s-card card-body">
                            <h4 class="card-title">Integrating Traditional Chinese Medicine into Your Daily Routine</h4>
                            <p class="card-text">In our fast-paced world, true happiness can sometimes feel elusive. We
                                often look to external sources such as possessions, relationships, or achievements to
                                bring us joy. However, what if the key to happiness lies not in these external factors,
                                but in something much simpler – living in harmony with our bodies and the natural world
                                around us? In this blog, we will explore how min</p>
                        </div>
                        <div class="footer-sec">
                            <div class="row">
                                <div class="col-md-2 col-lg-2"><img class=" card-img-1 img-responsive"
                                        src="<?php echo get_template_directory_uri() . '/images/Frame 552.png'; ?>">
                                </div>
                                <div class="col-md-10 col-lg-10 ">
                                    <h5 class=" ">Tilmann althoff</h5>
                                    <p>March 25, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blogs-left-sec">
                    <div class="float-left img-s-b">
                        <img class="img-responsive left-img-blogs"
                            src="<?php echo get_template_directory_uri() . '/images/card-header-1.jpg'; ?>">
                        <button class="btn-blogs-r-s">Lifestyle</button>

                    </div>
                    <div class="blogs-text-r">
                        <div class="the-art-text">
                            <h5>The Art of Mindful Vacuming</h5>
                            <p class="style-text-p">Explore the transformative power of vacuuming as a mindfulness practice.
                                Learn how simple household chores can become opportunities for inner peace and clarity.
                                Discover practical tips for incorporating mindfulness into your daily cleaning routine and
                                experience the joy of being present in the moment.</P>
                        </div>
                        <div class="footer-sec-b">
                            <div class="row">
                                <div class="col-md-2 col-lg-2"><img class=" card-img-till img-responsive"
                                        src="<?php echo get_template_directory_uri() . '/images/Frame 552.png'; ?>">
                                </div>
                                <div class="col-md-10 col-lg-10 ">
                                    <h6 class="til-h ">Tilmann althoff</h6>
                                    <p>March 25, 2024</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="blogs-left-sec">
                    <div class="float-left img-s-b" style="margin-top:10px">
                        <img class="img-responsive left-img-blogs"
                            src="<?php echo get_template_directory_uri() . '/images/card-header-2.jpg'; ?>">
                        <button class="btn-blogs-r-s">Lifestyle</button>
                    </div>
                    <div class="blogs-text-r">
                        <div class="the-art-text">
                            <h5>Finding Happiness in Everyday Moments</h5>
                            <p class="style-text-p">Join us on a journey to discover the true source of happiness in our
                                lives. Explore how embracing a natural and mindful approach to living can lead to a deeper
                                sense of well-being and fulfillment. Learn how small, everyday moments, like vacuuming, can
                                be a gateway to lasting happiness and contentment.</P>
                        </div>
                        <div class="footer-sec-b">
                            <div class="row">
                                <div class="col-md-2 col-lg-2"><img class=" card-img-till img-responsive"
                                        src="<?php echo get_template_directory_uri() . '/images/Frame 552.png'; ?>">
                                </div>
                                <div class="col-md-10 col-lg-10 ">
                                    <h6 class="til-h">Tilmann althoff</h6>
                                    <p>March 25, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="padding:14px">

                <div class="col-md-6 col-lg-4 sm-6 mb-3">
                    <div class="card blogs-c">
                        <img class="img-fluid card-img" alt="100%x280" src="<?php echo get_template_directory_uri() . '/images/card-header-1.png'; ?>">
                        <button class="btn-life-s-b">Lifestyle</button>
                        <div class="s-card card-body">
                            <h4 class="card-title ">How Vacuuming Can Improve Your Mood</h4>
                            <p class="card-text">Discover the surprising link between cleaning and happiness.
                                Learn how simple household chores like vacuuming can have a positive impact on your
                                mental well-being and create a sense of accomplishment.</p>
                        </div>
                        <div class="footer-sec2">
                            <div class="row">
                                <div class="col-md-3 col-lg-3"><img class=" card-img-1 img-responsive"
                                src="<?php echo get_template_directory_uri() . '/images/Frame 552.png'; ?>"></div>
                                <div class="col-md-9 col-lg-9 ">
                                    <h5 class=" ">Tilmann althoff</h5>
                                    <p>March 25, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 sm-6 mb-3">
                    <div class="card blogs-c">
                        <img class="img-fluid card-img" alt="100%x280" src="<?php echo get_template_directory_uri() . '/images/card-header-2.png'; ?>">
                        <button class="btn-life-s-b">Lifestyle</button>
                        <div class="s-card card-body">
                            <h4 class="card-title">Cultivating Calmness in a Busy World</h4>
                            <p class="card-text">Explore the benefits of meditation for reducing stress and enhancing
                                overall well-being. Learn practical tips on how to incorporate meditation into your
                                daily routine for a more balanced life.</p>
                        </div>
                        <div class="footer-sec2">
                            <div class="row">
                                <div class="col-md-3 col-lg-3"><img class=" card-img-1 img-responsive"
                                src="<?php echo get_template_directory_uri() . '/images/Frame 552.png'; ?>"></div>
                                <div class="col-md-9 col-lg-9 ">
                                    <h5 class=" ">Tilmann althoff</h5>
                                    <p>March 25, 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 sm-6 mb-3">
                    <div class="card blogs-c">
                        <img class="img-fluid card-img" alt="100%x280" src="<?php echo get_template_directory_uri() . '/images/card-header-3.png'; ?>" />
                        <button class="btn-life-s-b">Lifestyle</button>
                        <div class="s-card card-body">
                            <h4 class="card-title">A Guide to Thriving as a Highly Sensitive Person</h4>
                            <p class="card-text">Learn how to embrace your high sensitivity as a unique trait that can
                                enrich your life. Discover practical strategies for managing overstimulation and
                                thriving in a world that may seem too intense.</p>
                        </div>
                        <div class="footer-sec2">
                            <div class="row">
                                <div class="col-md-3 col-lg-3"><img class=" card-img-1 img-responsive"
                                src="<?php echo get_template_directory_uri() . '/images/Frame 552.png'; ?>"></div>
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

       
   

 
    <div class="text-center col-md-12">
        <button class="see-more-c">See More</button>
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