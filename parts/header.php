
	<header class="header">
		<div class="header__container container">

			<a href="/" class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="">
				Mulih
			</a>

			<nav class="header__nav">
				<?php 
					wp_nav_menu( array(
						'menu'=>'menu_header',
						'menu_class'=>'nav',
						'theme_location'=>'menu_header',
					) );
				?>

				<div class="header__btn">
					<a href="#" class="btn btn--sign">Sign in</a>
					<a href="#" class="btn btn--login">Login</a>
				</div>
			</nav>

			<button class="hamburger" type="button">
				<span class="hamburger__item"></span>
			</button>

		</div>
	</header>