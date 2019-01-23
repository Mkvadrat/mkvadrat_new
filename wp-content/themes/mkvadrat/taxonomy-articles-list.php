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
    <?php
        $term = get_queried_object();
        $cat_id = $term->term_id;
        $cat_description = html_entity_decode(get_term_meta($cat_id, 'primary_title_blogs_category', true));
    ?>
    <div class="container-fluid block-under-header" data-speed="5" data-type="background" style="background-position: 45% 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $cat_description; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- start main-works -->

    <main class="main-works">

        <div class="container-fluid blog-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                
                            $args = array(
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'articles-list',
                                        'field' => 'id',
                                        'terms' => array( get_queried_object()->term_id )
                                    )
                                ),
                                    'post_type' => 'articles',
                                    'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
                                    'paged'          => $current_page
                            );
                
                            $articles_list = get_posts( $args );
                        ?>
                        <?php if($articles_list){ ?>
                        <ul class="blog-list-container">
                            <?php foreach($articles_list as $articles){ ?>
                            <?php
                                $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($articles->ID), 'full');
                                $descr = wp_trim_words( $articles->post_content, 15, '...' );
                                $link = get_permalink($articles->ID);
                            ?>
                            <li>
                                <a href="<?php echo $link; ?>" class="img" style="background-image: url('<?php echo $image_url[0] ? $image_url[0] : esc_url( get_template_directory_uri() ) . '/images/no-image.png'; ?>')"></a>
                                <div class="text">
                                    <a href="<?php echo $link; ?>" class="name"><?php echo $articles->post_title; ?></a>
                                    <p class="description"><?php echo $descr; ?></p>
                                </div>
                            </li>
                            <?php } ?>
                            <?php wp_reset_postdata(); ?>
                            <?php }else{ ?>
                                <h4>Извините, в данной рубрике статьи отсутствуют.</h4>
                                <div>
                                    <p>Статьи не найдены...</p>
                                </div>
                            <?php } ?>
                            <?php                                
                                $defaults = array(
                                    'type' => 'array',
                                    'prev_next'    => True,
                                    'prev_text'    => __('В начало'),
                                    'next_text'    => __('В конец'),
                                );
                                                    
                                $pagination = paginate_links($defaults);							
                            ?> 	
                        </ul>
                    </div>
                    
                    <?php if($pagination){ ?>
                    <div class="col-md-12">
                        <div class="paggination">
                            <ul>
                            <?php foreach ($pagination as $pag){ ?>
                                <li><?php echo $pag; ?></li>
                            <?php } ?>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php
            $get_cat_inf = get_the_terms( get_the_ID(), 'articles-list' );
            $cat_id = $get_cat_inf[0]->term_id;
            $forms_a = get_term_meta($cat_id, 'contact_form_block_blogs_category', true);
            if($forms_a){
        ?>
        <div class="container-fluid want-order">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            echo do_shortcode('[contact-form-7 id=" ' . $forms_a . ' "]'); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </main>

    <!-- end main-works -->
	
<?php get_footer(); ?>
