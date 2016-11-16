<?php /* Template Name: contact Page */ ?>

<?php get_header(); ?>
  <!-- <h1>Come And Be A Part Of Our Community</h1> -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri();?>/img/elephantFamily.png" alt="" class="img-responsive"/>
      </div><!-- end of lg-6 -->
      <div class="col-lg-6">
        <?php echo do_shortcode('[contact-form-7 id="53" title="Contact form 1"]');?>
      </div><!-- end of lg-6 -->
    </div><!-- end of row -->
  </div><!-- end of container -->

<?php get_footer();?>
