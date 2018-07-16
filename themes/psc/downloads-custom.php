<?php
/**
 Template Name: Friends Template
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
    <?php if ( is_wc_endpoint_url( 'downloads' ) ) {?>
        <?php 
            $history_img = get_field('history_img','option');
            $history_text = get_field('history_text','option');
        ?>
        <?php if ($history_img) {?>
        <div class="sub-banner" style="background-image:url(<?php echo $history_img;?>);">
        <?php } else{ ?>
        <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/thank-you.jpg);">
        <?php } ?>
            <div class="banner-content dashboard">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="caption-text"><?php echo $history_text; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } else{?>
        <?php if ( has_post_thumbnail() ) {?>
        <div class="sub-banner" style="background-image:url(<?php echo the_post_thumbnail_url('full');?>);">
        <?php } else{ ?>
        <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/test-result.jpg);">
        <?php } ?>
            <div class="banner-content dashboard">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="caption-text"><?php echo $post->post_title; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    
    <div class="dashboard-content">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <?php if ( is_wc_endpoint_url( 'downloads' ) ) {?>
                        <ul class="breadcrumb-list">
                            <li><a href="<?php echo bloginfo('home');?>">Home</a></li>
                            <li>Order history</li>
                        </ul>
                    <?php } else{ ?>
                    
                    <ul class="breadcrumb-list">
                        <li><a href="<?php echo bloginfo('home');?>">Home</a></li>
                        <li><?php echo $post->post_title;?></li>
                    </ul>
                    
                    <?php } ?>
                    
                    <div class="dashboard-content-inner">
                        <?php 
                            global $current_user;
                            //print_r($current_user);
                            get_currentuserinfo();
                        ?>
                        <div class="author-info">
                            <div class="author-thumb">
                                <?php echo get_avatar( $current_user->ID, 150 ); ?>
                            </div>
                            <div class="author-meta">
                                <p>Welcome back!</p>
                                <h4><?php echo $current_user->display_name; ?></h4>
                            </div>
                        </div>
                        
                        
                        <?php if( is_user_logged_in() ){ ?>
                            <ul class="dashboard-menu hidden-xs">
                                <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                    <?php if($endpoint == 'dashboard'){ ?>
                                        <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Dashboard</a></li>
                                    <?php } ?>
                                   
                                <?php } ?>
                                <!-- <li><a href="<?php echo bloginfo('home')?>/reports/">Report</a></li> -->

                                 <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                    <?php if($endpoint == 'downloads'){ ?>
                                        <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Products</a></li>
                                    <?php } ?>
                                   
                                <?php } ?>
                                
                                <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                    <?php if($endpoint == 'orders'){ ?>
                                        <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Orders/ History</a></li>
                                    <?php } ?>
                                   
                                <?php } ?>
                                
                                <li class="active"><a href="<?php echo bloginfo('home')?>/friends/">Friends</a></li>
                                
                            </ul>
                        <?php } ?>
                        
                        
                        <div class="cat-dropdown hidden-sm hidden-md hidden-lg">
                            <ul>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Friends</a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                            <?php if($endpoint == 'dashboard'){ ?>
                                                <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">dashboard</a></li>
                                            <?php } ?>
                                           
                                        <?php } ?>
                                        <li><a href="#">Report</a></li>
                                        
                                        <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                            <?php if($endpoint == 'downloads'){ ?>
                                                <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Orders/ History</a></li>
                                            <?php } ?>
                                           
                                        <?php } ?>
                                        
                                        <li><a href="<?php echo bloginfo('home')?>/friends/">Friends</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="inner-group">
                            <div class="friends-list">
                                <h4>Friends</h4>
                                <ul>
                                <?php 
                                    global $wpdb;
                                    $userID = get_current_user_id();
                                    
                                    $test_results = $wpdb->prefix . "test_results";
                                    $personality_type = $wpdb->get_row("SELECT personality_type FROM {$test_results} WHERE user_id = '{$userID}' ORDER BY ID ASC LIMIT 1");
                                    
                                    $table_name = $wpdb->prefix. "guess_personality";
                                    $friends = $wpdb->get_results("SELECT * FROM `{$table_name}` where user_id=".$userID." ORDER BY `{$table_name}`.id DESC");
                                    //print_r($friends);
                                    foreach($friends as $friend){
                                
                                ?>
                                
                                
                                
                                    <li>
                                        <div class="friend-thumb">
                                            <img src="<?php echo esc_url(get_template_directory_uri())?>/images/friend-thumb.png" alt="">
                                        </div>
                                        <h5><?php echo $friend->first_name; ?> <?php echo $friend->last_name; ?> <?php if($friend->action==1){echo "<div class='dot'></div>";}?></h5>
                                        <h3><?php echo $friend->type; ?> <span><a href="<?php echo bloginfo('home')?>/<?php echo strtolower($personality_type->personality_type); ?>-vs-<?php echo strtolower($friend->type); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri())?>/images/remove-icon.png" alt=""></a></span></h3>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                            
                            <div class="list-right">
                                <h3>Guess your friend <br/>personality type</h3>
                                <p id='exist' class="hidden" style="color:#f00;">Email address already exist.</p>
                                <form action="" id="guess_personality" method="post" onsubmit="return personalityValidation()">
                                    <div class="form-group">
                                        <input type="email" name="email" id="fr_email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="row row10">
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="fr_first_name" name="first_name" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="last_name" id="fr_last_name" class="form-control" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>I guess your personality type is</h4>
                                        <div class="personality_type">
                                            <span>
                                                <input type="text" id="per_1" name="per_1" maxlength="1" class="text-center" placeholder="i">
                                                <p style="color: #E18432">E/I</p>
                                            </span>
                                            <span>
                                                <input type="text" id="per_2" name="per_2" maxlength="1" class="text-center" placeholder="s">
                                               <p style="color: #E18432">S/N</p>
                                                
                                            </span>
                                            <span>
                                                <input type="text" id="per_3" name="per_3" maxlength="1" class="text-center" placeholder="f">
                                                <p style="color: #E18432">T/F</p>
                                            </span>
                                            <span>
                                                <input type="text" id="per_4" name="per_4" maxlength="1" class="text-center" placeholder="j">
                                                <p style="color: #E18432" >J/P</p>
                                               
                                            </span>
                                        </div>
                                    </div>
                                    <div class="submit-block">
                                        <input type="submit" value="submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <?php include "featured-products-block.php" ;?>
    <?php get_template_part( 'subscription', 'block' ); ?>
    
    
    
    
    
    

<?php get_footer(); ?>
