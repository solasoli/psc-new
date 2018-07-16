<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Hind:300,400,500,600,700|Lato:300,400,700,900" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/chosen.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); 
	global $current_user;
    get_currentuserinfo();
	
	?>
</head>

<body <?php body_class(); ?>>
	
    <div id="mobile_menu" class="hidden-md hidden-lg">
    	<div class="menu-overlay"></div>
    	<div class="menu_inner">
        	<div class="logo-block">
                <a href="<?php echo bloginfo('home')?>"><img src="<?php echo get_field('logo','option'); ?>" alt="Logo"></a>
            </div>
            <div class="menu-list">
            	<?php
					wp_nav_menu(array(
						'theme_location' => 'primary',
						'depth' => 2,
						'container' => false,
						'menu_class' => 'nav navbar-nav navbar-left',
						//Process nav menu using our custom nav walker
						'walker' => new wp_bootstrap_navwalker())
					);

				?>
            </div>
        </div>
    </div>
	
	<div class="main_wrap">

	<?php if ( is_front_page() ) {?>
	<div class="header-wrapper" style="background-image:url(<?php echo get_field('banner_image','option'); ?>">
    <?php } else{?>
    <div class="header-wrapper subpage">
    <?php } ?>
    	<div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="navbar navbar-default navbar-static-top">
                            <div class="navbar-header">
                                <button id="menu-opener" type="button" class="navbar-toggle collapsed" aria-expanded="false" aria-controls="navbar">
                                    <div class="line_button">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </div><!--end line button-->
                                </button>
                                
                                
                                <div class="logo">
                                    <a href="<?php echo bloginfo('home')?>"><img src="<?php echo get_field('logo','option'); ?>" alt="Logo"></a>
                                </div>
                             </div>
                                
                            <div id="navbar" class="navbar-collapse collapse">
                            	<?php
									wp_nav_menu(array(
										'theme_location' => 'primary',
										'depth' => 2,
										'container' => false,
										'menu_class' => 'nav navbar-nav navbar-left',
										//Process nav menu using our custom nav walker
										'walker' => new wp_bootstrap_navwalker())
									);
		
								?>
                            </div>
                            <ul class="pull-right header-right">
                            	<li class="take-test"><a href="<?php echo bloginfo('home')?>/free-personality-test">TAKE THE TEST</a></li>
                                <?php if ( is_user_logged_in() ) { $logoutUrl = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>
                                <li class="login"><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">My Account</a>
                                	<div class="drowpdown_menu">
                                    	<ul>
											<?php if($current_user->user_firstname || $current_user->user_lastname){?>
                                    			<li>Hi, <?php echo $current_user->user_firstname; ?> <?php echo $current_user->user_lastname; ?></li>
											<?php } else{?>
												<li>Hi, <?php echo $current_user->display_name; ?></li>
											<?php } ?>
                                        	<li><a href="<?php echo wp_logout_url( $logoutUrl ); ?>">Logout</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <?php } else{?>
                                	<li class="login"><a href="#" data-toggle="modal" data-target="#loginModal"><i class="fa fa-user"></i> LOGIN</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header -->
        
        <?php if ( is_front_page() ) {?>
        <div class="banner">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
                    	<div class="banner-caption text-center">
                        	<h1><?php echo get_field('banner_title','option')?></h1>
                            <p><?php echo get_field('banner_sub_title','option')?></p>
                            <a href="<?php echo get_field('banner_button_link','option')?>"><?php echo get_field('banner_button_label','option')?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="down-arrow text-center" id="down-arrow">
        	<a href="#personality_block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/down-arrow.png" alt=""></a>
        </div>
        <?php } ?>
        
    </div>
    
