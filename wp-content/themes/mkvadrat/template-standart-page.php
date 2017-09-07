<?php
/*
Template name: Standart page
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

get_header(); 
?>

    <!-- start main-standart -->
    <main class="main-standart">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-dash title"><?php the_title(); ?></h1>
                    
                    <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'text_standart_page', $single = true )); ?>
                </div>
            </div>
        </div>

    </main>
    <!-- end main-standart -->

<?php get_footer(); ?>