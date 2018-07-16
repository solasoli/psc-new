<?php
/**
 Template Name: Reports Template
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
                                <?php
                                if(!is_null(get_user_meta($current_user->ID, 'avatar')) && strlen(get_user_meta($current_user->ID, 'avatar', true)) > 0){
                                ?>
                                        <img src="<?php echo get_user_meta($current_user->ID, 'avatar', true);?>">
                                <?php } else { ?>
                                    <?php echo get_avatar( $current_user->ID, 150 ); ?>
                                <?php } ?>
                            </div>
                            <div class="author-meta">
                                <p>Welcome back!</p>
                                <h4><?php echo $current_user->display_name; ?></h4>                               
                            <h5><a href="<?php echo $edit_profile_link?>">Edit Profile</a></h5>
                            
                        </div>
                        </div>
                        
                        
                        <?php if( is_user_logged_in() ){ ?>
                            <ul class="dashboard-menu hidden-xs">
                                <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                    <?php if($endpoint == 'dashboard'){ ?>
                                        <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Dashboard</a></li>
                                    <?php } ?>
                                   
                                <?php } ?>
                                 <li class="active"><a href="<?php echo bloginfo('home')?>/reports/">Products</a></li>

                                 <!-- <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                    <?php if($endpoint == 'downloads'){ ?>
                                        <li class="active"><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Report</a></li>
                                    <?php } ?>
                                   
                                <?php } ?> -->
                                
                                <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                    <?php if($endpoint == 'orders'){ ?>
                                        <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Orders/ History</a></li>
                                    <?php } ?>
                                   
                                <?php } ?>
                                
                                <li ><a href="<?php echo bloginfo('home')?>/friends/">Friends</a></li>
                                
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
                                            <?php if($endpoint == 'orders'){ ?>
                                                <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Orders/ History</a></li>
                                            <?php } ?>
                                           
                                        <?php } ?>
                                        
                                        <li><a href="<?php echo bloginfo('home')?>/friends/">Friends</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                        
          <?php

          $downloads     = WC()->customer->get_downloadable_products();
$has_downloads = (bool) $downloads;

do_action( 'woocommerce_before_account_downloads', $has_downloads ); ?>

<?php if ( $has_downloads ) : ?>

    <?php do_action( 'woocommerce_before_available_downloads' ); ?>

    <?php do_action( 'woocommerce_available_downloads', $downloads ); ?>

    <?php do_action( 'woocommerce_after_available_downloads' ); ?>

<?php else : ?>

    <div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
        <a class="woocommerce-Button button btn btn-primary" style="color: #e89740;
    background: #e89640;
    width: auto;
    max-width: 100%;
    padding: 16px 15px 14px;
    line-height: 20px;
    text-align: center;
    background: #786f67;
    text-transform: uppercase;
    font-size: 16px;
    color: #e89640;
    letter-spacing: 1px;
    display: inline-block;
    -webkit-border-radius: 25px;
    -moz-border-radius: 25px;
    border-radius: 25px;
    font-weight: 400;
    font-family: 'Lato-SemiBold';
    border: none;
    min-width: 180px;
     " href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">
            <?php _e( 'Go shop', 'woocommerce' ) ?>
        </a>
        <?php _e( 'No downloads available yet.', 'woocommerce' ); ?>
    </div>
    <!-- <?php esc_html_e( 'No downloads available yet.', 'woocommerce' ); ?>
   
        <a class="woocommerce-Button button" href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>">

            <?php esc_html_e( 'Go shop', 'woocommerce' ) ?>
        </a> -->
        
  
          
<?php endif; ?>              
    
    
    
    
    
    
    
    
    
    
    
    
<?php include "featured-products-block.php" ;?>
<?php get_template_part( 'subscription', 'block' ); ?>
<?php get_footer(); ?>
