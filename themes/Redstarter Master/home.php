<?php
dynamic_sidebar('banner-image-sidebar');
get_header();
?>

<h2 class="home">shop stuff</h2>
<div id="shop">
	<?php $terms = get_terms(array("type")) ; ?>

	<?php foreach ($terms as $term) : ?>
		
		<div class="product-category-container">
			<img class="product-icon" src="<?php echo get_bloginfo('stylesheet_directory')?>/images/product-type-icons/<?php echo $term->name?>.svg">
			<p class="product-blurb"><?php echo $term->description?></p>
			<a type="submit" href="<?php echo get_term_link($term->term_id);?>" class="button-green"><?php echo $term->name?> stuff</a>
		</div>
	<?php endforeach; ?>

</div>
<h2 class="home">inhabitent journal</h2>
<div id="blog">
		<?php $query = new WP_Query(array(
		"posts_per_page" =>3,
	));
	while ( $query->have_posts() ) : $query->the_post(); ?>
		<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-container">
			<div class="post-img"><?php the_post_thumbnail( '' ); ?></div>
		<?php endif; ?>
			<p><?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?></p>
			<h3><a href="<?php the_permalink?>"><?php the_title()?></a></h3> 
			<a href="<?php the_permalink();?>" class="read-more">read entry</a>
		</div>

	<?php endwhile; ?>	
</div>
<h2 class=home>latest adventures</h2>
<div id="adventures">
			<?php $query_adventure = new WP_Query(array( "post_type" => "adventure",
		"posts_per_page" =>4,
	)); ?>
	<?php while ( $query_adventure->have_posts() ) : $query_adventure->the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( has_post_thumbnail('medium') ) :?>
				<div class="adventure-img">
				<?php the_post_thumbnail(); ?>
				</div>
			<?php endif;?>
			<?php the_title( sprintf( '<h3 class="adventure-title"><a href="%s" rel="bookmark">', esc_url(get_permalink() ) ), '</a</h3>' ) ; ?>
			<button class="read-more">read more</button>
		</header>
	</article>
<?php endwhile; ?>
</div>
<a id="more-adventures" class="button-green" href="<?php echo get_post_type_archive_link( 'adventure' );?>">more adventures</a>
<?php get_footer();?>