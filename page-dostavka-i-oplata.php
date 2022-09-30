<?php
    get_header();
    ?>
    <?php
    get_navigation();
    ?>


<section class="deliveru">
        <div class="container">
            <h1 class="deliveru__title">
                <?php the_field('deliveru_title') ?>
            </h1>
            <div class="deliveru__list">
                <div class="deliveru_inner">
                    <div class="deliveru__text">
                    <?php the_field('deliveru_text') ?>
                    </div>
                    <div class="deliveru__subtext">
                        <p> <?php the_field('deliveru_subtext-one') ?></p>
                        <p> <?php the_field('deliveru_subtext-two') ?></p>
                        <p> <?php the_field('deliveru_subtext-three') ?></p>
                        <p> <?php the_field('deliveru_subtext-for') ?></p>
                        <p> <?php the_field('deliveru_subtext-fiev') ?></p>
                        <p> <?php the_field('deliveru_subtext-six') ?></p>
                        <p> <?php the_field('deliveru_subtext-seven') ?></p>
                        <p> <?php the_field('deliveru_subtext-eight') ?></p>
                        <p> <?php the_field('deliveru_subtext-nine') ?></p>
                    </div>
                </div>
                <div class="deliveru__inner">
                    <div class="deliveru__text">
                        <?php the_field('deliveru_text-one') ?>
                    </div>
                    <div class="deliveru__subtext">
                        <p> <?php the_field('deliveru_sub') ?></p>
                        <p> <?php the_field('deliveru_sub-one') ?></p>
                    </div>
                </div>
                <div class="deliveru__inner">
                    <div class="deliveru__text">
                    <?php the_field('deliveru_text-two') ?>
                    </div>
                    <div class="deliveru__subtext">
                        <p> <?php the_field('deliveru') ?></p>
                        <p> <?php the_field('deliveru-one') ?></p>
                    </div>
                </div>
                <div class="deliveru__inner">
                    <div class="deliveru_text">
                    <?php the_field('deliveru_text-three') ?>
                    </div>
                    <div class="deliveru__subtext">
                        <p> <?php the_field('deliveru-two') ?></p>
                        <p> <?php the_field('deliveru-three') ?></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php
    get_footer();
     ?>