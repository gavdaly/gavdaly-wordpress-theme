<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gavdaly
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Journal</h1>

				<p>I've tried to instil new habits before. With ok success. So this journal is going to be my public accountability. The first thing I'm going to be publicly accountable for is doing a daily journal.</p>

				<p>So just so everyone knows this isn't to help other people. It's unedited. It could get raw at times. But I'm going to have it out in the open.</p>

				<p>In the future I hope to write about my mishmash implementation of what I'm currently using.</p>


			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
