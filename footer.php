<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package mann_und_natur
 */

?>

	<!--Footer--> 
</div>
<footer class="footer-bg">
	
	<section class="section-f">
	  <div class="container">

		<div class="row ">

		  <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
			<?php 
			if(is_active_sidebar('footer-section-1')){
				dynamic_sidebar('footer-section-1');
			}
			?>
		  </div>

		  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
		  <?php 
			if(is_active_sidebar('footer-section-2')){
				dynamic_sidebar('footer-section-2');
			}
			?>
			
		  </div>

		  <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
		  <?php 
			if(is_active_sidebar('footer-section-3')){
				dynamic_sidebar('footer-section-3');
			}
			?>
		  </div>

		  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
		  <?php 
			if(is_active_sidebar('footer-section-4')){
				dynamic_sidebar('footer-section-4');
			}
			?>
		  </div>
	
		</div>
	
	  </div>
	</section>

	<div class="text-c">
		© 2024. Mann Und Natur. All rights reserved.
	  <a class="" href="https://mdbootstrap.com/"></a>
	</div>
	
  </footer>


<?php wp_footer(); ?>
</div>

</body>
</html>
