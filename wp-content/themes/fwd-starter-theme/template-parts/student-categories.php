<?php 
	$terms = get_terms(
		array(
			'taxonomy' => 'fwd-student-category',

		)
		);
		if ($terms && ! is_wp_error( $terms )): ?>
				<section>
					<h2>See Our students</h2>
					<ul>
						<?php foreach($terms as $term) : ?>
											<a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a>
							<?php  endforeach; ?>
					</ul>
				</section>



		<?php endif; ?>