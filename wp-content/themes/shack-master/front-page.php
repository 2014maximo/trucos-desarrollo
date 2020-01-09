<?php
/*
Template name: Inicio
*/
?>
<?php get_header(); ?>
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style/css/home.css"; ?>">
	

</head>


<?php get_template_part('inc/content-carrouselimage', 'one'); ?>


</div>


<?php get_template_part('sections/home-section', 'one'); ?>

<?php get_footer(); ?>