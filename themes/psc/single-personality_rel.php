<?php

/**

 * The template for displaying all single posts and attachments

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */



get_header(); ?>

	

   <?php 

		$relationship_image = get_field('relationship_image',$post->ID);

		$relationship_text = get_field('relationship_text',$post->ID);

	?>

	<?php if ($relationship_image) {?>

    <div class="sub-banner" style="background-image:url(<?php echo $relationship_image;?>);">

    <?php } else{ ?>

    <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/test-result.jpg);">

    <?php } ?>

    	<div class="banner-content">

        	<div class="container">

            	<div class="row">

                	<div class="col-xs-12">

                    	<div class="caption-text"><?php echo $relationship_text; ?></div>

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

                    <li><a href="<?php echo bloginfo('home');?>/personality-types/">personality types</a></li>

                    <li><a href="<?php echo bloginfo('home');?>/istj-love-relationship/">ISTJ Love & Relationship</a></li>

                    <li><?php echo $post->post_title; ?></li>

                </ul>

            	

                <div class="left-inner">

                	<h1><?php echo $post->post_title; ?></h1>

                    

                    <div class="type-details relationship custom">

                    	<div class="interact-block">

                        	<h4>Find out how you interact with another type</h4>

                            <form action="#" method="post">

                            	<div class="form-group">

                                	<div class="select-block">

                                    	<select name="value1" id="value1" class="option-select">

                                            <option value="ISTJ">ISTJ</option>

                                            <option value="ISFJ">ISFJ</option>

                                            <option value="INFJ">INFJ</option>

                                            <option value="INTJ">INTJ</option>

                                            <option value="ISTP">ISTP</option>

                                            <option value="ISFP">ISFP</option>

                                            <option value="INFP">INFP</option>

                                            <option value="INTP">INTP</option>    

                                            <option value="ESTP">ESTP</option>

                                            <option value="ESFP">ESFP</option>

                                            <option value="ENFP">ENFP</option>

                                            <option value="ENTP">ENTP</option>

                                            <option value="ESTJ">ESTJ</option>

                                            <option value="ESFJ">ESFJ</option>

                                            <option value="ENFJ">ENFJ</option>

                                            <option value="ENTJ">ENTJ</option>

                                        </select>

                                    	

                                    </div>

                                    <div class="symbol"></div>

                                    <div class="select-block">

                                    	<select name="value1" id="value2" class="option-select">

                                            <option value="ISTJ">ISTJ</option>

                                            <option value="ISFJ">ISFJ</option>

                                            <option value="INFJ">INFJ</option>

                                            <option value="INTJ">INTJ</option>

                                            <option value="ISTP">ISTP</option>

                                            <option value="ISFP">ISFP</option>

                                            <option value="INFP">INFP</option>

                                            <option value="INTP">INTP</option>    

                                            <option value="ESTP">ESTP</option>

                                            <option value="ESFP">ESFP</option>

                                            <option value="ENFP">ENFP</option>

                                            <option value="ENTP">ENTP</option>

                                            <option value="ESTJ">ESTJ</option>

                                            <option value="ESFJ">ESFJ</option>

                                            <option value="ENFJ">ENFJ</option>

                                            <option value="ENTJ">ENTJ</option>

                                        </select>

                                    </div>

                                </div>

                                <div class="submit-block">

                                    <input name="Submit" value="submit" onclick="combine()" type="button">

                                </div>

                            </form>

                        </div>

                        <?php echo apply_filters('the_content',$post->post_content); ?>

                        

                        <?php 

							while(has_sub_fields('preference_table',$post->ID)):

							$table_content = get_sub_field('table_content');

                        ?>

                        	<?php echo $table_content; ?>

                        <?php endwhile; ?>

               

                    </div>

                    <!-- end type-details -->

                    

                    <div class="back-button">

                    	<a href="<?php echo bloginfo('home')?>/personality-types/"><i class="fa fa-long-arrow-left"></i> Back to Personality Types</a>

                    </div>

                </div>

            </div>

            <div class="content-right same-height">

            	<div class="about-personality">

                	<?php 

						$ral_fea_image = get_field('ral_fea_image',$post->ID);
						$rel_menu_title = get_field('rel_menu_title',$post->ID );
						if($ral_fea_image) {

					?>

                    

                	<img src="<?php echo $ral_fea_image; ?>">

                    <?php } else{?>

                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/online-education.png" alt="">

                    <?php } if($rel_menu_title){ ?>
					
                    	<h3><?php echo $rel_menu_title; ?></h3>
					<?php } else{?>

                    	<h3>Learn more about the <?php echo strtok($post->post_title, " ");?>:</h3>
					<?php } ?>

                    <ul>

                    <?php

						while(has_sub_fields('menu_list',$post->ID)):

						$rel_menu_name = get_sub_field('rel_menu_name');

						$rel_menu_link = get_sub_field('rel_menu_link');

					?>

                    	<li><a href="<?php echo $rel_menu_link; ?>"><?php echo $rel_menu_name; ?></a></li>

                    <?php endwhile; ?>

                    </ul>

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

