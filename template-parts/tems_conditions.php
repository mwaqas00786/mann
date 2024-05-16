<?php
/*
Template Name: Terms and Conditions
*/
get_header(); 
?>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <?php
      // Start the loop.
      while ( have_posts() ) : the_post();
        the_content();
      // End the loop.
      endwhile;
      ?>
    </div>
  </div>
</div>
<?php get_footer();?>
