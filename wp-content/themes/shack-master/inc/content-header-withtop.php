
<div class="top-head">
  <div class="row top-head-mobile">
    <div class="col-md-5 offset-md-1 hiddemobile">
    <div class="top-contact-left">
      <i class="fa fa-envelope-o" aria-hidden="true"></i>
      <p><?php the_field('ingrese_correo_principal',23)?></p>
      <p>|</p>
      <i class="fa fa-phone" aria-hidden="true"></i>
      <p><?php the_field('ingrese_telefono_de_contacto',23)?></p>

    </div>
     
    </div>
    <div class="col-md-5 col-xs-12 d-flex justify-content-end">
<!---------------------------->
<!------REDES SOCIALES ------->
<!---------------------------->

      <div class="top-contact-right">
        <a href="<?php the_field('ingrese_url_tripadvisor',23)?>"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
        <a href="<?php the_field('ingrese_url_facebook',23)?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
        <a href="<?php the_field('ingrese_url_instagram',23)?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="<?php the_field('ingrese_url_youtube',23)?>"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        <a href="<?php the_field('ingrese_url_twiter',23)?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class="col-md-1"></div>
  </div>
</div>


<div class="header" id="myHeader">
  <div class="row hiddemobile">
    <div class="col-md-2 offset-md-1">
      <?php get_template_part('inc/content-logo', 'light'); ?> 
    </div>
    <div class="col-md-8 bl-nav-head">
      <?php wp_nav_menu('nav_menu'); ?>
    </div>
  </div>
  <div class="row hiddepc">
    <div class="col-xs-6"><?php get_template_part('inc/content-logo', 'light'); ?></div>
    <div class="col-xs-6"><?php get_template_part('inc/content-menu', 'hamburger'); ?></div>
  </div>
</div>

<!--------------------------------------------->
<!-- EFECTO SCROLL DEL HEADER -->
<!--------------------------------------------->
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>