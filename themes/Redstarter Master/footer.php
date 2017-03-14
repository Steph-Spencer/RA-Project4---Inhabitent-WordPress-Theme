<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
                <?php dynamic_sidebar('footer-sidebar') ?>
                </div>
                <div id="footer-logo">
    				<img src="../../../logos/inhabitent-logo-tent.svg">
				</div>
				<div id="copyright">
        			<h5>copyright <span>&copy; 2016</span> inhabitent</h5>
    			</div>
				<!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
