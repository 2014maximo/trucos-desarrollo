	<!-- REPETIDOR DE TEXTO -->
	<div class="bltext">
		<?php
	            $count=0;
	            while ( have_rows('bloque_de_texto_seccion_1') ) : the_row(); 
	    ?>
				<p class="text-sec-one"><?php the_sub_field('ingrese_parrafo_de_texto_ seccion_1')?></p>

	<?php
	            $count++;
	             endwhile ?>

	</div><!-- Fin de repetidor de alternativas en una columna -->