<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	
    <?php if ( has_post_thumbnail() ) {?>
    <div class="sub-banner" style="background-image:url(<?php echo the_post_thumbnail_url('full');?>);">
    <?php } else{ ?>
    <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/test-result.jpg);">
    <?php } ?>
    	<div class="banner-content">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-12">
                    	<div class="caption-text"><?php echo $post->post_title; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<div class="content-wrapper">
    	<div class="container-large">
        	<div class="content-left same-height">
            	<ul class="breadcrumb-list">
                    <li><a href="<?php echo bloginfo('home');?>">Home</a></li>
                    <li><a href="<?php echo bloginfo('home');?>/personality-types">personality types</a></li>
                    <li><?php echo $post->post_title; ?></li>
                </ul>
                <div class="left-inner">
                	<h1><?php echo $post->post_title; ?></h1>
                    <?php 
						$type_sub_title = get_field('type_sub_title',$post->ID);
						if($type_sub_title){
					?>
                    <h4><?php echo $type_sub_title; ?></h4>
                    <?php } ?>
                    
                    <div class="type-details">
                    	<?php echo apply_filters('the_content',$post->post_content); ?>
                    </div>
                    <!-- end type-details -->
                    
                    <div class="back-button">
                    	<a href="<?php echo bloginfo('home');?>/personality-types"><i class="fa fa-long-arrow-left"></i> Back to personality types</a>
                    </div>
                </div>
            </div>
            <div class="content-right same-height">
            	<div class="about-personality">
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/online-education.png">
                    <h3>Learn more about the ISFJ:</h3>
                    
                    <?php
						wp_nav_menu(array(
							'theme_location' => 'sidebar_menu',
							'depth' => 1,
							'container' => false,
							'menu_class' => ' ',
							//Process nav menu using our custom nav walker
							//'walker' => new wp_bootstrap_navwalker()          
							)
						);
					?>
                </div>
                <!-- end right-top -->
                
                <div class="share-page">
                	<h3>Share page</h3>
                    <?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,linkedin,pinterest,googleplus,reddit']"); ?>
                </div>
                <!-- end share-page -->
                
                <div class="featured-block">
                	<h3>Featured product</h3>
                    
                    <?php
						global $product;
						$args = array(
							'post_type' => 'product',
							'posts_per_page' => 1,
							'orderby' => 'title',
							'order'   => 'ASC',
							'tax_query' => array(
									array(
										'taxonomy' => 'product_visibility',
										'field'    => 'name',
										'terms'    => 'featured',
									),
								),
							);
						$loop = new WP_Query( $args );
							while ( $loop->have_posts() ) : $loop->the_post();
					?>
						 <div class="pro-item text-center">
							<?php woocommerce_template_loop_product_thumbnail(); ?>
                            <h4><?php echo get_the_title(); ?></h4>
                            <p><?php 
                                $content = get_the_content(); 
                                echo substr($content,0,60);
                            ?></p>
                            <h4><?php woocommerce_template_loop_price(); ?></h4>
                            <a href="<?php echo get_permalink($product->id); ?>" class="primary-button">Buy Now</a>
						</div>
					<?php endwhile; wp_reset_postdata();?>
                    
                </div>
                
            </div>
        </div>
    </div>
    
    <?php include "subscription-block.php" ;?>

<?php get_footer(); ?>
