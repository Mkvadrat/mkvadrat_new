<?php
/*
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

get_header();
?>
 
    <!-- start main-works-in -->
    <?php
        $image = getImageCourse( get_the_ID(), 'main_image_projects_page', 'big');
        $description = html_entity_decode( get_post_meta( get_the_ID(), 'description_area_projects_page', $single = true ));
        $information = html_entity_decode( get_post_meta( get_the_ID(), 'information_projects_page', $single = true ));
        $block_a = get_post_meta( get_the_ID(), 'a_applied_technologies_projects_page', $single = true );
        $block_b = get_post_meta( get_the_ID(), 'b_applied_technologies_projects_page', $single = true );
        $block_c = get_post_meta( get_the_ID(), 'c_applied_technologies_projects_page', $single = true );
        $block_d = get_post_meta( get_the_ID(), 'd_applied_technologies_projects_page', $single = true );
        $logo = getImageCourse( get_the_ID(), 'logo_image_projects_page', 'small');
        $color =  get_post_meta( get_the_ID(), 'preview_color_projects_page', $single = true );
        $preview = html_entity_decode( get_post_meta( get_the_ID(), 'preview_projects_page', $single = true ));
        
    ?>
    
    <main class="main-works-in">

        <div class="container-fluid big-photo-project">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-photo-project">
                            <div class="logo-project">
                                <?php echo $logo; ?>
                            </div>
                            <?php echo $image; ?>
                        </div>

                        <div class="two-halves-block">
                            <div class="left-side">
                                <div class="contant-side">
                                    <p class="title"><?php the_title(); ?></p>
                                    <?php echo $description; ?>
                                </div>
                            </div>
                            <?php if(!empty($information)){ ?>
                            <div class="right-side">
                                <div class="contant-side contant-side-description">
                                    <?php echo $information; ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <?php if(!empty($block_a) || !empty($block_b) || !empty($block_c) || !empty($block_d)){ ?>
                        <div class="two-halves-block two-halves-block-half">
                            <div class="right-side">
                                <?php if(!empty($block_a)){ ?>
                                <div class="left-top dark-gray">
                                    <?php echo html_entity_decode( $block_a ); ?>
                                </div>
                                <?php } ?>
                                <?php if(!empty($block_b)){ ?>
                                <div class="top-right light-gray ">
                                    <?php echo html_entity_decode( $block_b ); ?>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="left-side bottom-line">
                                <?php if(!empty($block_c)){ ?>
                                <div class="left-top dark-gray">
                                    <?php echo html_entity_decode( $block_c ); ?>
                                </div>
                                <?php } ?>
                                <?php if(!empty($block_d)){ ?>
                                <div class="top-right light-gray ">
                                    <?php echo html_entity_decode( $block_d ); ?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if(!empty($preview)){ ?>
        <div class="container-fluid desctop-mobile-block" style="background-color: <?php echo $color; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block-photo">
                            <?php echo $preview; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <div class="container-fluid design-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="two-halves-block">
                            <div class="left-side">
                                <p class="title-dash">Проектирование</p>
                                <p class="title">Любой проект, любая цель начинается с мысли</p>
                                <p>Мы собираем необходимую для работы информацию, проводим интересные беседы с клиентом и на основе проделанной работы можем понять что именно нужно клиенту.</p>
                            </div>
                            <div class="right-side">
                                <a class="gray-lite-bg bottom-left" href="#">
                                    <img src="images/arrow.png" alt="">
                                    Стратегия
                                </a>
                                <div class="gray-dark-bg bottom-right">
                                    <img src="images/link-17.png" alt="">
                                    Коммуникации
                                </div>
                            </div>
                        </div>

                        <div class="line-blocks">
                            <div class="left-side">
                                <div class="empty-block right"></div>
                            </div>
                            <div class="right-side">
                                <div class="left bg-grey">
                                    <img src="images/link-18.png" alt="">
                                    Наброски
                                </div>
                                <div class="right bg-white">
                                    <img src="images/link-19.png" alt="">
                                    Схемы
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid outline">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="images/outline.png" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid design">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="two-halves-block">
                            <div class="left-side">
                                <p class="title-dash">Дизайн</p>
                                <p class="title">Любая система с которой взаимодействует пользователь должна быть отзывчева</p>
                                <p>Отзывчивы и человеко-понятный, логичный дизайн – это огромный шаг на встречу Вашим будущим клиентам! Каждый клиент хочет видить только тчо что ему нужно и находить необходимую информацию опираясь на логические действия.</p>
                            </div>
                            <div class="right-side">
                                <div class="light-gray left-top">
                                </div>
                                <div class="light-gray bottom-left">
                                </div>
                                <div class="light-gray bottom-right">
                                </div>
                            </div>
                        </div>

                        <div class="line-blocks line-blocks-color">
                            <div class="left-side">
                                <div class="left">
                                    <p class="title">#Основной цвет</p>
                                    <p>#0567c6</p>
                                </div>
                                <div class="right">
                                    <p class="title">#Дополнительный цвет</p>
                                    <p>#3fac45</p>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="left icons">
                                    Иконки
                                </div>
                                <a class="scrollto right" href="#instruments">
                                    <img src="images/arrow.png" alt="">
                                    Инструменты
                                </a>
                            </div>
                        </div>

                        <div class="line-blocks">
                            <div class="left-side">
                            </div>
                            <div class="right-side">
                                <div class="dark-gray left">
                                    <img src="images/link-20.png" alt="">
                                    ILLUSTRATOR
                                </div>
                                <div class="light-gray right">
                                    <img src="images/link-21.png" alt="">
                                    PHOTOSHOP
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="collage-block">
            <div id="card-1" class="collage-1"> 
                <div class="front"> 
                <img src="images/collage-7.jpg" alt="">
                </div> 
                <div class="back">
                    <img src="images/collage-7.jpg" alt="">
                </div> 
            </div>

            <div id="card-3" class="collage-3"> 
                <div class="front"> 
                    <img src="images/collage-3.jpg" alt="">
                </div> 
                <div class="back">
                    <img src="images/collage-3.jpg" alt="">
                </div> 
            </div>

            <div id="card-5" class="collage-5"> 
                <div class="front"> 
                    <img src="images/collage-5.jpg" alt="">
                </div> 
                <div class="back">
                    <img src="images/collage-5.jpg" alt="">
                </div> 
            </div>

            <div id="card-6" class="collage-6"> 
                <div class="front"> 
                    <img src="images/collage-6.jpg" alt="">
                </div> 
                <div class="back">
                    <img src="images/collage-6.jpg" alt="">
                </div> 
            </div>
        </div>

        <div class="container-fluid design development-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="two-halves-block development">
                            <div class="left-side">
                                <p class="title-dash">Разработка</p>
                                <p class="title">Отлаженый механизм это большой труд его нужно ценить</p>
                                <p>Прежде чем сайт попадает к пользователю, он должен по сути стать полноценным сайтом, как и человек, он должен всему научиться. На этапе программирования, путем решения поставленных задач, проблем и ошибок мы добиваемся нужного результата.</p>
                            </div>
                            <div class="right-side">
                                <a class="scrollto bottom-left" href="#slider-block">
                                    <img src="images/arrow.png" alt="">
                                    Технологии
                                </a>
                                <div class="empty-block bottom-right">
                                </div>
                            </div>
                        </div>

                        <div class="line-blocks tools">
                            <div class="left-side">
                                <div class="left dark-gray">
                                    <img src="images/link-22.png" alt="">
                                    BOOTSTRAP
                                </div>
                                <div class="right light-gray">
                                    <img src="images/link-23.png" alt="">
                                    SASS
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="left dark-gray">
                                    <img src="images/link-24.png" alt="">
                                    CSS3
                                </div>
                                <div class="right light-gray">
                                    <img src="images/link-25.png" alt="">
                                    HTML5
                                </div>
                            </div>
                        </div>

                        <div class="line-blocks tools">
                            <div class="left-side">
                            </div>
                            <div class="right-side">
                                <div class="left light-gray">
                                    <img src="images/link-26.png" alt="">
                                    JAVASCRIPT
                                </div>
                                <div class="right dark-gray">
                                    <img src="images/link-27.png" alt="">
                                    JQUERY
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid message-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <blockquote>“Артем, тысячу извинений, но так как у нашего директора теперь не ограничнный по времени доступ к сайту - будут еще некоторые вопросы.<br>Номер один: Можно ли на странице бронирования впихнуть иконку "посмотрите наши акции" рядом с окном тревел-лайн? я вам могу выслать свой портрет, чтоб вы в него дротики могли кидать”</blockquote>

                        <p>Наталья Хобта<br>
                        <cite>Менеджер по всему что можно</cite></p>
                    </div>
                    <div class="col-md-6">
                        <div class="block-photo">
                            <img src="images/portret.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <ul class="works-list">
            <li><a href="#"><img src="images/logo-nord.png" alt=""></a></li>
            <li><a class="active" href="#"><img src="images/logo-nord.png" alt=""></a></li>
            <li><a class="active" href="#"><img src="images/logo-nord.png" alt=""></a></li>
            <li><a class="active" href="#"><img src="images/logo-nord.png" alt=""></a></li>
            <li><a class="active" href="#"><img src="images/logo-nord.png" alt=""></a></li>
        </ul>

        <div class="container-fluid want-order">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">хотите заказать услугу?</p>
                        <div class="order-block">
                            <input type="text" placeholder="Введите Ваш e-mail">
                            <input type="submit" value="Заказать">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- end main-works-in -->

<?php get_footer(); ?>
