<?php
/**
 Template Name: Free Personality Test
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
    <div id="test">
    
        <div class="content-wrapper free-test">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <ul class="breadcrumb-list">
                            <li><a href="<?php echo bloginfo('home')?>">Home</a></li>
                            <li>free personality test</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="test-top">
                            <h1>Discover your type</h1>
                            <p>Before you start on the personality test, please note:</p>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri())?>/images/test1.png" alt="">
                                    </div>
                                    <h3>TAKE ABOUT <br>5-10 Minutes</h3>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri())?>/images/test2.png" alt="">
                                    </div>
                                    <h3>BE YOURSELF!</h3>
                                    <p>(Adopt the <a href="#">Right Mindset</a>)</p>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="<?php echo esc_url(get_template_directory_uri())?>/images/test3.png" alt="">
                                    </div>
                                    <h3>FORCED CHOICE</h3>
                                    <p>(You HAVE to choose)</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- end content-wrapper -->
        
        <div class="test-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="test-inner">
                            <h1>Let’s begin!</h1>
                            <form action="#" method="post">
                                <div class="tab-menu">
                                    <ul class="tab-nav">
                                        <li id="nav1" class="active complete"><a href="javascript:void(0);" data-target="#stage1" onclick="goStageOne();">Stage 1</a></li>
                                        <li id="nav2"><a href="javascript:void(0);" data-target="#stage2" onclick="goStageTwo();">Stage 2</a></li>
                                        <li id="nav3"><a href="javascript:void(0);" data-target="#stage3" onclick="goStageThree();">Stage 3</a></li>
                                        <li id="nav4"><a href="javascript:void(0);" data-target="#stage4" onclick="goStageFour();">Stage 4</a></li>
                                        <li id="nav5"><a href="javascript:void(0);" data-target="#stage5" onclick="goStageFive();">Final Stage</a></li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="stage1">
                                        <div class="form-inner">
                                            <div class="form-group">
                                                <h4>Question 1</h4>
                                                <h3>Are you generally considered:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q1a" name="q1" value="i"/>
                                                        <label for="q1a">quiet?</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q1b" name="q1" value="e"/>
                                                        <label for="q1b">hearty?</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 2</h4>
                                                <h3>In conversations, do you gravitate towards:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q2a" name="q2" value="n"/>
                                                        <label for="q2a">ideas and future possiblities?</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q2b" name="q2" value="s"/>
                                                       <label for="q2b">practical facts and daily happenings?</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 3</h4>
                                                <h3>In your work, you prefer to:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q3a" name="q3" value="t"/>
                                                        <label for="q3a">work with systems and objects</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q3b" name="q3" value="f"/>
                                                        <label for="q3b">help people practically</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 4</h4>
                                                <h3>When it comes to appointments, you:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q4a" name="q4" value="j"/>
                                                        <label for="q4a">mostly are a punctual person</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q4b" name="q4" value="p"/>
                                                        <label for="q4b">often lose track of time</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 5</h4>
                                                <h3>On a weekend, you generally prefer to:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q5a" name="q5" value="i"/>
                                                        <label for="q5a">spend time at home reading or watching TV</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q5b" name="q5" value="e"/>
                                                        <label for="q5b">go out with friends for activities</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 6</h4>
                                                <h3>Do you prefer to:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q6a" name="q6" value="s"/>
                                                        <label for="q6a">create something new?</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q6b" name="q6" value="n"/>
                                                        <label for="q6b">do what has been proven successful before?</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="pagi-block text-center">
                                            1-6 of 30 questions
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane" id="stage2">
                                        <div class="form-inner">
                                            <div class="form-group">
                                                <h4>Question 7</h4>
                                                <h3>In making decisions, you consider what:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q7a" name="q7" value="f"/>
                                                        <label for="q7a">is the most logical choice</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q7b" name="q7" value="t"/>
                                                        <label for="q7b">your deeply-held values are</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 8</h4>
                                                <h3>Your room is generally:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q8a" name="q8" value="j"/>
                                                        <label for="q8a">neat and organized</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q8b" name="q8" value="p"/>
                                                        <label for="q8b">messy but I know where to find things</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 9</h4>
                                                <h3>Do people find you:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q9a" name="q9" value="i"/>
                                                        <label for="q9a">hard to comprehend?</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q9b" name="q9" value="e"/>
                                                        <label for="q9b">easy to understand?</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 10</h4>
                                                <h3>In general, you possess more of:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q10a" name="q10" value="s"/>
                                                        <label for="q10a">good memory and observation skills</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q10b" name="q10" value="n"/>
                                                        <label for="q10b">inspirations and ideas for the future</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 11</h4>
                                                <h3>When there is a friend in emotional distress, you find it:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q11a" name="q11" value="f"/>
                                                        <label for="q11a">natural to show compassion and empathy</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q11b" name="q11" value="t"/>
                                                        <label for="q11b">awkward, not knowing what you should say or do</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 12</h4>
                                                <h3>When it comes to making decisions, you prefer to:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q12a" name="q12" value="j"/>
                                                        <label for="q12a">make one as soon as possible</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q12b" name="q12" value="p"/>
                                                        <label for="q12b">keep the options open for as long as possible</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="pagi-block text-center">
                                            7-12 of 30 questions
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane" id="stage3">
                                        <div class="form-inner">
                                            <div class="form-group">
                                                <h4>Question 13</h4>
                                                <h3>In a social situation, you:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q13a" name="q13" value="e"/>
                                                        <label for="q13a">find it easy to make small talk with others</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q13b" name="q13" value="i"/>
                                                        <label for="q13b">prefer others to initiate conversation with you</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 14</h4>
                                                <h3>When looking at situations, you focus on:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q14a" name="q14" value="n"/>
                                                        <label for="q14a">implications for the future</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q14b" name="q14" value="s"/>
                                                        <label for="q14b">details of the present</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 15</h4>
                                                <h3>Which is more important when making a decision? Considering the:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q15a" name="q15" value="t"/>
                                                        <label for="q15a">logical facts</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q15b" name="q15" value="f"/>
                                                        <label for="q15b">Impact of the decision on other's feelings</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 16</h4>
                                                <h3>When doing projects, you:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q16a" name="q16" value="j"/>
                                                        <label for="q16a">schedule your time well so that you do not rush</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q16b" name="q16" value="p"/>
                                                        <label for="q16b">get a burst of energy near the deadline to finish it</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 17</h4>
                                                <h3>After going to a party, you often feel:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q17a" name="q17" value="i"/>
                                                        <label for="q17a">drained</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q17b" name="q17" value="e"/>
                                                        <label for="q17b">energized</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 18</h4>
                                                <h3>In doing a project, you want to:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q18a" name="q18" value="n"/>
                                                        <label for="q18a">try a new, possibly better method</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q18b" name="q18" value="s"/>
                                                        <label for="q18b">follow what's been successful before</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="pagi-block text-center">
                                            13-18 of 30 questions
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane" id="stage4">
                                        <div class="form-inner">
                                            <div class="form-group">
                                                <h4>Question 19</h4>
                                                <h3>Your friends are more likely to call you:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q19a" name="q19" value="f"/>
                                                        <label for="q19a">a tactful person</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q19b" name="q19" value="t"/>
                                                        <label for="q19b">a frank person</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 20</h4>
                                                <h3>In a holiday, do you prefer to:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q20a" name="q20" value="p"/>
                                                        <label for="q20a">do whatever you feel like that day?</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q20b" name="q20" value="j"/>
                                                        <label for="q20b">follow a pre-agreed itinerary?</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 21</h4>
                                                <h3>You have:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q21a" name="q21" value="i"/>
                                                        <label for="q21a">a small network of a close friends</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q21b" name="q21" value="e"/>
                                                        <label for="q21b">a big network of many friends</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 22</h4>
                                                <h3>In the classroom, you prefer subjects that deal with:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q22a" name="q22" value="n"/>
                                                        <label for="q22a">theory and concepts</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q22b" name="q22" value="s"/>
                                                        <label for="q22b">facts and realities</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 23</h4>
                                                <h3>When confronting others:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q23a" name="q23" value="t"/>
                                                        <label for="q23a">you tend to give your honest opinion</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q23b" name="q23" value="f"/>
                                                        <label for="q23b">you try to not to hurt anyone with your words</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 24</h4>
                                                <h3>Do you find keeping a schedule:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q24a" name="q24" value="p"/>
                                                        <label for="q24a">necessary but troublesome at times?</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q24b" name="q24" value="j"/>
                                                        <label for="q24b">helpful and favorable all the time?</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="pagi-block text-center">
                                            19-24 of 30 questions
                                        </div>
                                    </div>
                                    
                                    <div class="tab-pane" id="stage5">
                                        <div class="form-inner">
                                            <div class="form-group">
                                                <h4>Question 25</h4>
                                                <h3>Which activity do you prefer?</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q25a" name="q25" value="i"/>
                                                        <label for="q25a">Reading a book or playing a video game alone</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q25b" name="q25" value="e"/>
                                                        <label for="q25b">Going out for physical or recreational activities with several friends</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 26</h4>
                                                <h3>In a project, you prefer to:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q26a" name="q26" value="n"/>
                                                        <label for="q26a">strategizing and designing a plan</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q26b" name="q26" value="s"/>
                                                        <label for="q26b">implement and execute the plan</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 27</h4>
                                                <h3>You usually:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q27a" name="q27" value="f"/>
                                                        <label for="q27a">avoid confrontation because it leads to disharmony</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q27b" name="q27" value="t"/>
                                                        <label for="q27b">allow disputes because it leads to mutual growth</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 28</h4>
                                                <h3>When running a project, you prefer to:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q28a" name="q28" value="j"/>
                                                        <label for="q28a">create a plan and stick to that plan's schedule</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q28b" name="q28" value="p"/>
                                                        <label for="q28b">plunge into it and improvise as you go along</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 29</h4>
                                                <h3>Being the center of attention:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q29a" name="q29" value="i"/>
                                                        <label for="q29a">makes you feel awkward</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q29b" name="q29" value="e"/>
                                                        <label for="q29b">is comfortable for you</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h4>Question 30</h4>
                                                <h3>Your ideal work involves coming up with:</h3>
                                                <ul>
                                                    <li>
                                                        <input type="radio" id="q30a" name="q30" value="n"/>
                                                        <label for="q30a">theoretical solutions to problems</label>
                                                    </li>
                                                    <li>
                                                        <input type="radio" id="q30b" name="q30" value="s"/>
                                                        <label for="q30b">practical solutions to problems</label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        
                                        <div class="pagi-block text-center">
                                            <input id="btn_submit" type="button" class="primary-button" value="Submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    
    
    
    <?php include "subscription-block.php" ;?>
    

<?php get_footer(); ?>
