<?php get_header(); ?>
	<!-- HERO -->
	<div class="aali_tm_section" id="home">
		<div class="aali_tm_hero">
			<div class="container">
				<div class="hero_inner">
					<div class="content">
						<span class="hello"><?php echo $aali_theme['banner_sub_title']; ?></span>
						<h3 class="name"><?php echo $aali_theme['banner_main_title']; ?></h3>
						<div class="job">
							<span class="cd-headline rotate-1"> <!-- ANIMATE TEXT VALUES: zoom, rotate-1, letters type, letters rotate-2, loading-bar, slide, clip, letters rotate-3, letters scale, push,  -->
								<span class="blc"><?php echo $aali_theme['banner_span_title']; ?></span>
								<span class="cd-words-wrapper">
                                  <?php if($aali_theme['banner_span_repeater_title']){ $i = 0; foreach ( $aali_theme['banner_span_repeater_title'] as $val ) {
                                    if ( $i == 0 ) { ?>
                                    <b class="is-visible"><?php echo $val; ?></b>
                                    <?php } else{ ?>
                                    <b><?php echo $val; ?></b>
                                   <?php } $i++;} } ?>

                                    
								</span>
							</span>
						</div>
						<div class="hero_buttons">
							<div class="aali_tm_button">
								<a class="anchor" href="<?php echo $aali_theme['banner_button_1_link']; ?>"><span><?php echo $aali_theme['banner_button_1_text']; ?> <img class="svg" src="<?php echo $aali_theme['banner_button_1_icon']['url']; ?>" alt="" /></span></a>
							</div>
							<div class="simple_button">
								<a class="anchor" href="<?php echo $aali_theme['banner_button_2_link']; ?>"><?php echo $aali_theme['banner_button_2_text']; ?></a>
							</div>
						</div>
						<div class="aali_tm_down">
							<div class="down-icon white top_120">
								<a class="anchor" href="#about">
									<svg width="26px" height="100%" viewBox="0 0 247 390" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">
										<path id="wheel" d="M123.359,79.775l0,72.843" style="fill:none;stroke:#fff;stroke-width:20px;"/>
										<path id="mouse" d="M236.717,123.359c0,-62.565 -50.794,-113.359 -113.358,-113.359c-62.565,0 -113.359,50.794 -113.359,113.359l0,143.237c0,62.565 50.794,113.359 113.359,113.359c62.564,0 113.358,-50.794 113.358,-113.359l0,-143.237Z" style="fill:none;stroke:#fff;stroke-width:20px;"/>
									</svg>
								</a>
							</div>
						</div>
					</div>
					<div class="avatar parallax" data-relative-input="true">
						<div class="main">
							<img src="<?php echo $aali_theme['banner_hero_image']['url']; ?>" alt="" class="layer" data-depth="0.1" />
						</div>
						<span class="one"><span class="in layer" data-depth="0.14"></span></span>
						<span class="two"><span class="in layer" data-depth="0.18"></span></span>
						<span class="three"><span class="in layer" data-depth="0.22"></span></span>
						<span class="four"><span class="in layer" data-depth="0.26"></span></span>
						<span class="five"><span class="in layer" data-depth="0.3"></span></span>
						<h3 class="stroke_text"><span class=""><?php echo $aali_theme['banner_hero_sub_title']; ?></span></h3>
					</div>
				</div>
			</div>
			<div class="socials">
				<ul>
					<?php 
						  if($aali_theme['banner_sosal_link_1']){
					?>
					<li><a href="<?php echo $aali_theme['banner_sosal_link_1']; ?>"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/svg/social/facebook.svg" alt="" /></a></li>
					<?php } if($aali_theme['banner_sosal_link_2']){  ?>
					<li><a href="<?php echo $aali_theme['banner_sosal_link_2']; ?>"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/svg/social/twitter.svg" alt="" /></a></li>
					<?php } if($aali_theme['banner_sosal_link_3']){ ?>
					<li><a href="<?php echo $aali_theme['banner_sosal_link_3']; ?>"><img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/svg/social/instagram.svg" alt="" /></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="hero_mail">
				<a class="line_anim" href="mailto:<?php echo $aali_theme['banner_hero_gmail']; ?>"><?php echo $aali_theme['banner_hero_gmail']; ?></a>
			</div>
		</div>
	</div>
	<!-- /HERO -->
	
	<!-- ABOUT -->
	<div class="aali_tm_section" id="about">
		<div class="aali_tm_about">
			<div class="about_inner">
				<div class="left">
					<div class="image">
						<img src="<?php echo get_template_directory_uri().'/img/thumbs/45-49.jpg'; ?>" alt="" />
						<div class="main" data-img-url="<?php echo $aali_theme['about_home_image_1']['url']; ?>"></div>
						<span class="square moving_effect" data-direction="y" data-reverse="yes"></span>
						<span class="border"><span class="in moving_effect" data-direction="x" data-reverse="yes"></span></span>
					</div>
				</div>
				<div class="center">
					<div class="title wow fadeInUp" data-wow-duration="1s">
						<span class="small"><?php echo $aali_theme['about_home_title']; ?></span>
						<h3><?php echo $aali_theme['about_home_title_1']; ?> <span><?php echo $aali_theme['about_home_title_1_subtitle']; ?></span></h3>
						<h3><?php echo $aali_theme['about_home_title_2']; ?> <span><?php echo $aali_theme['about_home_title_2_subtitle']; ?></span></h3>
						<span class="subtitle"><?php echo $aali_theme['about_home_title_3']; ?></span>
					</div>
					<div class="text wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
						<p><?php echo $aali_theme['about_home_description_editor']; ?></p>
						<!-- <p>Hi! My name is Aali Walker. I am UI/UX designer, and I'm very passionate and dedicated to my work.</p>
						<p>With 20 years experience as a professional graphic designer and web developer, I have acquired the skills and knowledge necessary to make your project a success.</p> -->
					</div>
					<div class="aali_tm_button wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s">
						<a href="<?php echo $aali_theme['about_home_download_cv_link']['url']; ?>" download><span><?php echo $aali_theme['about_home_button_title']; ?> <img class="svg" src="<?php echo $aali_theme['about_home_button_icon']['url']; ?>" alt="" /></span></a>
					</div>
				</div>
				<div class="right">
					<div class="image">
						<img src="<?php echo get_template_directory_uri().'/img/thumbs/41-61.jpg'; ?>" alt="" />
						<div class="main" data-img-url="<?php echo $aali_theme['about_home_image_2']['url']; ?>"></div>
						<div class="square moving_effect" data-direction="x" data-reverse="no"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /ABOUT -->
	
	<!-- SKILLS -->
	<div class="aali_tm_section">
		<div class="aali_tm_skills">
			<div class="container">
				<div class="skills_inner">
					<div class="left wow fadeInLeft" data-wow-duration="1s">
						<div class="aali_tm_main_title" data-text-align="left" data-color="light">
							<span><?php echo $aali_theme['skill_home_sub_title']; ?></span>
							<h3><?php echo $aali_theme['skill_home_title']; ?></h3>
							<p><?php echo $aali_theme['skill_home_description_editor']; ?></p>
						</div>
					</div>
					<div class="right wow fadeInRight" data-wow-duration="1s">
						<div class="dodo_progress">
							<?php
										$skill = array(  
								        'post_type' => 'skill',
								        'post_status' => 'publish',
								        'posts_per_page' => 4,
								    );

								    $skill_loop = new WP_Query( $skill ); 
								       
								    while ( $skill_loop->have_posts() ) : $skill_loop->the_post(); 

								    $skill_persent = get_field('skill_%');

							?>
							 <div class="progress_inner" data-value="<?php echo $skill_persent; ?>">
								<span><span class="label"><?php the_title(); ?></span><span class="number"><?php echo $skill_persent; ?>%</span></span>
								<div class="background"><div class="bar"><div class="bar_in"></div></div></div>
							</div>
						<?php

								    endwhile;

								    wp_reset_postdata(); 
						 ?>

						</div>
					</div>
				</div>
			</div>
			<span class="border moving_effect" data-direction="x" data-reverse="yes"></span>
		</div>
	</div>
	<!-- /SKILLS -->
	
	<!-- PORTFOLIO -->
	<div class="aali_tm_section help" id="portfolio">
		<div class="aali_tm_portfolio wow fadeInUp" data-wow-duration="1s">
			<div class="container">
				<div class="aali_tm_main_title" data-text-align="center" data-color="light">
					<span><?php echo $aali_theme['portfolio_home_sub_title']; ?></span>
					<h3><?php echo $aali_theme['portfolio_home_title']; ?></h3>
				</div>
				<div class="portfolio_filter">
					<ul>
						<li><a href="#" class="current" data-filter="*">All</a></li>
						<?php
										$portfolio = array(  
								        'post_type' => 'portfolio',
								        'post_status' => 'publish',

								         ); 

								         $portfolio_loop = new WP_Query( $portfolio ); 
								       
								    while ( $portfolio_loop->have_posts() ) : $portfolio_loop->the_post(); 

								    $categories = get_the_category();

								    if ( ! empty( $categories ) ) {
										      
							?>
						
						<li><a href="#" data-filter=".<?php echo preg_replace( '/\s+/', '', $categories[0]->name ); ?>"><?php  echo esc_html( $categories[0]->name ); ?></a></li>
						<!-- <li><a href="#" data-filter=".image">Image</a></li> -->
						<?php

							      }
								    endwhile;

								    wp_reset_postdata(); 
						 ?>
					</ul>
				</div>
				<div class="portfolio_list">
					<ul class="gallery_zoom">
						<?php
										$portfolios = array(  
								        'post_type' => 'portfolio',
								        'post_status' => 'publish',

								         ); 

								         $portfolio_loops = new WP_Query( $portfolios ); 
								       
								    while ( $portfolio_loops->have_posts() ) : $portfolio_loops->the_post(); 

								    $categories = get_the_category();

								    if ( ! empty( $categories ) ) {
								    	 $catagory_class = preg_replace( '/\s+/', '', $categories[0]->name );
								    }

								    $video_portfolio = get_field('video_portfolio');
								    $image_portfolio = get_field('image_portfolio');
								    //$select_option = get_field('portfolio_image_video');
								    
										      
							?>

							<?php if(get_field('portfolio_image_video') == 'video') {  ?>

							<li class="<?php echo $catagory_class; ?>">
							<div class="list_inner">
								<div class="image">
									<img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/1-1.jpg" alt="" />
									<div class="main" data-img-url="<?php the_post_thumbnail_url(); ?>"></div>
								</div>
								<div class="overlay"></div>
								<img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/svg/social/youtube-2.svg" alt="" />
								<div class="details">
									<span><?php echo $catagory_class; ?></span>
									<h3><?php the_title(); ?></h3>
								</div>
								<?php if( $video_portfolio ){ ?>
								<a class="aali_tm_full_link popup-youtube" href="<?php echo esc_url( $video_portfolio['url'] ); ?>"></a>
								<?php } ?>
							</div>
						</li>

						<?php } else { ?>

						<li class="<?php echo $catagory_class; ?>">
							<div class="list_inner">
								<div class="image">
									<img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/1-1.jpg" alt="" />
									<div class="main" data-img-url="<?php the_post_thumbnail_url(); ?>"></div>
								</div>
								<div class="overlay"></div>
								<img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/svg/maximize.svg" alt="" />
								<div class="details">
									<span><?php echo $catagory_class; ?></span>
									<h3><?php the_title(); ?></h3>
								</div>
								<?php if( !empty( $image_portfolio ) ){  ?>
								<a class="aali_tm_full_link zoom" href="<?php echo esc_url($image_portfolio['url']); ?>"></a>
								<?php } ?>
							</div>
						</li>

						<?php } ?>

						<?php

								    endwhile;

								    wp_reset_postdata(); 
						 ?>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /PORTFOLIO -->
	
	<!-- SERVICES -->
	<div class="aali_tm_section" id="service">
		<div class="aali_tm_service">
			<div class="container">
				<div class="service_list">
					<ul>
						<li class="simple wow fadeInLeft" data-wow-duration="1s">
							<div class="list_inner">
								<div class="aali_tm_main_title" data-text-align="left" data-color="dark">
									<span><?php echo $aali_theme['services_home_sub_title_1']; ?></span>
									<h3><?php echo $aali_theme['services_home_title_1']; ?></h3>
									<p><?php echo $aali_theme['services_home_description_editor_1']; ?></p>
								</div>
							</div>
						</li>
						<li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="list_inner tilt-effect">
								<span class="icon">
									<img class="svg" src="<?php echo $aali_theme['services_home_section_icon_1']['url']; ?>" alt="" />
									<img class="back" src="<?php echo get_template_directory_uri(); ?>/img/svg/service.png" alt="" />
								</span>
								<div class="title">
									<h3><?php echo $aali_theme['services_home_section_title_1']; ?></h3>
									<span class="price"><?php echo $aali_theme['services_home_section_sub_title_1']; ?> <span><?php echo $aali_theme['services_home_section_price_1']; ?></span></span>
								</div>
								<div class="text">
									<p><?php echo $aali_theme['services_home_section_shot_editor_1']; ?> </p>
								</div>
								<a class="aali_tm_full_link" href="#"></a>
								<img class="popup_service_image1" src="<?php echo get_template_directory_uri(); ?>/img/thumbs/4-2.jpg" alt="" / style="display: none;">
								<img class="popup_service_image" src="<?php echo $aali_theme['services_home_section_image_1']['url']; ?>" alt="" />
								<div class="service_hidden_details">
									<div class="service_popup_informations">
										<div class="descriptions">
											<p><?php echo $aali_theme['services_home_section_long_editor_1']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="wow fadeInLeft" data-wow-duration="1s">
							<div class="list_inner tilt-effect">
								<span class="icon">
									<img class="svg" src="<?php echo $aali_theme['services_home_section_icon_2']['url']; ?>" alt="" />
									<img class="back" src="<?php echo get_template_directory_uri(); ?>/img/svg/service.png" alt="" />
								</span>
								<div class="title">
									<h3><?php echo $aali_theme['services_home_section_title_2']; ?></h3>
									<span class="price"><?php echo $aali_theme['services_home_section_sub_title_2']; ?> <span><?php echo $aali_theme['services_home_section_price_2']; ?></span></span>
								</div>
								<div class="text">
									<p><?php echo $aali_theme['services_home_section_shot_editor_2']; ?> </p>
								</div>
								<a class="aali_tm_full_link" href="#"></a>
								<img class="popup_service_image" src="<?php echo $aali_theme['services_home_section_image_2']['url']; ?>" alt="" />
								<div class="service_hidden_details">
									<div class="service_popup_informations">
										<div class="descriptions">
											<p><?php echo $aali_theme['services_home_section_long_editor_2']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="list_inner tilt-effect">
								<span class="icon">
									<img class="svg" src="<?php echo $aali_theme['services_home_section_icon_3']['url']; ?>" alt="" />
									<img class="back" src="<?php echo get_template_directory_uri(); ?>/img/svg/service.png" alt="" />
								</span>
								<div class="title">
									<h3><?php echo $aali_theme['services_home_section_title_3']; ?></h3>
									<span class="price"><?php echo $aali_theme['services_home_section_sub_title_3']; ?> <span><?php echo $aali_theme['services_home_section_price_3']; ?></span></span>
								</div>
								<div class="text">
									<p><?php echo $aali_theme['services_home_section_shot_editor_3']; ?> </p>
								</div>
								<a class="aali_tm_full_link" href="#"></a>
								<img class="popup_service_image" src="<?php echo $aali_theme['services_home_section_image_3']['url']; ?>" alt="" />
								<div class="service_hidden_details">
									<div class="service_popup_informations">
										<div class="descriptions">
											<p><?php echo $aali_theme['services_home_section_long_editor_3']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</li>

                       <?php if( $aali_theme['services_home_section_show_4_5'] == true ){ ?>

						<li class="wow fadeInLeft" data-wow-duration="1s">
							<div class="list_inner tilt-effect">
								<span class="icon">
									<img class="svg" src="<?php echo $aali_theme['services_home_section_icon_4']['url']; ?>" alt="" />
									<img class="back" src="<?php echo get_template_directory_uri(); ?>/img/svg/service.png" alt="" />
								</span>
								<div class="title">
									<h3><?php echo $aali_theme['services_home_section_title_4']; ?></h3>
									<span class="price"><?php echo $aali_theme['services_home_section_sub_title_4']; ?> <span><?php echo $aali_theme['services_home_section_price_4']; ?></span></span>
								</div>
								<div class="text">
									<p><?php echo $aali_theme['services_home_section_shot_editor_4']; ?> </p>
								</div>
								<a class="aali_tm_full_link" href="#"></a>
								<img class="popup_service_image" src="<?php echo $aali_theme['services_home_section_image_4']['url']; ?>" alt="" />
								<div class="service_hidden_details">
									<div class="service_popup_informations">
										<div class="descriptions">
											<p><?php echo $aali_theme['services_home_section_long_editor_4']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="list_inner tilt-effect">
								<span class="icon">
									<img class="svg" src="<?php echo $aali_theme['services_home_section_icon_5']['url']; ?>" alt="" />
									<img class="back" src="<?php echo get_template_directory_uri(); ?>/img/svg/service.png" alt="" />
								</span>
								<div class="title">
									<h3><?php echo $aali_theme['services_home_section_title_5']; ?></h3>
									<span class="price"><?php echo $aali_theme['services_home_section_sub_title_5']; ?> <span><?php echo $aali_theme['services_home_section_price_5']; ?></span></span>
								</div>
								<div class="text">
									<p><?php echo $aali_theme['services_home_section_shot_editor_5']; ?> </p>
								</div>
								<a class="aali_tm_full_link" href="#"></a>
								<img class="popup_service_image" src="<?php echo $aali_theme['services_home_section_image_5']['url']; ?>" alt="" />
								<div class="service_hidden_details">
									<div class="service_popup_informations">
										<div class="descriptions">
											<p><?php echo $aali_theme['services_home_section_long_editor_5']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</li>

						<?php } ?>

						<li class="wow fadeInLeft" data-wow-duration="1s">
							<div class="list_inner tilt-effect">
								<span class="icon">
									<img class="svg" src="<?php echo $aali_theme['services_home_section_icon_6']['url']; ?>" alt="" />
									<img class="back" src="<?php echo get_template_directory_uri(); ?>/img/svg/service.png" alt="" />
								</span>
								<div class="title">
									<h3><?php echo $aali_theme['services_home_section_title_6']; ?></h3>
									<span class="price"><?php echo $aali_theme['services_home_section_sub_title_6']; ?> <span><?php echo $aali_theme['services_home_section_price_6']; ?></span></span>
								</div>
								<div class="text">
									<p><?php echo $aali_theme['services_home_section_shot_editor_6']; ?> </p>
								</div>
								<a class="aali_tm_full_link" href="#"></a>
								<img class="popup_service_image" src="<?php echo $aali_theme['services_home_section_image_6']['url']; ?>" alt="" />
								<div class="service_hidden_details">
									<div class="service_popup_informations">
										<div class="descriptions">
											<p><?php echo $aali_theme['services_home_section_long_editor_6']; ?></p>
										</div>
									</div>
								</div>
							</div>
						</li>

						<li class="simple text wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">
							<div class="list_inner">
								<div class="wrapper">
									<div class="inner_text">
										<h3><?php echo $aali_theme['services_home_section_title_7']; ?></h3>
									</div>
									<div class="aali_tm_button border">
										<a class="anchor" href="<?php echo $aali_theme['services_home_section_button_link_7']; ?>"><span><?php echo $aali_theme['services_home_section_button_title_7']; ?> <img class="svg" src="<?php echo $aali_theme['services_home_section_button_icon_7']['url']; ?>" alt="" /></span></a>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<span class="square_left moving_effect" data-direction="y" data-reverse="yes"></span>
			<span class="square_right moving_effect" data-direction="y" data-reverse="yes"></span>
		</div>
	</div>
	<!-- /SERVICES -->
	
	<!-- RESUME -->
	<div class="aali_tm_section">
		<div class="aali_tm_resume">
			<div class="content">
				<div class="container">
					<div class="resume_in">
						<div class="aali_tm_main_title" data-text-align="left" data-color="dark">
							<span><?php echo $aali_theme['know_more_sub_title']; ?></span>
							<h3><?php echo $aali_theme['know_more_home_title']; ?></h3>
							<p><?php echo $aali_theme['know_more_home_description_editor']; ?></p>
						</div>
						<div class="content_inner">
							<ul>
								<li class="wow fadeInLeft" data-wow-duration="1s">
									<h3 class="main_title"><span><?php echo $aali_theme['know_more_home_section_title_1']; ?></span></h3>
									<ul class="list">
										<li>
											<div class="list_inner">
												<span class="icon"><img class="svg" src="<?php echo $aali_theme['know_more_home_section_1_icon_1']['url']; ?>" alt="" /></span>
												<div class="info">
													<div class="left">
														<h3><?php echo $aali_theme['know_more_home_section_1_title_1']; ?></h3>
														<span><?php echo $aali_theme['know_more_home_section_1_sub_title_1']; ?></span>
													</div>
													<div class="right">
														<span><?php echo $aali_theme['know_more_home_section__date_1']; ?></span>
													</div>
												</div>
												<div class="text">
													<p><?php echo $aali_theme['know_more_home_section_1_description_1']; ?></p>
												</div>
											</div>
										</li>
										<li>
											<div class="list_inner">
												<span class="icon"><img class="svg" src="<?php echo $aali_theme['know_more_home_section_1_icon_2']['url']; ?>" alt="" /></span>
												<div class="info">
													<div class="left">
														<h3><?php echo $aali_theme['know_more_home_section_1_title_2']; ?></h3>
														<span><?php echo $aali_theme['know_more_home_section_1_sub_title_2']; ?></span>
													</div>
													<div class="right">
														<span><?php echo $aali_theme['know_more_home_section__date_2']; ?></span>
													</div>
												</div>
												<div class="text">
													<p><?php echo $aali_theme['know_more_home_section_1_description_2']; ?></p>
												</div>
											</div>
										</li>
										<li>
											<div class="list_inner">
												<span class="icon"><img class="svg" src="<?php echo $aali_theme['know_more_home_section_1_icon_3']['url']; ?>" alt="" /></span>
												<div class="info">
													<div class="left">
														<h3><?php echo $aali_theme['know_more_home_section_1_title_3']; ?></h3>
														<span><?php echo $aali_theme['know_more_home_section_1_sub_title_3']; ?></span>
													</div>
													<div class="right">
														<span><?php echo $aali_theme['know_more_home_section__date_3']; ?></span>
													</div>
												</div>
												<div class="text">
													<p><?php echo $aali_theme['know_more_home_section_1_description_3']; ?></p>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="wow fadeInRight" data-wow-duration="1s">
									<h3 class="main_title"><span><?php echo $aali_theme['know_more_home_section_title_2']; ?></span></h3>
									<ul class="list">
										<li>
											<div class="list_inner">
												<span class="icon"><img class="svg" src="<?php echo $aali_theme['know_more_home_section_2_icon_1']['url']; ?>" alt="" /></span>
												<div class="info">
													<div class="left">
														<h3><?php echo $aali_theme['know_more_home_section_2_title_1']; ?></h3>
														<span><?php echo $aali_theme['know_more_home_section_2_sub_title_1']; ?></span>
													</div>
													<div class="right">
														<span><?php echo $aali_theme['know_more_home_section_2_date_1']; ?></span>
													</div>
												</div>
												<div class="text">
													<p><?php echo $aali_theme['know_more_home_section_2_description_1']; ?></p>
												</div>
											</div>
										</li>
										<li>
											<div class="list_inner">
												<span class="icon"><img class="svg" src="<?php echo $aali_theme['know_more_home_section_2_icon_2']['url']; ?>" alt="" /></span>
												<div class="info">
													<div class="left">
														<h3><?php echo $aali_theme['know_more_home_section_2_title_2']; ?></h3>
														<span><?php echo $aali_theme['know_more_home_section_2_sub_title_2']; ?></span>
													</div>
													<div class="right">
														<span><?php echo $aali_theme['know_more_home_section_2_date_2']; ?></span>
													</div>
												</div>
												<div class="text">
													<p><?php echo $aali_theme['know_more_home_section_2_description_2']; ?></p>
												</div>
											</div>
										</li>
										<li>
											<div class="list_inner">
												<span class="icon"><img class="svg" src="<?php echo $aali_theme['know_more_home_section_2_icon_3']['url']; ?>" alt="" /></span>
												<div class="info">
													<div class="left">
														<h3><?php echo $aali_theme['know_more_home_section_2_title_3']; ?></h3>
														<span><?php echo $aali_theme['know_more_home_section_2_sub_title_3']; ?></span>
													</div>
													<div class="right">
														<span><?php echo $aali_theme['know_more_home_section_2_date_3']; ?></span>
													</div>

												</div>
												<div class="text">
													<p><?php echo $aali_theme['know_more_home_section_2_description_3']; ?></p>
												</div>
											</div>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					
					</div>
				</div>
			</div>
			<div class="media" data-background-style="video"> <!-- Background Styles: "video" and "image" // Also you can use any youtube, vimeo, and local videos -->
				<div class="video jarallax" data-speed="0" data-jarallax-video="<?php echo $aali_theme['know_more_home_video_link']; ?>"></div>
				<div class="image jarallax" data-speed="0" data-img-url="<?php echo get_template_directory_uri(); ?>/img/about/2.jpg"></div>
				<span class="square moving_effect" data-direction="y" data-reverse="yes"></span>
			</div>
		</div>
	</div>
	<!-- /RESUME -->
	
	<!-- TESTIMONIALS -->
	<div class="aali_tm_section" id="testimonial">
		<div class="aali_tm_testimonials">
			<div class="left">
				<div class="image">
					<img src="<?php echo $aali_theme['testimonial_home_sub_title_image']['url']; ?>" alt="" />
				</div>
			</div>
			<div class="right">
				<div class="right_in">
					<div class="aali_tm_main_title" data-text-align="left" data-color="light">
						<span><?php echo $aali_theme['testimonial_home_sub_title']; ?></span>
						<h3><?php echo $aali_theme['testimonial_home_title']; ?></h3>
					</div>
					<ul class="owl-carousel">

						<?php
										$testimonial = array(  
								        'post_type' => 'testimonial',
								        'post_status' => 'publish',
								    );

								    $testimonial_loop = new WP_Query( $testimonial ); 
								       
								    while ( $testimonial_loop->have_posts() ) : $testimonial_loop->the_post(); 

								    $title_testimonial = get_field('title_testimonial');

							?>

						<li class="item">
							<div class="text">
								<p><?php the_content(); ?></p>
							</div>
							<div class="name">
								<h3><?php the_title(); ?>, <span><?php echo $title_testimonial; ?></span></h3>
							</div>
						</li>

						<?php

								    endwhile;

								    wp_reset_postdata(); 
						 ?>

					</ul>
					<div class="direct">
						<a class="prev_button" href="#"><i class="icon-left"></i></a>
						<a class="next_button" href="#"><i class="icon-right"></i></a>
					</div>
				</div>
			</div>
			<span class="border"><span class="in moving_effect" data-direction="x" data-reverse="yes"></span></span>
			<span class="square moving_effect" data-direction="y" data-reverse="yes"></span>
			<span class="quote moving_effect" data-direction="x"><i class="icon-quote-left"></i></span>
		</div>
	</div>
	<!-- /TESTIMONIALS -->
	
	<!-- NEWS -->
	<div class="aali_tm_section" id="blog">
		<div class="aali_tm_news">
			<div class="container">
				<div class="aali_tm_main_title" data-text-align="center" data-color="dark">
					<span><?php echo $aali_theme['blog_home_sub_title']; ?></span>
					<h3><?php echo $aali_theme['blog_home_title']; ?></h3>
					<p><?php echo $aali_theme['blog_home_description_editor']; ?></p>
				</div>
				<div class="news_list">
					<ul>
                             <?php
										$post = array(  
								        'post_type' => 'post',
								        'post_status' => 'publish',
								        'posts_per_page' => 2,
								    );

								    $post_loop = new WP_Query( $post ); 
								       
								    while ( $post_loop->have_posts() ) : $post_loop->the_post(); 

								    $categories = get_the_category();

							?>
						<li class="wow fadeInLeft" data-wow-duration="1s">
							<div class="list_inner">
								<div class="image">
									<img src="<?php echo get_template_directory_uri(); ?>/img/thumbs/42-29.jpg" alt="" />
									<div class="main" data-img-url="<?php the_post_thumbnail_url(); ?>"></div>
									<a class="aali_tm_full_link" href="#"></a>
								</div>
								<div class="details">
									<span class="category"><a href="#"><?php echo esc_html( $categories[0]->name ); ?></a></span>
									<h3 class="title"><a href="#"><?php the_title(); ?></a></h3>
									<span class="date"><?php the_time( 'F j, Y' ); ?></span>
								</div>
								<div class="button">
									<div class="aali_tm_learn_more">
										<a href="#">Full Story</a>
									</div>
								</div>
								<div class="news_hidden_details">
									<div class="news_popup_informations">
										<div class="text">
											<?php the_content(); ?>
										</div>
									</div>
								</div>
							</div>
						</li>

						<?php

								    endwhile;

								    wp_reset_postdata(); 
						 ?>

					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /NEWS -->
	
	<!-- COUNTER -->
	<div class="aali_tm_section">
		<div class="aali_tm_counter">
			<div class="container">
				<div class="counter_list">
					<ul class="wow fadeIn" data-wow-duration="1s">
						<li>
							<div class="list_inner">
								<div class="wrapper">
									<div class="value">
										<span class="abs"><span class="tm_counter" data-from="0" data-to="<?php echo $aali_theme['count_home_section_1_count_title_1']; ?>" data-speed="1200">0</span><label class="big"><?php echo $aali_theme['count_home_section_1_count_number_1']; ?></label></a>
									</div>
									<div class="text">
										<h3><?php echo $aali_theme['count_home_section_1_title_1']; ?><br /><?php echo $aali_theme['count_home_section_1_title_2']; ?></h3>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="list_inner">
								<div class="wrapper">
									<div class="value">
										<span class="abs"><span class="tm_counter" data-from="0" data-to="<?php echo $aali_theme['count_home_section_2_count_title_1']; ?>" data-speed="1200">0</span><label class="small"><?php echo $aali_theme['count_home_section_2_count_number_1']; ?></label></span>
									</div>
									<div class="text">
										<h3><?php echo $aali_theme['count_home_section_2_title_1']; ?><br /><?php echo $aali_theme['count_home_section_2_title_2']; ?></h3>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="list_inner">
								<div class="wrapper">
									<div class="value">
										<span class="abs"><span class="tm_counter" data-from="0" data-to="<?php echo $aali_theme['count_home_section_3_count_title_1']; ?>" data-speed="1200">0</span><label class="small"><?php echo $aali_theme['count_home_section_3_count_number_1']; ?></label></span>
									</div>
									<div class="text">
										<h3><?php echo $aali_theme['count_home_section_3_title_1']; ?><br /><?php echo $aali_theme['count_home_section_3_title_2']; ?></h3>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<span class="border moving_effect" data-direction="x"></span>
		</div>
	</div>
	<!-- /COUNTER -->
	
	<!-- CONTACT -->
	<div class="aali_tm_section" id="contact">
		<div class="aali_tm_contact">
			<div class="container">
				<div class="aali_tm_main_title" data-text-align="center" data-color="dark">
					<span><?php echo $aali_theme['contact_home_sub_title']; ?></span>
					<h3><?php echo $aali_theme['contact_home_title']; ?></h3>
				</div>
				<div class="contact_inner">
					<div class="left wow fadeInLeft" data-wow-duration="1s">
						<div class="text">
							<p><?php echo $aali_theme['contact_home_description_editor']; ?></p>
						</div>
						<ul>
							<?php $i = 0; ?>
							<?php foreach( $aali_theme['contact_home_address_section'] as $slide ) :
							     if($i == 4) {
							     	break;
							     }
							?>

							<li>
								<div class="list_inner">
									<img class="svg" src="<?php echo $slide['image']; ?>" alt="" />
									<span><?php echo $slide['title']; ?></span>
									<h3><?php echo $slide['description']; ?></h3>
								</div>
							</li>
							<!-- <li>
								<div class="list_inner">
									<img class="svg" src="img/svg/message.svg" alt="" />
									<span>Email</span>
									<h3><a class="line_anim" href="mailto:hello@aali.com">hello@aali.com</a></h3>
								</div>
							</li> -->
							<?php $i++; ?>
							<?php endforeach; ?>

						</ul>
					</div>
					<div class="right wow fadeInRight" data-wow-duration="1s">
						<div class="fields">

							<?php $contact_form_shotcode = $aali_theme['contact_home_form_short_code']; ?>

                            <?php echo do_shortcode( $contact_form_shotcode );  ?>

						</div>
					</div>
				</div>
			</div>
			<span class="square moving_effect" data-direction="y" data-reverse="yes"></span>
		</div>
	</div>
	<!-- /CONTACT -->

<?php get_footer(); ?>
	
	