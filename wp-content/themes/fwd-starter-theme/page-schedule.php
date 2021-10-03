<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FWD_Starter_Theme
 */

get_header();
?>

	
<main id="primary" class="site-main">
 
    <?php while ( have_posts() ) : the_post(); ?>
 
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
            </header>
 
            <div class="entry-content">
<?php 



// Check rows exists.
if( have_rows('schedule') ):

    // Loop through rows.
    while( have_rows('schedule') ) : the_row();

        // Load sub field value.
        $date = get_sub_field('date'); 
        $course = get_sub_field('course'); 
        $instructor = get_sub_field('instructor'); 
        // Do something...
        echo "<div class='test'>";
       echo "<ul class='schedule'>";
                echo '<li>' . $date. '</li><li>' . $course. '</li><li>' . $instructor. '</li>';
        echo "</ul>";
        echo "</div>";

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;


?>
</div>
 
        </article>
 
    <?php endwhile; // End of the loop. ?>
 
</main>

<?php

get_footer();



