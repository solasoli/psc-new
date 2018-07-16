<?php
/**
 Template Name: Shop Template
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
 global $woocommerce;

get_header(); ?>
	<div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/thankyou-bg.jpg);">
    	<div class="banner-content dashboard">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-12">
                    	<div class="caption-text"><?php woocommerce_page_title(); ?></div>
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
            	<div class="catelog-content">
            		<?php echo apply_filters('the_content',$post->post_content); ?>
                </div>
            </div>
            
        </div>
    </div>
    
    <?php include "subscription-block.php" ;?>
    

<?php get_footer(); ?>
