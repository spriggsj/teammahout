<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Team Mahout</title>
<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:100,300,300i,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php wp_head(); ?>

</head>

<header class="">

  <div id="wrapper">

      <!-- Sidebar -->
      <nav id="myNavmenu" class="navbar navbar-default navmenu navmenu-default navmenu-fixed-right offcanvas" id="sidebar-wrapper" role="navigation">
          <ul class="nav sidebar-nav">
            <?php
              $args = [
                'theme_location' => 'primary'
              ]
            ?>

            <?php wp_nav_menu($args);?>
          </ul>
      </nav>

      <button type="button" class="hamburger is-closed" data-toggle="offcanvas" data-target="#myNavmenu" data-canvas="body">
        <span class="hamb-top"></span>
        <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
      </button>
  </div>


<div id="<?php if (is_front_page()){echo 'main';} else { echo "page"; }?>">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mahoutlogo.svg">
<h1>Allow Team Mahout To Enhance Your Company With Our Web Development, Marketing, and Design Solutions</h1>
</div>

</header>
