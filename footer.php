<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->
	<div class="footer-menu">
		<div class="">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'footer' ) ); ?>
		</div>
	</div>
	<div id="footer" role="contentinfo">
		<div id="colophon">
			<div id="twitter">
				<a  target="_blank"  href="http://twitter.com/insecopr" rel="nofollow" title="Go to Twitter"><img src="<?php bloginfo('template_directory'); ?>/images/generics/twitter-button.jpg" width="86" height="40" alt="Follow us on Twitter"/></a>
			</div>

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>
			<div id="site-info">
				<a target="_blank" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php do_action( 'twentyten_credits' ); ?>
				<a  target="_blank" href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>
			</div><!-- #site-generator -->
		
		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->
<div id="superfooter">
	<a  target="_blank"  href="http://executionists.com" style="
	    float: left;
	    color: white;
	    text-decoration: none;
	    padding: 0px;
	    margin-top: 0px;
	    margin-left: 5px;
	">Site Designed by <br>Executionists</a>
	<a href="/sitemap" class="sitemap-menu">Sitemap</a>
	<a target="_blank" href="http://www.linkedin.com/company/inseco---industrial-systems-&-equipment-company" target="_blank">
		<img src="<?=get_template_directory_uri()?>/images/social/in.png" alt="linkedin" width="32" height="32"/>
	</a>
	<!--<a target="_blank" href="http://www.linkedin.com/company/inseco---industrial-systems-&-equipment-company" target="_blank">-->
	<!--	<img src="<?=get_template_directory_uri()?>/images/social/fb.png" alt="linkedin" width="32" height="32"/></a>-->
	<!--<a target="_blank" href="http://www.linkedin.com/company/inseco---industrial-systems-&-equipment-company" target="_blank">-->
	<!--	<img src="<?=get_template_directory_uri()?>/images/social/tw.png" alt="linkedin" width="32" height="32"/></a>-->
	<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
	
</div>
<script type="text/javascript">
 
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35058290-1']);
  _gaq.push(['_trackPageview']);
 
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

</body>
</html>
