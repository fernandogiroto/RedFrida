<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name') ?> | <?php bloginfo('description') ?></title>
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
  <?php wp_head(); ?>
</head>
<!-- Menu -->
<!-- Back to top button -->
<a id="button"></a>
<nav class="navbar navbar-expand-lg navbar-light">
  <?php
  // Get Custom Logo URL
  $custom_logo_id = get_theme_mod('custom_logo');
  $custom_logo_data = wp_get_attachment_image_src($custom_logo_id, 'full');
  $custom_logo_url = $custom_logo_data[0];
  ?>
  <div class="container">
    <a class="navbar-brand title text-bg d-flex" href="<?php echo home_url() ?>" title=" <?php bloginfo('name'); ?>">
      <img src="<?php echo $custom_logo_url; ?>" width="20px">
      <span class="align-self-end pl-2"> Red</span>
      <span class="align-self-end text-second">Frida</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php wp_nav_menu(
          array(
            'menu' => 'main_nav',
            'menu_class' => 'navbar-nav',
            'theme_location' => 'primary',
            'container' => 'false',
            'walker' => new WP_Bootstrap_Navwalker()
          )
        );
        ?>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#"> <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-dark shadow py-2 px-3 title"><i class="fas fa-inbox pr-2"></i>
              info@mundodigital.pt</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<body>