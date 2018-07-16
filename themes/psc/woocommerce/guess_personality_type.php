<?php
	session_start();
	include_once ('../../../wp-config.php');
	global $wpdb;
	global $current_user;
    get_currentuserinfo();

	
	$userID = get_current_user_id();
	
	$fr_email = $_POST["fr_email"];
	$fr_first_name = $_POST["fr_first_name"];
	$fr_last_name =$_POST['fr_last_name'];
	$type = strtoupper($_POST['type']);
	
	$table_name = $wpdb->prefix. "guess_personality";
	$email_ids = $wpdb->get_results("SELECT email FROM `{$table_name}` where email='".$fr_email."' ORDER BY `{$table_name}`.id DESC");
	
	
	if($email_ids[0]->email){
		echo "2";
		$check_if_user_has_been_friend = $wpdb->get_results("SELECT email FROM `{$table_name}` where email='".$fr_email."' AND user_id='" . $userID . "' ORDER BY `{$table_name}`.id DESC");

		if(!isset($check_if_user_has_been_friend[0]->email)){
			$wpdb->insert($wpdb->prefix . "guess_personality",
				array('user_id' => stripslashes_deep($userID),
					'email' => stripslashes_deep($fr_email),
					'first_name' => stripslashes_deep($fr_first_name),
					'last_name' => stripslashes_deep($fr_last_name),
					'type' => stripslashes_deep($type),
				),
				array('%s', '%s', '%s', '%s', '%s')
			);

		}

		$_SESSION['flash_message'] = "User <strong>". stripslashes_deep($fr_email) ."</strong> is already on Personality Central";
	} 
	
	else{
		$wpdb->insert($wpdb->prefix . "guess_personality",
			array('user_id' => stripslashes_deep($userID),
				'email' => stripslashes_deep($fr_email),
				'first_name' => stripslashes_deep($fr_first_name),
				'last_name' => stripslashes_deep($fr_last_name),
				'type' => stripslashes_deep($type),
			),
			array('%s', '%s', '%s', '%s', '%s')
		);
		
		
		
		
		function set_html_content_type()
		{
			return 'text/html';
		}
		
		$headers = "MIME-Version: 1.0\n" .
			"From: Personality Central <admin@psc.com>\n" .
			"Content-Type: text/html; charset=\"" .
			get_option('blog_charset') . "\"\n";

			$subject = "Invitation from (".$current_user->user_email.")";
			$to = $fr_email;
		
			$message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Personality Central EDM</title>
		
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
		</head>
		
		<body>
		<table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#fff" align="center">
			<tr>
				<td>Hello!</td>
			</tr>
			<tr>
				<td height="10">&nbsp;</td>
			</tr>
			<tr>
				<td>Your Friend '.$current_user->user_firstname.' '.$current_user->user_lastname.' ('.$current_user->user_email.') has guessed your personality type as '.$type.'. </td>
			</tr>
			<tr>
				<td height="10">&nbsp;</td>
			</tr>
			<tr>
				<td>'.$current_user->user_firstname.' '.$current_user->user_lastname.' invites you to take a <a href="'.get_bloginfo('home').'/free-personality-test/">free personality test</a>, know more about your personality and share it with your friends. </td>
			</tr>
			<tr>
				<td height="10">&nbsp;</td>
			</tr>
			<tr>
				<td>Try it yourself! It’s free and only takes 10 minutes. Enjoy the Personality Central and be sure to thank your friend.</td>
			</tr>
			<tr>
				<td height="10">&nbsp;</td>
			</tr>
			<tr>
				<td>If you do not know this person, please simply ignore this invitation – you will not receive any others</td>
			</tr>
			<tr>
				<td height="20">&nbsp;</td>
			</tr>
			<tr>
				<td>Kind regards,<br/>Personality Central Team</td>
			</tr>
		</table>
		</body>
		</html>';
		
		mail($to, $subject, $message, $headers);
			//add_filter('wp_mail_content_type', 'set_html_content_type');
			//wp_mail($to, $subject, $message, $headers);
			//remove_filter('wp_mail_content_type', 'set_html_content_type');
			
		echo "1";
		
	}
	
	
	
	
?>

