<?php
/**
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
                    	<h1><?php echo $post->post_title;?></h1>
                    	<?php echo apply_filters('the_content',$post->post_content); ?>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    

<?php get_footer(); ?>
