<?php
/**
 * The template for displaying all single posts.
 *
 * @package mitm
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title() ?></h1>
				<div class="social-links">
					<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Pinterest</a></li>
					</ul>
				</div>
				<div class="post-content">
					<?php the_content() ?>
				</div>
				<div class="post-pagination">
					<div class="left"><?php next_post_link( '%link &laquo;', 'NEWER POSTS') ?></div>
					<div class="right"><?php previous_post_link( '%link &laquo;', 'OLDER POSTS' ) ?></div>
				</div>
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer() ?>
<?php get_footer(); ?>