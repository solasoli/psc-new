<?php

/**

 * The template for displaying product content within loops

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.

 *

 * HOWEVER, on occasion WooCommerce will need to update template files and you

 * (the theme developer) will need to copy the new files to your theme to

 * maintain compatibility. We try to do this as little as possible, but it does

 * happen. When this occurs the version of the template file will be bumped and

 * the readme will list any important changes.

 *

 * @see     https://docs.woocommerce.com/document/template-structure/

 * @author  WooThemes

 * @package WooCommerce/Templates

 * @version 3.0.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit; // Exit if accessed directly

}



global $product;



// Ensure visibility

if ( empty( $product ) || ! $product->is_visible() ) {

	return;

}

?>

<li>

    <div class="thumb">

        <a href="<?php echo get_the_permalink(); ?>"><?php woocommerce_template_loop_product_thumbnail(); ?></a>

    </div>
    <div class="product_info">

    <h3><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>

    <!--<p><?php 

			//$content = get_the_content(); 

			//echo substr($content,0,125);

		?>

    </p>-->
    
    <?php woocommerce_template_single_excerpt(); ?>

    <h4><?php woocommerce_template_loop_price(); ?></h4>
    </div>

    <?php woocommerce_template_loop_add_to_cart(); ?>

</li>

