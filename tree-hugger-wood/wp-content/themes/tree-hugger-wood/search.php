<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package tree-hugger-wood
 */

get_header();
?>

<!-- inner-banner start -->
<section class="main-banner inner-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="banner-content">
					<h1 class="h1-title">Search Results for: <?php echo  get_search_query() ?></h1>
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
					<main id="primary" class="site-main">



						<?php if (have_posts()) : ?>

						<?php
							/* Start the Loop */
							while (have_posts()) :
								the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part('template-parts/content', 'search');

							endwhile;

							the_posts_navigation();

						else :

							get_template_part('template-parts/content', 'none');

						endif;
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
