<?php
	//if uninstall not called from WordPress exit
	if ( !defined( 'WP_UNINSTALL_PLUGIN' ) )
		exit ();

	delete_option('simple_fb_comments_posts');
	delete_option('simple_fb_comments_pages');
	delete_option('simple_fb_comments_homepage');
	delete_option('simple_fb_comments_views');
	delete_option('simple_fb_comments_appID');
	delete_option('simple_fb_comments_num');
	delete_option('simple_fb_comments_title');
	delete_option('simple_fb_comments_width');
	delete_option('simple_fb_comments_language');
	delete_option('simple_fb_comments_fbml');
	delete_option('simple_fb_comments_fbns');
	delete_option('simple_fb_comments_opengraph');
	delete_option('simple_fb_comments_count');
	delete_option('simple_fb_comments_bg');
	delete_option('simple_fb_comments_boxstyle');
	delete_option('simple_fb_comments_h3style');
	delete_option('simple_fb_comments_countstyle');
	delete_option('simple_fb_comments_commentstyle');
	delete_option('simple_fb_comments_migrated');
	delete_option('simple_fb_comments_countmsg');
	delete_option('simple_fb_comments_linklove');
	delete_option('simple_fb_comments_scheme');
?>