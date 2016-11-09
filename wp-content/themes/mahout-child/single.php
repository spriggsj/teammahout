
<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="container">
		<div class="row">

		<?php
		while ( have_posts() ) : the_post();
			?>
			<div class="col-md-12 title">
			<?php
			the_title();
			?>
			</div>

			<div class="col-md-offset-2 col-md-4">
			<?php
			the_post_thumbnail();
			?>

			</div>

			<div class="col-md-8">
			<?php
			the_content();
			?>
			</div>
				<?php
		
		endwhile; // End of the loop.
		?>
			</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
