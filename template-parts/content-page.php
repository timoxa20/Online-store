<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}
    
?>


<div class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__list">
               <?php woocommerce_breadcrumb(); ?>
            </ul>
        </div>
    </div>

    <?php the_content();?>