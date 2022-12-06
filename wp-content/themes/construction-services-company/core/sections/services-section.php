<?php if ( get_theme_mod('construction_services_company_what_we_do_section_enable') ) : ?>

<?php $construction_services_company_left_args = array(
  'post_type' => 'post',
  'post_status' => 'publish',
  'category_name' =>  get_theme_mod('construction_services_company_what_we_do_left_category'),
  'posts_per_page' => get_theme_mod('construction_services_company_what_we_do_left_number'),
); ?>

	<div id="our_services" class="py-5">
		<div class="container">
			<?php if ( get_theme_mod('construction_services_company_what_we_do_short_heading') ) : ?>
    		<h6 class="text-center"><?php echo esc_html(get_theme_mod('construction_services_company_what_we_do_short_heading'));?></h6>
    	<?php endif; ?>
			<?php if ( get_theme_mod('construction_services_company_what_we_do_heading') ) : ?>
    		<h2 class="text-center mb-5"><?php echo esc_html(get_theme_mod('construction_services_company_what_we_do_heading'));?></h2>
    	<?php endif; ?>
			<div class="row">
				<?php $construction_services_company_arr_posts = new WP_Query( $construction_services_company_left_args );
			    if ( $construction_services_company_arr_posts->have_posts() ) :
			      while ( $construction_services_company_arr_posts->have_posts() ) :
			        $construction_services_company_arr_posts->the_post(); ?>
			        <div class="col-lg-4 col-md-4 col-sm-4">
								<div class="services-box mb-4">
									<?php if( get_post_meta($post->ID, 'construction_services_company_icon', true) ) {?>
										<i class="<?php echo esc_attr(get_post_meta($post->ID,'construction_services_company_icon',true)); ?>"></i>
		    					<?php }?>
									<h3><?php the_title(); ?></h3>
									<hr>
									<p class="mb-0"><?php echo wp_trim_words( get_the_content(), 30 ); ?></p>
									<p class="slider-button mt-4">
              			<a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php esc_html_e('Read More','construction-services-company'); ?></a>
            			</p>
								</div>
							</div>
			    <?php
			    endwhile;
			    wp_reset_postdata();
			    endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>