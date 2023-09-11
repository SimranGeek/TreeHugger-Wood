<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tree-hugger-wood
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
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
        <div class="inner-page-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/content', 'page');

                            // If comments are open or we have at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) :
                                comments_template();
                            endif;

                        endwhile; // End of the loop.
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
