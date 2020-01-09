<!-- ESTE ES EL DISEÑO DEL FORMULARIO DE BÚSQUEDAS -->
<form class="form--horizontal" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<button type="submit" class="btn-searcher-form">
			<i class="fa fa-search" aria-hidden="true"></i>
		</button>
		<input type="text" name="s" placeholder="" />
</form>