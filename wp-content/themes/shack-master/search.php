<!-- ESTA SERÁ LA PÁGINA DONDE SE ALMACENARÁN LOS RESULTADOS DE BÚSQUEDAS -->
<?php
/*
Template Name: Search Page
*/
?>
<?php 
	get_header(); 
	$total_results = $wp_query->found_posts;	
?>

<section class="text-center mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
				<?php if (is_lang_es()): ?>
                <h2><?php echo esc_html__( 'Resultados por', 'stack' ); ?> <span>&ldquo;<?php echo ucfirst( get_search_query() ); ?>&rdquo;</span></h2>
				<?php else: ?>
                <h2><?php echo esc_html__( 'Results for', 'stack' ); ?> <span>&ldquo;<?php echo ucfirst( get_search_query() ); ?>&rdquo;</span></h2>
				<?php endif ?>
                <p class="lead">
					<?php if (is_lang_es()): ?>
                	<span><?php echo esc_html( $total_results ); ?></span> <?php esc_html_e( 'Resultados encontrados', 'stack' ); ?>
					<?php else: ?>
                    <span><?php echo esc_html( $total_results ); ?></span> <?php esc_html_e( 'Results found', 'stack' ); ?>
					<?php endif ?>
                </p>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</section>

<div class="espacio"></div>

<section>
	<div class="container">
  		<div class="row">
    		<?php
          		while(have_posts()):
            	the_post();?>
    		<div class="col-md-4">
		    	<a href="<?php the_permalink(); ?>" target="_blank" class="bt-minipost">
					<div class="bl-img-search">
          				<?php 
				            $thumbID = get_post_thumbnail_id( get_the_ID() );
				            $imgDestacada = wp_get_attachment_url( $thumbID );
				          ?>
          				<img src=" <?php echo $imgDestacada; ?>" alt="" class="img-fluid">
        			</div>
			        <div class="feature feature-1 boxed boxed--border">
			            <h4><?php echo the_title(); ?></h4>
			        </div>
		    	</a>
			</div>
			<?php  endwhile; ?> 
		</div> <!-- end of row -->
	</div><!--end of container-->
</section>
<div class="espacio"></div>
            
<?php get_footer();