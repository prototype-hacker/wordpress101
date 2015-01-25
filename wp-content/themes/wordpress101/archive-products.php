<?php get_header(); ?>

<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		$postId = get_the_ID();
		$title = get_the_title();
		echo '<h1>'.$title.'</h1>';	
	} // end while
} // end if
?>


<?php get_footer(); ?>