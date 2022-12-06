<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta http-equiv="Content-Type" content="<?php echo esc_attr(get_bloginfo('html_type')); ?>; charset=<?php echo esc_attr(get_bloginfo('charset')); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) )
	{
		wp_body_open();
	}else{
		do_action('wp_body_open');
	}
?>

<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'construction-services-company' ); ?></a>

<div class="header-menu">
	<div class="topheader">
		<div class="container-fluid py-2">
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-7 col-md-9 col-sm-9 text-center text-md-right">
					<?php if ( get_theme_mod('construction_services_company_header_phone_number') ) : ?>
						<span class="mr-3"><i class="fas fa-phone mr-2"></i><?php echo esc_html( get_theme_mod('construction_services_company_header_phone_number' ) ); ?></span>
					<?php endif; ?>
					<?php if ( get_theme_mod('construction_services_company_header_email') ) : ?>
						<span class="mr-3"><i class="fas fa-paper-plane mr-2"></i><?php echo esc_html( get_theme_mod('construction_services_company_header_email' ) ); ?></span>
					<?php endif; ?>
					<?php if ( get_theme_mod('construction_services_company_header_location') ) : ?>
						<span class="mr-3"><i class="fas fa-map-marker-alt mr-2"></i><?php echo esc_html( get_theme_mod('construction_services_company_header_location' ) ); ?></span>
					<?php endif; ?>
				</div>
		     	<div class="col-lg-2 col-md-3 col-sm-3">
					<div class="social-links text-md-right text-center">
				   		<?php $construction_services_company_settings = get_theme_mod( 'construction_services_company_social_links_settings' ); ?>
						<?php if ( is_array($construction_services_company_settings) || is_object($construction_services_company_settings) ){ ?>
							<div class="social-links">
						    	<?php foreach( $construction_services_company_settings as $construction_services_company_setting ) { ?>
							        <a href="<?php echo esc_url( $construction_services_company_setting['link_url'] ); ?>">
							            <i class="<?php echo esc_attr( $construction_services_company_setting['link_text'] ); ?> mr-3"></i>
							        </a>
						    	<?php } ?>
					    	</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<header id="site-navigation" class=" header text-center">
		<div class="container-fluid menu-header">
			<div class="row">
				<div class="col-lg-3 col-md-12 logo-box">
					<div class="logo text-center">
			    		<div class="logo-image">
			    			<?php echo esc_url( the_custom_logo() ); ?>
				    	</div>
				    	<div class="logo-content">
					    	<?php
					    		if ( get_theme_mod('construction_services_company_display_header_title', true) == true ) :
						      		echo '<a href="' . esc_url(home_url('/')) . '" title="' . esc_attr(get_bloginfo('name')) . '">';
						      			echo esc_html(get_bloginfo('name'));
						      		echo '</a>';
						      	endif;

						      	if ( get_theme_mod('construction_services_company_display_header_text', true) == true ) :
					      			echo '<span>'. esc_html(get_bloginfo('description')) . '</span>';
					      		endif;
				    		?>
						</div>
					</div>
				</div>
				<div class="col-lg-10 col-md-12 col-sm-12 text-center align-self-center menu-box">
					<?php if(has_nav_menu('main-menu')){ ?>
						<button class="menu-toggle my-2 py-2 px-3" aria-controls="top-menu" aria-expanded="false" type="button">
							<span aria-hidden="true"><?php esc_html_e( 'Menu', 'construction-services-company' ); ?></span>
						</button>
						<nav id="main-menu" class="close-panal">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'main-menu',
									'container' => 'false'
								));
							?>
							<button class="close-menu my-2 p-2" type="button">
								<span aria-hidden="true"><i class="fa fa-times"></i></span>
							</button>
						</nav>
					<?php }?>
				</div>
				<!-- <div class="col-lg-3 col-md-4 col-sm-6 align-self-center serch-box">
					<?php if ( get_theme_mod('construction_services_company_search_box_enable', true) == true ) : ?>
	                    <div class="header-search text-center">
	                        <form method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
								<input placeholder="<?php esc_attr_e('Search Here....',  'construction-services-company'); ?>" type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
								<button type="submit" value="" class="search-button"><i class="fas fa-search"></i></button>
							</form>
	                    </div>
	                <?php endif; ?>
				</div> -->
			</div>
		</div>
	</header>
</div>