<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">
	<div class="footer-grid">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<footer class="footer">
      <div class="container">
        <div >
          <h4>Heading</h4>
          <p>Aliqua adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. aliqua.adipisicing
            elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
        </div>

        <div>
          <h4>Heading</h4>

        </div>

        <div >
          <h4>Contact Us</h4>

        </div>
      </div>
    </footer>

<?php wp_footer(); ?>
</body>
</html>
