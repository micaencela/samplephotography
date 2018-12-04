<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/style.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">


	<title>Document</title>
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark" style="background-color:	#BEADC0 !important;">
  <a class="navbar-brand" href="#">Sample</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

      <?php 
          //output the main nav
          $args = array(
              'theme-location'=>'main-menu',
              'container'=>'ul',
              'menu_class'=>'navbar-nav'

          );
          wp_nav_menu($args);

        ?>
   <!--  <ul class="navbar-nav">
      <li class="nav-items active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul> -->
  </div>
</nav>