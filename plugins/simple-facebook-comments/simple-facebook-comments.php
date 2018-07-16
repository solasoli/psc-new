<?php
/*
Plugin Name:  Simple Facebook Comments
Plugin URI:   http://www.royaldeerdesign.com/simple-facebook-comments
Description:  Extremely simple to implement Facebook comments plugin. They're very few options to customize this plugin, however thanks to that approach there are no confusing options and unnecessary settings. It is very simplified plugin that allows to implement Facebook Comments to your blog within few minutes. Works perfectly with the newest 3.3 version of WordPress.
Version:      0.7.9
Author:       royaldeerdesign.com
Author URI:   http://www.royaldeerdesign.com
Contributors: Daniel Sodkiewicz

Copyright (C) 2011, Royal Deer Design
All rights reserved.

*/


if ( is_admin() && ( !defined( 'DOING_AJAX' ) || !DOING_AJAX )) {

	add_action('admin_menu', 'show_simple_fb_comments_options');
	function show_simple_fb_comments_options() {
    
	// Adding a new submenu
 
	add_options_page('Facebook Comments Options', 'Facebook Comments', 'manage_options', 'simple_fb_comments', 'simple_fb_comments_options');

	//Add options
	
	add_option('simple_fb_comments_posts', 'on');
	add_option('simple_fb_comments_pages', 'off');
	add_option('simple_fb_comments_homepage', 'off');
	add_option('simple_fb_comments_views', 'off');
	add_option('simple_fb_comments_appID', '');
	add_option('simple_fb_comments_num', '10');
	add_option('simple_fb_comments_title', 'Comments');
	add_option('simple_fb_comments_width', '450');
	add_option('simple_fb_comments_language', 'en_US');
	add_option('simple_fb_comments_viewscomments', '');
}

//
// Admin
//
function simple_fb_comments_options() { ?>
<style type="text/css">
	div.headerWrap { background-color:#e4f2fds; width:200px}
	#options h3 { padding:7px; padding-top:10px; margin:0px; cursor:auto }
	#options label { width: 300px; float: left; margin-left: 10px; }
	#options input { float: left; margin-left:10px}
	#options p { clear: both; padding-bottom:10px; }
	#options .postbox { margin:0px 0px 10px 0px; padding:0px; }
</style>
<div class="wrap">
<form method="post" action="options.php" id="options">
<?php wp_nonce_field('update-options') ?>
<h2>Simple Facebook Comments</h2>

<div class="postbox-container" style="width:100%;">
<div class="metabox-holder" style="width: 100%; float: left;background:#F5F5F5; padding: 0px;">
	<div class="postbox">
		<h3 class="hndle"><span>Step by Step Instalation</span></h3>
		<div style="margin:20px;float: left;">
        <p>1. To turn off WordPress comments, go <a href="<?php bloginfo('url'); ?>/wp-admin/options-discussion.php" target="_blank">here</a> to   your discussion settings and<strong> untick</strong> the option saying <em>"Allow people to post comments on new articles"</em>
        </p>
	<p>2. <a href="http://www.facebook.com/developers/createapp.php" style="text-decoration:none" target="_blank">Click here to goo to Facebook and create an App</a> - the name oft he app does't matter, you can use for example "Website Comments". </p>
    <p>3. <a href="http://www.facebook.com/developers/apps.php" style="text-decoration:none" target="_blank">Go to App Setup and edit the app that you just created</a> - insert URL of your website (foe example http://domain.com) into the section Web Site.</p>
   <p> 4. Copy your App ID and save changes.</p>
   <p> 5. Past your App ID here: </p>
    <p><input type="text" name="simple_fb_comments_appID" value="<?php echo get_option('simple_fb_comments_appID'); ?>" /> <input type="submit" class="button-primary" name="submit" value="Save"></p>
     <p>
     
     <img src="<?php bloginfo('url'); ?>/wp-content/plugins/simple-facebook-comments/step1.jpg" />
     
     
     
     <br /><br />
     
     
     If you are happy with defould look and options you do not go father.
    </p>
</div>
<div style="float: right;">
<a href="http://www.royaldeerdesign.com/freequote.html"  target="_blank" ><img style="float: right; margin-top: 10px; margin-right: 10px;" src="<?php bloginfo('url'); ?>/wp-content/plugins/simple-facebook-comments/pluggin_help_banner.jpg" /></a>
</div>
<div>
<a href="http://www.website499.com/"  target="_blank" ><img style="float: right; margin-top: 10px; margin-right: 10px;" src="<?php bloginfo('url'); ?>/wp-content/plugins/simple-facebook-comments/plugin_banner_hosting.jpg" /></a>
</div>
</div>
</div>


	<div class="metabox-holder" style="float: left;width:100%;">
	<div class="postbox">
		<h3 class="hndle"><span>More Info</span></h3>
		<div style="margin:20px;">
	<a href="http://developers.facebook.com/tools/comments" style="text-decoration:none" target="_blank">Comment Moderation Area</a><br />
	<br />
	<a href="http://developers.facebook.com/tools/lint" style="text-decoration:none" target="_blank">Facebook URL Linter</a><br />
	<br />
	<a href="http://developers.facebook.com/docs/reference/plugins/comments/" style="text-decoration:none" target="_blank">Facebook Comments Developer Homepage</a><br />
	<br />
    <a href="http://pleer.co.uk/wordpress/plugins/facebook-comments/" style="text-decoration:none" target="_blank">Plugin Homepage</a> <small>- More information on this plugin</small><br />
    <br />
    <br />
    
    
    
    
    
    
    
</div>
</div>
</div>


	<div class="metabox-holder" style="float: left;width:100%;">
	<div class="postbox">
		<h3 class="hndle"><span>Settings</span></h3>
		<div style="margin:20px;">


		
	

		<p>
			<?php
				if (get_option('simple_fb_comments_posts') == 'on') {echo '<input type="checkbox" name="simple_fb_comments_posts" checked="yes" />';}
				else {echo '<input type="checkbox" name="simple_fb_comments_posts" />';}
			?>
			<label>Show comment box in single posts</label>
	</p>
		<p>
			<?php
				if (get_option('simple_fb_comments_pages') == 'on') {echo '<input type="checkbox" name="simple_fb_comments_pages" checked="yes" />';}
				else {echo '<input type="checkbox" name="simple_fb_comments_pages" />';}
			?>
			<label>Show comment box in pages</label>
		</p>

		<p>
			<?php
				if (get_option('simple_fb_comments_homepage') == 'on') {echo '<input type="checkbox" name="simple_fb_comments_homepage" checked="yes" />';}
				else {echo '<input type="checkbox" name="simple_fb_comments_homepage" />';}
			?>
			<label>Show comment box under posts displayed on the homepage</label>
		</p>
		
		<p>
			<?php
				if (get_option('simple_fb_comments_views') == 'on') {echo '<input type="checkbox" name="simple_fb_comments_views" checked="yes" />';}
				else {echo '<input type="checkbox" name="simple_fb_comments_views" />';}
			?>
			<label>Show how many views.</label>
		</p>
<br />
<br />
	
	<p><label>Language</label> <input type="text" name="simple_fb_comments_language" value="<?php echo get_option('simple_fb_comments_language'); ?>" /> - default is <strong>en_US</strong>. A full list of language codes can be found <a href="http://www.facebook.com/translations/FacebookLocales.xml" target="_blank">here</a></p>
	<p><label>Number of Comments</label> <input type="text" name="simple_fb_comments_num" value="<?php echo get_option('simple_fb_comments_num'); ?>" /> Default is <strong>10</strong></p>
	<p><label>Width (px)</label> <input type="text" name="simple_fb_comments_width" value="<?php echo get_option('simple_fb_comments_width'); ?>" /> 
	  Default is <strong>450</strong> (minimum   <strong>350</strong>)</p>

</div>
</div>
</div>

	<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="simple_fb_comments_fbml,simple_fb_comments_fbns,simple_fb_comments_opengraph,simple_fb_comments_posts,simple_fb_comments_pages,simple_fb_comments_homepage,simple_fb_comments_views,simple_fb_comments_num,simple_fb_comments_appID,simple_fb_comments_count,simple_fb_comments_width,simple_fb_comments_bg,simple_fb_comments_boxstyle,simple_fb_comments_h3style,simple_fb_comments_countstyle,simple_fb_comments_commentstyle,simple_fb_comments_title,simple_fb_comments_migrated,simple_fb_comments_countmsg,simple_fb_comments_linklove,simple_fb_comments_scheme,simple_fb_comments_language" />
<div class="submit"><input type="submit" class="button-primary" name="submit" value="Save"></div>

</form>
</div>

<?php }

// Add settings link on plugin page
function fb_link($links) {
  $settings_link = '<a href="options-general.php?page=simple_fb_comments">Settings</a>';
  array_unshift($links, $settings_link);
  return $links;
}

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'fb_link' );



}else {



function fbmlsetup() {

?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/<?php echo get_option('simple_fb_comments_language'); ?>/all.js#xfbml=1&appId=<?php echo get_option('simple_fb_comments_appID'); ?>";

  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php }


add_action('wp_footer', 'fbmlsetup', 100);


//COMMENT BOX
function fbcommentbox($content) {

if(is_single() && get_option('simple_fb_comments_posts') == 'on' && get_option('simple_fb_comments_views') == 'on' || (is_page() && get_option('simple_fb_comments_pages') == 'on' && get_option('simple_fb_comments_views') == 'on') || ((is_home() || is_front_page()) && get_option('simple_fb_comments_homepage') == 'on' && get_option('simple_fb_comments_views') == 'on'))

{
	$content .= '<fb:comments-count href='.get_permalink( $post->ID ).'></fb:comments-count> comments';
}


  if ((is_single() && get_option('simple_fb_comments_posts') == 'on') ||
      (is_page() && get_option('simple_fb_comments_pages') == 'on') ||
      ((is_home() || is_front_page()) && get_option('simple_fb_comments_homepage') == 'on')) {



$content .=  '<div>'.get_option('simple_fb_comments_countmsg'). "</div><div class=\"fb-comments\" data-href=\"".get_permalink()."\" data-num-posts=\"".get_option('simple_fb_comments_num')."\" data-width=\"".get_option('simple_fb_comments_width')."\"></div>";



    
  }
  return $content;
}
add_filter ('the_content', 'fbcommentbox', 100);


}








?>