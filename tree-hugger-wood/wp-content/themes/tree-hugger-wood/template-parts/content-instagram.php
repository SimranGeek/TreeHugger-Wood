<div class="instagram-sec">
    <div class="container big-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <?php $instgram_main_ttl = get_field('instagram_title', 'option');
                    if (isset($instgram_main_ttl) && !empty($instgram_main_ttl)) {
                    ?>
                        <div class="title white-text">
                            <h2 class="h2-title"><?php echo $instgram_main_ttl; ?></h2>
                        </div>
                    <?php }
                    $instgram_id = get_field('instagram_id', 'option');
                    if (isset($instgram_id) && !empty($instgram_id)) {
                    ?>
                        <div class="insta-link">
                            <span class="icon"><i class="fab fa-instagram"></i></span>
                            <a href="<?php echo $instgram_id['url']; ?>" title="<?php echo $instgram_id['title']; ?>" target="_blank"><?php echo $instgram_id['title']; ?></a>
                        </div>
                    <?php } ?>
                </div>
                <div class="instagram-content wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                </div>
            </div>
        </div>
    </div>
</div>