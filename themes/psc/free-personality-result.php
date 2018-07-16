<?php
/**
 Template Name: Personality Test Result
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
		$test_img = get_field('test_img','option');
		$test_text = get_field('test_text','option');
	?>
	<?php if ($test_img) {?>
    <div class="sub-banner" style="background-image:url(<?php echo $test_img;?>);">
    <?php } else{ ?>
    <div class="sub-banner" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/test-result.jpg);">
    <?php } ?>
    	<div class="banner-content">
        	<div class="container">
            	<div class="row">
                	<div class="col-xs-12">
                    	<div class="caption-text"><?php echo $test_text; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="content-wrapper">
    	<div class="container-large">
        	<div class="content-left same-height">
            	<ul class="breadcrumb-list">
                    <li><a href="<?php echo bloginfo('home')?>">Home</a></li>
                    <li><a href="<?php echo bloginfo('home')?>/free-personality-test">free personality test</a></li>
                    <li>Result</li>
                </ul>
                
                <div class="left-inner">
                	<h1>Result!</h1>
                    <h4>According to the test, you have a preference for:</h4>
                    <div class="result-content">
                    	<h1 class="ptext"><?php echo $_GET['personality'];?></h1>
                        <h4>Below is a summary of what each individual preference means:</h4>
                        
                        <div id="personality-descriptions">
                            <div class="E">
                            	<h3>Extroversion</h3>
                                <p>You draw energy from people and the environment.</p>
                            </div>
                            <div class="I">
                            	<h3>Introversion</h3>
                                <p>You draw energy internally; from being alone.<p>
                            </div>
                    
                            <div class="S">
                            	<h3>Sensing</h3>
                            	<p>You are tuned into your five senses and learn new information in a step by step manner.</p>
                            </div>
                    
                            <div class="N">
                            	<h3>Intuition</h3>
                                <p>You are tuned into your imagination and learn new information by the seeing the big picture.<p>   
                            </div>
                    
                            <div class="T">
                            	<h3>Thinking</h3>
                                <p>You make decisions by logical, objective analysis.</p>
                            </div>
                    
                            <div class="F">
                            	<h3>Feeling</h3>
                                <p>You make decisions by considering values and relationships.</p>
                            </div>
                    
                            <div class="J">
                            	<h3>Judging</h3>
                                <p>You take a planned approach to life and seek closure.</p>
                            </div>
                    
                            <div class="P">
                                <h3>Perceiving</h3>
                                <p>You take an open approach to life and seek openness.</p>
                            </div>
                        </div>
                        
                        <p>Individually, your preferences mean only so much, but when combined, the preferences work in combination to form your unique personality!</p>
                    </div>
                    <div class="back-button">
                    	<a href="<?php echo bloginfo('home')?>/"><i class="fa fa-long-arrow-left"></i> Back to homepage</a>
                    </div>
                </div>
            </div>
            <div class="content-right same-height">
            	<div class="about-personality">
                	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/online-education.png">
                    <h3>Learn more about the <?php echo $_GET['personality'];?>:</h3>
                    <ul>
                    	<li><a href="<?php echo bloginfo('home').'/'.strtolower($_GET['personality']);?>-introduction/">Introduction</a></li>
                        <li><a href="<?php echo bloginfo('home').'/'.strtolower($_GET['personality']);?>-at-work/">At Work</a></li>
                        <li><a href="<?php echo bloginfo('home').'/'.strtolower($_GET['personality']);?>-communication/">Communication</a></li>
                        <li><a href="<?php echo bloginfo('home').'/'.strtolower($_GET['personality']);?>-leadership/">Leadership</a></li>
                        <li><a href="<?php echo bloginfo('home').'/'.strtolower($_GET['personality']);?>-in-love/">In Love</a></li>
                        <li><a href="<?php echo bloginfo('home').'/'.strtolower($_GET['personality']);?>-development/">Development</a></li>
                    </ul>
                </div>
                <!-- end right-top -->
                
                <div class="share-page">
                	<h3>Share page</h3>
                    <?php echo do_shortcode("[wp_social_sharing social_options='facebook,twitter,linkedin,pinterest,googleplus,reddit']"); ?>
                </div>
                <!-- end share-page -->
            </div>
        </div>
    </div>
    
    
    <!-- end content-wrapper -->
    
    
    
    <?php include "featured-products-block.php" ;?>
    
    
    <?php
		global $current_user;
    	get_currentuserinfo();
		
		$test_date = date('Y').'-'.date('m').'-'.date('d').' '.date('H').':'.date('i').':'.date('s'); 
		$userID = get_current_user_id();
		$type = $_GET['personality'];
		$userEmail = $current_user->user_email;
		
		
		$wpdb->insert($wpdb->prefix . "test_results",
            array('user_id' => stripslashes_deep($userID),
                'personality_type' => stripslashes_deep($type),
                'test_date' => $test_date
            ),
            array('%s', '%s', '%s')
        );
		
		$table_name = $wpdb->prefix. "guess_personality";
		$email_ids = $wpdb->get_results("SELECT * FROM `{$table_name}` where email='".$userEmail."' ORDER BY `{$table_name}`.id DESC");

		if($email_ids[0]->email && $email_ids[0]->action==0){
			$wpdb->update($table_name, array('type'=>$type,'action' => '1'), array('email' => $userEmail));
		}
		
		
		//$wpdb->update($wpdb->prefix . "users",
//			array('personality_type' => stripslashes_deep($type),
//			),
//			array('ID' => $userID)
//		);
	?>
    

<?php get_footer(); ?>
