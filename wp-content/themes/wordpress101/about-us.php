<?php 
    /*
    Template Name: About Us
    */
    get_header();
?>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		// $postId = get_the_ID();
		$title = get_the_title();
		$content = do_shortcode(wpautop(get_the_content()));	
	} // end while
} // end if
?>
<div class="container">
	<div class="row">
	 	<div class="col-md-12 page-template">
	 		<h1><?php echo $title; ?></h1>
	 		<div class="content">
	 			<?php echo $content; ?>
	 		</div>
	 		<div class="gmap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d903.6199870107608!2d121.52036099193938!3d25.05171702501831!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xdddc8f2e30e5f241!2sChangee!5e0!3m2!1sen!2stw!4v1422168487153" width="600" height="400" frameborder="0" style="border:0"></iframe>
	 		</div>
	 		<div class="contact">
	 			<?php echo do_shortcode('[contact-form-7 id="62" title="Contact form 1"]'); ?>
	 		</div>
	 	</div>
	</div>
</div>



<?php get_footer(); ?>