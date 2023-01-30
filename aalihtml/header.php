<?php global $aali_theme; ?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="Name of your web site">
<meta name="author" content="Marketify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php if ( is_user_logged_in() ) {

         echo '<style type="text/css">body.my-login-class { margin-top: 0px; } body.my-login-class .aali_tm_header { margin-top: 32px;}</style>'; 
      }
      else
       echo '';
 ?>

 <style type="text/css">
 	.aali_tm_main_title[data-color="light"] span{
 		 color: <?php echo $aali_theme['skill__port_home_sub_title_color']; ?> !important;
 	}
 	 .aali_tm_main_title[data-color="light"] h3{
         color: <?php echo $aali_theme['skill_port_home_title_color']; ?> !important;
 	 }
 	  .aali_tm_main_title[data-color="light"] p {
          color: <?php echo $aali_theme['skill_port_home_description_color']; ?> !important;
    }
 </style>


<?php wp_head(); ?>

</head>

<body <?php  body_class('my-login-class'); ?>> 
	
	<!-- PRELOADER -->
	<div id="preloader">
		<div class="loader_line"></div>
	</div>
	<!-- /PRELOADER -->
	
<!-- WRAPPER ALL -->
<div class="aali_tm_all_wrap" data-magic-cursor="show" data-color="crimson"> 	
	
	<!-- MODALBOX -->
	<div class="aali_tm_modalbox">
		<div class="box_inner">
			<div class="close">
				<a href="#"><img class="svg" src="<?= get_bloginfo("template_url"); ?>/img/svg/cancel.svg" alt="" /></a>
			</div>
			<div class="description_wrap"></div>
		</div>
	</div>
	<!-- /MODALBOX -->
	
	<!-- MOBILE MENU -->
	<div class="aali_tm_mobile_menu">
		<div class="mobile_menu_inner">
			<div class="mobile_in">
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $aali_theme['Theme_logo_image_opthion_header_mobile']['url']; ?>" alt="" /></a>
				</div>
				<div class="trigger">
					<div class="hamburger hamburger--slider">
						<div class="hamburger-box">
							<div class="hamburger-inner"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="dropdown">
			<div class="dropdown_inner">
				   <?php
				       wp_nav_menu( array(
				           'theme_location'    => 'primary',
				           'depth'             => 2,
				            'container'         => '',
				           'menu_class'        => 'anchor_nav',
				        ) );
				    ?>
			</div>
		</div>
	</div>
	<!-- /MOBILE MENU -->

	<!-- HEADER -->
	<div class="aali_tm_header">
		<div class="container">
			<div class="inner">
				<div class="logo">
					<a class="light" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $aali_theme['Theme_logo_image_opthion_header']['url']; ?>" alt="" /></a>
					<a class="dark" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $aali_theme['Theme_logo_image_opthion_header_sticky']['url']; ?>" alt="" /></a>
				</div>
				<div class="menu">
					<?php
				       wp_nav_menu( array(
				           'theme_location'    => 'primary',
				           'depth'             => 2,
				            'container'         => '',
				           'menu_class'        => 'anchor_nav',
				        ) );
				    ?>
				</div>
			</div>
		</div>
	</div>
	<!-- /HEADER -->
