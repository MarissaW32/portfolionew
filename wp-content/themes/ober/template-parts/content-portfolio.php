<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ober
 */

?>

<?php

/* post content */
$current_categories = get_the_terms( get_the_ID(), 'portfolio_categories' );
$categories_string = '';
$categories_slugs_string = '';
if ( $current_categories && ! is_wp_error( $current_categories ) ) {
	$arr_keys = array_keys( $current_categories );
	$last_key = end( $arr_keys );
	foreach ( $current_categories as $key => $value ) {
		if ( $key == $last_key ) {
			$categories_string .= $value->name . ' ';
		} else {
			$categories_string .= $value->name . '<br/>';
		}
		$categories_slugs_string .= 'sorting-' . $value->slug . ' ';
	}
}

$image = get_the_post_thumbnail_url( get_the_ID(), 'ober_900xAuto' );
$title = get_the_title();
$href = get_the_permalink();

?>

<div class="works-col col-xs-12 col-sm-12 col-md-12 col-lg-12 <?php echo esc_attr( $categories_slugs_string ); ?>">
	<div class="works-item">
		<a href="<?php echo esc_url( $href ); ?>">
			<?php if ( $image ) : ?>
			<span class="image scrolla-element-anim-1 scroll-animate" data-animate="active">
				<span class="img">
					<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
					<span class="overlay"></span>
				</span>
			</span>
			<?php endif; ?>
			<span class="desc">
				<?php if ( $title ) : ?>
				<span class="name splitting-text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
					<?php echo esc_html( $title ); ?>
				</span>
				<?php endif; ?>
				<?php if ( $categories_string ) : ?>
				<span class="category scrolla-element-anim-1 scroll-animate" data-animate="active">
					<?php echo wp_kses_post( $categories_string ); ?>
				</span>
				<?php endif; ?>
			</span>
		</a>
	</div>
</div>
