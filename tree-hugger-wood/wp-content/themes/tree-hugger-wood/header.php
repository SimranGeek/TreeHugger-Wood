<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tree-hugger-wood
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/assets/fonts/Archivo-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/assets/fonts/Archivo-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/assets/fonts/Archivo-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/assets/fonts/Archivo-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/assets/fonts/Taviraj-LightItalic.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri() ?>/assets/fonts/Taviraj-SemiBold.woff2" as="font" type="font/woff2" crossorigin>

	<?php wp_head(); ?>
</head>
<?php
$inventory_btn = get_field('view_our_inventory', 'option');
$email = get_field('email_address', 'option');
$phone_number = get_field('phone_number', 'option');
?>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary" title="Skip to content"><?php esc_html_e('Skip to content', 'tree-hugger-wood'); ?></a>

		<!-- Header Start -->
		<header id="masthead" class="site-header">
			<div class="container big-container">
				<div class="row">
					<div class="col-lg-2">
						<div class="site-branding">
							<div class="for-des">
								<?php the_custom_logo(); ?>
							</div>
							<?php $mobile_logo = get_field('mobile_header_logo', 'option');
							if (isset($mobile_logo) && !empty($mobile_logo)) {
							?>
								<div class="for-mob">
									<a href="<?php echo home_url(); ?>" title="TreeHuggerII_Website" class="custom-logo-link mobile-logo">
										<img width="76" height="50" src="<?php echo $mobile_logo; ?>" alt="TreeHuggerII_Website">
									</a>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="header-menu">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<span></span>
									<span></span>
									<span></span>
								</button>

								<div class="header-mobile-menu">
									<?php $mobile_bg_img = get_field('mobile_header_background_imgae', 'option');
									if (isset($mobile_bg_img) && !empty($mobile_bg_img)) {
									?>
										<div class="common-shep" style="-webkit-mask-image: url('<?php echo $mobile_bg_img; ?>');"></div>
									<?php } ?>
									<div class="for-des">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
											)
										);
										?>
									</div>
									<div class="for-mob">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'mobile-menu',
											)
										);
										?>
									</div>
									<div class="header-mobile-link for-mob">
										<div class="contact-link">
											<ul>
												<?php if (isset($email) && !empty($email)) { ?>
													<li><strong>Email:</strong><a href="mailto:<?php echo $email; ?>" title="<?php echo $email; ?>"><?php echo $email; ?></a></li>
												<?php }
												$phone_link = preg_replace('/\D/', '', $phone_number);
												if (isset($phone_number) && !empty($phone_number)) {
												?>
													<li><strong>Call:</strong>
														<a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone_number; ?>"><span class="callus"><?php echo $phone_number; ?></span>
														</a>
													</li>
													<?php }
												if (have_rows('address_repeater', 'option')) {
													while (have_rows('address_repeater', 'option')) {
														the_row();
														$address_label = get_sub_field('address_title');
														$address_txt = get_sub_field('address');
														$address_url = get_sub_field('address_link');
														if (isset($address_txt) && !empty($address_txt)) {
															if (get_row_index() == 2) {
													?>
														<li><strong>Store: </strong><a href="<?php echo $address_url; ?>" title="<?php echo $address_txt; ?>" target="_blank"><?php echo $address_txt; ?></a></li>
												<?php }
														}
													}
												}
												?>
											</ul>
										</div>
										<?php
										if (isset($inventory_btn) && !empty($inventory_btn)) {
										?>
											<div class="header-mobile-btn">
												<a href="<?php echo $inventory_btn['url']; ?>" title="<?php echo $inventory_btn['title']; ?>" class="sec-btn dark-btn" target="_blank"><?php echo $inventory_btn['title']; ?></a>
											</div>
										<?php } ?>
									</div>
								</div>
								<?php
								if (isset($inventory_btn) && !empty($inventory_btn)) {
								?>
									<div class="header-btn">
										<a href="<?php echo $inventory_btn['url']; ?>" title="<?php echo $inventory_btn['title']; ?>" class="sec-btn md-btn" target="_blank"><?php echo $inventory_btn['title']; ?></a>
									</div>
								<?php } ?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->