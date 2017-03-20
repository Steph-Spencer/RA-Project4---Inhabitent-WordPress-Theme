<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div id="footer-content-wrapper">
                <div class="site-info">
                    <?php dynamic_sidebar('footer-sidebar') ?>
                </div>
                <div id="footer-logo">
                    <?php dynamic_sidebar('footer-logo-sidebar') ?>
                </div>	
            </div>
            <div id="copyright">
                <h5><?php dynamic_sidebar('copyright-sidebar')?></h5>
            </div>
				<!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
