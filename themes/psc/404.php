<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div class="sub-banner" style="background-image:url(<?php echo esc_url(get_template_directory_uri())?>/images/thankyou-bg.jpg);">
    </div>
    <div class="thankyou-content">
    	<div class="container">
        	<div class="row">
            	<div class="col-xs-12">
                	<ul class="breadcrumb-list">
                    	<li><a href="<?php echo bloginfo('home')?>">Home</a></li>
                        <li>error</li>
                    </ul>
                    <div class="error-content text-center">
                    	<div class="error-content-inner">
                        	<h1>Oops!</h1>
                            <p>We can’t seem to ﬁnd the <br/>page you’re looking for.</p>
                    	</div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
