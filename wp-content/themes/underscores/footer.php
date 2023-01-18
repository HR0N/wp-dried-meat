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

    <?php

    $site_phone = isset(get_posts(['post_type'=>'us_phone', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_phone', 'numberposts'=>1])[0]->post_content : '';
    $site_address = isset(get_posts(['post_type'=>'us_address', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_address', 'numberposts'=>1])[0]->post_content : '';
    $site_email = isset(get_posts(['post_type'=>'us_email', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_email', 'numberposts'=>1])[0]->post_content : '';
    $site_social = isset(get_posts(['post_type'=>'us_social', 'numberposts'=>1])[0]) ? get_posts(['post_type'=>'us_social', 'numberposts'=>1])[0] : '';

    ?>

	<footer id="colophon" class="site-footer footer">
        <div class="footer-wrap">
            <div class="footer-title">Залишились питання?</div>
            <div class="footer-description">Задайте їх у наших групах у соціальних мережах</div>
            <div class="footer-social">
                <?php if (isset($site_social) &&  get_field('telegram', $site_social->ID) != '#'): ?>
                    <a href="<?php echo get_field('telegram', $site_social->ID); ?>" class="social"><img src="<?php echo get_template_directory_uri().'/media/social/telegram.webp'?>" alt="telegram">Telegram</a>
                <?php endif; ?>
                <?php if (isset($site_social) &&  get_field('viber', $site_social->ID) != '#'): ?>
                <a href="<?php echo get_field('viber', $site_social->ID); ?>" class="social"><img src="<?php echo get_template_directory_uri().'/media/social/viber.webp'?>" alt="viber">Viber</a>
                <?php endif; ?>
                <?php if (isset($site_social) &&  get_field('instagram', $site_social->ID) != '#'): ?>
                <a href="<?php echo get_field('instagram', $site_social->ID); ?>" class="social"><img src="<?php echo get_template_directory_uri().'/media/social/instagram.webp'?>" alt="instagram">Instagram</a>
                <?php endif; ?>
            </div>
            <div class="footer-info">
                <?php if ($site_phone != '#' && $site_phone != ''): ?>
                    <div class="phone"><div class="icon"><i class="fa-solid fa-phone"></i></div><?php echo $site_phone; ?></div>
                <?php endif; ?>
                <?php if ($site_address != '#' && $site_address != ''): ?>
                    <div class="address"><div class="icon"><i class="fa-solid fa-location-dot"></i></div><?php echo $site_address; ?></div>
                <?php endif; ?>
                <?php if ($site_email != '#' && $site_email != ''): ?>
                    <div class="mail"><div class="icon"><i class="fa-regular fa-envelope"></i></div><?php echo $site_email; ?></div>
                <?php endif; ?>



            </div>
        </div>
        <!--<div class="site-info">
			<a href="<?php
        echo esc_url( __( 'https://wordpress.org/', 'underscores' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'underscores' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscores' ), 'underscores', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div> .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
