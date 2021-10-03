<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title('<h1 class="entry-title">', '</h1>');
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			if ( function_exists( 'get_field' ) ) {
				if ( get_field( 'staff_bio' ) ) {
					
						the_field( 'staff_bio' );
				}
		}
		?>
			</br>
		<?php
	
		if ( function_exists( 'get_field' ) ) {
			if ( get_field( 'courses' ) ) {
					
					the_field( 'courses' );
			}
	}
			?>
			</br>
		<?php
		if ( function_exists( 'get_field' ) ) {
			if ( get_field( 'staff_site' ) ) {
				

					
					the_field( 'staff_site' );
			}
	}
			
		endif;

	



		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				fwd_posted_on();
				fwd_posted_by();
				?>
			</div>
			<!-- .entry-meta -->
		<?php endif; ?>

	</header><!-- .entry-header -->

	<?php fwd_post_thumbnail(); ?>

	<div class="entry-content">
		

		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fwd_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->

