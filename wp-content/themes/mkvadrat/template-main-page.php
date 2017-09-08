<?php
/*
Template name: Main page
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

get_header(); 
?>

    <!-- start main-index -->
    <main class="main-index">
        
        <!-- start our-approach -->

        <div class="container-fluid our-approach">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        
                        <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'title_text_first_block_main_page', $single = true )); ?>
                        
                        <div class="our-approach-block">
                            <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'base_content_first_block_main_page', $single = true )); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end our-approach -->

        <!-- start block-description -->

        <div class="container-fluid block-description">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="how-we-work">
                            <div class="left-side">
                                <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'title_text_second_block_main_page', $single = true )); ?>
                            </div>
                            <div class="right-side">
                                <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'base_content_second_block_main_page', $single = true )); ?>
                            </div>
                        </div>
                    </div>

                    <!-- start slider -->
                
                    <div class="col-md-12">
                        <div id="slider-block" class="slider-block">
                            <div class="owl-carousel owl-theme example-site">
                                <?php
                                    global $nggdb;
                                    $ngg_id_f = getNextGallery(get_the_ID(), 'first_slider_main_page');
                                    $ngg_image_f = $nggdb->get_gallery($ngg_id_f[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                                    if($ngg_image_f){
                                        foreach($ngg_image_f as $image) {
                                    ?>
                                        <div>
                                            <img src="<?php echo $image->imageURL; ?>" alt="<?php echo $image->alttext; ?>">
                                            <div class="description">
                                                <p class="title"><?php echo $image->alttext; ?></p>
                                                
                                                <?php echo html_entity_decode(esc_attr($image->description), ENT_QUOTES, 'UTF-8'); ?>
                                            </div>
                                        </div>
                                    <?php
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>

                    <!-- end slider -->

                    <!-- start square-links -->

                    <div class="col-md-12">
                        <div class="square-links">
                            <div class="left-side">
                                <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'base_content_before_third_block_main_page', $single = true )); ?>
                            </div>
                            <div class="right-side">

                            </div>
                        </div>
                    </div>

                    <!-- end square-links -->

                    <div class="col-md-12">
                        <div class="how-we-work with-whom-block">
                            <div class="left-side">
                                <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'title_text_third_block_main_page', $single = true )); ?>
                            </div>
                            <div class="right-side">
                                <div class="owl-carousel owl-theme with-whom">
                                    <?php
                                        global $nggdb;
                                        $ngg_id_s = getNextGallery(get_the_ID(), 'second_slider_main_page');
                                        $ngg_image_s = $nggdb->get_gallery($ngg_id_s[0]["ngg_id"], 'sortorder', 'ASC', false, 0, 0);
                                        if($ngg_image_s){
                                            foreach($ngg_image_s as $image) {
                                        ?>
                                            <div><img src="<?php echo $image->imageURL; ?>" alt="<?php echo $image->alttext; ?>"></div>
                                        <?php
                                            }
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- start square-links -->

                    <div class="col-md-12">
                        <div class="square-links">
                            <div class="left-side">
                            </div>
                            <div class="right-side">
                                <div class="empty-block"></div>
                                    <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'base_content_after_third_block_main_page', $single = true )); ?>
                            </div>
                        </div>
                    </div>

                    <!-- end square-links -->

                </div>
            </div>

        </div>

        <!-- start block-description -->

        <!-- start collage-block -->
        <?php $enable_collage = get_post_meta( get_the_ID(), 'enable_collage_main_page', $single = true ); ?>
        
        <?php if($enable_collage == 'yes'){ ?>
        <div class="collage-block">
            <div id="card-1" class="collage-1">
                <div class="front"> 
                    <?php echo getImage('collage_a_fourth_block_main_page', 'big'); ?>
                </div> 
                <div class="back">
                    <?php echo getImage('collage_b_fourth_block_main_page', 'big'); ?>
                </div> 
            </div>

            <div id="card-2" class="collage-2"> 
                <div class="front"> 
                    <?php echo getImage('collage_c_fourth_block_main_page', 'big'); ?>
                </div> 
                <div class="back">
                    <?php echo getImage('collage_d_fourth_block_main_page', 'big'); ?>
                </div> 
            </div>

            <div id="card-4" class="collage-4"> 
                <div class="front"> 
                    <?php echo getImage('collage_e_fourth_block_main_page', 'big'); ?>
                </div> 
                <div class="back">
                    <?php echo getImage('collage_f_fourth_block_main_page', 'big'); ?>
                </div> 
            </div>

            <div id="card-3" class="collage-3"> 
                <div class="front"> 
                    <?php echo getImage('collage_g_fourth_block_main_page', 'big'); ?>
                </div> 
                <div class="back">
                    <?php echo getImage('collage_h_fourth_block_main_page', 'big'); ?>
                </div> 
            </div>

            <div id="card-5" class="collage-5"> 
                <div class="front"> 
                    <?php echo getImage('collage_i_fourth_block_main_page', 'big'); ?>
                </div> 
                <div class="back">
                    <?php echo getImage('collage_j_fourth_block_main_page', 'big'); ?>
                </div> 
            </div>

            <div id="card-6" class="collage-6"> 
                <div class="front"> 
                    <?php echo getImage('collage_k_fourth_block_main_page', 'big'); ?>
                </div> 
                <div class="back">
                    <?php echo getImage('collage_l_fourth_block_main_page', 'big'); ?>
                </div> 
            </div>
        </div>
        <?php } ?>
        <!-- end collage-block -->

        <!-- start block-description-second -->

		<div class="container-fluid block-description block-description-second">
            <div class="container">
                <div class="row">
			        <div class="col-md-12">
			        	<div class="square-links">
			        		<div class="left-side">
                                <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'base_content_fifth_block_main_page', $single = true )); ?>
			        		</div>
			        	</div>
			        </div>
                    <div class="col-md-12">
                        <div class="how-we-work">
                            <div class="right-side">
                                <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'link_fifth_block_main_page', $single = true )); ?>
                            </div>
                            <div class="left-side">
                                <?php echo html_entity_decode(get_post_meta( get_the_ID(), 'title_text_fifth_block_main_page', $single = true )); ?>
                            </div>
                        </div>
                    </div>
			    </div>
			</div>
		</div>
        
		<?php
			$args = array(
				'numberposts' => 0,
				'post_type'   => 'reviews',
				'orderby'     => 'date',
				'order'       => 'DESC',
			);
		
			$review = get_posts( $args );
			
			if($review){
		?>
        <div class="container-fluid reviews-slider-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="title">Отзывы клиентов</p>

                        <div class="owl-carousel owl-theme reviews-slider">
							<?php
                                foreach($review as $review_list){
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($review_list->ID), 'full');
                                    $alt = get_post_meta( get_post_thumbnail_id($review_list->ID), '_wp_attachment_image_alt', true );
                            ?> 							
                            <div>
                                <div class="slide-block">
                                    
                                    <?php if(!empty($image_url)){ ?>
                                    <img class="portrait" src="<?php echo $image_url[0]; ?>" alt="<?php echo $alt; ?>">
                                    <?php } ?>
                                    
                                    <p class="name"><?php echo $review_list->post_title; ?></p>
                                    <p class="place"><?php echo get_post_meta( $review_list->ID, 'profession_reviews_page', $single = true ); ?></p>
                                    <?php echo html_entity_decode( get_post_meta( $review_list->ID, 'content_reviews_page', $single = true )); ?>
                                </div>
                            </div>
                            <?php } ?>
							<?php wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
        <!-- end block-description-second -->

    </main>
    <!-- end main-index -->
    
<?php get_footer(); ?>