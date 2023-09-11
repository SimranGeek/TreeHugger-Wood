<!-- Start of Main Contact -->
<section class="main-contact-sec">
    <?php $contact_bg_img = get_field('contact_background_image'); ?>
    <div class="common-shep" style="-webkit-mask-image: url('<?php echo $contact_bg_img; ?>');"></div>
    <div class="container big-container">
        <?php $banner_logo = get_field('main_banner_logo_image', 'option');
        if (isset($banner_logo) && !empty($banner_logo)) {
        ?>
            <div class="contact-logo wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <img width="267" height="269" src="<?php echo $banner_logo; ?>" alt="Treehugger">
            </div>
        <?php } ?>
        <div class="main-contact-wp">
            <div class="main-contact-content wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <h2 class="h2-title"><?php the_title(); ?></h2>
                <div class="contact-link">
                    <ul>
                        <?php $email = get_field('email_address', 'option');
                        if (isset($email) && !empty($email)) {
                        ?>
                            <li>
                                <strong>Email:</strong>
                                <a href="mailto:<?php echo $email; ?>" title="<?php echo $email; ?>"><?php echo $email; ?></a>
                            </li>
                        <?php }
                        $phone_number = get_field('phone_number', 'option');
                        $phone_link = preg_replace('/\D/', '', $phone_number);
                        if (isset($phone_number) && !empty($phone_number)) {
                        ?>
                            <li>
                                <strong>Call:</strong>
                                <a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone_number; ?>"><span class="callus"><?php echo $phone_number; ?></span></a>
                            </li>
                        <?php }
                        $address_text = get_field('contact_address_text');
                        $address_link = get_field('contact_address_link');
                        if ((isset($address_text)) && (!empty($address_text)) || (isset($address_link)) && (!empty($address_link))) {
                        ?>
                            <li class="address">
                                <strong>TreeHugger Store:</strong>
                                <a href="<?php echo $address_link; ?>" title="<?php echo $address_text; ?>" target="_blank"><?php echo $address_text; ?></a>
                            </li>
                        <?php }

                        ?>
                    </ul>
                </div>
                <?php $hour = get_field('contact_hours');
                if (isset($hour) && !empty($hour)) {
                ?>
                    <div class="time">
                        <span class="hours">Hours:</span>
                        <?php echo $hour; ?>
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
            </div>
            <div class="contact-form wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <?php echo do_shortcode('[contact-form-7 id="27da484" title="Contact Form"]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- End of Main Contact -->
<?php
get_template_part('template-parts/content', 'instagram');
?>