<?php
if ( ! defined ('ABSPATH')) {
    exit; //Exit if accenssed directly
}

get_header();

get_navigation();

?>
<?php if(is_cart()):  ?>
    <section class="card">
        <div class="container">

    <?php else :?>

        <?php endif; ?>


        <?php while(have_posts()) : the_post() ?>
<?php if(is_cart() || is_checkout()) : ?>
<?php get_template_part('template-parts/content', 'page');?>
<?php endif; ?>
            <?php endwhile; ?>

        </div>
    </section>
<?php
get_footer();
?>