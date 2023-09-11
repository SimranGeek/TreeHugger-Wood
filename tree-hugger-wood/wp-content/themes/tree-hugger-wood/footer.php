<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tree-hugger-wood
 */

?>



<!-- Footer Start -->
<footer class="site-footer">
    <div class="top-footer">
        <div class="container big-container">
            <div class="top-footer-wp">
                <div class="footer-content">
                    <?php $footer_logo = get_field('footer_logo','option'); 
                    $site_name = get_bloginfo( 'name' );
                        if(isset($footer_logo) && !empty($footer_logo)) {
                    ?>
                    <div class="footer-logo">
                        <a href="<?php echo home_url(); ?>" class="custom-logo-link" title="<?php echo $site_name; ?>">
                            <img width="298" height="71" src="<?php echo $footer_logo; ?>" alt="TreeHugger II">
                        </a>
                    </div>
                    <?php } 
                        $footer_cnt = get_field('footer_content','option');
                        if(isset($footer_cnt) && !empty($footer_cnt)) { 
                    ?>
                    <div class="footer-text">
                        <?php echo $footer_cnt; ?>
                    </div>
                    <?php } ?>
                    <div class="social-link">
                        <ul>
                            <?php $facebook = get_field('facebook_link', 'option');
								if (isset($facebook) && !empty($facebook)) {
									$facebook = $facebook;
									$target = "target=_blank";
								} else {
									$facebook = "javascript:void(0);";
									$target = "";
								} 
                            ?>
                            <li>
                                <a href="<?php echo $facebook; ?>" title="Follow On Facebook" <?php echo $target; ?>><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <?php $instagram = get_field('instagram_link', 'option');
								if (isset($instagram) && !empty($instagram)) {
									$instagram = $instagram;
									$target = "target=_blank";
								} else {
									$instagram = "javascript:void(0);";
									$target = "";
								} 
                            ?>
                            <li>
                                <a href="<?php echo $instagram; ?>" title="Follow On Instagram" <?php echo $target; ?>><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'footer-menu',
                            )
                        );
                        ?>
                    </div>
                </div>
                <div class="contact-link">
                    <ul>
                        <?php $email = get_field('email_address','option'); 
                            if(isset($email) && !empty($email)) {
                        ?>
                        <li>
                            <strong>Email:</strong>
                            <a href="mailto:<?php echo $email; ?>" title="<?php echo $email; ?>"><?php echo $email; ?></a>
                        </li>
                        <?php } 
                            $phone_number = get_field('phone_number','option');
                            $phone_link = preg_replace('/\D/','',$phone_number);
                            if(isset($phone_number) && !empty($phone_number)) {
                        ?>
                        <li>
                            <strong>Call:</strong>
                            <a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone_number; ?>"><span class="callus"><?php echo $phone_number; ?></span></a>
                        </li>
                        <?php } 
                            if( have_rows('address_repeater','option') ) {
                                while( have_rows('address_repeater','option') ) {
                                    the_row();
                                    $address_label = get_sub_field('address_title');
                                    $address_txt = get_sub_field('address');
                                    $address_url = get_sub_field('address_link');
                                    if(isset($address_txt) && !empty($address_txt)) {
                                        if(get_row_index() == 1) {
                                        ?>
                                        <li>
                                            <strong><?php echo $address_label; ?></strong>
                                            <a href="<?php echo $address_url; ?>" title="<?php echo $address_txt; ?>" target="_blank"><?php echo $address_txt; ?></a>
                                        </li>
                                    <?php }
                                    }
                                }
                            }	
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-box">
        <div class="container big-container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="footer-bottom-text">
                        <div class="copy-right">
                            <p>&copy; <?php echo date('Y'); ?> <?php echo $site_name;?></p>
                        </div>
                        <div class="footer-bottom-link">
                            <ul>
                                <li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
                                <li><a href="<?php echo home_url(); ?>/terms-of-service" title="Terms of Service">Terms of Service</a></li>
                                <li><a href="<?php echo home_url(); ?>/cookies-policy" title="Cookies">Cookies</a></li>
                            </ul>
                        </div>
                        <div class="footer-other-link">
                            <p>Website Design by <a href="javascript:void(0);" target="_blank" title="Gró Social">Gró Social</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>