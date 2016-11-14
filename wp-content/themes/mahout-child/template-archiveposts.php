<?php
/*
Template Name: Archives Posts
*/
?>

<?php get_header(); ?>


  <div class="container blog__content">
    <div class="row">



<?php
  $args = [
    'post_type' => 'post',
    'posts_per_page' => 5,
  ];

  $blog_query = new WP_Query($args);

    if($blog_query->have_posts()) : while($blog_query->have_posts()) : $blog_query->the_post();
?>

    <div class="col-lg-6 ">
      <?php the_post_thumbnail('full',['class'=>'img-responsive']);?>

    </div>
    <div class="col-lg-6 blog__paragraph ">
        <h1><?php the_title();?></h1>
        <?php the_excerpt();?>


    </div>





  <?php endwhile;endif; ?>
  <?php wp_reset_postdata(); ?>

</div>
</div>

<?php get_footer(); ?>
