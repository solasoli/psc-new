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

                            

                                <div class="tab-menu">

                                    <ul class="tab-nav">

                                        <li id="nav1" class="active complete"><a href="javascript:void(0);" data-target="#stage1" onclick="goStageOne();">Stage 1</a></li>

                                        <li id="nav2"><a href="javascript:void(0);" data-target="#stage2" onclick="goStageTwo();">Stage 2</a></li>

                                        <li id="nav3"><a href="javascript:void(0);" data-target="#stage3" onclick="goStageThree();">Stage 3</a></li>

                                        <li id="nav4"><a href="javascript:void(0);" data-target="#stage4" onclick="goStageFour();">Stage 4</a></li>

                                        <li id="nav5"><a href="javascript:void(0);" data-target="#stage5" onclick="goStageFive();">Final Stage</a></li>

                                    </ul>

                                </div>

                                <div class="tab-content" id="test_contents">

                                	<form action="#" method="post">

                                        <div class="tab-pane active" id="stage1">

                                            <div class="form-inner">

                                                <div class="form-group">

                                                    <h4>Question 1</h4>

                                                    <h3>You enjoy meeting and engaging new people.</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q1a" name="q1" value="e"/>

                                                            <label for="q1a">Agree</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q1b" name="q1" value="i"/>

                                                            <label for="q1b">Disagree</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 2</h4>

                                                    <h3>In conversations, you gravitate towards</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q2a" name="q2" value="e"/>

                                                            <label for="q2a">future possibilities</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q2b" name="q2" value="i"/>

                                                           <label for="q2b">daily happenings
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 3</h4>

                                                    <h3>You would rather be called:</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q3a" name="q3" value="e"/>

                                                            <label for="q3a">Competent
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q3b" name="q3" value="i"/>

                                                            <label for="q3b">Compassionate?</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 4</h4>

                                                    <h3>You consider yourself to be more:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q4a" name="q4" value="e"/>

                                                            <label for="q4a">Organized
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q4b" name="q4" value="i"/>

                                                            <label for="q4b">Spontaneous
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 5</h4>

                                                    <h3>Being around people makes you feel:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q5a" name="q5" value="e"/>

                                                            <label for="q5a">Energized
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q5b" name="q5" value="i"/>

                                                            <label for="q5b">Drained</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 6</h4>

                                                    <h3>You are someone who is focused on the facts over ideas</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q6a" name="q6" value="e"/>

                                                            <label for="q6a">Agree
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q6b" name="q6" value="i"/>

                                                            <label for="q6b">Disagree
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 7</h4>

                                                    <h3>When making a decision, do you naturally:</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q7a" name="q7" value="e"/>

                                                            <label for="q7a">Look at the Facts Objectively?

</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q7b" name="q7" value="i"/>

                                                            <label for="q7b">Consider People's Feelings and Opinions?</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 8</h4>

                                                    <h3>Following a schedule:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q8a" name="q8" value="e"/>

                                                            <label for="q8a">Appeal to You
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q8b" name="q8" value="i"/>

                                                            <label for="q8b">Cramp Your Style
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 9</h4>

                                                    <h3>You wear your emotions on your face.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q9a" name="q9" value="e"/>

                                                            <label for="q9a">Agree
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q9b" name="q9" value="i"/>

                                                            <label for="q9b">Disagree
