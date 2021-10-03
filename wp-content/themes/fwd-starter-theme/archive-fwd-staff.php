<?php
/**
 * The template for displaying student archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			$args = array(
				'post_type' => 'fwd-staff',
				'posts_per_page' => -1,
				'tax_query'    => array(
					array(
							'taxonomy' => 'fwd-staff-category',
							'field'    => 'slug',
							'terms'    => 'administrative',

						),
					),

		

			);

			$query = new WP_Query ( $args );
			if ( $query->have_posts() ){
				echo '<section class="work-section"><h2 class="block-header">Administrative</h2>';
				echo '<div class="flex-container">';
				while ( $query->have_posts() ){
					$query->the_post();
					echo '<article>';
					echo '<h3>' . get_the_title() . '</h3>';

					if ( function_exists( 'get_field' ) ) {
						if ( get_field( 'admin_bio' ) ) {
							
								the_field( 'admin_bio' );
						}
				}
				
					
						
						
						
					
					echo '</article>';
				};
				wp_reset_postdata();
				echo '<div/>';
				echo '</section>';
				
			} 
		endif;



			$args = array(
				'post_type' => 'fwd-staff',
				'posts_per_page' => -1,
				'tax_query'    => array(
					array(
							'taxonomy' => 'fwd-staff-category',
							'field'    => 'slug',
							'terms'    => 'faculty',

						),
					),

		

			);

			$query = new WP_Query ( $args );
			if ( $query->have_posts() ){
				echo '<section class="work-section"><h2 class="block-header">Faculty</h2>';
				echo '<div class="flex-container">';
				while ( $query->have_posts() ){
					$query->the_post();
					echo '<article>';
					echo '<h3>' . get_the_title() . '</h3>';

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
					$link = get_field( 'staff_site' );
					
					echo '<a href="' . $link . '" > Instructor Website </a>';
						
					
				}
		}
					
						
						
						
					
					echo '</article>';
				};
				wp_reset_postdata();
				echo '<div/>';
				echo '</section>';
				
			} 
		





		
			?>
	</main><!-- #primary -->

<?php

get_footer();
