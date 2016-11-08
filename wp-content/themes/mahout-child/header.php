<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Team Mahout</title>
<link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:100,300,300i,400" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php wp_head(); ?>

</head>

<header>
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

<div id="main">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mahoutlogo.png">
<h1>With Team Mahout Enhance Your Company With Our Web Development, Marketing, and Design</h1>
</div>

</header>
