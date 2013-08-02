<?php get_header(); ?>

	<div class="bio-and-post-group">
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
		
			<ul class="prev-next-nav">
				<li class="prev"><?php previous_post_link('%link', '&laquo; previous'); ?></li>
				<li class="next"><?php next_post_link('%link', 'next &raquo;'); ?></li>
			</ul>
		
				<div class="post_title"><?php the_title(); ?></div>
				
				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">
					
					<?php the_content(); ?>
					
					<?php the_tags( 'Tags: ', ', ', ''); ?>

				</div>
							
				<?php edit_post_link('Edit this entry','','.'); ?>
				
			</div>
					
		<?php endwhile; endif; ?>    
	</div>
	
	<div class="disqus_comments">
		<div id="disqus_thread"></div>
		<script type="text/javascript">
				/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				var disqus_shortname = 'roberthorvick'; // required: replace example with your forum shortname
				var disqus_identifier  = <?php echo get_the_ID() ?>;
				/* * * DON'T EDIT BELOW THIS LINE * * */
				(function() {
					var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
					dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
					(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	</div>
	
<?php get_footer(); ?>