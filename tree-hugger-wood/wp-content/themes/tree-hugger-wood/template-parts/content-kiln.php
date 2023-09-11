<style>
  /* #lumi-calculator-6478ff61f8107900299e93ce .calconic-element.calconic-formula {
    background: bisque !important;
  }

  #lumi-calculator-6478ff61f8107900299e93ce .calconic-slider .slider-size-small .calconic-slider__handle {
    background: aquamarine !important;
  } */
</style>
<script>
  (function() {
    var qs, j, q, s, d = document,
      gi = d.getElementById,
      ce = d.createElement,
      gt = d.getElementsByTagName,
      id = "calconic_",
      b = "https://cdn.calconic.com/static/js/";
    if (!gi.call(d, id)) {
      j = ce.call(d, "script");
      j.id = id;
      j.type = "text/javascript";
      j.async = true;
      j.dataset.calconic = true;
      j.src = b + "calconic.min.js";
      q = gt.call(d, "script")[0];
      q.parentNode.insertBefore(j, q)
    }
  })();
</script>

<!-- Start of Inner Banner -->
<?php $kiln_bg_img = get_field('kiln_background_image'); ?>
<section class="main-banner inner-banner back-img" style="background-image: url('<?php echo $kiln_bg_img; ?>');">
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
          $kiln_main_ttl = get_field('kiln_main_title');
          if (isset($kiln_main_ttl) && !empty($kiln_main_ttl)) {
          ?>
            <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php echo $kiln_main_ttl; ?></h1>
          <?php }
          $view_inventory_btn = get_field('view_our_inventory', 'option');
          if (isset($view_inventory_btn) && !empty($view_inventory_btn)) {
          ?>
            <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
              <a href="<?php echo $view_inventory_btn['url']; ?>" title="<?php echo $view_inventory_btn['title']; ?>" class="sec-btn" target="_blank"><?php echo $view_inventory_btn['title']; ?></a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Service Info -->
<section class="service-info-sec">
  <?php $kiln_about_bg_img = get_field('kiln_about_background_image');
  if (isset($kiln_about_bg_img) && !empty($kiln_about_bg_img)) {
  ?>
    <div class="common-shep" style="-webkit-mask-image: url('<?php echo $kiln_about_bg_img; ?>');"></div>
  <?php } ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto text-center">
        <div class="service-info-content">
          <?php $kiln_about_ttl = get_field('kiln_about_title');
          if (isset($kiln_about_ttl) && !empty($kiln_about_ttl)) {
          ?>
            <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php echo $kiln_about_ttl; ?></h2>
          <?php }
          $kiln_about_cnt = get_field('kiln_about_content');
          if (isset($kiln_about_cnt) && !empty($kiln_about_cnt)) {
          ?>
            <h3 class="h3-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php echo strip_tags($kiln_about_cnt, '<span>'); ?></h3>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Service Info -->

<!-- Start of Service Details -->
<section class="service-details-sec">
  <div class="container big-container">
    <div class="service-details-wp">
      <?php $kiln_service_image = get_field('kiln_service_image');
      if (isset($kiln_service_image) && !empty($kiln_service_image)) {
      ?>
        <div class="service-details-img back-img wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.2s" style="background-image: url('<?php echo $kiln_service_image; ?>');"></div>
      <?php } ?>
      <div class="service-details-content white-text wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
        <?php $kiln_service_ttl = get_field('kiln_service_title');
        if (isset($kiln_service_ttl) && !empty($kiln_service_ttl)) {
        ?>
          <h2 class="h2-title"><?php echo $kiln_service_ttl; ?></h2>
        <?php }
        if (have_rows('kiln_service_details_repeater')) :
        ?>
          <div class="service-details-box-wp">
            <?php while (have_rows('kiln_service_details_repeater')) : the_row();
              $service_ttl = get_sub_field('kiln_service_details_repeater_title');
              $service_cnt = get_sub_field('kiln_service_details_repeater_content');
              if (isset($service_ttl) && !empty($service_ttl)) {
            ?>
                <h3 class="h3-title"><?php echo $service_ttl; ?></h3>
              <?php }
              if (isset($service_cnt) && !empty($service_cnt)) {
              ?>
                <div class="service-details-text">
                  <?php echo $service_cnt; ?>
                </div>
            <?php }
            endwhile; ?>

          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- End of Service Details -->

<!-- Start of Calculator -->
<section class="calculator-sec">
  <?php $cal_bg_img = get_field('calculator_background_image'); ?>
  <div class="common-shep" style="-webkit-mask-image: url('<?php echo $cal_bg_img; ?>');"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="sec-title white-text text-center">
          <?php $cal_ttl = get_field('calculator_title');
          if (isset($cal_ttl) && !empty($cal_ttl)) {
          ?>
            <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php echo $cal_ttl; ?></h2>
          <?php }
          $cal_cnt = get_field('calculator_content');
          if (isset($cal_cnt) && !empty($cal_cnt)) {
          ?>
            <div class="sec-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
              <?php echo $cal_cnt; ?>
            </div>
          <?php } ?>
        </div>
        <div class="calculator-wp wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
          <div class="calconic-calculator" data-calculatorid="6478ff61f8107900299e93ce"></div>
        </div>
        <?php $phone_number = get_field('phone_number', 'option');
        $phone_link = preg_replace('/\D/', '', $phone_number);
        if (isset($phone_number) && !empty($phone_number)) {
        ?>
          <div class="calculator-btn text-center wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone_number; ?>" class="sec-btn">Call <span class="callus"><?php echo $phone_number; ?></span></a>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- End of Calculator -->

<!-- Start of Work with Us -->
<?php $ready_main_bg_img = get_field('ready_to_work_backgroud_image'); ?>
<section class="work-with-us-sec back-img" style="background-image: url('<?php echo $ready_main_bg_img; ?>');">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="work-with-content text-center white-text">
          <?php $ready_main_ttl = get_field('ready_to_work_title');
          if (isset($ready_main_ttl) && !empty($ready_main_ttl)) {
          ?>
            <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php echo $ready_main_ttl; ?></h2>
          <?php }
          $ready_main_cnt = get_field('ready_to_work_content');
          if (isset($ready_main_cnt) && !empty($ready_main_cnt)) {
          ?>
            <div class="work-with-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
              <?php echo $ready_main_cnt; ?>
            </div>
          <?php }
          $ready_main_btn = get_field('view_our_inventory', 'option');
          if (isset($ready_main_btn) && !empty($ready_main_btn)) {
          ?>
            <div class="wotk-with-btn text-center wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
              <a href="<?php echo $ready_main_btn['url']; ?>" title="<?php echo $ready_main_btn['title']; ?>" class="sec-btn" target="_blank"><?php echo $ready_main_btn['title']; ?></a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End of Work with Us -->

<?php
get_template_part('template-parts/content', 'instagram');
?>