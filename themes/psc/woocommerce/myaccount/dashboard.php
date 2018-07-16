<?php
session_start();
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>



<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	//do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	//do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	//do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
global $product;
?>
<div class="inner-group">
    <?php if(isset($_SESSION['flash_message'])) { ?> 
        <div class="alert alert-warning alert-dismissible fade in" role="alert"> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> 
                <?=$_SESSION['flash_message'];?>
        </div>
    <?php } ?>
    <div class="group-left">
        <div class="panel-box">
            <div class="panel-box-body">
                <div class="panel-top">
                    <h3>My Personality Type</h3>
                    <div class="action-bullet"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/action-bullet.png" alt=""></a></div>
                </div>
                <?php 
					global $current_user;
					global $wpdb;
					//print_r($current_user);
					$userID = get_current_user_id();
					//print_r($userMeta);
					$test_results = $wpdb->prefix . "test_results";
					$personality_type = $wpdb->get_row("SELECT personality_type FROM {$test_results} WHERE user_id = '{$userID}' ORDER BY ID ASC LIMIT 1");
					//print_r($personality_type);
				?>
                <div class="type-info">
                	<?php if($personality_type){?>
                
                        <div class="type-title">
                            <h1><?php echo $personality_type->personality_type; ?></h1>
                        </div>
                        <div class="type-desc">
                            <p><?php echo $personality_type->personality_type; ?> <?php echo get_field($personality_type->personality_type.'_info','option');?></p>
                            <a href="<?php echo bloginfo('home')?>/personality-types/<?php echo strtolower($personality_type->personality_type); ?>-introduction/">FIND OUT MORe</a>
                        </div>
                    <?php } else{?>
                    	<p>Take the free personality test and find out more about your personality type, who you are, your strengths and more!</p>
                    <?php } ?>
                </div>
            </div>
            <div class="panel_footer">
            	<?php if($personality_type){?>
                <a href="<?php echo bloginfo('home')?>/free-personality-test/" class="secondary_button"><i class="fa fa-pencil"></i>  Re-test</a>
                <a  onclick="return ss_plugin_loadpopup_js(this);" rel="external nofollow" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo bloginfo('home')?>/personality-types/<?php echo strtolower($personality_type->personality_type); ?>-introduction/" class="secondary_button facebook-share"><i class="fa fa-facebook"></i>  Share on facebook</a>
                <?php }else{ ?>
                	<a href="<?php echo bloginfo('home')?>/free-personality-test/" class="secondary_button no-test">Take Free Test</a>
                <?php } ?>
                
            </div>
        </div>
        
        <div class="panel-box">
            <div class="panel-box-body friend-wrapper">
                <div class="panel-top friends-block">
                    <h3>Friends</h3>
                    <div class="action-bullet"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/action-bullet.png" alt=""></a></div>
                </div>
                <div class="type-info">
                    <div class="friends-list">
                        <ul>
							<?php 
                                global $wpdb;
								$current_user = wp_get_current_user();
								$curr_email = $current_user->user_email; 
                                $userID = get_current_user_id();
                                
                                $test_results = $wpdb->prefix . "test_results";
                                $personality_type = $wpdb->get_row("SELECT personality_type FROM {$test_results} WHERE user_id = '{$userID}' ORDER BY ID ASC LIMIT 1");
								
								
								$table_name = $wpdb->prefix. "guess_personality";
                                $curr_friends = $wpdb->get_results("SELECT user_id FROM `{$table_name}` where email='".$curr_email."' ORDER BY `{$table_name}`.id DESC");
								//print_r($curr_friends);
								
                                $friends = $wpdb->get_results("SELECT * FROM `{$table_name}` where user_id=".$userID." ORDER BY `{$table_name}`.id DESC");
                                //print_r($friends);
								if($curr_friends){
									foreach($curr_friends as $curr_friend){
									 	$user_id = $curr_friend->user_id;
										//print_r($user_id);
										$userID = get_current_user_id();
										$test_results = $wpdb->prefix . "test_results";
                                		$friend_per_type = $wpdb->get_row("SELECT personality_type FROM {$test_results} WHERE user_id = '{$user_id}' ORDER BY ID ASC LIMIT 1");
										$current_type = $wpdb->get_row("SELECT personality_type FROM {$test_results} WHERE user_id = '{$userID}' ORDER BY ID ASC LIMIT 1");
										$userMeta = get_user_meta($user_id);
										//print_r($userMeta);
									
							?>
                            			<li>
                                            <div class="friend-thumb">
                                                <img src="<?php echo esc_url(get_template_directory_uri())?>/images/friend-thumb.png" alt="">
                                            </div>
                                            <h5><?php echo $userMeta['first_name'][0]; ?> <?php echo $userMeta['last_name'][0]; ?></h5>
                                            <h3><?php echo $friend_per_type->personality_type; ?> <span><a href="<?php echo bloginfo('home')?>/<?php echo strtolower($current_type->personality_type); ?>-vs-<?php echo strtolower($friend_per_type->personality_type); ?>"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/remove-icon.png" alt=""></a></span></h3>
                                        </li>
                            
                            	
							<?php 
									}
								}
                                foreach($friends as $friend){
									
									
                            
                            ?>
                            
                            
                            
                                <li>
                                    <div class="friend-thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri())?>/images/friend-thumb.png" alt="">
                                    </div>
                                    <h5><?php echo $friend->first_name; ?> <?php echo $friend->last_name; ?> <?php if($friend->action==1){echo "<div class='dot'></div>";}?></h5>
                                    <h3><?php echo $friend->type; ?> <span><a href="<?php echo bloginfo('home')?>/<?php echo strtolower($personality_type->personality_type); ?>-vs-<?php echo strtolower($friend->type); ?>"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/remove-icon.png" alt=""></a></span></h3>
                                </li>
                                <?php } ?>
                             </ul>
                    </div>
                </div>
            </div>
            <div class="panel_footer">
                <a href="#" data-toggle="modal" data-target="#guess-type" class="secondary_button guess"><i class="fa fa-user"></i>  Guess the type</a>
            </div>
        </div>
    </div>
    <!-- end group-left -->
    
    <div class="group-right">
        <div class="panel-box">
            <div class="panel-box-body report-block">
                <div class="panel-top">
                    <h3>Reports</h3>
                </div>
                <div class="type-info">
                    <ul class="reports">
                    	<?php 
						$downloads = WC()->customer->get_downloadable_products();
						
						foreach ( $downloads as $download ) :
						
							$product_id = $download['product_id'];
					    	$attachment_ids[0] = get_post_thumbnail_id( $product_id );
					    	$attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' ); 
						
							$terms = get_the_terms ( $product_id, 'product_cat' );
							//print_r($terms[0]->name);
							
							if($terms[0]->name == 'Reports'){ 
						
						
						?>
                        	<li>
                                <div class="report-thumb">
                                    <?php 
									if($attachment){
								 ?>   
		
								<img src="<?php echo $attachment[0] ; ?>" class="card-image"  />
								<?php } else {?>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/placeholder.png" class="card-image"  />
								<?php } ?>
                                </div>
                                <div class="report-info">
                                    <h4><?php echo $download['product_name']; ?></h4>
                                    <?php 
										$post = get_post( $product_id );
										echo apply_filters( 'woocommerce_short_description', substr($post->post_content,0,60) );
									?>
                                    <a href="<?php echo $download['download_url']; ?>"><i class="fa fa-download"></i> DOWNLOAD</a>
                                </div>
                            </li>
							
						<?php }  endforeach; ?>
                        
                    </ul>
                </div>
            </div>
         </div>
        
        <div class="panel-box">
            <div class="panel-box-body history-block">
                <div class="panel-top">
                    <h3>Order/History</h3>
                    <div class="action-bullet"><a href="#"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/action-bullet.png" alt=""></a></div>
                </div>
                <div class="type-info">
                    <ul class="order_history">
                        <li>
                            <div class="order-date"><strong>Date</strong></div>
                            <div class="history"><strong>Order history</strong></div>
                        </li>
                        
                        <?php
							global $current_user;
							get_currentuserinfo();
							$args = array(
								// WC orders post type
								'post_type'   => 'shop_order',
								'post_status' => array_keys( wc_get_order_statuses() ), 
								'numberposts' => -1,
								'meta_key'    => '_customer_user',
								'meta_value'  => $current_user->ID,
							);
							$customer_orders = get_posts($args);
							//print_r($customer_orders);
							foreach($customer_orders as $cus_order){
								$order = wc_get_order( $cus_order->ID );
								$items = $order->get_items();
								//print_r($items);
								
                        ?>
                        
                        <?php foreach($items as $item){?>
                        <li>
                        	
                            <div class="order-date"><?php echo date('d/m/Y', strtotime($cus_order->post_date)); ?></div>
                            
                            <div class="history"><?php echo $item['name']; ?></div>
                           
                        </li>
                         <?php } ?>
                        
                        <?php } ?>
                        
                    </ul>
                </div>
            </div>
         </div>
    </div>
        
</div>


