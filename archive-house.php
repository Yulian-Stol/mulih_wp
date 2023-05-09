<?php get_header(); ?>

	<section class="advante">
		<div class="container">
			<div class="advante__content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="swiper-slide">
						<div class="swiper__img house__img">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							<p class="swiper__price">
							<?php
								$post_select = get_field('post-select');
								$post_price = get_field('post-price');
								if ($post_select == 'Rent') {
									echo '<p class="house__price">$' . $post_price . ' / month</p>';
								} else {
									echo '<p class="house__price">$' . $post_price . '</p>';
								}
							?>
							</p>
						</div>
						<h3 class="swiper__title"><?php the_title(); ?></h3>
						<p class="swiper__subtitle"><?php the_field('post-place'); ?></p>
						<div class="swiper__info">

							<p class="swiper__square"><span><?php the_field('post-size'); ?>m2</span> Living Area</p>
						</div>
						<button href="#" class="btn btn--swiper">Send Inquiry</button>
					</a>
				<?php endwhile; ?>
				<?php endif; ?>

				<?php wptuts_pagination(); ?> 
			</div>
		</div>
	</section>

<?php get_footer(); ?>