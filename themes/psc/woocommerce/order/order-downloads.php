<?php

/**

 * Order Downloads.

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/order/order-downloads.php.

 *

 * HOWEVER, on occasion WooCommerce will need to update template files and you

 * (the theme developer) will need to copy the new files to your theme to

 * maintain compatibility. We try to do this as little as possible, but it does

 * happen. When this occurs the version of the template file will be bumped and

 * the readme will list any important changes.

 *

 * @see 	https://docs.woocommerce.com/document/template-structure/

 * @author  WooThemes

 * @package WooCommerce/Templates

 * @version 3.2.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

global $product;

?>

<div class="order-history">

   <div class="history-header">

        <h4>PRODUCT</h4>

    </div>

    <div class="history-body reverse_order">

    <?php foreach ( $downloads as $download ) : ?>

        <div class="history-item">

            <div class="history-left">

                <div class="product-thumb">

                    <?php 

						$product_id = $download['product_id'];

						 $attachment_ids[0] = get_post_thumbnail_id( $product_id );

                         $attachment = wp_get_attachment_image_src($attachment_ids[0], 'full' );   

                        	if($attachment){
						 ?>   

						<img src="<?php echo $attachment[0] ; ?>" class="card-image"  />
						<?php } else {?>
							<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/placeholder.png" class="card-image"  />
						<?php } ?>

                </div>

                <div class="history-info">

                    <h3><?php echo $download['product_name']; ?></h3>

                   	<p>

                    	<?php 

							$post = get_post( $product_id );

							echo apply_filters( 'woocommerce_short_description', substr($post->post_content,0,60) );

						?>

                    </p>

                </div>

            </div>

            <div class="history-right">

                <a href="<?php echo $download['download_url']; ?>" download ><img src="<?php echo esc_url(get_template_directory_uri())?>/images/download-icon.png" alt=""></a>

            </div>

        </div>

    <?php endforeach; ?>

    </div>

</div>

