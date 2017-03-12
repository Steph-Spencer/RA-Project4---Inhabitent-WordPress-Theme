<?php
/**
* the About Us template 
* Template Name: About-us
* @package Inhabitent
*/
?>
<?php get_header(); ?>
<div class="hero-image"><?php the_post_thumbnail('large');?></div>

<div>
	<h2><?php the_field('section_1_heading') ?></h2>
	<p><?php the_field('section1')?> </p>
</div>
<div>
	<h2><?php the_field('section_2_heading') ?></h2>
	<p><?php the_field('section2') ?></p>
</div>

<?php get_footer(); ?>