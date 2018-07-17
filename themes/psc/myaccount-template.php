<?php
/**
 Template Name: My Account Template
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
$edit_profile_link = site_url('/edit-profile');
$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

?>

	<?php //if ( is_wc_endpoint_url( 'downloads' ) ) {
        if(0==1){?>
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
                            <div class="caption-text">Dashboard</div>
                            
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
                        <li>Dashboard</li>
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
                                        <li class="<?=!is_wc_endpoint_url( 'dashboard' ) ? "" : "";?>"><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Dashboard</a></li>
                                    <?php } ?>
                                   
                                <?php } ?>
                                 <li><a href="<?php echo bloginfo('home')?>/reports/">Products</a></li>

                               <!-- <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                     <?php if($endpoint == 'reports'){ ?>
                                        <li class="<?=is_wc_endpoint_url( 'reports' ) ? "active" : "";?>"><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Reports</a></li>
                                    <?php } ?> 
                                   
                                <?php } ?> -->
                                
                                <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                     <?php if($endpoint == 'orders'){ ?>
                                        <li class="<?=is_wc_endpoint_url( 'orders' ) || is_wc_endpoint_url('view-order') ? "active" : "";?>"><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">Orders/ History</a></li>
                                    <?php } ?> 
                                   
                                <?php } ?>




                                <li><a href="<?php echo bloginfo('home')?>/friends/">Friends</a></li>
                                
                            </ul>
                        <?php } ?>
                        
                        
                        <div class="cat-dropdown hidden-sm hidden-md hidden-lg">
                            <ul>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown">Dashboard</a>
                                    <ul class="dropdown-menu">
                                        <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?>
                                            <?php if($endpoint == 'dashboard'){ ?>
                                                <li class="active"><a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>">dashboard</a></li>
                                            <?php } ?>
                                           
                                        <?php } ?>
                                        <li><a href="<?php echo bloginfo('home')?>/reports/">Products</a></li>
                                        
                                         <?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) { ?> -->
                                            <?php if($endpoint == 'downloads'){ ?> 
                                                <li><a href="<?php echo esc_url( wc_get_account_endpoint_url( 'orders' ) ); ?>">Order/History</a></li>
                                            <?php } ?>
                                           
                                        <?php } ?>
                                        
                                        <li><a href="<?php echo bloginfo('home')?>/friends/">Friends</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <?php echo apply_filters('the_content',$post->post_content); ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <?php include "featured-products-block.php" ;?>
    <?php get_template_part( 'subscription', 'block' ); ?>

<?php get_footer(); ?>
