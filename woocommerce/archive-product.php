
    <?php
    get_header();
    ?>
    <?php
    get_navigation();
    ?>

    <section class="banner-section page-section">
        <div class="container">
            <div class="banner-section__inner">
                <div class="banner-section__slider">
                    <a class="banner-section__slider-item" href="#">
                        <img class="banner-section__slider-img" src="<?php bloginfo('template_directory'); ?>/images/banner-slider.jpg" alt="">
                    </a>
                    
                </div>
                <a class="banner-section__item sale-item" href="#">
                    <div class="sale-item__top">
                        <p class="sale-item__info">
                            реклама
                        </p>
                        
                    </div>
                    <img class="sale-item__img" src="<?php bloginfo('template_directory'); ?>/images/jaluzi.jpg" alt="">
                    <h5 class="sale-item__title">Окна, двери и жалюзи  077949165 077894525</h5>
                    <p class="sale-item__footer"><span>  www.okno-pmr.com</span><span>windowblindpmr.com</span>
                    </p>
                </a>
            </div>
        </div>
    </section>


     <section class="categories page-section">
        <div class="container">
            <div class="categories__inner">
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Овощи</h4>
                        <p class="categories__item-text">Подробее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/potato.jpg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Фрукты</h4>
                        <p class="categories__item-text">Подробее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/abrikosy.jpg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Сухофрукты</h4>
                        <p class="categories__item-text">Подробее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/fruits.jpeg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Грибы</h4>
                        <p class="categories__item-text">Подробее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/grub.jpg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Зелень</h4>
                        <p class="categories__item-text">Подробее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/petruchka.jpg" alt="">
                    </div>
                </a>
                <a class="categories__item" href="#">
                    <div class="categories__item-info">
                        <h4 class="categories__item-title">Семена</h4>
                        <p class="categories__item-text">Подробее</p>
                    </div>
                    <div class="categories__item-img">
                        <img src="<?php bloginfo('template_directory'); ?>/images/semena.jpg" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>

                                <?php woocommerce_product_loop_start(); ?>
                                <?php do_action('woocommerce_archive_description'); ?>
                                <?php 
                                $args = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 4, 
                                    // 'meta_key' =>'_featured',
                                    // 'meta_value' => 'yes'
                                );
                                global $wp_query;

                                $wp_query = new WP_Query($args);
                                
                                if($wp_query->have_posts()) :
                                ?>
                                <?php while(($wp_query->have_posts())) : $wp_query ->the_post(); ?>
                                    <?php wc_get_template_part('content', 'product'); ?>
                                    <?php endwhile; ?>
                                
                                <?php endif;?>
                                <?php woocommerce_product_loop_end(); ?>
          <?php do_action('woocommerce_after_main_content') ?>
    </section>

    <div class="banner">
        <div class="container">
            <a class="banner-link" href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/content/banner.jpg" alt="">
            </a>
        </div>
    </div>

    <section class="promo">
        <div class="container">
            <div class="promo__inner">
                <div class="promo__title">
                    Натуральные фрукты и овощи в Приднестровье
                </div>
                <div class="promo__text">
                    Натуральные фрукты и овощи в Молдове притягивают взгляды свей яркостью и потрясающими ароматами, наслаждение которыми можно потерять, если не соблюдать меры предосторожности во время пандемии. Именно поэтому мы предлагаем воздержаться от посещения людных мест и воспользоваться нашим сервисом доставки свежих продуктов прямо к дверям вашего дома.
                    <br>
                    <br>
                    На страницах нашего интернет магазина, вы можете найти и купить онлайн в Бендерах и Тирасполе: натуральные <a class="promo__subtext" href="#">фрукты и ягоды</a>, <a class="promo__subtext" href="#">овощи в Молдове</a>, <a class="promo__subtext" href="#">грибы</a>, <a class="promo__subtext" href="#">орехи и сухофрукты</a>, <a class="promo__subtext" href="#">специи</a>, <a class="promo__subtext" href="#">зелень</a> и <a class="promo__subtext" href="#">семена</a>  цена, на которые вас порадует. А также и другие ингредиенты такие как зелень, специи или орехи для приготовления полезных салатов, рагу и вкусных десертов, которые не только укрепят ваш иммунитет, но и не навредят фигуре.
                </div>
                <div class="promo__bloc">
                    <span>Фрукты и овощи в Бендерах и Тирасполе</span> на вашем столе, помогут:
                </div>
                <div class="promo__list">
                    <span>снизить кровяное давление,</span>
                    <span>уменьшить риск сердечных заболеваний и инсульта,</span>
                    <span>предотвратить некоторые виды рака,</span>
                    <span>снизить риск проблем с глазами и пищеварением,</span>
                    <span>а также окажут положительное влияние на уровень сахара в крови.</span>
                </div>
                <div class="promo__item">
                    Овощи и фрукты в Молдове, купить можно и для того, чтобы просто украсить блюда яркими красками. Употребляйте продукты разных видов и цветов, чтобы обеспечить свой организм необходимыми питательными веществами. Это не только обеспечивает большее разнообразие полезных растительных элементов, но и создает праздничную атмосферу на вашем столе.
                    <br>
                    Так же с помощью нашего сервиса можно порадовать не только себя, но и своих близких свежими фруктами и зеленью оформив доставку для них. Такой жест внимания будет очень оригинальным и обязательно запомниться надолго, и будет радовать ещё не один день.
                    <br>
                    Полезные и вкусные овощи и фрукты в Кишиневе заказать можно на нашем сайте, и мы бесплатно и в кротчайшие сроки доставим всё самое полезное для вас или ваших родных.
                    <br>
                    <div class="promo__center">
                        Интернет-магазин овощей и фруктов в Приднестровье
                    </div>
                </div>
            </div>
        </div>
    </section> 



     <?php
    get_footer();
     ?>
