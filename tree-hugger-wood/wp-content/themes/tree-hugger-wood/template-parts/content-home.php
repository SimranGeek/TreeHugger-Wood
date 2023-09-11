<!-- Start of Main Banner -->
<?php $banner_img = get_field('home_background_image');
$mobile_banner_img = get_field('home_mobile_background_image');
?>
<section class="main-banner">
    <div class="back-img for-des banner-back-img" style="background-image: url('<?php echo $banner_img; ?>');"></div>

    <div class="back-img for-mob banner-back-img" style="background-image: url('<?php echo $mobile_banner_img; ?>');"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="banner-content text-center white-text">
                    <?php $banner_logo = get_field('main_banner_logo_image', 'option');
                    if (isset($banner_logo) && !empty($banner_logo)) {
                    ?>
                        <div class="baner-logo wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                            <img width="267" height="269" src="<?php echo $banner_logo; ?>" alt="Treehugger">
                        </div>
                    <?php }
                    $banner_main_title = get_field('home_main_title');
                    if (isset($banner_main_title) && !empty($banner_main_title)) {
                    ?>
                        <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php echo $banner_main_title; ?></h1>
                    <?php }
                    $invontory_btn = get_field('view_our_inventory', 'option');
                    if (isset($invontory_btn) && !empty($invontory_btn)) {
                    ?>
                        <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                            <a href="<?php echo $invontory_btn['url']; ?>" title="<?php echo $invontory_btn['title']; ?>" class="sec-btn" target="_blank"><?php echo $invontory_btn['title']; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Main Banner -->

<!-- Start of About Us -->
<section class="about-sec">
    <?php $about_bg_img = get_field('about_background_image');
    if (isset($about_bg_img) && !empty($about_bg_img)) {
    ?>
        <div class="common-shep" style="-webkit-mask-image: url('<?php echo $about_bg_img; ?>');"></div>
    <?php } ?>
    <div class="container big-container">
        <div class="about-wp">
            <div class="about-content wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <?php $about_main_title = get_field('about_main_title');
                if (isset($about_main_title) && !empty($about_main_title)) {
                ?>
                    <h2 class="h2-title"><?php echo $about_main_title; ?></h2>
                <?php }
                $about_sub_title = get_field('about_sub_title');
                if (isset($about_sub_title) && !empty($about_sub_title)) {
                ?>
                    <h3 class="h3-title"><?php echo $about_sub_title; ?></h3>
                <?php } ?>
            </div>
            <?php $about_content = get_field('about_content');
            if (isset($about_content) && !empty($about_content)) {
            ?>
                <div class="about-text wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <?php echo $about_content; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Start of Our Service -->
<?php $service_bg_img = get_field('service_main_backgroud_image'); ?>
<section class="our-service-sec back-img" style="background-image: url('<?php echo $service_bg_img; ?>');">
    <div class="container big-container">
        <div class="service-wp">
            <div class="service-content white-text wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                <?php $service_main_title = get_field('service_main_title');
                if (isset($service_main_title) && !empty($service_main_title)) {
                ?>
                    <h2 class="h2-title"><?php echo $service_main_title; ?></h2>
                <?php }
                $service_main_content = get_field('service_main_content');
                if (isset($service_main_content) && !empty($service_main_content)) {
                ?>
                    <div class="service-text">
                        <?php echo $service_main_content; ?>
                    </div>
                <?php } ?>
            </div>
            <?php
            if (have_rows('services_repeater')) :
            ?>
                <div class="service-faq wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <?php while (have_rows('services_repeater')) : the_row();
                        $service_title = get_sub_field('services_repeater_title');
                        $service_content = get_sub_field('services_repeater_content');
                    ?>
                        <div class="faq-box">
                            <?php if (isset($service_title) && !empty($service_title)) { ?>
                                <h3 class="h3-title"><?php echo $service_title; ?><span><svg width="10.121" height="17.414" viewBox="0 0 10.121 17.414">
                                            <path d="M1923.892,2223.753l8,8-8,8" transform="translate(-1923.184 -2223.046)" fill="none" stroke="#fff" stroke-width="2" />
                                        </svg>
                                    </span>
                                </h3>
                            <?php }
                            if (isset($service_content) && !empty($service_content)) {
                            ?>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="faq-content" style="display: none;">
                                            <?php echo $service_content; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- End of Our Service -->


<?php if (have_rows('gallery_repeater')) : ?>
    <!-- Start of Gallery -->
    <section class="gallery-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <?php $gallery_main_title = get_field('gallery_main_title');
                    if (isset($gallery_main_title) && !empty($gallery_main_title)) {
                    ?>
                        <div class="sec-title text-center">
                            <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php echo $gallery_main_title; ?></h2>
                        </div>
                    <?php } ?>
                    <div class="gallery-tab wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><button class="gallery-dropdown-tab tab-dropdown" type="button"> <span class="gallery-active-menu">Black Walnut</span> </button>
                        <ul class="dropdown-tabbing">
                            <?php while (have_rows('gallery_repeater')) : the_row();
                                $home_gallery_title = get_sub_field('gallery_title');
                                if (isset($home_gallery_title) && !empty($home_gallery_title)) {
                            ?>
                                    <li class="<?php echo (get_row_index() ==  1) ? 'gallery-active-tab' : ''; ?>" id="<?php echo get_row_index(); ?>"><?php echo $home_gallery_title; ?></li>
                            <?php }
                            endwhile;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gallery-wp wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                <?php
                while (have_rows('gallery_repeater')) : the_row();
                    if (get_row_index() == 1) {
                        $home_gallery_images = get_sub_field('gallery_images');
                        if (isset($home_gallery_images) && !empty($home_gallery_images)) {
                ?>
                            <div class="row gallery-slider" id="photo-gallery">
                                <?php foreach ($home_gallery_images as $image) : ?>
                                    <div class="col-lg-12">
                                        <div class="gallery-img back-img" style="background-image: url('<?php echo $image; ?>');"></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                <?php   }
                    }
                endwhile;
                ?>
                <div class="custom-loader gallery-loader"><i class="fas fa-spinner"></i></div>
            </div>
        </div>
        <div class="gallery-info">
            <?php $gallery_details_bg_img = get_field('gallery_background_image');
            if (isset($gallery_details_bg_img) && !empty($gallery_details_bg_img)) {
            ?>
                <div class="common-shep" style="-webkit-mask-image: url('<?php echo $gallery_details_bg_img; ?>');"></div>
            <?php }
            if (have_rows('services_details_repeater')) :
            ?>
                <div class="container">
                    <div class="gallery-faq-wp">
                        <?php while (have_rows('services_details_repeater')) : the_row();
                            $service_ttl = get_sub_field('service_details_title');
                            $service_cnt = get_sub_field('service_details_content');
                        ?>
                            <div class="faq-box wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                <?php if (isset($service_ttl) && !empty($service_ttl)) { ?>
                                    <h3 class="h3-title"><?php echo $service_ttl; ?><span><svg width="10.121" height="17.414" viewBox="0 0 10.121 17.414">
                                                <path d="M1923.892,2223.753l8,8-8,8" transform="translate(-1923.184 -2223.046)" fill="none" stroke="#fff" stroke-width="2" />
                                            </svg>
                                        </span>
                                    </h3>
                                <?php }
                                if (isset($service_cnt) && !empty($service_cnt)) {
                                ?>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="faq-content">
                                                <?php echo $service_cnt; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!-- End of Gallery -->
<?php endif; ?>


<!-- Start of Shop -->
<?php $product_bg_img = get_field('product_background_image');
$mobile_background_img = get_field('product_mobile_background_image');
?>
<section class="shop-sec back-img">
    <div class="for-des back-img shop-back-img" style="background-image: url('<?php echo $product_bg_img; ?>');"></div>
    <div class="for-mob back-img shop-back-img" style="background-image: url('<?php echo $mobile_background_img; ?>');"></div>
    <div class="container big-container">
        <div class="row" id="shop">
            <div class="col-lg-12">
                <?php $product_main_title = get_field('offer_main_title');
                if (isset($product_main_title) && !empty($product_main_title)) {
                ?>
                    <div class="sec-title text-center white-text">
                        <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php echo $product_main_title; ?></h2>
                    </div>
                <?php }
                if (have_rows('offer_product_details')) :
                ?>
                    <div class="shop-wp wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <?php while (have_rows('offer_product_details')) : the_row();
                            $product_details_ttl = get_sub_field('offer_product_title');
                            $product_details_img = get_sub_field('offer_product_image');
                            $product_details_link = (get_sub_field('offer_product_link'));
                        ?>
                            <div class="shop-box text-center">
                                <?php if (isset($product_details_img) && !empty($product_details_img)) { ?>
                                    <span class="shop-icon">
                                        <img width="81" height="43" src="<?php echo $product_details_img; ?>" alt="<?php echo $product_details_ttl; ?>">
                                    </span>
                                <?php }

                                ?>
                                <a href="<?php echo (!empty($product_details_link)) ? $product_details_link : 'javascript:void(0)'; ?>" title="<?php echo $product_details_ttl; ?>"><?php echo $product_details_ttl; ?></a>

                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif;
                $product_details_btn = get_field('offer_main_shop_button');
                if (isset($product_details_btn) && !empty($product_details_btn)) {
                ?>
                    <div class="shop-btn text-center wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <a href="<?php echo $product_details_btn['url']; ?>" title="<?php echo $product_details_btn['title']; ?>" class="sec-btn"><?php echo $product_details_btn['title']; ?></a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- End of Shop -->


<?php
get_template_part('template-parts/content', 'instagram');
?>