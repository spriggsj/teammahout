<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-lg-8 socialmedia__icons">
            <div class="col-sm-3">
                <a href="https://www.facebook.com/TeamMahout/?fref=ts"><i class="fa fa-facebook" aria-hidden="true"><span>facebook</span></i></a>
            </div>
            <div class="col-sm-3">
              <a href="https://twitter.com/TeamMahout"><i class="fa fa-twitter" aria-hidden="true"><span>twitter</span></i></a>
            </div>
            <div class="col-sm-3">
              <a href="https://www.instagram.com/teammahout"><i class="fa fa-instagram" aria-hidden="true"><span>instagram</span></i></a>
            </div>
            <div class="col-sm-3">
              <a href="https://www.pinterest.com/"><i class="fa fa-pinterest" aria-hidden="true"><span>pinterest</span></i></a>
            </div>
      </div>
    </div>
    <hr>
  <div class="row">
    <div class="col-lg-12 info">
      <div class="col-sm-4 homebase">
        <h1>homebase</h1>
        <p><i class="fa fa-phone" aria-hidden="true"></i>559-589-4253</p>
        <p><i class="fa fa-envelope" aria-hidden="true"></i>teammahout@gmail.com<p>
        <p>
          &copy; <?php echo date("Y"); ?> team mahout.
        </p>
        <p> All rights reserved</p>
      </div>
      <div class="col-sm-3 ourstory">

        <?php
          $args = [
            'post_type' => 'post',
            'posts_per_page' => 1,
            'tax_query' => [
              'taxonomy' => 'category',
            ],
          ];
            $footer_query = new WP_Query($args);

            if($footer_query->have_posts()) : while($footer_query->have_posts()) : $footer_query->the_post();




          ?>


        <?php endwhile; endif; wp_reset_postdata(); ?>

        <h1>our stories</h1>
        <ul>
          <?php wp_list_categories('title_li='); ?>
        </ul>
    
      </div>
      <div class="col-sm-1 mahout__footer__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whitelogo.svg">
      </div>
    </div>

  </div>
  </div>








<?php wp_footer(); ?>


</footer>
