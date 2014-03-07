<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
	</div> <!-- /#content -->

	<footer id="pageBottom">
		<?php get_sidebar( 'footer' ); ?>

		<p class="copyright"><small>Copyright &copy; <?php echo date('Y'); ?> by <?php bloginfo( 'name' ); ?>.</small></p>
	</footer>

</div> <!-- /#wrapper -->
<?php wp_footer(); ?>
</body>
</html>