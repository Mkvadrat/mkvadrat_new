<?php
/*
Template name: Services page
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
    <?php
        $header = html_entity_decode( get_post_meta( get_the_ID(), 'primary_title_services_page', $single = true ));
    ?>
    
    <div class="container-fluid block-under-header" data-speed="5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $header; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- start main-services -->

    <main class="main-services">
        
        <?php if(get_post_meta( get_the_ID(), 'enable_block_a_section_services_page', $single = true ) == 'yes'){ ?>
        <div class="container-fluid block-under-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'title_text_first_block_services_page', $single = true )); ?>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <?php if(get_post_meta( get_the_ID(), 'enable_block_b_section_services_page', $single = true ) == 'yes'){ ?>
        <div class="container-fluid bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="two-halves-block">
                            <div class="right-side">
                                <div class="empty-block-white bottom-left"></div>
                                <div class="bottom-right light-gray">
                                    <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'services_a_second_block_services_page', $single = true )); ?>
                                </div>
                            </div>
                            <div class="left-side">
                                <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'title_text_second_block_services_page', $single = true )); ?>
                            </div>
                        </div>

                        <div class="two-halves-block">
                            <div class="right-side">
                                <div class="left-top light-gray">
                                    <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'services_b_second_block_services_page', $single = true )); ?>
                                </div>
                                <div class="top-right dark-gray">
                                    <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'services_c_second_block_services_page', $single = true )); ?>
                                </div>
                                <div class="empty-block-white-2 bottom-left rotate"></div>
                                <div class="bottom-right light-gray">
                                    <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'services_d_second_block_services_page', $single = true )); ?>
                                </div>
                            </div>
                            <div class="left-side bottom-line">
                                <div class="left-top light-gray">
                                    <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'services_e_second_block_services_page', $single = true )); ?>
                                </div>
                                <div class="top-right dark-gray">
                                    <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'services_f_second_block_services_page', $single = true )); ?>
                                </div>
                                    <?php echo html_entity_decode( get_post_meta( get_the_ID(), 'info_text_second_block_services_page', $single = true )); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        
        <?php
            $forms_a = get_post_meta( get_the_ID(), 'contact_form_block_services_page', $single = true );

            if($forms_a){
        ?>
        <div class="container-fluid want-order">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo do_shortcode('[contact-form-7 id=" ' . $forms_a . ' "]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </main>

    <!-- end main-services -->
    
<?php get_footer(); ?>