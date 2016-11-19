<?php get_header(); ?>



<?php if (have_posts()) : while (have_posts()) : the_post(); //start the loop ?>


  <?php $images = get_post_meta(get_the_ID(), 'vdw_gallery_id', true); ?>

<section class="client__section">
  <div class="client__links">
    <?php previous_post_link('%link', 'Previous Client Portfolio'); ?> |
    <?php next_post_link('%link', 'Next Client Portfolio'); ?>
  </div>

  <h1 class="clients"><?php the_title();?></h1>
  <div class="clear"></div>

  <div class="container client__content">
    <div class="row">
      <hr>
      <div class="col-lg-6">
        <?php
          foreach ($images as $image) {
            echo "<div class='col-lg-12'>" . wp_get_attachment_image($image, 'full', "",['class'=>'img-responsive']) . "</div>";
            // echo wp_get_attachment_image($image, 'large');
          }

          ?>
      </div>
      <div class="col-lg-6">
          <?php the_content();?>
      </div>
      </div>
    </div>
  </div>

</section>



<?php endwhile; endif; // End the loop?>





  <?php get_footer(); ?>
