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
    
    <div class="container-fluid block-under-header" data-speed="5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
    
    <!-- start main-page-404 -->

    <main class="main-page-404">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="title">Ошибка 404</p>
                    <p>Данная страница не найдена или Вы где то ошиблись в написании ссылки.</p>

                    <a href="<?php echo get_home_url(); ?>" class="button">на главную</a>
                </div>
            </div>
        </div>

    </main>

    <!-- end main-page-404 -->

    
<?php get_footer(); ?>