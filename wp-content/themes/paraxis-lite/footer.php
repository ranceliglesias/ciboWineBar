<?php
$contact = '';
$vision = '';
$siteMap = '';
$siteBy = 'Website by Rancel Iglesias';
$siteInfo = '45 Miracle Mile, Miami FL 33134. Phone: 305-442-4925 Email: tullio@cibowinebar.com';

$contactUs .= '<a href="#">';
$contactUs .= 'Contact US';
$contactUs .= '</a>';

// Social Net
$twitter .= '<a class="icon" href="https://twitter.com/">';
$twitter .= '<i class="fa fa-twitter"></i> &nbsp';
$twitter .= '</a>';

$google .= '<a class="icon" href="https://plus.google.com/">';
$google .= '<i class="fa fa-google"></i> &nbsp';
$google .= '</a>';

$facebook .= '<a class="icon" href="https://www.facebook.com/">';
$facebook .= '<i class="fa fa-facebook"></i> &nbsp';
$facebook .= '</a>';

$instagram .= '<a class="icon" href="https://www.instagram.com/">';
$instagram .= '<i class="fa fa-instagram"></i> &nbsp';
$instagram .= '</a>';

/**
 *	The template for displaying the footer.
 *
 *	Contains the closing of the #content div and all content after.
 *
 *	@link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *	@package WordPress
 *	@subpackage paraxis-lite
 */
?>
				</div>
			</div><!-- #content -->

			<div class="svg-container footer-svg svg-block">
				<?php oblique_svg_1(); ?>
			</div>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info container">
					<!-- <?php _e('Theme: Paraxis Lite. Built by:', 'paraxis-lite') . '<a href="https://www.machothemes.com/" title="'.__('Professional WordPress Themes', 'paraxis-lite').'">'.__('Macho Themes', 'paraxis-lite').'</a>' . __('Running on: WordPress.', 'paraxis-lite'); ?>  -->
					<?php echo $siteBy, ' ' . $contactUs; ?>
					<?php echo '<br>'; ?>
					<?php echo $siteInfo; ?>
					<?php echo '<br>'; ?>
					<?php echo 'Conect to ' . $twitter, $google, $facebook, $instagram; ?>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->

		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