</label>

                                                        </li>
                                                        

                                                    </ul>

                                                </div>
                                                
                                                <div class="form-group">

                                                    <h4>Question 10</h4>

                                                    <h3>Thinking about the future excites you
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q10a" name="q10" value="e"/>

                                                            <label for="q10a">Agree
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q10b" name="q10" value="i"/>

                                                            <label for="q10b">Disagree</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 11</h4>

                                                    <h3>You more often let:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q11a" name="q11" value="e"/>

                                                            <label for="q11a">Your head rule your heart
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q11b" name="q11" value="i"/>

                                                            <label for="q11b">Your Heart rule your head?
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 12</h4>

                                                    <h3>You prefer to:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q12a" name="q12" value="e"/>

                                                            <label for="q12a">Plan Ahead
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q12b" name="q12" value="i"/>

                                                            <label for="q12b">Take it as it Comes
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 13</h4>

                                                    <h3>At parties, do you:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q13a" name="q13" value="e"/>

                                                            <label for="q13a">Have Fun Always
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q13b" name="q13" value="i"/>

                                                            <label for="q13b">Get Drained Easily
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 14</h4>

                                                    <h3>You tend to daydream and drift off in your thoughts.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q14a" name="q14" value="e"/>

                                                            <label for="q14a">Agree</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q14b" name="q14" value="i"/>

                                                            <label for="q14b">Disagree</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 15</h4>

                                                    <h3>You are more likely be criticized as being:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q15a" name="q15" value="e"/>

                                                            <label for="q15a">Insensitive
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q15b" name="q15" value="i"/>

                                                            <label for="q15b">Emotional
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                            

                                            <div class="pagi-block text-center">

                                                1-15 of 60 questions

                                            </div>

                                        </div>

                                        

                                        <div class="tab-pane" id="stage2">

                                            <div class="form-inner">
                                                

                                                <div class="form-group">

                                                    <h4>Question 16</h4>

                                                    <h3>You are comfortable with last minute changes.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q16a" name="q16" value="n"/>

                                                            <label for="q16a">No
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q16b" name="q16" value="s"/>

                                                            <label for="q16b">Yes
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 17</h4>

                                                    <h3>Do you consider yourself as having:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q17a" name="q17" value="n"/>

                                                            <label for="q17a">Few Friends
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q17b" name="q17" value="s"/>

                                                            <label for="q17b">Many Friends
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 18</h4>

                                                    <h3>You're full of ideas.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q18a" name="q18" value="n"/>

                                                            <label for="q18a">Agree
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q18b" name="q18" value="s"/>

                                                            <label for="q18b">Disagree</label>

                                                        </li>

                                                    </ul>

                                                </div>
                                                
                                                <div class="form-group">

                                                    <h4>Question 19</h4>

                                                    <h3>Your friends are will say that you are:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q19a" name="q19" value="n"/>

                                                            <label for="q19a">Straightforward
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q19b" name="q19" value="s"/>

                                                            <label for="q19b">Sensitive
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 20</h4>

                                                    <h3>You prefer to:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q20a" name="q20" value="n"/>

                                                            <label for="q20a">Settle Things
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q20b" name="q20" value="s"/>

                                                            <label for="q20b">Keeping Your Options Open
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 21</h4>

                                                    <h3>Given a choice to relax, would you rather:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q21a" name="q21" value="n"/>

                                                            <label for="q21a">PStay at Home 
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q21b" name="q21" value="s"/>

                                                            <label for="q21b">Go Out with Friends
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 22</h4>

                                                    <h3>You consider yourself to be more of a:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q22a" name="q22" value="n"/>

                                                            <label for="q22a">Practical Person
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q22b" name="q22" value="s"/>

                                                            <label for="q22b">Ideas Person
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 23</h4>

                                                    <h3>Are you comfortable with stating facts, even when it hurts someone's feelings?
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q23a" name="q23" value="n"/>

                                                            <label for="q23a">Yes
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q23b" name="q23" value="s"/>

                                                            <label for="q23b">No
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 24</h4>

                                                    <h3>Your work and home environment is neat and tidy.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q24a" name="q24" value="n"/>

                                                            <label for="q24a">Agree 
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q24b" name="q24" value="s"/>

                                                            <label for="q24b">Disagree
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                <h4>Question 25</h4>

                                                <h3>When having a conversation, do you prefer:
</h3>

                                                <ul>

                                                    <li>

                                                        <input type="radio" id="q25a" name="q25" value="n"/>

                                                        <label for="q25a">SHaving a variety of topics
</label>

                                                    </li>

                                                    <li>

                                                        <input type="radio" id="q25b" name="q25" value="s"/>

                                                        <label for="q25b">Going in depth into one topic
</label>

                                                    </li>

                                                </ul>

                                            </div>

                                            

                                                <div class="form-group">

                                                    <h4>Question 26</h4>

                                                    <h3>When looking at situations, you tend to focus on:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q26a" name="q26" value="n"/>

                                                            <label for="q26a">Immediate Impact
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q26b" name="q26" value="s"/>

                                                            <label for="q26b">Long Term Implications
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 27</h4>

                                                    <h3>You would rather have a boss who is:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q27a" name="q27" value="n"/>

                                                            <label for="q27a">Tough but Fair
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q27b" name="q27" value="s"/>

                                                            <label for="q27b">Compassionate but Emotional
