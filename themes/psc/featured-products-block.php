<div class="featured-product <?php if (! is_front_page() ) {echo "inner-page";}?>">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">

                <h1>Featured products</h1>

            </div>

        </div>

        <div class="row">

        

            <?php

                global $product;

                $args = array(

                    'post_type' => 'product',

                    'posts_per_page' => 3,

                    'orderby' => 'title',

                    'order'   => 'ASC',

                    'tax_query' => array(

                            array(

                                'taxonomy' => 'product_visibility',

                                'field'    => 'name',

                                'terms'    => 'featured',

                            ),

                        ),

                    );

                $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post();

            ?>

                 <div class="col-xs-12 col-sm-4">

                    <div class="product-item text-center">
						<div class="feat_info">
                        <?php woocommerce_template_loop_product_thumbnail(); ?>
                        
                        

                            <h3><?php echo get_the_title(); ?></h3>
    
                            <?php woocommerce_template_single_excerpt(); ?>
                        </div>

                        <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>">FIND OUT MORe</a>

                    </div>

                </div>

            <?php endwhile; wp_reset_postdata();?>

        

        </div>

    </div>

</div>