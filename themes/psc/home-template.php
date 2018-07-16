<?php

/**

 Template Name: Home Page

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



	<div class="banner-bottom" id="personality_block">

    	<div class="container">

        	<div class="row">

            	<div class="col-xs-12 col-sm-6">

                	<div class="img-block">

                    	<img src="<?php echo get_field('banner_bottom_thumbnail','option'); ?>" alt="">

                    </div>

                </div>

                <div class="col-xs-12 col-sm-6">

                	<div class="text-block">

                    	<h1><?php echo get_field('banner_bottom_title','option'); ?></h1>

                        <?php echo get_field('bottom_short_description','option'); ?>

                        <a href="<?php echo get_field('bottom_button_link','option'); ?>" class="primary-button"><?php echo get_field('bottom_button_label','option'); ?></a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    

    <?php include "featured-products-block.php" ;?>

    <!-- end featured-product -->

    

    <div class="featured-bottom">

    	<div class="container">

            <div class="row">

                <div class="col-xs-12">

                    <h1 class="text-center"><?php echo get_field('fea_section_title','option');?></h1>

                </div>

            </div>

            <div class="row">

            	<?php 

					while(has_sub_fields('features','option')):

					$feature_icon = get_sub_field('feature_icon');

					$feature_title = get_sub_field('feature_title');

					$feature_short_description = get_sub_field('feature_short_description');

					$feature_button_label = get_sub_field('feature_button_label');

					$feature_button_link = get_sub_field('feature_button_link');

				?>

            	<div class="col-xs-12 col-sm-6 col-md-4">

                	<div class="block-item">

                    	<img src="<?php echo $feature_icon; ?>" alt="">

                    	<h3><?php echo $feature_title; ?></h3>

                        <p><?php echo $feature_short_description; ?></p>

                        <a href="<?php echo $feature_button_link; ?>"><?php echo $feature_button_label; ?></a>

                    </div>

                </div>

                

                <?php endwhile; ?>

            </div>

        </div>

    </div>

	<!-- end featured-bottom -->

    

    <div class="testimonial-block">

    	<div class="container">

        	<div class="row">

            	<div class="col-xs-12">

                	<h1><?php echo get_field('testi_section_title','option'); ?></h1>

                </div>

            </div>

            

            <div class="row row20">

            	<?php 

					$testimonials = get_field('testimonials','option');

					//print_r($testimonials);

					$i = 1;

					

					foreach($testimonials as $testimonial){

					$user_thumb = $testimonial['user_thumb'];

					$user_name = $testimonial['user_name'];

					$user_designation = $testimonial['user_designation'];

					$user_reviews = $testimonial['user_reviews'];

					$testi_status = $testimonial['testi_status'];

					

					//print_r($testi_status);

					if($testi_status[0]=='active'){

				?>

            	<div class="col-xs-12 col-sm-4 <?php echo $i; ?>">

                	<div class="testi-item">

                    	<div class="text">

                        	<p><?php echo $user_reviews; ?></p>

                        </div>

                        <div class="user-info">

                        	<div class="user-thumb">

                            	<img src="<?php echo $user_thumb; ?>" alt="">

                            </div>

                            <div class="user-bio">

                            	<h4><?php echo $user_name; ?></h4>

                                <h5><?php echo $user_designation; ?></h5>

                            </div>

                        </div>

                    </div>

                </div>

                <?php $i++; } ?>

                

                <?php if($i > 3){break;}  } ?>

            </div>

            

            

        </div>

    </div>

    <!-- end testimonial-block -->

    

    <div class="footer-top">

    	<div class="container">

        	<div class="row">

                <div class="col-xs-12 col-sm-6">

                    <div class="top-left">

                        <?php echo get_field('bottom_text','option'); ?>

                        <a href="<?php echo get_field('ho_button_link','option'); ?>" class="primary-button"><?php echo get_field('ho_button_label','option'); ?></a>

                    </div>

                </div>

                <div class="col-xs-12 col-sm-6">

                    <div class="top-right">

                        <h2><?php echo get_field('subscription_title','option'); ?></h2>

                        <p><?php echo get_field('subscription_sub_title','option'); ?></p>

                        <div class="subscription-form">

                            <?php echo do_shortcode('[mc4wp_form id="137"]'); ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- end footer-top -->



<?php get_footer(); ?>

