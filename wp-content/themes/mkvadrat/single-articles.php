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

	<!-- Дата атрибуты у блока ниже для паралакса фона -->
    <div class="container-fluid block-under-header" data-speed="5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12"></div>
            </div>
        </div>
    </div>

    <!-- start main-standart -->
    <main class="main-standart">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-dash title"><?php the_title(); ?></h1>
                    
					<?php if (have_posts()): while (have_posts()): the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
                </div>
            </div>
        </div>

    </main>
    <!-- end main-standart -->

<?php get_footer(); ?>
