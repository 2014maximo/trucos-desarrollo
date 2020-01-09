<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style/css/owl.carousel.min.css"; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style/css/home.css"; ?>">
</head>

<div class="post-new">
			<?php query_posts('category_name=eventos&posts_per_page=-1&order=DESC'); ?>
			<div class="bl-news row owl-carousel owl-theme">
				<?php while(have_posts()):
						the_post();
				?>
				<a class="item" href="<?php the_permalink(); ?>">
					<div class="marc-post">
						<div class="img-event">
							<?php the_post_thumbnail(); ?>
						</div>
						<div class="bl-text-new">
							<h3><?php get_the_date( 'D M j' ); ?></h3>
							<h4><?php the_title(); ?></h4>
							<p><?php 
									echo the_excerpt();
						 		?>
							</p>
							<button class="bt-post-new">Ver más ____</button>
						</div>
					</div>
				</a>
				<?php
					endwhile;
				?> 
			</div>
		</div>


		<script src="<?php echo get_template_directory_uri()."/style/js/owl.carousel.min.js"; ?>"></script>

<script>
    jQuery('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    },
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});
$('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

</script>