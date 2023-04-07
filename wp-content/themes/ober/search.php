<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package ober
 */

get_header();
?>

	<!-- Section Started Heading -->
	<div class="section section-inner started-heading align-center">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

					<!-- titles -->
					<div class="h-titles">
						<div class="h-title h2-title-size splitting-text-anim-2 scroll-animate" data-splitting="chars" data-animate="active">
							<?php printf( esc_html__( 'Search: %s', 'ober' ), get_search_query() ); ?>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Section Archive -->
	<div class="section section-inner m-archive">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
				<?php else : ?>
				<div class="col-md-12">
				<?php endif; ?>

					<?php if ( have_posts() ) : ?>
					<div class="articles-container">
						<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content', 'search' );
							endwhile;
						?>
					</div>
					<div class="pager">
						<?php
							echo paginate_links( array(
								'prev_text'		=> esc_html__( 'Prev', 'ober' ),
								'next_text'		=> esc_html__( 'Next', 'ober' ),
							) );
						?>
					</div>
					<?php else :
						get_template_part( 'template-parts/content', 'none' );
					endif; ?>

				</div>
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					
					<!-- sidebar -->
					<div class="col__sedebar scrolla-element-anim-1 scroll-animate" data-animate="active">
						<?php get_sidebar(); ?>
					</div>

				</div>
				<?php endif; ?>
			</div>
		</div>
	</div>

<?php
get_footer();