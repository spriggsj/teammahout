<?php
/*
Template Name: Archives Posts
*/
?>

<?php get_header(); ?>


  <div class="container blog__content">
    <div class="row">



<?php



  if (have_posts() ) : while (have_posts() ) : the_post();
?>

      <a href="<?php the_permalink();?>">
      <div class="col-lg-6 col-xs-12">
        <?php the_post_thumbnail('full',['class'=>'img-responsive']);?>

      </div>
      <div class="col-lg-6 blog__paragraph ">


          <h1><?php the_title();?></h1>
          <?php the_time('F j, Y'); ?>

          <?php the_excerpt();?>
          <a href="<?php the_permalink(); ?>">Read More<span>›</span></a>
      </div>
      </a>
      <div class="clear"></div>
      <hr>

  <?php endwhile;?>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12 numbers">
      <?php
      the_posts_pagination( array(
      	'mid_size' => 2,
      	'prev_text' => __( 'Back', 'textdomain' ),
      	'next_text' => __( 'Next', 'textdomain' ),
      ) );

      ?>

    </div>
  </div>
</div>

<?php wp_reset_postdata(); ?>

<?php else:  ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
