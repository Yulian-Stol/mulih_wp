<?php get_header(); ?>

	<section class="advante">
		<div class="container">
			<div class="advante__content house">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="swiper-slide">
						<div class="swiper__img house__img">
							<p class="house__status"><?php the_field('post-select'); ?></p>
							<img src="<?php the_field('post-img'); ?>" alt="" >
							<?php
								$post_select = get_field('post-select');
								$post_price = get_field('post-price');
								if ($post_select == 'Rent') {
									echo '<p class="house__price">$' . $post_price . ' / month</p>';
								} else {
									echo '<p class="house__price">$' . $post_price . '</p>';
								}
							?>
						</div>
						<div class="house__content">
							<?php
								$bed = get_field('post-bedrooms');
								if ($bed) {
									echo '<p>Bedrooms: ' . $bed . '</p>';
								}
							?>
							<?php
								$bath = get_field('post-bathrooms');
								if ($bath) {
									echo '<p>Bathrooms: ' . $bath . '</p>';
								}
							?>
							<p><?php the_field('post-size'); ?> sqft</p>
							<?php
								$garage = get_field('post-garage');
								if ($garage) {
									echo '<p>Garage: ' . $garage . '</p>';
								}
							?>

							<h3 class="swiper__title"><?php the_title(); ?></h3>
							<p class="swiper__subtitle"><?php the_field('post-place'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</section>

<?php get_footer(); ?>