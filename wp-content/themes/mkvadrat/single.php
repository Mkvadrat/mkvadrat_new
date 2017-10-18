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
        $header = html_entity_decode( get_post_meta( get_the_ID(), 'primary_title_projects_page', $single = true ));
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
        $designing = html_entity_decode( get_post_meta( get_the_ID(), 'title_text_designing_block_projects_page', $single = true ));
        $designing_link_block = html_entity_decode( get_post_meta( get_the_ID(), 'link_block_designing_block_projects_page', $single = true ));
        $designing_block_a = html_entity_decode( get_post_meta( get_the_ID(), 'a_designing_block_projects_page', $single = true ));
        $designing_block_b = html_entity_decode( get_post_meta( get_the_ID(), 'b_designing_block_projects_page', $single = true ));
        $designing_block_c = html_entity_decode( get_post_meta( get_the_ID(), 'c_designing_block_projects_page', $single = true ));
        $block_sheme_color = get_post_meta( get_the_ID(), 'block_sheme_color_projects_page', $single = true );
        $block_sheme = get_post_meta( get_the_ID(), 'block_sheme_projects_page', $single = true );
        $design = html_entity_decode( get_post_meta( get_the_ID(), 'title_text_design_block_projects_page', $single = true ));
        $design_block_a = html_entity_decode( get_post_meta( get_the_ID(), 'a_design_block_projects_page', $single = true ));
        $design_color_block_a = html_entity_decode( get_post_meta( get_the_ID(), 'a_color_design_block_projects_page', $single = true ));
        $design_block_b = html_entity_decode( get_post_meta( get_the_ID(), 'b_design_block_projects_page', $single = true ));
        $design_color_block_b = html_entity_decode( get_post_meta( get_the_ID(), 'b_color_design_block_projects_page', $single = true ));
        $design_block_c = html_entity_decode( get_post_meta( get_the_ID(), 'c_design_block_projects_page', $single = true ));
        $design_block_d = html_entity_decode( get_post_meta( get_the_ID(), 'd_design_block_projects_page', $single = true ));
        $design_block_e = html_entity_decode( get_post_meta( get_the_ID(), 'e_design_block_projects_page', $single = true ));
        $design_block_f = html_entity_decode( get_post_meta( get_the_ID(), 'f_design_block_projects_page', $single = true ));
        $enable_collage = get_post_meta( get_the_ID(), 'enable_collage_projects_page', $single = true );
        $collage_a = getImage('collage_a_projects_page', 'big');
        $collage_b = getImage('collage_b_projects_page', 'big');
        $collage_c = getImage('collage_c_projects_page', 'big');
        $collage_d = getImage('collage_d_projects_page', 'big');
        $collage_e = getImage('collage_e_projects_page', 'big');
        $collage_f = getImage('collage_f_projects_page', 'big');
        $collage_g = getImage('collage_g_projects_page', 'big');
        $collage_h = getImage('collage_h_projects_page', 'big');
        $develop = html_entity_decode( get_post_meta( get_the_ID(), 'title_text_develop_block_projects_page', $single = true ));
        $develop_block_a = html_entity_decode( get_post_meta( get_the_ID(), 'a_develop_block_projects_page', $single = true ));
        $develop_block_b = html_entity_decode( get_post_meta( get_the_ID(), 'b_develop_block_projects_page', $single = true ));
        $develop_block_c = html_entity_decode( get_post_meta( get_the_ID(), 'c_develop_block_projects_page', $single = true ));
        $develop_block_d = html_entity_decode( get_post_meta( get_the_ID(), 'd_develop_block_projects_page', $single = true ));
        $develop_block_e = html_entity_decode( get_post_meta( get_the_ID(), 'e_develop_block_projects_page', $single = true ));
        $develop_block_f = html_entity_decode( get_post_meta( get_the_ID(), 'f_develop_block_projects_page', $single = true ));
        $develop_block_g = html_entity_decode( get_post_meta( get_the_ID(), 'g_develop_block_projects_page', $single = true ));
        $seo = html_entity_decode( get_post_meta( get_the_ID(), 'title_text_seo_block_projects_page', $single = true ));
        $seo_block_a = html_entity_decode( get_post_meta( get_the_ID(), 'a_seo_block_projects_page', $single = true ));
        $seo_block_b = html_entity_decode( get_post_meta( get_the_ID(), 'b_seo_block_projects_page', $single = true ));
        $seo_block_c = html_entity_decode( get_post_meta( get_the_ID(), 'c_seo_block_projects_page', $single = true ));
        $seo_block_d = html_entity_decode( get_post_meta( get_the_ID(), 'd_seo_block_projects_page', $single = true ));
        $seo_block_e = html_entity_decode( get_post_meta( get_the_ID(), 'e_seo_block_projects_page', $single = true ));
        $seo_block_f = html_entity_decode( get_post_meta( get_the_ID(), 'f_seo_block_projects_page', $single = true ));
        $seo_block_g = html_entity_decode( get_post_meta( get_the_ID(), 'g_seo_block_projects_page', $single = true ));
        $seo_block_h = html_entity_decode( get_post_meta( get_the_ID(), 'h_seo_block_projects_page', $single = true ));
        $photo_author = getImage('photo_author_reviews_text_projects_page', 'small');
        $author = html_entity_decode( get_post_meta( get_the_ID(), 'author_reviews_text_projects_page', $single = true ));
        $reviews = html_entity_decode( get_post_meta( get_the_ID(), 'reviews_text_projects_page', $single = true ));
    ?>
    
    <!-- Дата атрибуты у блока ниже для паралакса фона -->

    <div class="container-fluid block-under-header" data-speed="5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $header; ?>
                </div>
            </div>
        </div>
    </div>
    
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
                            <?php if($information){ ?>
                            <div class="right-side">
                                <div class="contant-side contant-side-description">
                                    <?php echo $information; ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <?php if($block_a || $block_b || $block_c || $block_d){ ?>
                        <div class="two-halves-block two-halves-block-half">
                            <div class="right-side">
                                <?php if($block_a){ ?>
                                <div class="left-top dark-gray">
                                    <?php echo html_entity_decode( $block_a ); ?>
                                </div>
                                <?php } ?>
                                <?php if($block_b){ ?>
                                <div class="top-right light-gray ">
                                    <?php echo html_entity_decode( $block_b ); ?>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="left-side bottom-line">
                                <?php if($block_c){ ?>
                                <div class="left-top dark-gray">
                                    <?php echo html_entity_decode( $block_c ); ?>
                                </div>
                                <?php } ?>
                                <?php if($block_d){ ?>
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
        
        <?php if($preview){ ?>
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
        
        <?php if($designing || $designing_link_block || $designing_block_a || $designing_block_b || $designing_block_c){ ?>
        <div class="container-fluid design-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="two-halves-block">
                            <?php if($designing){ ?>
                            <div class="left-side">
                                <?php echo $designing; ?>
                            </div>
                            <?php } ?>
                            <?php if($designing_link_block || $designing_block_a){ ?>
                            <div class="right-side">
                                <?php echo $designing_link_block; ?>
                                <div class="gray-dark-bg bottom-right">
                                    <?php echo $designing_block_a; ?>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        
                        <?php if($designing_block_b || $designing_block_c){ ?>
                        <div class="line-blocks">
                            <div class="left-side">
                                <div class="empty-block right"></div>
                            </div>
                            <div class="right-side">
                                <div class="left bg-grey">
                                    <?php echo $designing_block_b; ?>
                                </div>
                                <div class="right bg-white">
                                    <?php echo $designing_block_c; ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php if($block_sheme){ ?>
        <div class="container-fluid outline" style="background-color: <?php echo $block_sheme_color; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo $block_sheme; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <?php if($design || $design_block_a || $design_block_b || $design_block_c || $design_block_d || $design_block_e || $design_block_f){ ?>
        <div class="container-fluid design">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($design){ ?>
                        <div class="two-halves-block">
                            <div class="left-side">
                                <?php echo $design; ?>
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
                        <?php } ?>

                        <?php if($design_block_a || $design_block_b || $design_block_c || $design_block_d || $design_block_e || $design_block_f){ ?>
                        <div class="line-blocks line-blocks-color">
                            <div class="left-side">
                                <div class="left" style="background-color: <?php echo $design_color_block_a; ?>">
                                    <?php echo $design_block_a; ?>
                                </div>
                                <div class="right" style="background-color: <?php echo $design_color_block_b; ?>">
                                    <?php echo $design_block_b; ?>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="left icons">
                                    <?php echo $design_block_c; ?>
                                </div>
                                <span class="scrollto right">
                                   <?php echo $design_block_d; ?>
                                </span>
                            </div>
                        </div>

                        <div class="line-blocks">
                            <div class="left-side">
                            </div>
                            <div class="right-side">
                                <div class="dark-gray left">
                                    <?php echo $design_block_e; ?>
                                </div>
                                <div class="light-gray right">
                                    <?php echo $design_block_f; ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <?php if($enable_collage == 'yes'){?>
        <div class="collage-block">
            <div id="card-1" class="collage-1"> 
                <div class="front"> 
                    <?php echo $collage_a; ?>
                </div> 
                <div class="back">
                    <?php echo $collage_b; ?>
                </div> 
            </div>

            <div id="card-3" class="collage-3"> 
                <div class="front"> 
                    <?php echo $collage_c; ?>
                </div> 
                <div class="back">
                    <?php echo $collage_d; ?>
                </div> 
            </div>

            <div id="card-5" class="collage-5"> 
                <div class="front"> 
                    <?php echo $collage_e; ?>
                </div> 
                <div class="back">
                    <?php echo $collage_f; ?>
                </div> 
            </div>

            <div id="card-6" class="collage-6"> 
                <div class="front"> 
                   <?php echo $collage_g; ?>
                </div> 
                <div class="back">
                    <?php echo $collage_h; ?>
                </div> 
            </div>
        </div>
        <?php } ?>

        <?php if($develop || $develop_block_a || $develop_block_b || $develop_block_c || $develop_block_d || $develop_block_e || $develop_block_f || $develop_block_g){ ?>
        <div class="container-fluid design development-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($develop){ ?>
                        <div class="two-halves-block development">
                            <div class="left-side">
                                <?php echo $develop; ?>
                            </div>
                            <div class="right-side">
                                    <?php echo $develop_block_a; ?>
                                <div class="empty-block bottom-right">
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        
                        <?php if($develop_block_b || $develop_block_c || $develop_block_d || $develop_block_e || $develop_block_f || $develop_block_g){ ?>
                        <div class="line-blocks tools">
                            <div class="left-side">
                                <div class="left dark-gray">
                                    <?php echo $develop_block_b; ?>
                                </div>
                                <div class="right light-gray">
                                    <?php echo $develop_block_c; ?>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="left dark-gray">
                                    <?php echo $develop_block_d; ?>
                                </div>
                                <div class="right light-gray">
                                    <?php echo $develop_block_e; ?>
                                </div>
                            </div>
                        </div>

                        <div class="line-blocks tools">
                            <div class="left-side">
                            </div>
                            <div class="right-side">
                                <div class="left light-gray">
                                    <?php echo $develop_block_f; ?>
                                </div>
                                <div class="right dark-gray">
                                    <?php echo $develop_block_g; ?>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <!-- Новый блок старт -->

        <div class="collage-block">
            <div id="card-1" class="collage-1"> 
                <div class="front"> 
                    <?php echo $collage_a; ?>
                </div> 
                <div class="back">
                    <?php echo $collage_b; ?>
                </div> 
            </div>

            <div id="card-3" class="collage-3"> 
                <div class="front"> 
                    <?php echo $collage_c; ?>
                </div> 
                <div class="back">
                    <?php echo $collage_d; ?>
                </div> 
            </div>

            <div id="card-5" class="collage-5"> 
                <div class="front"> 
                    <?php echo $collage_e; ?>
                </div> 
                <div class="back">
                    <?php echo $collage_f; ?>
                </div> 
            </div>

            <div id="card-6" class="collage-6"> 
                <div class="front"> 
                   <?php echo $collage_g; ?>
                </div> 
                <div class="back">
                    <?php echo $collage_h; ?>
                </div> 
            </div>
        </div>
        
        <?php if($seo || $seo_block_a || $seo_block_b || $seo_block_c || $seo_block_d || $seo_block_e || $seo_block_f || $seo_block_g){ ?>
        <div class="container-fluid design development-block seo-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="two-halves-block development">
                            <div class="left-side">
                                <?php echo $develop; ?>
                            </div>
                            <div class="right-side">
                                <span class="scrollto bottom-left" href="#slider-block">
                                    <?php echo $seo_block_a; ?>
                                </span>
                                <div class="empty-block bottom-right">
                                </div>
                            </div>
                        </div>

                        <div class="line-blocks tools">
                            <div class="left-side">
                                <div class="left dark-gray">
                                    <?php echo $seo_block_b; ?>
                                </div>
                                <div class="right light-gray">
                                   <?php echo $seo_block_c; ?>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="left dark-gray">
                                    <?php echo $seo_block_d; ?>
                                </div>
                                <div class="right light-gray">
                                    <?php echo $seo_block_e; ?>
                                </div>
                            </div>
                        </div>

                        <div class="line-blocks tools">
                            <div class="left-side">
                                <div class="left dark-gray">
                                    <?php echo $seo_block_c; ?>
                                </div>
                                <div class="right light-gray">
                                   <?php echo $seo_block_f; ?>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="left dark-gray">
                                    <?php echo $seo_block_g; ?>
                                </div>
                                <div class="right light-gray">
                                    <?php echo $seo_block_h; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <!-- Новый блок финиш -->
        
        <?php if($reviews){ ?>
        <div class="container-fluid message-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php echo $reviews; ?>
                        <?php echo $author; ?>
                    </div>
                    <div class="col-md-6">
                        <div class="block-photo">
                            <?php echo $photo_author; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <ul class="works-list">
        <?php
            $args = array(
                'numberposts' => 5,
                'post_type'   => 'post',
                'orderby'     => 'date',
                'order'       => 'DESC',
            );

            $last_projects = get_posts( $args );
            
            if($last_projects){
            foreach($last_projects as $projects_list){
                $link = get_permalink($projects_list->ID);
                $background_color = get_post_meta( $projects_list->ID, 'background_color_projects_category', $single = true );
                $logo = getImageCourse($projects_list->ID, 'logo_image_projects_category', 'small');
        ?>
        
            <li style="background-color: <?php echo $background_color; ?>"><a href="<?php echo $link; ?>"><?php echo $logo; ?></a></li>
        <?php } ?>
		<?php wp_reset_postdata(); ?>
        <?php }else{ ?>
            <li>Проектов не найдено!</li>
        <?php } ?>
        </ul>

        <div class="container-fluid want-order">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">хотите заказать подобный проект?</p>
                        <div class="agree">
                            <input id="i-take" type="checkbox">
                            <label for="i-take">Согласен на обработку персональных данных</label>
                        </div>
                        <div class="order-block">
                            <input type="text" id="email" placeholder="Введите Ваш e-mail">
                            <input type="submit" onclick="SendShort();" value="Заказать">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- end main-works-in -->

<?php get_footer(); ?>
