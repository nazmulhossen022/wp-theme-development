<?php global $aali_theme; ?>
<!-- COPYRIGHT -->
	<div class="aali_tm_section">
		<div class="aali_tm_copyright">
			<div class="container">
				<div class="copyright_inner">
					<div class="top">
						<div class="logo">
							<img src="<?php echo $aali_theme['footer_image_logo']['url']; ?>" alt="" />
						</div>
						<div class="social">
							<span><?php echo $aali_theme['footer_text_title']; ?></span>
							<ul>
								<?php if($aali_theme['footer_sosal_link_1']){ ?>
									<li><a href="<?php echo $aali_theme['footer_sosal_link_1']; ?>"><i class="icon-facebook-1"></i></a></li>
								<?php } ?>
								<?php if($aali_theme['footer_sosal_link_2']){ ?>
									<li><a href="<?php echo $aali_theme['footer_sosal_link_2']; ?>"><i class="icon-twitter-1"></i></a></li>
								<?php } ?>
								<?php if($aali_theme['footer_sosal_link_3']){ ?>
									<li><a href="<?php echo $aali_theme['footer_sosal_link_3']; ?>"><i class="icon-instagram-3"></i></a></li>
								<?php } ?>		
							</ul>
						</div>
					</div>
					<div class="bottom">
						<div class="left">
							<p><?php echo $aali_theme['footer_copy_right_text']; ?></p>
						</div>
						<div class="right">
							<?php
						       wp_nav_menu( array(
						           'theme_location'    => 'footer',
						           'depth'             => 2,
						            'container'         => '',
						           'menu_class'        => '',
						           'footer_link_class'   => 'line_anim'
						           
						        ) );
						    ?>
							<!-- <ul>
								<li><a class="line_anim" href="#">Terms &amp; Condition</a></li>
								<li><a class="line_anim" href="#">Privacy Policy</a></li>
								<li><a class="line_anim" href="#">Support</a></li>
							</ul> -->
						</div>
					</div>
					<span class="border moving_effect" data-direction="y" data-reverse="yes"></span>
				</div>
			</div>
			<span class="square moving_effect" data-direction="x">
				<a class="totop" href="#">
					<img class="svg one" src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-top.svg" alt="" />
					<img class="svg two" src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-top.svg" alt="" />
				</a>
			</span>
		</div>
	</div>
	<!-- /COPYRIGHT -->
	
	<!-- MAGIC CURSOR -->
	<div class="mouse-cursor cursor-outer"></div>
	<div class="mouse-cursor cursor-inner"></div>
	<!-- /MAGIC CURSOR -->
	
</div>
<!-- / WRAPPER ALL -->

 <script>
            var element = document.querySelector(".menu-item");
            element.classList.add("current");
            //document.getElementsByTagName("form")[0].setAttribute("id", "myForm");


 // -------------------------------------------------
// -------------  SERVICE POPUP  -------------------
// -------------------------------------------------

    function aali_tm_service_popup(){
	
	"use strict";
	
	var modalBox		= jQuery('.aali_tm_modalbox');
	var button			= jQuery('.aali_tm_service .service_list ul li .aali_tm_full_link');
	var closePopup		= modalBox.find('.close');
	
	button.on('click',function(){
		var templateUrl = '<?= get_bloginfo("template_url"); ?>';
		var element = jQuery(this);
		var parent	= element.closest('.aali_tm_service .service_list ul li');
		var elImage	= parent.find('.popup_service_image').attr('src');
		var title	= parent.find('.title').html();
		var content = parent.find('.service_hidden_details').html();
		modalBox.addClass('opened');
		modalBox.find('.description_wrap').html(content);
		modalBox.find('.service_popup_informations').prepend('<div class="image"><img src="'+templateUrl+'/img/thumbs/4-2.jpg" alt="" /><div class="main" data-img-url="'+elImage+'"></div></div>');
		aali_tm_data_images();
		modalBox.find('.service_popup_informations .image').after('<div class="main_title">'+title+'</div>');
		return false;
	});
	closePopup.on('click',function(){
		modalBox.removeClass('opened');
		modalBox.find('.description_wrap').html('');
		return false;
	});
}


// -------------------------------------------------
// -----------  PORTFOLIO POPUP  -------------------
// -------------------------------------------------


function aali_tm_portfolio_popup(){
	
	"use strict";
	
	var modalBox		= jQuery('.aali_tm_modalbox');
	var button			= jQuery('.aali_tm_portfolio .portfolio_popup');
	var closePopup		= modalBox.find('.close');
	
	button.off().on('click',function(){
		var templateUrl = '<?= get_bloginfo("template_url"); ?>';
		var element = jQuery(this);
		var parent 	= element.closest('.list_inner');
		var content = parent.find('.hidden_content').html();
		var image	= parent.find('.image .main').data('img-url');
		var details = parent.find('.details').html();
		modalBox.addClass('opened');
		modalBox.find('.description_wrap').html(content);
		modalBox.find('.popup_details').prepend('<div class="top_image"><img src="'+templateUrl+'/img/thumbs/4-2.jpg" alt="" /><div class="main" data-img-url="'+image+'"></div></div>');
		modalBox.find('.popup_details .top_image').after('<div class="portfolio_main_title">'+details+'<div>');
		aali_tm_data_images();
		return false;
	});
	closePopup.on('click',function(){
		modalBox.removeClass('opened');
		modalBox.find('.description_wrap').html('');
		return false;
	});
}


// -------------------------------------------------
// ----------------  NEWS POPUP  -------------------
// -------------------------------------------------

function aali_tm_news_popup(){
	
	"use strict";
	
	var modalBox		= jQuery('.aali_tm_modalbox');
	var button			= jQuery('.aali_tm_news .list_inner .aali_tm_full_link,.aali_tm_news .news_list ul li .details .title a,.aali_tm_news .aali_tm_learn_more a');
	var closePopup		= modalBox.find('.close');
	
	button.on('click',function(){
		var templateUrl = '<?= get_bloginfo("template_url"); ?>';
		var element = jQuery(this);
		var parent 	= element.closest('.list_inner');
		var content = parent.find('.news_hidden_details').html();
		var image	= element.closest('.list_inner').find('.image .main').data('img-url');
		var details = parent.find('.details').html();
		modalBox.addClass('opened');
		modalBox.find('.description_wrap').html(content);
		modalBox.find('.news_popup_informations').prepend('<div class="image"><img src="'+templateUrl+'/img/thumbs/4-2.jpg" alt="" /><div class="main" data-img-url="'+image+'"></div></div>');
		modalBox.find('.news_popup_informations .image').after('<div class="details">'+details+'<div>');
		aali_tm_data_images();
		return false;
	});
	closePopup.on('click',function(){
		modalBox.removeClass('opened');
		modalBox.find('.description_wrap').html('');
		return false;
	});
}

            
  </script>



<?php wp_footer(); ?>

</body>
</html>