<div class="subscription-block">

    <div class="container">

        <div class="row">

            <div class="col-xs-12">

                <h1><?php echo get_field('subscription_title','option'); ?></h1>

                <p><?php echo get_field('subscription_sub_title','option'); ?></p>

                <div class="subscription-form">

                    <?php echo do_shortcode('[mc4wp_form id="137"]'); ?>

                </div>

            </div>

        </div>

    </div>

</div>