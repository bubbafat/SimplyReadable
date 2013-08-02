<?php
/*
 * Template Name: My Crappy Archive
 * Description: A Page Template with a darker design.
 */
?>

<?php get_header(); ?>

<div id="main">
    <?php get_search_form(); ?>
    <h2>Stuff I wrote</h2>
    <ul>
		<?php wp_get_archives('type=postbypost'); ?>
    </ul>   
</div>

<?php get_footer(); ?>
