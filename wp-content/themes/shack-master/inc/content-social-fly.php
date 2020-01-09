<div class="section-fly">
	<a href="<?php the_field('link_instagram',13)?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	<a href="<?php the_field('link_facebook',13)?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	<a href="http://api.whatsapp.com/send?phone=+57<?php the_field('link_whatsapp',13)?>&text=hola" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
</div>

<style>
	.section-fly {
	    background: black;
	    position: fixed;
	    right: -3%;
	    z-index: 999;
	    top: 50%;
	    display: flex;
	    flex-direction: column;
	    border-radius: 7px;
	    transition:right 1s linear;
	}
	.section-fly a i {
	    color: white;
	    font-size: 2rem;
	    border-radius: 50%;
	    border: 1px solid white;
	    height: 41px;
	    width: 41px;
	    padding: 5px;
	    text-align: center;
	    margin: 5px;
	}
	.fa-instagram:hover{
		color: #00afbb;
	}
	.fa-facebook:hover{
		color: #fbd0ba;
	}
	.fa-whatsapp:hover{
		color: #d15378;
	}
	.section-fly:hover{
		right: 0%;
	}
</style>