</label>

                                                        </li>

                                                    </ul>

                                                </div>
                                                
                                                <div class="form-group">

                                                    <h4>Question 28</h4>

                                                    <h3>You prefer a well-thought out plan over spontaneity.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q28a" name="q28" value="n"/>

                                                            <label for="q28a">Agree 
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q28b" name="q28" value="s"/>

                                                            <label for="q28b">Disagree
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                            

                                                <div class="form-group">

                                                    <h4>Question 29</h4>

                                                    <h3>Your friends are more likely to say that you are:</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q29a" name="q29" value="n"/>

                                                            <label for="q29a">Talkative
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q29b" name="q29" value="s"/>

                                                            <label for="q29b">Reserved
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 30</h4>

                                                    <h3>You tend to be focused on what could be.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q30a" name="q30" value="n"/>

                                                            <label for="q30a">Agree</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q30b" name="q30" value="s"/>

                                                            <label for="q30b">Disagree</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                            

                                            <div class="pagi-block text-center">

                                                16-30 of 60 questions

                                            </div>

                                        </div>

                                        

                                        <div class="tab-pane" id="stage3">

                                            <div class="form-inner">

                                                <div class="form-group">

                                                    <h4>Question 31</h4>

                                                    <h3>It is hard to fire a loyal but underperforming staff.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q31a" name="q31" value="t"/>

                                                            <label for="q31a">No
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q31b" name="q31" value="f"/>

                                                            <label for="q31b">Yes
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 32</h4>

                                                    <h3>On your job, you prefer your activities to be:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q32a" name="q32" value="t"/>

                                                            <label for="q32a">Scheduled
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q32b" name="q32" value="f"/>

                                                            <label for="q32b">Unscheduled
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 33</h4>

                                                    <h3>You find it natural to:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q33a" name="q33" value="t"/>

                                                            <label for="q33a">Talk as You Think
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q33b" name="q33" value="f"/>

                                                            <label for="q33b">Think Before You Talk
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 34</h4>

                                                    <h3>In the classroom, you prefer subjects that deal with:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q34a" name="q34" value="t"/>

                                                            <label for="q34a">Real, Tangible Facts
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q34b" name="q34" value="f"/>

                                                            <label for="q34b">Theories and Ideas
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 35</h4>

                                                    <h3>When making decisions, you are more likely to choose:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q35a" name="q35" value="t"/>

                                                            <label for="q35a">The Logical Choice
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q35b" name="q35" value="f"/>

                                                            <label for="q35b">What is Important To You
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 36</h4>

                                                    <h3>You find yourself often:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q36a" name="q36" value="t"/>

                                                            <label for="q36a">Sticking to Your Plans
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q36b" name="q36" value="f"/>

                                                            <label for="q36b">Changing Your Plans
</label>

                                                        </li>

                                                    </ul>

                                                </div>
                                                
                                                <div class="form-group">

                                                    <h4>Question 37</h4>

                                                    <h3>You do not mind being in the spotlight.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q37a" name="q37" value="t"/>

                                                            <label for="q37a">Agree</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q37b" name="q37" value="f"/>

                                                            <label for="q37b">Disagree</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 38</h4>

                                                    <h3>In running projects, you prefer to:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q38a" name="q38" value="t"/>

                                                            <label for="q38a">Strategize
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q38b" name="q38" value="f"/>

                                                            <label for="q38b">Execute the Plans
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 39</h4>

                                                    <h3>When there is a friend in emotional distress, you find it:</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q39a" name="q39" value="t"/>

                                                            <label for="q39a">Easy to Show Compassion
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q39b" name="q39" value="f"/>

                                                            <label for="q39b">Awkward, not knowing what to say or do
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 40</h4>

                                                    <h3>You are better described as:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q40a" name="q40" value="t"/>

                                                            <label for="q40a">Planned
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q40b" name="q40" value="f"/>

                                                            <label for="q40b">Adaptable
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 41</h4>

                                                    <h3>You would describe yourself as being more:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q41a" name="q41" value="t"/>

                                                            <label for="q41a">Quiet
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q41b" name="q41" value="f"/>

                                                            <label for="q41b">Outgoing
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 42</h4>

                                                    <h3>When choosing a job, you prefer one that allows you to do:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q42a" name="q42" value="t"/>

                                                            <label for="q42a">More Thinking and Less Doing
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q42b" name="q42" value="f"/>

                                                            <label for="q42b">Less Thinking and More Doing
