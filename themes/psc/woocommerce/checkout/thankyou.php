<?php

/**

 * Thankyou page

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.

 *

 * HOWEVER, on occasion WooCommerce will need to update template files and you

 * (the theme developer) will need to copy the new files to your theme to

 * maintain compatibility. We try to do this as little as possible, but it does

 * happen. When this occurs the version of the template file will be bumped and

 * the readme will list any important changes.

 *

 * @see 	    https://docs.woocommerce.com/document/template-structure/

 * @author 		WooThemes

 * @package 	WooCommerce/Templates

 * @version     3.2.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

?>



<div class="thankyou-content-inner text-center">

    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/tik.png" alt="">

    <h1>THANK YOU!</h1>

    <p>Your order was completed successfully.</p>

    <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" class="primary-button">Back to dashboard</a>

</div>





