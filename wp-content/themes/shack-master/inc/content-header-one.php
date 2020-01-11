<head>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/style/css/header.css"; ?>">
</head>

<div class="top-head">
</div>
<div class="header fixed-top" id="myHeader">
  <div class="hiddemobile">

      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
          <h3 class="mt-3">TRUCOS DESARROLLO</h3>
        </div>
        <div class="col-md-8">
            <?php wp_nav_menu('nav_menu'); ?>
        </div>
        <div class="col-md-1"></div>
      </div>

  </div>

  <div class="row hiddepc">
    <div class="col-xs-6">
      <?php get_template_part('inc/content-menu', 'navigation'); ?>
    </div>
    <div class="col-xs-6 text-right"><?php get_template_part('inc/content-menu', 'hamburger'); ?></div>
  </div>
</div>

<!--------------------------------------------->
<!-- EFECTO SCROLL DEL HEADER -->
<!--------------------------------------------->
<script src="<?php echo get_template_directory_uri()."/style/js/header.js"; ?>"></script>
