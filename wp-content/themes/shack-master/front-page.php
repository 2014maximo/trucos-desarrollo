<?php
/*
Template name: Inicio
*/
?>
<?php get_header(); ?>
<head>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style/css/home.css"; ?>">
	

</head>


<?php echo do_shortcode('[smartslider3 slider=2]'); ?>




<?php get_template_part('sections/home-section', 'one'); ?>
<?php get_template_part('sections/home-section', 'two'); ?>

<?php get_footer(); ?>