<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="css/jquery.formstyler.css">
    <link rel="stylesheet" href="css/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="css/jquery.rateyo.min.css">
    <!-- <link rel="stylesheet" href="css/fonts.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css"> -->
    <title>Document</title>

    <?php
    wp_head();
    ?>
</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top-inner">
                    <nav class="menu">
                        <dutton class="menu__btn">
                            <div class="menu__btn-line"></div>
                            <div class="menu__btn-line"></div>
                            <div class="menu__btn-line"></div>
                        </dutton>
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a class="menu__link" href="#">
                                    Доставка и оплата
                                </a>
                            </li>
                            <li class="menu__item">
                                <div class="popul">
                                  <a class="menu__link phone" href="tel:<?php echo get_option( 'my_phone' )?>">
                                   <?php echo get_option( 'my_phone' )?>
                                </a>
                                <a href="#" class="popul__tel">
                                    Заказать обратный звонок?
                                </a>   
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a class="logo" href="#">
                        <img class="logo__img" src="<?php bloginfo('template_directory'); ?>/images/fruit.png" alt="logo">
                    </a>
                    <div class="header__box">
                        <p class="header__adress">
                            Бендеры, ул. Кишиневская 31
                        </p>
                        <ul class="user-list">
                            <li class="user-list__item">
                                <a class="user-list__link" href="#">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/user.svg" alt="">
                                </a>
                            </li>
                            <li class="cart user-list__item">
                                <a class="simpleCart_empty user-list__link basket" href="javascript:;">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/basket.svg" alt="">
                                    <p id="simpleCart_quantity" class="simpleCart_quantity basket__num">0</p>
                                </a>
                                <nav id="navigate" role="navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
                                <li class="menu-item cart-punkt" ><?php cart_link(); ?><?php the_widget( 'WC_Widget_Cart', 'title=' ); ?></li>
                            </nav>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <ul class="menu-mobile__list">
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <img class="menu-mobile__img" src="<?php bloginfo('template_directory'); ?>/images/user.svg" alt="">
                    <p>Войти</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <img class="menu-mobile__img" src="<?php bloginfo('template_directory'); ?>/images/basket.svg" alt="">
                    <p>Корзина</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <img class="menu-mobile__img" src="<?php bloginfo('template_directory'); ?>/images/boks.svg" alt="">
                    <p>Доставка и оплата</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <p>Овощи</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <p>Фрукты и ягоды</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <p>Сухофрукты</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <p>Грибы</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <p>Зелень</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <p>Семена</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <p>Соки</p>
                </a>
            </li>
            <li class="menu-mobile__item">
                <a class="menu-mobile__link" href="#">
                    <p>Консервы</p>
                </a>
            </li>
        </ul>
        
    </header>