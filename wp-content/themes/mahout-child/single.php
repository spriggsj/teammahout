
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main class="site-main" role="main">
		<div class="container single__post">
			<div class="row">

		<?php
		while ( have_posts() ) : the_post();
			?>


				<div class="col-lg-10">
					<?php the_post_thumbnail('full', ['class' => 'img-responsive']);?>
				</div>
				<div class="col-lg-10">
					<h1><?php the_title();?></h1>
					<hr>
				</div>

				<div class="col-lg-10">
					<?php the_content(); ?>

				</div>







				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

?>

			<h1 class="more__posts">More Posts You Might Like</h1>


			<?php
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post); ?>

					<div class="col-md-3 ">
						<div class="col-md-8 related__category">
							<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
							<?php the_post_thumbnail('thumbnail'); ?>
							</a>
						</div>
					</div>


<?php }
wp_reset_postdata();

		endwhile; // End of the loop.
		?>


			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
