<?php
/**
* the About Us template 
* Template Name: About-us
* @package Inhabitent
*/
?>
<?php get_header(); ?>

<?php while(have_posts()):the_post(); ?>

<div class="hero-image" style="background: url(<?php the_post_thumbnail_url('full')?>) no-repeat, linear-gradient(rgba(0,0,0,0.6),transparent) no-repeat; background-size: 20% cover cover;
">
	<h1 style="color: #fff;"><?php the_title();?></h1>
</div>

<div>
	<h2><?php the_field('section_1_heading') ?></h2>
	<p><?php the_field('section1')?> </p>
</div>
<div>
	<h2><?php the_field('section_2_heading') ?></h2>
	<p><?php the_field('section_2') ?></p>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>