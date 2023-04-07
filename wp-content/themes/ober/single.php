<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ober
 */

get_header();
?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php

	//content
	$image = get_the_post_thumbnail_url( get_the_ID(), 'ober_1920xauto' );

	//social share
	$social_share = get_field( 'social_share', 'options' );

	?>

	<!-- Section Started Heading -->
	<div class="section section-inner started-heading">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<!-- titles -->
					<div class="m-titles">
						<h1 class="m-title scrolla-element-anim-1 scroll-animate" data-animate="active">
							<?php the_title(); ?>
						</h1>
						<?php if ( get_post_type() == 'post' ) : ?>
						<div class="m-category scrolla-element-anim-1 scroll-animate" data-animate="active">
							<?php ober_post_details(); ?>
						</div>
						<?php endif; ?>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Single Post -->
	<div class="section section-inner m-archive">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 offset-1">

					<?php if ( $image ) : ?>
					<!-- image -->
					<div class="m-image-large">
						<div class="image">
							<div class="img scrolla-element-anim-1 scroll-animate" data-animate="active" style="background-image: url(<?php echo esc_url( $image ); ?>);"></div>
						</div>
					</div>
					<?php endif; ?>

					<!-- content -->
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
					<!-- /content -->

					<!-- post nav -->
					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ober' ),
						'after'  => '</div>',
					) );
					?>
					<!-- /post nav -->

					<!-- share post -->
					<?php if ( $social_share ) : ?>
					<div class="share-post social social-share scrolla-element-anim-1 scroll-animate" data-animate="active">
						<?php foreach ( $social_share as $social ) : ?>
						<a class="social__link share-btn share-btn-<?php echo esc_attr( $social['value'] ); ?>">
							<?php if ( $social['value'] == 'facebook' ) : ?>
							<i class="fa fa-facebook-f"></i>
							<span><?php echo esc_html__( 'Facebook', 'ober' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'twitter' ) : ?>
							<i class="fa fa-twitter"></i>
							<span><?php echo esc_html__( 'Twitter', 'ober' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'tumblr' ) : ?>
							<i class="fa fa-tumblr"></i>
							<span><?php echo esc_html__( 'Tumblr', 'ober' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'linkedin' ) : ?>
							<i class="fa fa-linkedin"></i>
							<span><?php echo esc_html__( 'Linkedin', 'ober' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'reddit' ) : ?>
							<i class="fa fa-reddit-alien" aria-hidden="true"></i>
							<span><?php echo esc_html__( 'Reddit', 'ober' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'pinterest' ) : ?>
							<i class="fa fa-pinterest-p"></i>
							<span><?php echo esc_html__( 'Pinterest', 'ober' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'whatsapp' ) : ?>
							<i class="fa fa-whatsapp"></i>
							<span><?php echo esc_html__( 'WhatsApp', 'ober' ); ?></span>
							<?php endif; ?>
						</a>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
					<!-- /share post -->

					<?php if ( comments_open() || get_comments_number() ) : ?>
					<!-- Comments -->
					<div class="comments-post scrolla-element-anim-1 scroll-animate" data-animate="active">
						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							comments_template();
						?>
					</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

	<!-- Nav -->
	<?php ober_post_navigation(); ?>

	<?php endwhile; ?>

<?php
get_footer();