</label>

                                                        </li>

                                                    </ul>

                                                </div>
                                                
                                                <div class="form-group">

                                                    <h4>Question 43</h4>

                                                    <h3>With people, you are more: 
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q43a" name="q43" value="t"/>

                                                            <label for="q43a">Firm than Gentle
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q43b" name="q43" value="f"/>

                                                            <label for="q43b">Gentle Than Firm
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 44</h4>

                                                    <h3>Your plans are usually fixed and you do not like changes.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q44a" name="q44" value="t"/>

                                                            <label for="q44a">Agree 
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q44b" name="q44" value="f"/>

                                                            <label for="q44b">Disagree
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 45</h4>

                                                    <h3>You recharge better… 
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q45a" name="q45" value="t"/>

                                                            <label for="q45a">With people
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q45b" name="q45" value="f"/>

                                                            <label for="q45b">In Solitude
</label>

                                                        </li>

                                                    </ul>

                                                </div>
                                                

                                            </div>


                                            <div class="pagi-block text-center">

                                                31-45 of 60 questions

                                            </div>

                                        </div>

                                        

                                        <div class="tab-pane" id="stage4">

                                            <div class="form-inner">

                                                <div class="form-group">

                                                    <h4>Question 46</h4>

                                                    <h3>When trying a new idea, you prefer to:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q46a" name="q46" value="j"/>

                                                            <label for="q46a">Create Something From Your Imagination
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q46b" name="q46" value="p"/>

                                                            <label for="q46b">Adapt from What You See
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 47</h4>

                                                    <h3>If you have to disappoint someone, you are usually:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q47a" name="q47" value="j"/>

                                                            <label for="q47a">Frank and Straightforward
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q47b" name="q47" value="p"/>

                                                            <label for="q47b">Warm and Considerate
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 48</h4>

                                                    <h3>You'd prefer to arrive at conclusions instead of leaving things open.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q48a" name="q48" value="j"/>

                                                            <label for="q48a">Agree 
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q48b" name="q48" value="p"/>

                                                            <label for="q48b">Disagree
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 49</h4>

                                                    <h3>Given a choice, you would rather: 
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q49a" name="q49" value="j"/>

                                                            <label for="q49a">Be Sharing Your Thoughts
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q49b" name="q49" value="p"/>

                                                            <label for="q49b">Let Others Speak
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 50</h4>

                                                    <h3>You are more likely to enjoy a game that requires a lot of:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q50a" name="q50" value="j"/>

                                                            <label for="q50a">Thinking
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q50b" name="q50" value="p"/>

                                                            <label for="q50b">Action
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 51</h4>

                                                    <h3>You are more likely to be:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q51a" name="q51" value="j"/>

                                                            <label for="q51a">Tough Minded
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q51b" name="q51" value="p"/>

                                                            <label for="q51b">Tender Hearted
</label>

                                                        </li>

                                                    </ul>

                                                </div>
                                                
                                                <div class="form-group">

                                                    <h4>Question 52</h4>

                                                    <h3>You are more:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q52a" name="q52" value="j"/>

                                                            <label for="q52a">Opinionated
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q52b" name="q52" value="p"/>

                                                            <label for="q52b">Easy-Going
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 53</h4>

                                                    <h3>You find getting to know new people to be easy and natural.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q53a" name="q53" value="j"/>

                                                            <label for="q53a">Agree
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q53b" name="q53" value="p"/>

                                                            <label for="q53b">Disagree
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 54</h4>

                                                    <h3>Your friends are more likely to say that you are:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q54a" name="q54" value="j"/>

                                                            <label for="q54a">Full of Ideas
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q54b" name="q54" value="p"/>

                                                            <label for="q54b">Down to Earth
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 55</h4>

                                                    <h3>You find it hard to say unpleasant truths.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q55a" name="q55" value="j"/>

                                                            <label for="q55a">Disagree
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q55b" name="q55" value="p"/>

                                                            <label for="q55b">Agree
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 56</h4>

                                                    <h3>You are more inclined to be:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q56a" name="q56" value="j"/>

                                                            <label for="q56a">Hurried
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q56b" name="q56" value="p"/>

                                                            <label for="q56b">Leisurely
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 57</h4>

                                                    <h3>If you want to recharge, you are more likely to spend the day:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q57a" name="q57" value="j"/>

                                                            <label for="q57a">At Home
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q57b" name="q57" value="p"/>

                                                            <label for="q57b">Outdoors
