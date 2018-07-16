<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	
    <?php 
		$catelog_img = get_field('catelog_img','option');
		$catelog_text = get_field('catelog_text','option');
	?>
	<?php if ($catelog_img) {?>
    <div class="sub-banner" style="background-image:url(<?php echo $catelog_img;?>);">
    <?php } else{ ?>
    <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/thank-you.jpg);">
    <?php } ?>
    	<div class="banner-content dashboard">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-12">
                    	<div class="caption-text"><?php echo $catelog_text; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-wrapper catelog">
    	<div class="container-large">
        	<div class="breadcrumb-list hidden-sm hidden-lg hidden-md">
                <?php woocommerce_breadcrumb(); ?>
            </div>
            
            <div class="content-right same-height pull-right">
            	<div class="search-bar">
                    <form action="<?php echo esc_url( home_url( '/'  ) ); ?>" method="get">
                        <div class="input-group">
                            
                            <input class="form-control" name="s" id="s" type="search" placeholder="Search" value="<?php echo get_search_query(); ?>">
                            <input name="post_type" value="product" type="hidden">
                            <span class="input-group-addon">
                                <input class="submit" value="Search" type="submit">
                            </span>
                        </div>
                    </form>
                    
                    
                </div>
                <!-- end search-bar -->
                
                <div class="cart-info">
                	<div class="cart-left">
                    	<i class="fa fa-shopping-bag"></i>
                    </div>
                    <div class="cart-right">
                        <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
							<h4>Shopping Cart</h4>
							<h2><?php echo sprintf (_n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></h2>
							<h4>Total: <?php echo WC()->cart->get_cart_total(); ?></h4>
                        </a>
                    </div>
                </div>
                <!-- end cart-info -->
                
                <div class="categories-block hidden-xs">
                	<h3>Categories</h3>
                    
                    <ul class="cat-list">
                    	<?php
						  $args = array(
								 'taxonomy'     => 'product_cat',
								 'orderby'      => 'name',
								 'show_count'   => 0,
								 'hierarchical' => true,
								 'title_li'     => '',
								 'hide_empty'   => true
						  );
						 $all_cats = get_categories( $args );
						 //print_r($all_categories);
						 foreach($all_cats as $all_cat){
						 ?>
                    
                    	<li>
                        	<a href="<?php echo get_term_link($all_cat->term_id, 'product_cat'); ?>">
                            	<?php echo $all_cat->name; ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <!-- end categories-block -->
                
                <div class="cat-dropdown hidden-sm hidden-md hidden-lg">
                	<ul>
                    	<li class="dropdown">
                        	<?php if(is_product_category()){?>
                        	<a href="javascript:void(0);" data-toggle="dropdown"><?php single_cat_title(); ?></a>
                            <?php } else{?>
                            	<a href="javascript:void(0);" data-toggle="dropdown">All products</a>
                            <?php } ?>
                            <ul class="dropdown-menu">
                            	<?php
								  $args = array(
										 'taxonomy'     => 'product_cat',
										 'orderby'      => 'name',
										 'show_count'   => 0,
										 'hierarchical' => true,
										 'title_li'     => '',
										 'hide_empty'   => true
								  );
								 $all_cats = get_categories( $args );
								 //print_r($all_categories);
								 foreach($all_cats as $all_cat){
								 ?>
							
								<li>
									<a href="<?php echo get_term_link($all_cat->term_id, 'product_cat'); ?>">
										<?php echo $all_cat->name; ?>
									</a>
								</li>
								<?php } ?>
                            </ul>
                        </li>
                    </ul>
                </div>
                
                
            </div>
            
        	<div class="content-left same-height">
            	<div class="breadcrumb-list hidden-xs">
                    <?php woocommerce_breadcrumb(); ?>
                </div>
                <div class="catelog-content">
                	<div class="section-title">
                    	<h3><?php woocommerce_page_title(); ?></h3>
                    </div>
                    <div class="filter-block">
                    	<div class="filter-result"><?php woocommerce_result_count(); ?></div>
                        <div class="filter-option">
                        	<?php woocommerce_catalog_ordering(); ?>
                        </div>
                    </div>
                    
                    <ul class="catelog-item">
                    	<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : the_post(); ?>
                                  <?php wc_get_template_part( 'content', 'product' ); ?>
                            <?php endwhile; // end of the loop. ?>
                        <?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
                            <?php wc_get_template( 'loop/no-products-found.php' ); ?>
                        <?php endif; ?>
                        
                        
                    </ul>
                    <div class="pagination-block">
                        <?php woocommerce_pagination(); ?>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
    
   <?php get_template_part( 'subscription', 'block' ); ?>
<?php get_footer( 'shop' ); ?>
