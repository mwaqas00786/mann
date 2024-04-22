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

<footer class="footer-bg">
	
	<section class="section-f">
	  <div class="container">

		<div class="row ">

		  <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mb-4">
			<img src="<?php echo get_template_directory_uri();?>/images/footer__logo.svg"/>			
			<p>
				Welcome to Tillmann Althoff Coaching, where transformation meets  compassion. Our mission is to accompany you on your journey to  self-discovery and empowerment. With over 35 years of experience and a  deep commitment to personal growth,
				 Tillmann Althoff offers a unique  approach to coaching that combines expertise with empathy. 
			</p>
		  </div>

		  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

			<h6 class="">
				Important Links
			</h6>
			<p >
			  <a href="#!" class="text-reset">Home</a>
			</p>
			<p>
			  <a href="#!" class="text-reset">About</a>
			</p>
			<p>
			  <a href="#!" class="text-reset">Pricing</a>
			</p>
			<p>
			  <a href="#!" class="text-reset">Testionials</a>
			</p>
			<p>
				<a href="#!" class="text-reset">Blogs</a>
			</p>
		  </div>

		  <div class="col-md-3 col-lg-2 col-xl-3 mx-auto mb-4">
	
			<h6 class="text-uppercase fw-bold mb-4">
				Contact Us
			</h6>
			<p>
				17 Augustine Street, 50223 Frechen
			</p>
			<p>
				0177 56 444 31
			</p>
			<p>
				althoffcoaching(gmail.com
			</p>
			<p>
			  <a href="#!" class="icon-s"><img src="<?php echo get_template_directory_uri();?>/images/footer__social-links-01.svg"></a>
			  <a href="#!" class="icon-s"><img src="<?php echo get_template_directory_uri();?>/images/footer__social-links-02.svg"></a>
			  <a href="#!" class="icon-s"><img src="<?php echo get_template_directory_uri();?>/images/footer__social-links-03.svg"></a>
			</p>
		  </div>

		  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
	
			<h6 class="text-uppercase fw-bold mb-4">Operating Hours</h6>
			<p class="days">Monday - Friday <span class="time-text">09:00 - 20:00 hrs</span></p>
			<p class="days">Saturday <span class="time-text">09:00 - 18:00 hrs</span></p>
			<p class="days">Sunday<span class="time-text">09:00 - 18:00 hrs</span></p>
			<button class="book-a-btn">Book an Appointment</button>
		  </div>
	
		</div>
	
	  </div>
	</section>

	<div class="text-c">
		© 2024. Mann Und Natur. All rights reserved.
	  <a class="" href="https://mdbootstrap.com/"></a>
	</div>
	
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
