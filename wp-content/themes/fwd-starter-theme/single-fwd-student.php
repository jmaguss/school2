<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				fwd_posted_on();
				fwd_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
		<div class="student-container">
				<?php fwd_post_thumbnail(); ?>

				<div class="entry-content">
					<?php
					if ( is_single() ) {
						the_content();
						if ( get_field( 'biography' ) ) {
							the_field( 'biography' );
					}
					if ( function_exists( 'get_field' ) ) {
						if ( get_field( 'portfolio_link' ) ) {
							$link = get_field( 'portfolio_link' );
							$name =get_the_title();
							
							echo '<a href="' . $link . '" >' . $name. ' Portfolio </a>';
		echo '</div>';
								
							}
					}
					} else {
							the_excerpt();
					}
						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fwd' ),
								'after'  => '</div>',
					)
				);
				?>
				</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fwd_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

			

		

	</main><!-- #primary -->

<?php

get_footer();
// get_template_part( 'template-parts/content', get_post_type() );