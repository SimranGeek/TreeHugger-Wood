<!-- <style>
  #lumi-calculator-6478ff61f8107900299e93ce .calconic-element.calconic-formula {
    background: bisque !important;
  }

  #lumi-calculator-6478ff61f8107900299e93ce .calconic-slider .slider-size-small .calconic-slider__handle {
    background: aquamarine !important;
  }
</style>

<br><br><br>
<div class="calconic-calculator" data-calculatorid="6478ff61f8107900299e93ce"></div>
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
</script> -->

<!-- Start of Inner Banner -->
<?php $milling_bg_img = get_field('milling_background_image'); ?>
<section class="main-banner inner-banner back-img" style="background-image: url('<?php echo $milling_bg_img; ?>');">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto">
        <div class="banner-content text-center white-text">
          <?php $banner_logo = get_field('main_banner_logo_image');
          if (isset($banner_logo) && !empty($banner_logo)) {
          ?>
            <div class="baner-logo wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <img width="267" height="269" src="<?php echo $banner_logo; ?>" alt="Treehugger">
            </div>
          <?php }
          $banner_ttl = get_field('milling_main_title');
          if (isset($banner_ttl) && !empty($banner_ttl)) {
          ?>
            <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php echo $banner_ttl; ?></h1>
          <?php }
          $view_inventory_btn = get_field('view_our_inventory', 'option');
          if (isset($view_inventory_btn) && !empty($view_inventory_btn)) {
          ?>
            <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
              <a href="<?php echo $view_inventory_btn['url']; ?>" title="<?php echo $view_inventory_btn['title']; ?>" class="sec-btn"><?php echo $view_inventory_btn['title']; ?></a>
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
  <?php $milling_about_bg_img = get_field('milling_about_background_image');
  if (isset($milling_about_bg_img) && !empty($milling_about_bg_img)) {
  ?>
    <div class="common-shep" style="-webkit-mask-image: url('<?php echo $milling_about_bg_img; ?>');"></div>
  <?php } ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 m-auto text-center">
        <div class="service-info-content">
          <?php $milling_about_title = get_field('milling_about_title');
          if (isset($milling_about_title) && !empty($milling_about_title)) {
          ?>
            <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php echo $milling_about_title; ?></h2>
          <?php }
          $milling_about_cnt = get_field('milling_about_content');
          if (isset($milling_about_cnt) && !empty($milling_about_cnt)) {
          ?>
            <h3 class="h3-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s"><?php echo strip_tags($milling_about_cnt); ?></h3>
          <?php } ?>
        </div>
        <?php $milling_about_img = get_field('milling_about_image');
        if (isset($milling_about_img) && !empty($milling_about_img)) {
        ?>
          <div class="service-img-wp wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
            <div class="service-img back-img" style="background-image: url('<?php echo $milling_about_img; ?>');"></div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- End of Service Info -->

<!-- Start of Service Details -->
<section class="service-details-sec">
  <div class="container big-container">
    <?php $milling_service_main_ttl = get_field('milling_service_main_title');
    if (isset($milling_service_main_ttl) && !empty($milling_service_main_ttl)) {
    ?>
      <div class="service-details-title">
        <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php echo $milling_service_main_ttl; ?></h2>
      </div>
    <?php }
    if (have_rows('milling_service_details_repeater')) :
    ?>
      <div class="service-details-wp">
        <?php while (have_rows('milling_service_details_repeater')) : the_row();
          $service_title = get_sub_field('milling_service_details_main_title');
          $service_sub_title = get_sub_field('milling_service_details_sub_title');
          $service_cnt = get_sub_field('milling_service_details_content');
          $service_link = get_sub_field('milling_service_details_url');
          $service_link_txt = get_sub_field('milling_service_details_link_text');
        ?>
          <div class="service-details-content wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
            <?php if (isset($service_title) && !empty($service_title)) { ?>
              <h3 class="h3-title"><?php echo $service_title; ?></h3>
            <?php }
            if (isset($service_sub_title) && !empty($service_sub_title)) {
            ?>
              <span class="price"><?php echo $service_sub_title; ?></span>
            <?php }
            if (isset($service_cnt) && !empty($service_cnt)) {
            ?>
              <div class="service-details-text">
                <?php echo $service_cnt; ?>
              </div>
            <?php }
            if (((isset($service_link)) && (!empty($service_link))) || (isset($service_link_txt)) && (!empty($service_link_txt))) {
            ?>
              <div class="service-details-link">
                <a href="<?php echo (!empty($service_link)) ? $service_link : 'javascript:void(0)'; ?>" title="<?php echo $service_link_txt; ?>"><?php echo $service_link_txt; ?></a>
              </div>
            <?php } ?>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</section>
<!-- End of Service Details -->

<!-- Start of Work with Us -->
<?php $locally_bg_img = get_field('locally_source_main_background_image'); ?>
<section class="work-with-us-sec back-img" style="background-image: url('<?php echo $locally_bg_img; ?>');">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="work-with-content text-center white-text">
          <?php $locally_ttl = get_field('locally_source_main_title');
          if (isset($locally_ttl) && !empty($locally_ttl)) {
          ?>
            <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php echo $locally_ttl; ?></h2>
          <?php }
          $locally_cnt = get_field('locally_source_main_content');
          if (isset($locally_cnt) && !empty($locally_cnt)) {
          ?>
            <div class="work-with-text wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
              <?php echo $locally_cnt; ?>
            </div>
          <?php }
          $view_inventory_btn = get_field('view_our_inventory', 'option');
          if (isset($view_inventory_btn) && !empty($view_inventory_btn)) {
          ?>
            <div class="wotk-with-btn text-center wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
              <a href="<?php echo $view_inventory_btn['url']; ?>" title="<?php echo $view_inventory_btn['title']; ?>" class="sec-btn"><?php echo $view_inventory_btn['title']; ?></a>
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