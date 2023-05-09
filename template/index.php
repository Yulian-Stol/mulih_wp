<?php
/* Template name: Головна */
?>

<?php get_header(); ?>

	<section class="banner" style="background:<?php the_field('banner-color-bg'); ?>">
		<div class="container">
			<p class="tag"><?php the_field('banner-tag'); ?></p>
			<h1 class="banner__title h1"><?php the_field('banner-title'); ?></h1>
			<p class="banner__text"><?php the_field('banner-text'); ?></p>
			<img src="<?php the_field('banner-bg'); ?>" alt="" class="banner__bg">
			<div class="tabs">
				<ul class="tabs__list">
					<li class="tabs__item">Buy</li>
					<li class="tabs__item">Rent</li>
				</ul>
				<div>
					<div class="tabs__wrap">
						<div class="accordion">
							<div class="accordion__block">
								<p class="accordion__block_title">Location</p>
								<div class="accordion__header">
									<p>Bogor, Jawa Barat</p>
									<span></span>
								</div>
							</div>
							<div class="accordion__content accordion__place">
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							</div>
						</div>
						<div class="accordion">
							<div class="accordion__block">
								<p class="accordion__block_title">Type</p>
								<div class="accordion__header">
									<p>Home</p>
									<span></span>
								</div>
							</div>
							<div class="accordion__content accordion__place">
							<p>
								Home
							</p>
							<p>
								Home
							</p>
							<p>
								Home
							</p>
							<p>
								Home
							</p>
							<p>
								Home
							</p>
							</div>
						</div>
						<div class="accordion">
							<div class="accordion__block">
								<p class="accordion__block_title">Price Range</p>
								<div class="accordion__header">
									<p>$200-$350</p>
									<span></span>
								</div>
							</div>
							<div class="accordion__content">
							<p>
								<input type="range" min="200" max="350" value="225" class="slider custom-range" id="myRange">
								<p>Price: <span id="sliderValue"></span>$</p>
							</p>
							</div>
						</div>
						<a href="#" class="btn btn--search">Search</a>
					</div>
					<div class="tabs__wrap">
						<div class="accordion">
							<div class="accordion__block">
								<p class="accordion__block_title">Location</p>
								<div class="accordion__header">
									<p>Bogor, Jawa Barat</p>
									<span></span>
								</div>
							</div>
							<div class="accordion__content accordion__place">
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							<p>
								Bogor, Jawa Barat
							</p>
							</div>
						</div>
						<div class="accordion">
							<div class="accordion__block">
								<p class="accordion__block_title">Type</p>
								<div class="accordion__header">
									<p>Home</p>
									<span></span>
								</div>
							</div>
							<div class="accordion__content accordion__place">
							<p>
								Home
							</p>
							<p>
								Home
							</p>
							<p>
								Home
							</p>
							<p>
								Home
							</p>
							<p>
								Home
							</p>
							</div>
						</div>
						<div class="accordion">
							<div class="accordion__block">
								<p class="accordion__block_title">Price Range</p>
								<div class="accordion__header">
									<p>$100-$350</p>
									<span></span>
								</div>
							</div>
							<div class="accordion__content">
							<p>
								<input type="range" min="100" max="350" value="225" class="slider custom-range" id="myRange">
								<p>Price: <span id="sliderValue"></span>$</p>
							</p>
							</div>
						</div>
						<a href="#" class="btn btn--search">Search</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="discover">
		<div class="container">
			<div class="section-header">
				<p class="tag"><?php the_field('discover-tag'); ?></p>
				<h2 class="h2 discover__title"><?php the_field('discover-title'); ?></h2>
				<p class="section-header__text"><?php the_field('discover-subtitle'); ?> <a href="/house" class="section-header__more">Learn More</a></p>
			</div>
			<div class="swiper mySwiper">
				<div class="swiper-wrapper">
				<?php 
					$selected_posts = get_field('post-recomend');
					$selected_post_ids = wp_list_pluck($selected_posts, 'ID');
					
					if (count($selected_post_ids) < 5) {
						$args = array(
							'post_type' => 'house',
							'post__not_in' => $selected_post_ids,
							'posts_per_page' => 6 - count($selected_post_ids)
						);
						
						$additional_posts = get_posts($args);
						
						if (!empty($additional_posts)) {
							$post_ids = array_merge($selected_post_ids, wp_list_pluck($additional_posts, 'ID'));
						} else {
							$post_ids = $selected_post_ids;
						}
					} else {
						$post_ids = $selected_post_ids;
					}
					
					$args = array(
						'post_type' => 'house',
						'post__in' => $post_ids,
						'orderby' => 'post__in',
						'posts_per_page' => count($selected_posts) > 5 ? -1 : 5
					);
					
					$query = new WP_Query($args);
					
					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="swiper-slide">
								<div class="swiper__img">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								</div>
								<h3 class="swiper__title"><?php the_title(); ?></h3>
								<p class="swiper__subtitle"><?php the_field('post-place'); ?></p>
								<div class="swiper__info">
									<p class="swiper__price">
										<?php
											$post_select = get_field('post-select');
											$post_price = get_field('post-price');
											if ($post_select == 'Rent') {
												echo '<p">$' . $post_price . ' / month</p>';
											} else {
												echo '<p">$' . $post_price . '</p>';
											}
										?>
									</p>
									<p class="swiper__square"><span><?php the_field('post-size'); ?>m2</span> Living Area</p>
								</div>
								<button href="#" class="btn btn--swiper">Send Inquiry</button>
							</a> 
						<?php
						}
						wp_reset_query();
					}
				?>
				</div>
			</div>
		</div>
	</section>

	<section class="advante" style="background:<?php the_field('advante-bg'); ?>">
		<div class="container">
			<div class="section-header">
				<p class="tag"><?php the_field('advante-tag'); ?></p>
				<h2 class="h2 discover__title"><?php the_field('advante-title'); ?></h2>
			</div>
			<div class="advante__content">
				<?php if( have_rows('advante-list') ): ?>
				<?php while( have_rows('advante-list') ): the_row(); 
				$title = get_sub_field('advante-list-title');
				$text = get_sub_field('advante-list-text');
				$img = get_sub_field('advante-icon');
				?>
				<div class="advante__item">
					<div class="advante__item_img">
						<img src="<?php echo $img ?>" alt="">
					</div>
					<div class="advante__item_title"><?php echo $title ?></div>
					<div class="advante__item_text"><?php echo $text ?></div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="about">
		<div class="container about__container">
			<div class="about__img">
				<div class="about__rating">
					<img class="about__rating_check" src="<?php echo get_template_directory_uri(); ?>/assets/img/check.svg" alt="">
					<p class="about__rating_number">4.8</p>
					<div class="about__rating_star">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" alt="">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.svg" alt="">
					</div>
					<p>
						Trusted on
					</p>
					<p class="about__rating_review">
						500+ Reviews
					</p>
				</div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" alt="">
				<div class="about__stat">
					<div class="about__stat_number"><p>250+</p><p>Property <br>Sale</p></div>
					<div class="about__stat_number"><p>550+</p><p>Apartmen <br>Rent</p></div>
				</div>
			</div>

			<div class="section-header">
				<p class="tag">ABOUT US</p>
				<h2 class="h2 about__title">How much is your<br> property worth now?</h2>
				<p class="section-header__text">Discover our exclusive selection of the finest one-of-a-kind <br>luxury properties architectural masterpieces.</p>
				<a href="#" class="btn btn--more">Learn More</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>