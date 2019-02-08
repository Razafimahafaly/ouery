<header class="header mob-header cart-<?php echo esc_attr($nz_h2_desk_shop_cart); ?> nz-clearfix">
	<div class="mob-header-top nz-clearfix">
		<div class="container">
			<?php if (!empty($nz_mob_logo)): ?>
				<div class="logo logo-mob">
					<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
						<img style="max-width:<?php echo esc_attr($nz_mob_logo_w); ?>px;max-height:<?php echo esc_attr($nz_mob_logo_h); ?>px;" src="<?php echo esc_url($nz_mob_logo); ?>" alt="<?php bloginfo('name'); ?>">
					</a>
				</div>
			<?php else: ?>
				<div class="logo-title"><?php echo get_bloginfo('name') ?></div>
			<?php endif ?>
			<span class="mob-menu-toggle"></span>
			<?php if ($nz_h2_desk_sidebar_toggle == "true"): ?>
				<span class="mob-sidebar-toggle"></span>
			<?php endif ?>
		</div>
	</div>
	<div class="mob-header-content nz-clearfix">

		<div class="container">

			<nav class="mob-menu nz-clearfix">
				<?php if(has_nav_menu("header-menu-1")): ?>
					<?php wp_nav_menu($mobarg_1); ?>
				<?php endif; ?>
				<?php if(has_nav_menu("header-menu-2")): ?>
					<?php wp_nav_menu($mobarg_2); ?>
				<?php endif; ?>
			</nav>

			<?php if ($nz_h2_header_top == "true"): ?>

				<?php if (isset($GLOBALS['montserrat_ninzio']['h2-desk-slogan']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-slogan'])): ?>
					<div class="slogan nz-clearfix">
						<?php echo wp_kses($GLOBALS['montserrat_ninzio']['h2-desk-slogan'], wp_kses_allowed_html( 'post' )); ?>
					</div>
				<?php endif ?>

				<?php if(isset($GLOBALS['montserrat_ninzio']["h2-top-button-text"]) && !empty($GLOBALS['montserrat_ninzio']["h2-top-button-text"])): ?>
					<a class="top-button" href="<?php echo esc_url($GLOBALS['montserrat_ninzio']["h2-top-button-url"]); ?>"><?php echo esc_attr($GLOBALS['montserrat_ninzio']["h2-top-button-text"]); ?></a>
				<?php endif; ?>

				<?php if ($nz_h2_header_top_social_links == "true"): ?>
					<div class="social-links nz-clearfix">
						<?php include(get_template_directory().'/includes/social-links.php'); ?>
					</div>
				<?php endif ?>

			<?php endif ?>

			<?php if ($nz_h2_desk_shop_cart == "true"): ?>
			    <?php if (class_exists('Woocommerce')): ?>
				    <div class="cart-toggle">
						<a class="cart-contents" href="<?php echo esc_url($GLOBALS['woocommerce']->cart->get_cart_url()); ?>" title="<?php esc_html__('View your shopping cart', 'montserrat'); ?>">
		                    <span class="cart-info"><?php echo esc_attr($GLOBALS['woocommerce']->cart->cart_contents_count); ?></span>
		                </a>
				    </div>
			    <?php endif ?>
		    <?php endif ?>

			<?php if ($nz_h2_desk_search == "true"): ?>
				<div class="search nz-clearfix">
					<?php get_search_form(); ?>
				</div>
			<?php endif ?>

		</div>
	</div>
</header>
<header class="<?php echo esc_attr($desk_class); ?>">

	<div class="header-content">

		<?php if ($nz_h2_header_top == "true"): ?>
			
			<div class="header-top">
				<div class="container nz-clearfix">

					<?php if (isset($GLOBALS['montserrat_ninzio']['h2-desk-slogan']) && !empty($GLOBALS['montserrat_ninzio']['h2-desk-slogan'])): ?>
						<div class="slogan nz-clearfix">
							<?php echo wp_kses($GLOBALS['montserrat_ninzio']['h2-desk-slogan'], wp_kses_allowed_html( 'post' )); ?>
						</div>
					<?php endif ?>

					<?php if(isset($GLOBALS['montserrat_ninzio']["h2-top-button-text"]) && !empty($GLOBALS['montserrat_ninzio']["h2-top-button-text"])): ?>
						<a class="top-button" href="<?php echo esc_url($GLOBALS['montserrat_ninzio']["h2-top-button-url"]); ?>"><?php echo esc_attr($GLOBALS['montserrat_ninzio']["h2-top-button-text"]); ?></a>
					<?php endif; ?>

					<?php if ($nz_h2_header_top_social_links == "true"): ?>
						<div class="social-links header-top-social-links nz-clearfix">
							<?php include(get_template_directory().'/includes/social-links.php'); ?>
						</div>
					<?php endif ?>

					<?php if(has_nav_menu("header-top-menu")): ?>
						<nav class="header-top-menu nz-clearfix">
							<?php wp_nav_menu($arg_top); ?>
						</nav>
					<?php endif; ?>

				</div>
			</div>
		<?php endif ?>

		<div class="header-body">
			<?php if ($nz_h2_desk_sidebar_toggle == "true"): ?>
				<div class="site-sidebar-toggle"></div>
			<?php endif ?>
			<div class="container nz-clearfix">
				<div class="left-part nz-clearfix">
					<?php if(has_nav_menu("header-menu-1")): ?>
						<nav class="header-menu header-menu-1 desk-menu nz-clearfix">
							<?php wp_nav_menu($arg_1); ?>
						</nav>
					<?php endif; ?>

					<?php if ($nz_h2_desk_search == "true"): ?>
						<div class="search-toggle-wrap">
							<div class="search-toggle"></div>
							<div class="search"><?php get_search_form(); ?></div>
						</div>
					<?php endif ?>
				</div>
				<div class="logo-part">
					<?php if (!empty($nz_h2_desk_logo)): ?>
						<div class="logo logo-desk">
							<a href="<?php echo esc_url(home_url('/')); ?>" title="<?php bloginfo('name'); ?>">
								<img class="normal-logo" style="max-width:<?php echo esc_attr($nz_h2_desk_logo_w); ?>px;max-height:<?php echo esc_attr($nz_h2_desk_logo_h); ?>px;" src="<?php echo esc_url($nz_h2_desk_logo); ?>" alt="<?php bloginfo('name'); ?>">
								<img class="fixed-logo" style="max-width:<?php echo esc_attr($nz_h2_desk_fixed_logo_w); ?>px;max-height:<?php echo esc_attr($nz_h2_desk_fixed_logo_h); ?>px;margin-top:-<?php echo esc_attr($nz_h2_desk_fixed_logo_h/2); ?>px" src="<?php echo esc_url($nz_h2_desk_fixed_logo); ?>" alt="<?php bloginfo('name'); ?>">
							</a>
						</div>
					<?php else: ?>
						<div class="logo-title"><?php echo get_bloginfo('name') ?></div>
					<?php endif ?>
				</div>
				<div class="right-part nz-clearfix">
					<?php if(has_nav_menu("header-menu-2")): ?>
						<nav class="header-menu header-menu-2 desk-menu nz-clearfix">
							<?php wp_nav_menu($arg_2); ?>
						</nav>
					<?php endif; ?>
					<?php if ($nz_h2_desk_shop_cart == "true"): ?>
						<?php if (class_exists('Woocommerce')): ?>
							<div class="desk-cart-wrap">
								<div class="desk-cart-toggle">
									<a class="cart-contents" href="<?php echo esc_url($GLOBALS['woocommerce']->cart->get_cart_url()); ?>" title="<?php echo esc_html__('View your shopping cart', 'montserrat'); ?>">
					                    <span class="cart-info"><?php echo esc_attr($GLOBALS['woocommerce']->cart->cart_contents_count); ?></span>
					                </a>
						        </div>
						        <div class="woo-cart nz-clearfix">
					                <?php
					                    if ( version_compare( WOOCOMMERCE_VERSION, "2.0.0" ) >= 0 ) {
					                        echo montserrat_ninzio_get_the_widget( 'WC_Widget_Cart', 'title=Cart' );
					                    } else {
					                        echo montserrat_ninzio_get_the_widget( 'WooCommerce_Widget_Cart', 'title=Cart' );
					                    }
					                ?>
				            	</div>
							</div>
						<?php endif ?>
					<?php endif ?>
				</div>
			</div>
		</div>

	</div>
</header>