<?php
/**
 * The Header for Optimizer
 *
 * Displays all of the <head> section and everything
 *
 * @package Optimizer
 *
 * @since Optimizer 1.0
 */
/*OPTION DEFAULTS*/
global $optimizer;
$optimizer = optimizer_option_defaults();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<?php // Google Chrome Frame for IE ?>
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="profile" href="http://gmpg.org/xfn/11"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class();?>>
<!--HEADER-->
<div class="header_wrap layer_wrapper">
	<!--HEADER STARTS-->
	    <div class="header">

	        <div class="center">
	            <div class="head_inner">
	            <!--LOGO START-->
	            	<?php if(!empty($optimizer['hide_tagline'])){ $hidedesc='hide_sitetagline'; }else{ $hidedesc=''; } ?>
	                <div class="logo <?php echo $hidedesc; ?>">
	                    <?php if(!empty($optimizer['logo_image_id']['url'])){   ?>
	                        <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php $logo = $optimizer['logo_image_id']; echo $logo['url']; ?>" /></a>
	                        <span class="desc"><?php echo bloginfo('description'); ?></span>
	                    <?php }else{ ?>
	                            <?php if ( is_home() ) { ?>
	                            <h1><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h1><a href="<?php echo esc_url( home_url( '/' ) );?>" class="logo-titre"><img src='http://localhost/P1/wp-content/uploads/2017/04/unnamed.png' alt='logo' /></a>
	                            <span class="desc"><?php echo bloginfo('description'); ?></span>
	                            <?php }else{ ?>
	                            <h2><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h2><a href="<?php echo esc_url( home_url( '/' ) );?>" class="logo-titre"><img src='http://localhost/P1/wp-content/uploads/2017/04/unnamed.png' alt='logo' /></a>
	                            <span class="desc"><?php echo bloginfo('description'); ?></span>
	                            <?php } ?>

	                    <?php } ?>
	                </div>
	            <!--LOGO END-->

	            <!--MENU START-->
	                <!--MOBILE MENU START-->
	                <a id="simple-menu" href="#sidr"><i class="fa-bars"></i></a>
	                <!--MOBILE MENU END-->

	                <div id="topmenu" class="<?php if ('header' == $optimizer['social_bookmark_pos'] ) { ?> has_bookmark<?php } ?>">
	                <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
									<!--ajout formulaire pour excercice-->
									<form role="search" method="get" id="searchform" action="http://localhost/P1/">
									    <div>
									    <input placeholder="Recherchez sur le site" value="" name="s" id="s" type="text">
									    <input id="searchsubmit" value="Recherche" type="submit">
									    </div>
    							</form>
									<!--fin ajout formulaire--></div>

	                <!--LOAD THE HEADR SOCIAL LINKS-->
						<div class="head_soc">
							<?php if ($optimizer['social_bookmark_pos'] == 'header') { ?><?php get_template_part('framework/core','social'); ?><?php } ?>
	                    </div>
	                </div>
	            <!--MENU END-->

	            </div>
	    </div>
	    </div>
	<!--HEADER ENDS-->
</div><!--layer_wrapper class END-->

	<!--Slider START-->
		<?php if (is_home() && is_front_page()) { ?>

            <div id="slidera" class="layer_wrapper <?php if(!empty($optimizer['hide_mob_slide'])){ echo 'mobile_hide_slide';} ?>">
                <?php $slidertype = $optimizer['slider_type_id']; ?>
                <?php get_template_part('frontpage/slider',''.$slidertype.''); ?>
            </div>

          <?php } ?>
      <!--Slider END-->
