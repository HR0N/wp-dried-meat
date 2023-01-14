<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>

	<footer id="colophon" class="site-footer footer">
        <div class="footer-wrap">
            <div class="footer-title">Залишились питання?</div>
            <div class="footer-description">Задайте їх у наших групах у соціальних мережах</div>
            <div class="footer-social">
                <a href="#" class="social"><img src="<?php echo get_template_directory_uri().'/media/social/telegram.webp'?>" alt="telegram">Telegram</a>
                <a href="#" class="social"><img src="<?php echo get_template_directory_uri().'/media/social/viber.webp'?>" alt="telegram">Viber</a>
                <a href="#" class="social"><img src="<?php echo get_template_directory_uri().'/media/social/instagram.webp'?>" alt="telegram">Instagram</a>
            </div>
            <div class="footer-info">
                <div class="phone"><div class="icon"><i class="fa-solid fa-phone"></i></div>+38 (123) 123-45-67</div>
                <div class="address"><div class="icon"><i class="fa-solid fa-location-dot"></i></div>Украина, 321050, г. Киев, Бульв. Шевченка 11, дом, строение, номер кабинета</div>
                <div class="mail"><div class="icon"><i class="fa-regular fa-envelope"></i></div>mai@gmail.com</div>
            </div>
        </div>
        <!--<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscores' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'underscores' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores' ), 'underscores', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div> .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
