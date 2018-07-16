<?php
/**
 Template Name: Cart Template
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
		$cart_img = get_field('cart_img','option');
		$cart_text = get_field('cart_text','option');
	?>
	<?php if ($cart_img) {?>
    <div class="sub-banner" style="background-image:url(<?php echo $cart_img;?>);">
    <?php } else{ ?>
    <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/thank-you.jpg);">
    <?php } ?>
    	<div class="banner-content dashboard">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-12">
                    	<div class="caption-text"><?php echo $cart_text; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="dashboard-content">
    	<div class="container">
        	<div class="row">
            	<div class="col-xs-12">
                	<ul class="breadcrumb-list">
                    	<li><a href="<?php echo bloginfo('home');?>">Home</a></li>
                        <li><a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">Catalogue</a></li>
                        <li>shopping cart</li>
                    </ul>
                    <div class="dashboard-content-inner">
                    	<?php echo apply_filters('the_content',$post->post_content); ?>
                    	
                    </div> 
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
