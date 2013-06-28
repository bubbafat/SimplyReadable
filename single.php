<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
		<ul class="prev-next-nav">
			<li class="prev"><?php previous_post_link('%link', '&laquo; previous'); ?></li>
			<li class="next"><?php next_post_link('%link', 'next &raquo;'); ?></li>
		</ul>
			
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				
				<?php the_content(); ?>
				
				<?php the_tags( 'Tags: ', ', ', ''); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</div>

	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>