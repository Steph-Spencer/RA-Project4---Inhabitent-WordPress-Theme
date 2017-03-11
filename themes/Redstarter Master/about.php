<?php
/**
* the About Us template 
* Template Name: About-us
* @package Inhabitent
*/
?>
<?php get_header(); ?>
<div class="hero-image"><?php the_post_thumbnail('large');?></div>

<div><?php the_field('section1')?></div>
<div><?php the_field('section2') ?></div>

<?php get_footer(); ?>