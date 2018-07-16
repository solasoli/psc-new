<?php
/**
 Template Name: Checkout Template
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<?php 
		$checkout_img = get_field('checkout_img','option');
		$checkout_text = get_field('checkout_text','option');
	?>
	<?php if ($checkout_img) {?>
    <div class="sub-banner" style="background-image:url(<?php echo $checkout_img;?>);">
    <?php } else{ ?>
    <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/thank-you.jpg);">
    <?php } ?>
    	<div class="banner-content dashboard">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-12">
                    	<?php if ( is_checkout() && !empty( $wp->query_vars['order-received'] ) ) {?>
                        
                        <?php } else{?>
                        <div class="caption-text"><?php echo $checkout_text; ?></div>
                        <?php }?>
                    	
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="dashboard-content">
    	<div class="container">
        	<div class="row">
            	<div class="col-xs-12">
                	<?php if ( is_checkout() && !empty( $wp->query_vars['order-received'] ) ) {?>
                	<ul class="breadcrumb-list">
                    	<li><a href="<?php echo bloginfo('home');?>">Home</a></li>
                        <li>thank you</li>
                    </ul>
                    <?php } else{?>
                    <ul class="breadcrumb-list">
                    	<li><a href="<?php echo bloginfo('home');?>">Home</a></li>
                        <li><a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">Catalogue</a></li>
                        <li><a href="<?php echo wc_get_cart_url(); ?>">Shopping Cart</a></li>
                        <li><?php echo $post->post_title;?></li>
                    </ul>
                    <?php }?>
                    <div class="dashboard-content-inner">
                    	<?php echo apply_filters('the_content',$post->post_content); ?>
                    	
                    </div> 
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
