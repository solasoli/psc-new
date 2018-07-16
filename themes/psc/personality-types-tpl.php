<?php

/**

 Template Name: Personality Types

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

		$top_banner_img = get_field('top_banner_img','option');

		$top_banner_text = get_field('top_banner_text','option');

	?>

	<?php if ($top_banner_img) {?>

    <div class="sub-banner" style="background-image:url(<?php echo $top_banner_img;?>);">

    <?php } else{ ?>

    <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/test-result.jpg);">

    <?php } ?>

    	<div class="banner-content">

        	<div class="container">

            	<div class="row">

                	<div class="col-xs-12">

                    	<div class="caption-text"><?php echo $top_banner_text; ?></div>

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

                    <li><?php echo $post->post_title;?></li>

                </ul>

                <div class="left-inner">

                	<h1>Type descriptions</h1>

                    <h4>Choose your type</h4>

                    <ul class="type-content">

                    	<?php

							while(has_sub_fields('personality_types','option')):

							$type_icon = get_sub_field('type_icon');

							$description_page = get_sub_field('description_page');

						?>

                    

                    	<li>

                        	<a href="<?php echo $description_page; ?>"><img src="<?php echo $type_icon; ?>" alt=""></a>

                        </li>

                        

                        <?php endwhile; ?>

                        

                    </ul>

                </div>

            </div>

            <div class="content-right same-height">

            	<div class="right-top">

                	<img src="<?php echo get_field('side_img','option'); ?>" alt="">

                    <h3><?php echo get_field('side_title','option'); ?></h3>

                    <?php echo get_field('side_short_description','option'); ?>

                    <a href="<?php echo get_field('side_button_link','option'); ?>" class="primary-button"><?php echo get_field('side_button_label','option'); ?></a>

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

                            <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>" class="primary-button">Buy Now</a>

						</div>

					<?php endwhile; wp_reset_postdata();?>

                    

                </div>

                <!-- end featured-block -->

            </div>

        </div>

    </div>

    

    <?php include "featured-products-block.php" ;?>

    

    <?php include "subscription-block.php" ;?>

    



<?php get_footer(); ?>

