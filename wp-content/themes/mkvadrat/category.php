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

    <!-- start main-works -->

    <main class="main-works">

        <div class="container-fluid select-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <?php             
                                $sub_cats = get_categories( array(
                                    'child_of' => '',
                                    'hide_empty' => 0,
                                    'exclude'      => '1',
                                ) );
                                if( $sub_cats ){
                                    foreach( $sub_cats as $cat ){
                                        if(getCurrentCatID() == $cat->cat_ID){
                                            echo '<li><a class="active" href="'. get_category_link($cat->term_id) . '">' . $cat->cat_name . '</a></li>';
                                        }else{
                                            echo '<li><a href="'. get_category_link($cat->term_id) . '">' . $cat->cat_name . '</a></li>';
                                        }
                                    }
                                } 
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid works-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <?php	
                                $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                                $args = array(
                                    'category' 	     => getCurrentCatID(),
                                    'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
                                    'paged'          => $current_page
                                ); 
                                
                                $projects = get_posts( $args );
                                
                                if(!empty($projects)){
                                foreach( $projects as $projects_list ){
                                    
                                    $image_url = wp_get_attachment_image_src( get_post_thumbnail_id($projects_list->ID), 'full'); 
                            ?>		
                                <li style="background-color: <?php echo get_post_meta( $projects_list->ID, 'background_color_projects_category', $single = true ) ?>">
                                    <a href="<?php echo get_permalink($projects_list->ID); ?>">
                                        <?php if(!empty($image_url)){ ?>
                                            <img src="<?php echo $image_url[0]; ?>" alt="<?php echo get_post_meta( get_post_thumbnail_id($projects_list->ID), '_wp_attachment_image_alt', true ); ?>">
                                        <?php }else{ ?>
                                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/no-projects-image.png" alt="">
                                        <?php } ?>
                                    </a>
                                </li>
                            <?php	
                                }
                                
                                wp_reset_postdata(); 
                                
                                }else{
                            ?>
                                <h4>Извините, в данной рубрике проекты отсутствуют.</h4>
                                <div>
                                    <p>Проекты не найдены...</p>
                                </div>
                            <?php
                                }
                                
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

    </main>

    <!-- end main-works -->

<?php get_footer(); ?>