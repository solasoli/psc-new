<?php

/**

 * Checkout Form

 *

 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.

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

 * @version     2.3.0

 */



if ( ! defined( 'ABSPATH' ) ) {

	exit;

}



wc_print_notices();



do_action( 'woocommerce_before_checkout_form', $checkout );



// If checkout registration is disabled and not logged in, the user cannot checkout

if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {

	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );

	return;

}


if(is_user_logged_in()){
?>



<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">



	<?php if ( $checkout->get_checkout_fields() ) : ?>



		<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>



		<div class="col2-set" id="customer_details">

			<div class="checkout-left">

            	<div class="billing-info">

					<?php do_action( 'woocommerce_checkout_billing' ); ?>

                </div>

                

                <div class="billing-info payment-info">

                	<h1>PAYMENT METHOD</h1>

                    <div class="form-block">

                        <div id="payment" class="woocommerce-checkout-payment">

                            <?php if ( WC()->cart->needs_payment() ) : ?>

                                <ul class="wc_payment_methods payment_methods methods">

                                    <?php

                                        if ( ! empty( $available_gateways ) ) {

                                            foreach ( $available_gateways as $gateway ) {

                                                wc_get_template( 'checkout/payment-method.php', array( 'gateway' => $gateway ) );

                                            }

                                        } else {

                                            echo '<li class="woocommerce-notice woocommerce-notice--info woocommerce-info">' . apply_filters( 'woocommerce_no_available_payment_methods_message', WC()->customer->get_billing_country() ? __( 'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.', 'woocommerce' ) : __( 'Please fill in your details above to see available payment methods.', 'woocommerce' ) ) . '</li>';

                                        }

                                    ?>

                                </ul>

                            <?php endif; ?>

                           

                        </div>

                    </div>

                </div>

			</div>



			<div class="checkout-right">

            	<h1>SHOPPING CART</h1>

				<?php  //do_action( 'woocommerce_checkout_shipping' ); ?>

                <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

                 <div class="cart-item-wrapper">

                 	<?php

						do_action( 'woocommerce_review_order_before_cart_contents' );

				

						foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {

							$_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );

				

							if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

								?>

								

								<div class="cart-item">

									<div class="cart-left">

										<div class="product-thumb">

											<?php

												$thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

				

												if ( ! $product_permalink ) {

													echo $thumbnail;

												} else {

													printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail );

												}

											?>

										</div>

										<div class="product-info">

											<h3><?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; ?></h3>

										   	<p>

												<?php 

                                                    $post_obj = get_post( $cart_item['product_id'] );

                                                    $product_desciption = $post_obj->post_content;

                                                    $content = get_the_content(); 

                                                    echo substr($product_desciption,0,60);

                                                ?>

                                            </p>

                                           

										</div>

									</div>

									<div class="cart-rights">

										<?php echo WC()->cart->get_item_data( $cart_item ); ?>

										<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', sprintf( '%s', $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?> x <?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );?>

									</div>

								</div>

								

								<?php

							}

						}

				

						do_action( 'woocommerce_review_order_after_cart_contents' );

					?>

                 </div>

                 <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>

			</div>

            

            <div class="final-checkout">

            	<div class="form-row place-order">

                    <noscript>

                        <?php _e( 'Since your browser does not support JavaScript, or it is disabled, please ensure you click the <em>Update Totals</em> button before placing your order. You may be charged more than the amount stated above if you fail to do so.', 'woocommerce' ); ?>

                        <br/><input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="<?php esc_attr_e( 'Update totals', 'woocommerce' ); ?>" />

                    </noscript>

            

                    <?php wc_get_template( 'checkout/terms.php' ); ?>

            

                    <?php do_action( 'woocommerce_review_order_before_submit' ); ?>

            

                    

                    <input type="submit" class="primary-button" value="checkout" name="woocommerce_checkout_place_order">

            

                    <?php do_action( 'woocommerce_review_order_after_submit' ); ?>

            

                    <?php wp_nonce_field( 'woocommerce-process_checkout' ); ?>

                </div>

            </div>

		</div>



		<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>



	<?php endif; ?>



</form>



<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>

<?php } ?>

