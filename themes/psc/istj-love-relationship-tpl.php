<?php

/**

 Template Name: ISTJ Love & Relationship

 * The template for displaying all single posts and attachments

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */



get_header(); ?>

	

    <?php 

		$istj_banner_image = get_field('istj_banner_image','option');

		$istj_banner_text = get_field('istj_banner_text','option');

	?>

	<?php if ($istj_banner_image) {?>

    <div class="sub-banner" style="background-image:url(<?php echo $istj_banner_image;?>);">

    <?php } else{ ?>

    <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/test-result.jpg);">

    <?php } ?>

    	<div class="banner-content">

        	<div class="container">

            	<div class="row">

                	<div class="col-xs-12">

                    	<div class="caption-text"><?php echo $istj_banner_text; ?></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    

    <div class="content-wrapper equal-height">

    	<div class="container-large">

        	<div class="content-left">

            	<ul class="breadcrumb-list">

                    <li><a href="<?php echo bloginfo('home');?>">Home</a></li>

                    <li><a href="<?php echo bloginfo('home');?>/personality-types/">personality types</a></li>

                    <li><?php echo $post->post_title; ?></li>

                </ul>

                <div class="left-inner">

                	<h1><?php echo $post->post_title; ?></h1>

                    

                    <div class="type-details">

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
                        
                        <?php $istj_detailed_image = get_field('istj_detailed_image',$post->ID); ?>

                        <?php if($istj_detailed_image){?>

                        	<img src="<?php echo $istj_detailed_image; ?>">

                        <?php } ?>

                        <?php echo get_field('istj_bottom_text',$post->ID); ?>

                        <?php echo get_field('istj_famous_people',$post->ID); ?>

                    </div>

                    <!-- end type-details -->

                    <?php 
						$m = 0;
						$prev = 0;
						$next = 0;
						$current_url = get_permalink($post->ID);
						
						$menus = get_field('istj_menu_features',$post->ID);
						$total_menu = count($menus);
						foreach($menus as $key=> $menu){
							if($menu['menu_list'] == $current_url){
								$m = $key;
								break;
							}
						}
						if($m==0){
							$prev = $total_menu-1;
							$next = $m + 1;
						}
						else if($m==$total_menu-1){
							$next = 0;
							$prev = $total_menu-2;
						}else{
							$next = $m + 1;
							$prev = $m - 1;
						}
						
						/*echo $prev .'<br>';
						echo $m .'<br>';
						echo $next; */
					?>
                    
                    <div class="back-button">

                    	<a href="<?php echo $menus[$prev]['menu_list']; ?>"><i class="fa fa-long-arrow-left"></i> <?php echo $menus[$prev]['menu_name']; ?></a>
                        <a class="pull-right" href="<?php echo $menus[$next]['menu_list']; ?>"><?php echo $menus[$next]['menu_name']; ?> <i class="fa fa-long-arrow-right"></i></a>

                    </div>
                    
                    <div class="comment-box">
                    	<div class="fb-comments" data-href="<?php echo get_permalink( $post->ID ); ?>" numposts="10"></div>
                    </div>

                    
                </div>

            </div>

            <div class="content-right">

            	<div class="about-personality">

                	<?php 

						$istj_photo = get_field('istj_photo',$post->ID);
						$side_menu_title = get_field('side_menu_title',$post->ID );

						if($istj_photo) {

					?>

                    

                	<img src="<?php echo $istj_photo; ?>">

                    <?php } else{?>

                    <img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/online-education.png" alt="">

                    <?php } if($side_menu_title){ ?>
					
                    	<h3><?php echo $side_menu_title; ?></h3>
					<?php } else{?>
                    	<h3>Learn more about the <?php echo strtok($post->post_title, " ");?>:</h3>
                    <?php } ?>
                    <ul>

                   <?php

						while(has_sub_fields('istj_menu_features',$post->ID)):

						$menu_name = get_sub_field('menu_name');

						$menu_list = get_sub_field('menu_list');

					?>

                    	<li><a href="<?php echo $menu_list; ?>"><?php echo $menu_name; ?></a></li>

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

