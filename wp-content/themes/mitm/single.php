<?php
/**
* The template for displaying all single posts.
*
* @package mitm
*/
get_header(); ?>
<div id="primary" class="blog-page blog-details"><div class="banner-img">
		<figure class="studio-page-banner " style="background-image:url(<?php the_field( 'banner' ) ?>)"></figure>
</div>
<div id="main" class="container" role="main">
	
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="post-section">
		<section>
			<div class="post-title"><?php the_title() ?></div>
			<div class="post-image"><?php the_post_thumbnail() ?></div>
			<div class="post-detail">
				<?php the_content() ?>
			</div>
		</section>
		<div class="social-links">
			<ul>
				<li class="facebook"><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode( get_permalink() ) ; ?>">Facebook</a></li>
				<li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode( get_permalink() ); ?>&text=<?php echo rawurlencode( get_the_title() ); ?>&via=mitm">Twitter</a></li>
				<li class="pinterest"><a target="_blank" href="https://www.pinterest.com/pin/create/button/?url=<?php echo rawurlencode( get_permalink() ); ?>&media=<?php echo rawurlencode( get_the_post_thumbnail() ); ?>&description=<?php echo rawurlencode( get_the_title() ); ?>">Pinterest</a></li>
			</ul>
		</div>
	</div>
	
	<?php endwhile; // end of the loop. ?>
	</div><!-- #main -->
	<div class="post-pagination">
		<div class="container">
			<div class="left"><?php next_post_link( '%link', 'Previous Post') ?></div>
			<div class="right"><?php previous_post_link( '%link', 'Next Post' ) ?></div>
		</div>
		
	</div>
	</div><!-- #primary -->
	<?php get_footer() ?>
	<?php get_footer(); ?>