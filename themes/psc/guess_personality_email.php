<?php

require_once("../../../wp-config.php");
global $wpdb;

function set_html_content_type()
{
    return 'text/html';
}

$headers = "MIME-Version: 1.0\n" .
    "From: Personality Central\n" .
    "Content-Type: text/html; charset=\"" .
    get_option('blog_charset') . "\"\n";
	//$guesses = $wpdb->prefix . "guess_personality";
	//$guesses_type = $wpdb->get_row("SELECT * FROM {$guesses} ORDER BY id DESC LIMIT 1");

    $subject = "Invitation from";
    $to = "abubakar.siddique@annanovas.com";

    $message = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Personality Central EDM</title>

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
</head>

<body>
<table width="600" border="0" cellspacing="0" cellpadding="0" bgcolor="#f4f6fa" align="center">
 
  
 
</table>
</body>
</html>';

	mail($to, $subject, $message, $headers);
	
	
   // add_filter('wp_mail_content_type', 'set_html_content_type');
    //wp_mail($to, $subject, $message, $headers);
    //remove_filter('wp_mail_content_type', 'set_html_content_type');

    echo '1';
?>