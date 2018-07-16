<?php

/* Template Name : Order history */

?>
<?php
echo '<h2>Previous Donations for this Nonprofit</h2>';
foreach (get_posts('post_type=shop_order&numberposts=-1&post_status=wc-completed') as $order) {
    $order = new WC_Order($order->ID);

    foreach($order->get_items('line_item') as $item) {
        if ($post->ID == $item['product_id'] || $post->ID == $item['variation_id']) {
            echo '<br>Date: '.$order->order_date; 
            echo '<br>Name: '.$order->billing_first_name . '&nbsp;'  .$order->billing_last_name;
            echo '<br>Email: '.$order->billing_email; 
            echo '<br>Order Total: $'.$order->get_line_total( $item );   
        }  
    }
}

?>