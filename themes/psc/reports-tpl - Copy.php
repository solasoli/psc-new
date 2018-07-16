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
    
    <div class="page-content">

    	<div class="container">

        	<div class="row">

            	<div class="col-xs-12">

                	<ul class="breadcrumb-list">

                    	<li><a href="<?php echo bloginfo('home');?>">Home</a></li>

                        <li><?php echo $post->post_title;?></li>

                    </ul>

                    <div class="left-inner">

                    	<div class="order-history">

       <div class="history-header">
    
            <h4>REPORTS</h4>
    
        </div>
        
        <?php if ( is_user_logged_in() ) {?>
    
        <div class="history-body reverse_order">
    
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
    
            <div class="history-item">
    
                <div class="history-left">
    
                    <div class="product-thumb">
    
                        <?php 
    
                             $attachment_ids[0] = get_post_thumbnail_id( $product_id );
    
                             $attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' );
							 if($attachment){
							 ?>   
    
                            <img src="<?php echo $attachment[0] ; ?>" class="card-image"  />
                            <?php } else {?>
                            	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/placeholder.png" class="card-image"  />
                            <?php } ?>
    
                    </div>
    
                    <div class="history-info">
    
                        <h3><?php echo $download['product_name']; ?></h3>
    
                        <p>
    
                            <?php 
    
                                $post = get_post( $product_id );
    
                                echo apply_filters( 'woocommerce_short_description', substr($post->post_content,0,60) );
    
                            ?>
    
                        </p>
    
                    </div>
    
                </div>
    
                <div class="history-right">
    
                    <a href="<?php echo $download['download_url']; ?>" download><img src="<?php echo esc_url(get_template_directory_uri())?>/images/download-icon.png" alt=""></a>
    
                </div>
    
            </div>
    
        <?php } endforeach; ?>
    
        </div>
        
        <?php } ?>
    
    </div>

                    </div> 

                </div>

            </div>

        </div>

    </div>
	
    
    
    
    
    
    
    
    <?php include "featured-products-block.php" ;?>
    <?php get_template_part( 'subscription', 'block' ); ?>
    
    
    
    
    
    

<?php get_footer(); ?>
