<?php get_header(); ?>
<?php
	// get posts
	$posts = query_posts( 
		array (
			'posts_per_page' => 6,
			'orderby' => 'date',
			'order' => 'DESC',
		) 
	);
	// var_dump($posts);
?>
<div class="container">
	<div class="row">
	<?php foreach($posts as $post): ?>
		<?php 
			$postThumbnailId = get_post_thumbnail_id($post->ID);
			$postThumbnail = wp_get_attachment_image_src($postThumbnailId);
			$postThumbnailUrl = $postThumbnail[0];
			$authorName = get_the_author_meta( 'display_name', $post->post_author );
			$catArray = get_the_category( $post->ID );
		?>
		<div class="col-md-12 post-row">
			<div class="col-md-2 no-padding post-img">
				<img class="img-circle" src="<?php echo $postThumbnailUrl; ?>">
			</div>
			<div class="col-md-10 post-content">
				<a href="<?php echo $post->guid; ?>"><h3><?php echo $post->post_title; ?></h3></a>
				<p class="excerpt"><?php echo $post->post_excerpt; ?></p>
				<p class="author">作者: <?php echo $authorName; ?></p>
				<p class="date"><?php echo $post->post_date; ?></p>
				<div class="car-row">
					<?php foreach($catArray as $cat): ?>
						<span class="label label-default"><?php echo $cat->cat_name; ?></span>
					<?php endforeach; ?>
				</div>			
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</div>

<?php get_footer() ?>