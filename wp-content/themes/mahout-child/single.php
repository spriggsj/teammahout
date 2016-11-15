
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
					<?php the_time('F j, Y'); ?>
				</div>

				<div class="col-lg-12">
					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

					?>
				</div>




				<div class="row">
					<div class="col-xs-9 col-lg-12 stuff">
						<h1 class="more__posts">More Posts You Might Like</h1>

					<?php
		$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 6, 'post__not_in' => array($post->ID) ) );
		if( $related ) foreach( $related as $post ) {
		setup_postdata($post); ?>


								<div class=" col-xs-12 col-sm-2 related__category">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail('thumbnail',['class'=>'img-responsive']); ?>
										<h3><?php the_title(); ?></h3>
									</a>
								</div>




		<?php }
		?>
			</div>
		</div>
<?php
wp_reset_postdata();

		endwhile; // End of the loop.
		?>


			</div>


			</div>
		</main><!-- #main -->
	</div><!-- #primary -->



<?php

get_footer();
