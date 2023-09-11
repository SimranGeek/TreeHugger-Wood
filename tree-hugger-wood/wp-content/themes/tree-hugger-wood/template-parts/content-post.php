<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dial-one
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if (is_singular()) :
			if ('post' === get_post_type()) :
				tree_hugger_wood_post_thumbnail();
		?>
				<div class="entry-meta">
					<?php
					tree_hugger_wood_posted_on();
					tree_hugger_wood_posted_by();
					?>
				</div><!-- .entry-meta -->
			<?php
			endif;
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark" title="' . get_the_title() . '">', '</a></h2>');
			if ('post' === get_post_type()) :
				tree_hugger_wood_post_thumbnail();
			?>
				<div class="entry-meta">
					<?php
					tree_hugger_wood_posted_on();
					tree_hugger_wood_posted_by();
					?>
				</div><!-- .entry-meta -->
		<?php
			endif;

		endif;
		?>
	</header>



	<div class="entry-content">
		<?php
		if (is_singular()) :
			the_content(sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'campbel-construction'),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			));

			wp_link_pages(array(
				'before' => '<div class="page-links">' . esc_html__('Pages:', 'campbel-construction'),
				'after'  => '</div>',
			));
		else :
			the_excerpt();
		?>
			<div class="submit-btn">
				<a class="sec-btn" href="<?php echo get_the_permalink(); ?>" title="Read More"><span>Read more</span></a>
			</div>
		<?php
		endif;
		?>
	</div><!-- .entry-content -->
</div><!-- swaps #post-<?php the_ID(); ?> -->