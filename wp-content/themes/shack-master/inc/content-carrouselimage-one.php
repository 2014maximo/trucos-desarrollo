<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style/css/owl.carousel.min.css"; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style/css/home.css"; ?>">
</head>

	<!-- REPETIDOR DE IMAGENES -->
	<div class="bl-gal owl-carousel owl-theme">
		
		<div class="content-img-one">
			<img class="img-fluid decolor" src="http://localhost/shack-base/wp-content/uploads/2019/08/liviano.png">
		</div>
		
	</div><!-- Fin de repetidor de alternativas en una columna -->


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
            items:4
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