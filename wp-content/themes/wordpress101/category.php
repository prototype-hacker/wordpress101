<?php get_header(); ?>
<?php
	$catId = get_query_var('cat');
	$args = array(
		'category'=> $catId,
		'orderby' => 'date',
		'order'    => 'DESC',
		'posts_per_page' => '6'
	);
	$posts = get_posts( $args );
?>
<div class="container">
	<div class="row">
	<?php foreach($posts as $post): setup_postdata( $post ); ?>
		<?php 
			$postThumbnailId = get_post_thumbnail_id($post->ID);
			$postThumbnail = wp_get_attachment_image_src($postThumbnailId);
			$postThumbnailUrl = $postThumbnail[0];
			$authorName = get_the_author_meta( 'display_name', $post->post_author );
		?>
		<div class="col-md-12 post-row">		
			<div class="col-md-2 post-img">
				<img class="img-thumbnail" src="<?php echo $postThumbnailUrl; ?>">
			</div>
			<div class="col-md-10 post-content">
				<a href="<?php echo $post->guid; ?>">
					<h3><?php echo $post->post_title; ?></h3>
				</a>
				<p class="excerpt"><?php echo $post->post_excerpt; ?></p>
				<p class="author">作者: <?php echo $authorName; ?></p>
				<p class="date"><?php echo $post->post_date; ?></p>
			</div>	
		</div>
	<?php endforeach; ?>
	<?php wp_reset_postdata(); ?>
	</div>
</div>


<?php get_footer(); ?>