</label>

                                                        </li>

                                                    </ul>

                                                </div>
                                                
                                                <div class="form-group">

                                                    <h4>Question 58</h4>

                                                    <h3>Talking about Business, Social, Economic or Political issues engages you.
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q58a" name="q58" value="j"/>

                                                            <label for="q58a">Agree
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q58b" name="q58" value="p"/>

                                                            <label for="q58b">Disagree
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 59</h4>

                                                    <h3>You find yourself to be too:
</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q59a" name="q59" value="j"/>

                                                            <label for="q59a">Unsympathetic
</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q59b" name="q59" value="p"/>

                                                            <label for="q59b">Sympathetic
</label>

                                                        </li>

                                                    </ul>

                                                </div>

                                                

                                                <div class="form-group">

                                                    <h4>Question 60</h4>

                                                    <h3>Sticking to your plans is natural to you.</h3>

                                                    <ul>

                                                        <li>

                                                            <input type="radio" id="q60a" name="q60" value="j"/>

                                                            <label for="q60a">Agree</label>

                                                        </li>

                                                        <li>

                                                            <input type="radio" id="q60b" name="q60" value="p"/>

                                                            <label for="q60b">Disagree</label>

                                                        </li>

                                                    </ul>

                                                </div>


                                            </div>

                                            

                                            <div class="pagi-block text-center">

                                                46-60 of 60 questions

                                            </div>

                                        </div>

                                    

                                    </form>

                                    

                                    <div class="tab-pane" id="stage5">

                                        <div class="form-inner">

                                            <div class="text-center section_title">

                                            	<h1>You’re almost there!</h1>

                                            </div>

                                            <div class="form_outer">

                                            	<?php if ( is_user_logged_in() ) {?>

                                                	<div class="text-center msg">

                                                        <div class="pagi-block text-center">

                                                            <input id="btn_submit" type="button" class="primary-button" value="Show Results">

                                                        </div>

                                                    </div>

                                                <?php } else{?>

                                                <div class="form_wrap">

                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-6">

                                                            <div class="loginForm">

                                                                <h3>Already a member?<br/>Login Now</h3>

                                                                <div style="color:#ff4b15;" id="loginerror2"></div>

                                                                <form action="" method="post" id="loginForm2" onsubmit="return checkLogin2();">

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control" name="username" id="userName2" placeholder="Username">

                                                                    </div>

                                                                    <div class="form-group">

                                                                        <input type="password" class="form-control" name="password" id="Password2" placeholder="Password">

                                                                    </div>

                                                                    <div class="submit_block">

                                                                        <?php wp_nonce_field( 'woocommerce-login' ); ?>

                                                                        <button class="primary-button"><i class="fa fa-user"></i> Login</button>

                                                                    </div>

                                                                </form>

                                                                

                                                            </div>

                                                        </div>

                                                        

                                                        <div class="col-xs-12 col-sm-6">

                                                            <div class="loginForm pull-right">

                                                                <h3>Sign Up Now!<br/>This will save your results for access at a later date – please check the e-mail for the access code.</h3>

                                                                <p style="color:#ff4b15;" id="signuperror2"></p>

                                                                <form action="" method="post" id="pro_signup_form2" onsubmit="return pro_checkReg2();">

                                                                    <div class="form-group">

                                                                        <input type="text" class="form-control" name="fname" id="spfname2" placeholder="Name"> 

                                                                    </div><!--form-group-->

                                                                    

                                                                      <div class="form-group">

                                                                        <input type="text" class="form-control" name="email" id="spemail2" placeholder="Email">

                                                                      </div>

                                                                      <!--form-group-->

                                                                      

                                                                      <div class="form-group">

                                                                        <input type="password" class="form-control" name="password" id="sppassword2" placeholder="Password">

                                                                      </div>

                                                                    <div class="submit_block">

                                                                        <?php wp_nonce_field( 'woocommerce-register' ); ?>

                                                                        <input type="submit" value="Submit">
                                                                        
                                                                        <input type="hidden" id="get_type" value="">

                                                                    </div>

                                                                    

                                                                </form>

                                                                

                                                                </div>

                                                            </div>

                                                        

                                                    </div>

                                                </div>

                                                <?php } ?>

                                            </div>

                                            

                                        </div>

                                        

                                    </div>

                                </div>

                            

                        </div>

                    </div>

                </div>

            </div>

        </div>

    

    </div>

    

    

    

    <?php include "subscription-block.php" ;?>

<?php get_footer(); ?>

