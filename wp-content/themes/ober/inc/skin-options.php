<?php
/**
 * Skin
**/
function ober_skin() {
	$theme_ui = get_field( 'theme_ui', 'option' );
	$bg_color = get_field( 'bg_color', 'options' );
	$extra_bg_color = get_field( 'extra_bg_color', 'options' );
	$text_color = get_field( 'text_color', 'options' );
	$theme_color = get_field( 'theme_color', 'options' );
	$btn_color = get_field( 'btn_color', 'options' );
	$base_font_size = get_field( 'base_font_size', 'options' );
	$heading_font_size = get_field( 'heading_font_size', 'options' );
	$post_heading_font_size = get_field( 'post_heading_font_size', 'options' );

	$text_font_family = get_field( 'text_font_family', 'options' );
	$primary_font_family = get_field( 'primary_font_family', 'options' );

	$menu_items_size = get_field( 'menu_items_size', 'options' );
	$sub_menu_items_size = get_field( 'sub_menu_items_size', 'options' );

	$preloader_color = get_field( 'preloader_color', 'options' );

	$text_color_light = get_field( 'text_color_light', 'options' );
	$bg_color_light = get_field( 'bg_color_light', 'options' );
	$extra_bg_color_light = get_field( 'extra_bg_color_light', 'options' );

	$disable_parallax = get_field( 'disable_parallax', 'options' );
	$disable_figures = get_field( 'disable_figures', 'options' );
	$parallax_img_1_left = get_field( 'parallax_img_1_left', 'options' );
	$parallax_img_1_right = get_field( 'parallax_img_1_right', 'options' );
	$parallax_img_2_left = get_field( 'parallax_img_2_left', 'options' );
	$parallax_img_2_right = get_field( 'parallax_img_2_right', 'options' );
	$parallax_img_3_left = get_field( 'parallax_img_3_left', 'options' );
	$parallax_img_3_right = get_field( 'parallax_img_3_right', 'options' );
	$parallax_img_4_left = get_field( 'parallax_img_4_left', 'options' );
	$parallax_img_4_right = get_field( 'parallax_img_4_right', 'options' );
	$parallax_img_5_right = get_field( 'parallax_img_5_right', 'options' );
?>

<style>

	/* Paragraphs Color */
	<?php if ( $text_color_light ) : ?>
	body,
	input[type="text"],
	input[type="email"],
	input[type="search"],
	input[type="password"],
	input[type="tel"],
	input[type="address"],
	input[type="number"],
	textarea,
	input:focus,
	textarea:focus,
	.block-quote,
	blockquote,
	.block-quote,
	.wp-block-quote,
	.wp-block-quote.is-large,
	.wp-block-quote.is-style-large,
	.wp-block-pullquote,
	select,
	.custom-select,
	.alert-success,
	.breadcrumbs a,
	.footer .copyright-text a,
	.footer .footer-heading a,
	.section.hero-started .info-list ul li strong,
	.services-item .title,
	.works-items.works-list-items .works-item .desc .name,
	.archive-item .desc .title a,
	.m-details .details-label strong,
	.post-content ol,
	.post-content ul,
	.content-sidebar .search-form input[type="text"],
	.content-sidebar .search-form input[type="search"],
	.wp-block-search input[type="text"],
	.wp-block-search input[type="search"],
	.wc-block-product-search__fields input[type="search"],
	.comment-box__details {
		color: <?php echo esc_attr( $text_color_light ); ?>;
	}
	<?php endif; ?>
	<?php if ( $text_color ) : ?>
	body.light-skin,
	body.light-skin input[type="text"],
	body.light-skin input[type="email"],
	body.light-skin input[type="search"],
	body.light-skin input[type="password"],
	body.light-skin input[type="tel"],
	body.light-skin input[type="address"],
	body.light-skin input[type="number"],
	body.light-skin textarea,
	body.light-skin input:focus,
	body.light-skin textarea:focus,
	body.light-skin .block-quote,
	body.light-skin blockquote,
	body.light-skin .block-quote,
	body.light-skin .wp-block-quote,
	body.light-skin .wp-block-quote.is-large,
	body.light-skin .wp-block-quote.is-style-large,
	body.light-skin .wp-block-pullquote,
	body.light-skin select,
	body.light-skin .custom-select,
	body.light-skin .alert-success,
	body.light-skin .breadcrumbs a,
	body.light-skin .footer .copyright-text a,
	body.light-skin .footer .footer-heading a,
	body.light-skin .section.hero-started .info-list ul li strong,
	body.light-skin .services-item .title,
	body.light-skin .works-items.works-list-items .works-item .desc .name,
	body.light-skin .archive-item .desc .title a,
	body.light-skin .m-details .details-label strong,
	body.light-skin .post-content ol,
	body.light-skin .post-content ul,
	body.light-skin .content-sidebar .search-form input[type="text"],
	body.light-skin .content-sidebar .search-form input[type="search"],
	body.light-skin .wp-block-search input[type="text"],
	body.light-skin .wp-block-search input[type="search"],
	body.light-skin .wc-block-product-search__fields input[type="search"],
	body.light-skin .comment-box__details {
		color: <?php echo esc_attr( $text_color ); ?>;
	}
	<?php endif; ?>

	/* BG Color */
	<?php if ( $bg_color_light ) : ?>
	body,
	.single-portfolio .m-titles:before {
		background-color: <?php echo esc_attr( $bg_color_light ); ?>;
	}
	<?php endif; ?>
	<?php if ( $bg_color ) : ?>
	body.light-skin,
	body.light-skin .single-portfolio .m-titles:before {
	 background-color: <?php echo esc_attr( $bg_color ); ?>;
 	}
	<?php endif; ?>

	/* Extra BG Color */
	<?php if ( $extra_bg_color_light ) : ?>
	.preloader:before,
	.menu-full-overlay:before,
	.section.section-inner,
	.section-bg,
	.section.hero-started:before,
	.skills-item .dots .dot,
	.services-item .icon,
	.works-item .image:before,
	.works-item .image:after,
	.works-item .image .img:before,
	.works-item .image .img:after,
	.pricing-item,
	.blog-items .archive-item .image:before,
	.blog-items .archive-item .image:after {
		background-color: <?php echo esc_attr( $extra_bg_color_light ); ?>;
	}
	@media screen and (max-width: 1200px) {
		.header.sticky {
			background: <?php echo esc_attr( $extra_bg_color_light ); ?>;
		}
	}
	<?php endif; ?>
	<?php if ( $extra_bg_color ) : ?>
	body.light-skin .preloader:before,
	body.light-skin .menu-full-overlay:before,
	body.light-skin .section.section-inner,
	body.light-skin .section-bg,
	body.light-skin .section.hero-started:before,
	body.light-skin .skills-item .dots .dot,
	body.light-skin .services-item .icon,
	body.light-skin .works-item .image:before,
	body.light-skin .works-item .image:after,
	body.light-skin .works-item .image .img:before,
	body.light-skin .works-item .image .img:after,
	body.light-skin .pricing-item,
	body.light-skin .blog-items .archive-item .image:before,
	body.light-skin .blog-items .archive-item .image:after {
		background-color: <?php echo esc_attr( $extra_bg_color ); ?>;
	}
	@media screen and (max-width: 1200px) {
		body.light-skin .header.sticky {
			background: <?php echo esc_attr( $extra_bg_color ); ?>;
		}
	}
	<?php endif; ?>

	<?php if ( $theme_color ) : ?>
	/* Theme Color */
	a,
	a:link,
	a:visited,
	a.lnk,
	.lnk,
	.wp-block-calendar a,
	.is-style-outline .wp-block-button__link,
	.menu-full ul li a:hover .char,
	.menu-full ul li a:hover .word,
	.menu-full ul li ul li a:hover .char,
	.menu-full ul li ul li a:hover .word,
	.menu-full ul li ul li.active>a,
	.menu-full ul li.active>a,
	.menu-social-links a:hover i,
	.footer .copyright-text a:hover,
	.footer .footer-heading a:hover,
	.social-links a:hover,
	.m-titles .m-subtitle.red,
	.h-titles .h-subtitle.red,
	.numbers-item .icon,
	.services-item .icon,
	.m-page-navigation a:hover .h-title,
	.content-sidebar ul li a:hover,
	.post-content .wp-block-archives li a:hover,
	.wp-block-calendar tfoot a,
	.content-sidebar ul li a.rsswidget,
	.wp-block-rss li a,
	.share-post .share-btn:hover,
	.is-style-outline>.wp-block-button__link:not(.has-text-color),
	.wp-block-button__link.is-style-outline:not(.has-text-color),
	.error-page__num,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-mini-cart__buttons a.button,
	.woocommerce-mini-cart__buttons button.button,
	.woocommerce-mini-cart__buttons input.button,
	.woocommerce-js #respond input#submit,
	.woocommerce-js a.button,
	.woocommerce-js button.button,
	.woocommerce-js input.button,
	.woocommerce-js .woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-js .woocommerce-mini-cart__buttons a.button,
	.woocommerce-js .woocommerce-mini-cart__buttons button.button,
	.woocommerce-js .woocommerce-mini-cart__buttons input.button,
	.woocommerce .products div.product .button.add_to_cart_button,
	.woocommerce-js .products div.product .button.add_to_cart_button,
	.woocommerce .star-rating span:before,
	.woocommerce-js .star-rating span:before,
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button,
	.woocommerce #review_form #respond .form-submit .submit,
	.woocommerce-js #review_form #respond .form-submit .submit,
	.woocommerce .cart .button[name="update_cart"],
	.woocommerce-js .cart .button[name="update_cart"],
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.alt,
	.woocommerce-js #respond input#submit.alt,
	.woocommerce-js a.button.alt,
	.woocommerce-js button.button.alt,
	.woocommerce-js input.button.alt,
	.product-categories .current-cat,
	.product-categories .current-cat a,
	.woocommerce ul.product_list_widget li a.remove:hover,
	ul.product_list_widget li a.remove:hover,
	.woocommerce-js ul.product_list_widget li a.remove:hover,
	body.light-skin a.wp-block-button__link,
	body.light-skin .wp-block-group.has-background p,
	body.light-skin .wp-block-media-text.has-background {
		color: <?php echo esc_attr( $theme_color ); ?>;
	}
	button,
	input[type="submit"],
	a.btn:before,
	.btn:before,
	a.btn-link:before,
	.btn-link:before,
	button:before,
	.wp-block-button__link,
	.preloader .spinner,
	.preloader .spinner.spinner-line,
	.skills-item .value .num,
	.skills-item .dots.dots-1 .dot:nth-child(-n+1),
	.skills-item .dots.dots-2 .dot:nth-child(-n+1),
	.skills-item .dots.dots-3 .dot:nth-child(-n+1),
	.skills-item .dots.dots-4 .dot:nth-child(-n+1),
	.skills-item .dots.dots-5 .dot:nth-child(-n+1),
	.skills-item .dots.dots-6 .dot:nth-child(-n+1),
	.skills-item .dots.dots-7 .dot:nth-child(-n+1),
	.skills-item .dots.dots-8 .dot:nth-child(-n+1),
	.skills-item .dots.dots-9 .dot:nth-child(-n+1),
	.skills-item .dots.dots-10 .dot:nth-child(-n+1),
	.skills-item .dots.dots-11 .dot:nth-child(-n+2),
	.skills-item .dots.dots-12 .dot:nth-child(-n+2),
	.skills-item .dots.dots-13 .dot:nth-child(-n+2),
	.skills-item .dots.dots-14 .dot:nth-child(-n+2),
	.skills-item .dots.dots-15 .dot:nth-child(-n+2),
	.skills-item .dots.dots-16 .dot:nth-child(-n+2),
	.skills-item .dots.dots-17 .dot:nth-child(-n+2),
	.skills-item .dots.dots-18 .dot:nth-child(-n+2),
	.skills-item .dots.dots-19 .dot:nth-child(-n+2),
	.skills-item .dots.dots-20 .dot:nth-child(-n+2),
	.skills-item .dots.dots-21 .dot:nth-child(-n+3),
	.skills-item .dots.dots-22 .dot:nth-child(-n+3),
	.skills-item .dots.dots-23 .dot:nth-child(-n+3),
	.skills-item .dots.dots-24 .dot:nth-child(-n+3),
	.skills-item .dots.dots-25 .dot:nth-child(-n+3),
	.skills-item .dots.dots-26 .dot:nth-child(-n+3),
	.skills-item .dots.dots-27 .dot:nth-child(-n+3),
	.skills-item .dots.dots-28 .dot:nth-child(-n+3),
	.skills-item .dots.dots-29 .dot:nth-child(-n+3),
	.skills-item .dots.dots-30 .dot:nth-child(-n+3),
	.skills-item .dots.dots-31 .dot:nth-child(-n+4),
	.skills-item .dots.dots-32 .dot:nth-child(-n+4),
	.skills-item .dots.dots-33 .dot:nth-child(-n+4),
	.skills-item .dots.dots-34 .dot:nth-child(-n+4),
	.skills-item .dots.dots-35 .dot:nth-child(-n+4),
	.skills-item .dots.dots-36 .dot:nth-child(-n+4),
	.skills-item .dots.dots-37 .dot:nth-child(-n+4),
	.skills-item .dots.dots-38 .dot:nth-child(-n+4),
	.skills-item .dots.dots-39 .dot:nth-child(-n+4),
	.skills-item .dots.dots-40 .dot:nth-child(-n+4),
	.skills-item .dots.dots-41 .dot:nth-child(-n+5),
	.skills-item .dots.dots-42 .dot:nth-child(-n+5),
	.skills-item .dots.dots-43 .dot:nth-child(-n+5),
	.skills-item .dots.dots-44 .dot:nth-child(-n+5),
	.skills-item .dots.dots-45 .dot:nth-child(-n+5),
	.skills-item .dots.dots-46 .dot:nth-child(-n+5),
	.skills-item .dots.dots-47 .dot:nth-child(-n+5),
	.skills-item .dots.dots-48 .dot:nth-child(-n+5),
	.skills-item .dots.dots-49 .dot:nth-child(-n+5),
	.skills-item .dots.dots-50 .dot:nth-child(-n+5),
	.skills-item .dots.dots-51 .dot:nth-child(-n+6),
	.skills-item .dots.dots-52 .dot:nth-child(-n+6),
	.skills-item .dots.dots-53 .dot:nth-child(-n+6),
	.skills-item .dots.dots-54 .dot:nth-child(-n+6),
	.skills-item .dots.dots-55 .dot:nth-child(-n+6),
	.skills-item .dots.dots-56 .dot:nth-child(-n+6),
	.skills-item .dots.dots-57 .dot:nth-child(-n+6),
	.skills-item .dots.dots-58 .dot:nth-child(-n+6),
	.skills-item .dots.dots-59 .dot:nth-child(-n+6),
	.skills-item .dots.dots-60 .dot:nth-child(-n+6),
	.skills-item .dots.dots-61 .dot:nth-child(-n+7),
	.skills-item .dots.dots-62 .dot:nth-child(-n+7),
	.skills-item .dots.dots-63 .dot:nth-child(-n+7),
	.skills-item .dots.dots-64 .dot:nth-child(-n+7),
	.skills-item .dots.dots-65 .dot:nth-child(-n+7),
	.skills-item .dots.dots-66 .dot:nth-child(-n+7),
	.skills-item .dots.dots-67 .dot:nth-child(-n+7),
	.skills-item .dots.dots-68 .dot:nth-child(-n+7),
	.skills-item .dots.dots-69 .dot:nth-child(-n+7),
	.skills-item .dots.dots-70 .dot:nth-child(-n+7),
	.skills-item .dots.dots-71 .dot:nth-child(-n+8),
	.skills-item .dots.dots-72 .dot:nth-child(-n+8),
	.skills-item .dots.dots-73 .dot:nth-child(-n+8),
	.skills-item .dots.dots-74 .dot:nth-child(-n+8),
	.skills-item .dots.dots-75 .dot:nth-child(-n+8),
	.skills-item .dots.dots-76 .dot:nth-child(-n+8),
	.skills-item .dots.dots-77 .dot:nth-child(-n+8),
	.skills-item .dots.dots-78 .dot:nth-child(-n+8),
	.skills-item .dots.dots-79 .dot:nth-child(-n+8),
	.skills-item .dots.dots-80 .dot:nth-child(-n+8),
	.skills-item .dots.dots-81 .dot:nth-child(-n+9),
	.skills-item .dots.dots-82 .dot:nth-child(-n+9),
	.skills-item .dots.dots-83 .dot:nth-child(-n+9),
	.skills-item .dots.dots-84 .dot:nth-child(-n+9),
	.skills-item .dots.dots-85 .dot:nth-child(-n+9),
	.skills-item .dots.dots-86 .dot:nth-child(-n+9),
	.skills-item .dots.dots-87 .dot:nth-child(-n+9),
	.skills-item .dots.dots-88 .dot:nth-child(-n+9),
	.skills-item .dots.dots-89 .dot:nth-child(-n+9),
	.skills-item .dots.dots-90 .dot:nth-child(-n+9),
	.skills-item .dots.dots-91 .dot:nth-child(-n+10),
	.skills-item .dots.dots-92 .dot:nth-child(-n+10),
	.skills-item .dots.dots-93 .dot:nth-child(-n+10),
	.skills-item .dots.dots-94 .dot:nth-child(-n+10),
	.skills-item .dots.dots-95 .dot:nth-child(-n+10),
	.skills-item .dots.dots-96 .dot:nth-child(-n+10),
	.skills-item .dots.dots-97 .dot:nth-child(-n+10),
	.skills-item .dots.dots-98 .dot:nth-child(-n+10),
	.skills-item .dots.dots-99 .dot:nth-child(-n+10),
	.skills-item .dots.dots-100 .dot:nth-child(-n+10),
	.filter-links a:before,
	a.page-numbers.current,
	a.post-page-numbers.current,
	.page-numbers.current,
	.post-page-numbers.current,
	.content-sidebar .widget-title:before,
	.content-sidebar h2:before,
	.content-sidebar ul ul li:before,
	.post-password-form input[type="submit"],
	body.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
	body.woocommerce-js .widget_price_filter .ui-slider .ui-slider-range,
	body.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
	body.woocommerce-js .widget_price_filter .ui-slider .ui-slider-handle,
	.header .cart-btn .cart-icon .cart-count,
	.woocommerce .products div.product .button.add_to_cart_button:after,
	.woocommerce-js .products div.product .button.add_to_cart_button:after,
	.woocommerce div.product .button.single_add_to_cart_button:after,
	.woocommerce-js div.product .button.single_add_to_cart_button:after,
	.woocommerce #review_form #respond .form-submit .submit:hover,
	.woocommerce-js #review_form #respond .form-submit .submit:hover,
	.woocommerce #respond input#submit:after,
	.woocommerce a.button:after,
	.woocommerce button.button:after,
	.woocommerce input.button:after,
	.woocommerce-js #respond input#submit:after,
	.woocommerce-js a.button:after,
	.woocommerce-js button.button:after,
	.woocommerce-js input.button:after,
	.woocommerce .products .product .button.add_to_cart_button.added,
	.woocommerce-js .products .product .button.add_to_cart_button.added,
	.woocommerce .products .product .button.add_to_cart_button.added,
	.woocommerce-js .products .product .button.add_to_cart_button.added,
	.woocommerce #review_form #respond .form-submit .submit:hover,
	.woocommerce-js #review_form #respond .form-submit .submit:hover,
	body.light-skin a.page-numbers.current,
	body.light-skin a.post-page-numbers.current,
	body.light-skin .page-numbers.current,
	body.light-skin .post-page-numbers.current {
		background-color: <?php echo esc_attr( $theme_color ); ?>;
	}
	a.btn,
	.btn,
	a.btn-link,
	.btn-link,
	button,
	input[type="submit"],
	.wp-block-button__link,
	.is-style-outline .wp-block-button__link,
	.tags-links a,
	.col__sedebar .tagcloud a,
	.wp-block-tag-cloud a,
	.share-post .share-btn:hover,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-mini-cart__buttons a.button,
	.woocommerce-mini-cart__buttons button.button,
	.woocommerce-mini-cart__buttons input.button,
	.woocommerce-js #respond input#submit,
	.woocommerce-js a.button,
	.woocommerce-js button.button,
	.woocommerce-js input.button,
	.woocommerce-js .woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-js .woocommerce-mini-cart__buttons a.button,
	.woocommerce-js .woocommerce-mini-cart__buttons button.button,
	.woocommerce-js .woocommerce-mini-cart__buttons input.button,
	.woocommerce .products div.product .button.add_to_cart_button,
	.woocommerce-js .products div.product .button.add_to_cart_button,
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button,
	.woocommerce #review_form #respond .form-submit .submit,
	.woocommerce-js #review_form #respond .form-submit .submit,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	body.light-skin .tags-links a,
	body.light-skin .col__sedebar .tagcloud a,
	body.light-skin .wp-block-tag-cloud a,
	body.light-skin .post-password-form label input {
		border-color: <?php echo esc_attr( $theme_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $btn_color ) : ?>
	/* Btn Color */
	a.lnk,
	.lnk,
	.is-style-outline .wp-block-button__link,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-mini-cart__buttons a.button,
	.woocommerce-mini-cart__buttons button.button,
	.woocommerce-mini-cart__buttons input.button,
	.woocommerce-js #respond input#submit,
	.woocommerce-js a.button,
	.woocommerce-js button.button,
	.woocommerce-js input.button,
	.woocommerce-js .woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-js .woocommerce-mini-cart__buttons a.button,
	.woocommerce-js .woocommerce-mini-cart__buttons button.button,
	.woocommerce-js .woocommerce-mini-cart__buttons input.button,
	.woocommerce .products div.product .button.add_to_cart_button,
	.woocommerce-js .products div.product .button.add_to_cart_button,
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button,
	.woocommerce #review_form #respond .form-submit .submit,
	.woocommerce-js #review_form #respond .form-submit .submit,
	.woocommerce .cart .button[name="update_cart"],
	.woocommerce-js .cart .button[name="update_cart"],
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.alt,
	.woocommerce-js #respond input#submit.alt,
	.woocommerce-js a.button.alt,
	.woocommerce-js button.button.alt,
	.woocommerce-js input.button.alt {
		color: <?php echo esc_attr( $btn_color ); ?>;
	}
	button,
	input[type="submit"],
	a.btn:before,
	.btn:before,
	a.btn-link:before,
	.btn-link:before,
	button:before,
	.wp-block-button__link,
	.post-password-form input[type="submit"],
	.woocommerce .products div.product .button.add_to_cart_button:after,
	.woocommerce-js .products div.product .button.add_to_cart_button:after,
	.woocommerce div.product .button.single_add_to_cart_button:after,
	.woocommerce-js div.product .button.single_add_to_cart_button:after,
	.woocommerce #review_form #respond .form-submit .submit:hover,
	.woocommerce-js #review_form #respond .form-submit .submit:hover,
	.woocommerce #respond input#submit:after,
	.woocommerce a.button:after,
	.woocommerce button.button:after,
	.woocommerce input.button:after,
	.woocommerce-js #respond input#submit:after,
	.woocommerce-js a.button:after,
	.woocommerce-js button.button:after,
	.woocommerce-js input.button:after,
	.woocommerce .products .product .button.add_to_cart_button.added,
	.woocommerce-js .products .product .button.add_to_cart_button.added,
	.woocommerce .products .product .button.add_to_cart_button.added,
	.woocommerce-js .products .product .button.add_to_cart_button.added,
	.woocommerce #review_form #respond .form-submit .submit:hover,
	.woocommerce-js #review_form #respond .form-submit .submit:hover {
		background-color: <?php echo esc_attr( $btn_color ); ?>;
	}
	a.btn,
	.btn,
	a.btn-link,
	.btn-link,
	button,
	input[type="submit"],
	.wp-block-button__link,
	.is-style-outline .wp-block-button__link,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-mini-cart__buttons a.button,
	.woocommerce-mini-cart__buttons button.button,
	.woocommerce-mini-cart__buttons input.button,
	.woocommerce-js #respond input#submit,
	.woocommerce-js a.button,
	.woocommerce-js button.button,
	.woocommerce-js input.button,
	.woocommerce-js .woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-js .woocommerce-mini-cart__buttons a.button,
	.woocommerce-js .woocommerce-mini-cart__buttons button.button,
	.woocommerce-js .woocommerce-mini-cart__buttons input.button,
	.woocommerce .products div.product .button.add_to_cart_button,
	.woocommerce-js .products div.product .button.add_to_cart_button,
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button,
	.woocommerce #review_form #respond .form-submit .submit,
	.woocommerce-js #review_form #respond .form-submit .submit,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button {
		border-color: <?php echo esc_attr( $btn_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $base_font_size ) : ?>
	/* Base font size */
	html,
	body,
	input[type="text"],
	input[type="email"],
	input[type="search"],
	input[type="password"],
	input[type="tel"],
	input[type="address"],
	input[type="number"],
	textarea,
	label,
	legend,
	a.page-numbers,
	.page-numbers,
	.post-page-numbers,
	.comment-box__details {
		font-size: <?php echo esc_attr( $base_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $heading_font_size ) : ?>
	/* Heading font size */
	.m-titles .m-title,
	.h-titles .h-title,
	.single-portfolio .m-title,
	.section.hero-started .title {
		font-size: <?php echo esc_attr( $heading_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $post_heading_font_size ) : ?>
	/* Post heading font size */
	.single-post .m-title,
	.single .m-title,
	.works-items.works-list-items .works-item .desc .name,
	.m-page-navigation .h-title {
		font-size: <?php echo esc_attr( $post_heading_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $text_font_family ) : ?>
	/* Paragraphs Font */
	html,
	body,
	input,
	textarea,
	button,
	.post-content h1,
	.post-content h2,
	.post-content h3,
	.post-content h4,
	.post-content h5,
	.post-content h6,
	input[type="text"],
	input[type="email"],
	input[type="search"],
	input[type="password"],
	input[type="tel"],
	input[type="address"],
	input[type="number"],
	textarea,
	label,
	legend,
	label.error,
	.block-quote,
	blockquote,
	.block-quote,
	.wp-block-quote,
	.wp-block-quote.is-large,
	.wp-block-quote.is-style-large,
	.wp-block-pullquote,
	.menu-full ul li ul li a,
	.content-sidebar .widget-title,
	.content-sidebar h2,
	.section__comments .m-titles .m-title {
		font-family: '<?php echo esc_attr( $text_font_family['font_name'] ); ?>', serif;
	}
	<?php endif; ?>

	<?php if ( $primary_font_family ) : ?>
	/* Primary Font */
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	.block-quote cite,
	blockquote cite,
	.block-quote cite,
	.wp-block-quote cite,
	.wp-block-quote.is-large cite,
	.wp-block-quote.is-style-large cite,
	.wp-block-pullquote cite,
	.menu-full ul li a,
	.header .logo .logotype__title,
	.m-titles .m-title,
	.h-titles .h-title,
	.section.hero-started .title,
	.works-items.works-list-items .works-item .desc .name,
	.works-items.works-masonry-items .works-item .desc .name {
		font-family: '<?php echo esc_attr( $primary_font_family['font_name'] ); ?>', serif;
	}
	<?php endif; ?>

	<?php if ( $menu_items_size ) : ?>
	/* Menu size */
	.menu-full ul li a {
		font-size: <?php echo esc_attr( $menu_items_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $sub_menu_items_size ) : ?>
	/* Sub Menu size */
	.menu-full ul li ul li a {
		font-size: <?php echo esc_attr( $sub_menu_items_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $preloader_color ) : ?>
	/* preloader bg color */
	.preloader:before {
		background: <?php echo esc_attr( $preloader_color ); ?>!important;
	}
	<?php endif; ?>

	<?php if ( $disable_parallax ) : ?>
	/* parallax */
	.pbefore, .pafter {
		display: none!important;
	}
	<?php endif; ?>

	<?php if ( $disable_figures ) : ?>
	/* figures */
	.section.hero-started .slide .circle {
		display: none!important;
	}
	<?php endif; ?>

	<?php if ( $parallax_img_1_left ) : ?>
	.section-parallax-1 .pbefore > div > div {
		background-image: url(<?php echo esc_url( $parallax_img_1_left['url'] ); ?>)!important;
		background-size: contain!important;
	}
	<?php endif; ?>

	<?php if ( $parallax_img_1_right ) : ?>
	.section-parallax-1 .pafter > div > div {
		background-image: url(<?php echo esc_url( $parallax_img_1_right['url'] ); ?>)!important;
		background-size: contain!important;
	}
	<?php endif; ?>

	<?php if ( $parallax_img_2_left ) : ?>
	.section-parallax-2 .pbefore > div > div {
		background-image: url(<?php echo esc_url( $parallax_img_2_left['url'] ); ?>)!important;
		background-size: contain!important;
	}
	<?php endif; ?>

	<?php if ( $parallax_img_2_right ) : ?>
	.section-parallax-2 .pafter > div > div {
		background-image: url(<?php echo esc_url( $parallax_img_2_right['url'] ); ?>)!important;
		background-size: contain!important;
	}
	<?php endif; ?>

	<?php if ( $parallax_img_3_left ) : ?>
	.section-parallax-3 .pbefore > div > div {
		background-image: url(<?php echo esc_url( $parallax_img_3_left['url'] ); ?>)!important;
		background-size: contain!important;
	}
	<?php endif; ?>

	<?php if ( $parallax_img_3_right ) : ?>
	.section-parallax-3 .pafter > div > div {
		background-image: url(<?php echo esc_url( $parallax_img_3_right['url'] ); ?>)!important;
		background-size: contain!important;
	}
	<?php endif; ?>

	<?php if ( $parallax_img_4_left ) : ?>
	.section-parallax-4 .pbefore > div > div {
		background-image: url(<?php echo esc_url( $parallax_img_4_left['url'] ); ?>)!important;
		background-size: contain!important;
	}
	<?php endif; ?>

	<?php if ( $parallax_img_4_right ) : ?>
	.section-parallax-4 .pafter > div > div {
		background-image: url(<?php echo esc_url( $parallax_img_4_right['url'] ); ?>)!important;
		background-size: contain!important;
	}
	<?php endif; ?>

	<?php if ( $parallax_img_5_right ) : ?>
	.section-parallax-5 .pafter > div > div {
		background-image: url(<?php echo esc_url( $parallax_img_5_right['url'] ); ?>)!important;
		background-size: contain!important;
	}
	<?php endif; ?>

</style>

<?php
}
add_action( 'wp_head', 'ober_skin', 10 );
