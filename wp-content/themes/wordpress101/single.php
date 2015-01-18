<?php get_header(); ?>
<?php
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		$postId = get_the_ID();
		$title = get_the_title();
		$content = do_shortcode(wpautop(get_the_content()));
		$postThumbnailId = get_post_thumbnail_id($postId);
		$postThumbnail = wp_get_attachment_image_src($postThumbnailId, 'full');
		$postThumbnailUrl = $postThumbnail[0];		
	} // end while
} // end if
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 single-post">
			<img src="<?php echo $postThumbnailUrl; ?>">
			<h1><?php echo $title; ?></h1>
			<div class="content"><?php echo $content; ?></div>
		</div>
	</div>
</div>

<?php get_footer(); ?>