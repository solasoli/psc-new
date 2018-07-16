<?php
	include_once ('../../../wp-config.php');
	global $wpdb;
	
	$test_date = date('Y').'-'.date('m').'-'.date('d').' '.date('H').':'.date('i').':'.date('s'); 
	
	$type = $_POST['getType'];
	
	$users_table = $wpdb->prefix. "users";
	$users = $wpdb->get_results("SELECT * FROM `{$users_table}` ORDER BY `{$users_table}`.id DESC LIMIT 1" );
	$userEmail = $users[0]->user_email;
	$userID = $users[0]->ID;
	
	
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
	
	echo "1";
	
	
?>

