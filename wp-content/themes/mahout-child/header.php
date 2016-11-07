<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Team Mahout</title>
  

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
<img src="/wp-content/themes/mahout-child/img/mahoutlogo.png">
</div>
</header>
