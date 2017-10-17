<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" 
 type="image/png" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
<link rel="stylesheet" href="https://bootswatch.com/readable/bootstrap.min.css">
<link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/main.css">
  <title>Liberty Vice</title>
  <?php wp_head(); ?>
  <style type="text/css">
  	html { margin-top: 0px !important; }
  </style>

</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" id="navLogo" href="<?php echo home_url(); ?>">Liberty Vice</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
   
      <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container_id'      => 'bs-example-navbar-collapse-1',
                'container_class'   => 'collapse navbar-collapse',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container-fluid">