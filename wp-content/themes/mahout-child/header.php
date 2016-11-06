<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Team Mahout</title>
  

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<?php wp_head(); ?>

</head>

<header>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

              <?php
                $args = [
                  'theme_location' => 'primary'
                ]
              ?>

              <?php wp_nav_menu($args);?>
</div>

<div id="main">
<img src="/wp-content/themes/mahout-child/img/mahoutlogo.png">
  <span style="color:#19a0c1;font-size:50px;cursor:pointer" onclick="openNav()">&#9776; </span>
</div>
</header>


    