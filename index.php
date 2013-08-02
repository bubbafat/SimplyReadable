<?php get_header(); ?>
	
	<div class="index-box">
	
		<div class="bio">
			<div class="author-picture"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/me.png" width="73" height="73" alt="Robert Horvick"/></div>
			<div class="author-name">Robert Horvick</div>
			<div class="author-bio">Husband, father, geek, brewer of hoppy beers.  Robert lives near Raleigh, North Carolina with his wife and 4 kids.</div>
			<div class="author-social">
				<ul>
					<li><a href="http://facebook.com/bubbafat"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook_circle_gray32x32.png" width="32" height="32" alt="Facebook"/></a></li>
					<li><a href="https://plus.google.com/103284595660871553241/posts"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google_circle_gray32x32.png" width="32" height="32" alt="Google+"/></a></li>
					<li><a href="http://twitter.com/bubbafat"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter_circle_gray32x32.png" width="32" height="32" alt="Twitter"/></a></li>
				</ul>
			</div>
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<div class="post_title">
					<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				</div>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					<?php the_content(); ?>
				</div>

				<div class="postmetadata">
					<?php the_tags('Tags: ', ', ', '<br />'); ?>
					Posted in <?php the_category(', ') ?>
					<hr/>
				</div>
			</div>

		<?php endwhile; ?>

		<?php else : ?>

			<h2>Not Found</h2>

		<?php endif; ?>
	
	</div>

<?php get_footer(); ?>
