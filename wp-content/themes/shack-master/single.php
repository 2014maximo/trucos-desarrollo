<?php get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
	<div class="container mt-5 mb-5 text-center">
		<div class="bl-title-three">
			<h2><strong><?php echo the_title(); ?></strong></h2>
		</div>
		<div class="bl-img-single">
		    <?php 
				$thumbID = get_post_thumbnail_id( get_the_ID() );
				$imgDestacada = wp_get_attachment_url( $thumbID );
			?>
		    <img src=" <?php echo $imgDestacada; ?>" alt="" class="img-fluid">
		    <p class="text-single"> <?php the_content(); ?></p>
		</div>
	</div>

	<?php endwhile; ?>
<?php get_footer(); ?>

