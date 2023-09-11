<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package tree-hugger-wood
 */

get_header();
?>

<!-- inner-banner start -->
<section class="main-banner inner-banner back-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2023/08/contact-us-page.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="banner-content">
					<h1 class="h1-title"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- inner-banner end -->
<div class="blog-post inner-page-text">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div id="primary" class="content-area">
					<main id="main" class="site-main">
						<?php
						while (have_posts()) :
							the_post();

							get_template_part('template-parts/content', get_post_type());

							the_post_navigation();

							// If comments are open or we have at least one comment, load up the comment template.
							if (comments_open() || get_comments_number()) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
			<div class="col-lg-4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>

<?php
// get_sidebar();
get_footer();
