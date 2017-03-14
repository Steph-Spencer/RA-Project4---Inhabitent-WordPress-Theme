<?php
/**
* the Find Us template file
* Template Name: Find-us
* @package Inhabitent
*/
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div id="find-us">
		<div class="body-with-sidebar">
			<h1><?php the_title() ?></h1>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2603.6833050933697!2d-123.14036234944007!3d49.26344827922781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac457%3A0x3aea6428fa30dc6a!2s1490+W+Broadway%2C+Vancouver%2C+BC+V6H!5e0!3m2!1sen!2sca!4v1488901330138" width="1000" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

		<h2><?php the_field('header') ?></h2>
		<p><?php the_field('content') ?></p>
		<h2><?php the_field('second_header') ?></h2>
		<div><?php echo do_shortcode(get_field("form_id")) ?> </div>
	</div>
	<div class="right-sidebar"><?php dynamic_sidebar('business-info-sidebar') ?>
	</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>