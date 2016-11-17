<?php /* Template Name: contact Page */ ?>

<?php get_header(); ?>
<section class="photo">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 single__letter">
        <p>
          Every successful individual knows that his or her achievement depends on a community of persons working together.
        </p>
      </div>
    </div>
  </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 contact__form">
          <h1>Join Us</h1>
          <?php echo do_shortcode('[contact-form-7 id="53" title="Contact form 1"]');?>
        </div><!-- end of lg-6 -->
        <div class="col-lg-6 contact__info">
          <h1>homebase</h1>
          <p><i class="fa fa-phone" aria-hidden="true"></i>559-589-4253</p>
          <p><i class="fa fa-envelope" aria-hidden="true"></i>teammahout@gmail.com<p>
          <p>
          <hr>

              <div class="col-sm-8 col-lg-12 contact__social">
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



        </div><!-- end of lg-6 -->
      </div><!-- end of row -->
    </div><!-- end of container -->

</section>

<?php get_footer();?>
