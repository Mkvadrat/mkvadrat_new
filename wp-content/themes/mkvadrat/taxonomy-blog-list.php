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
	
	<?php
        $term = get_queried_object();
        $cat_id = $term->term_id;
        $header = html_entity_decode(get_option('blog-list_'.$cat_id.'_primary_title_blog_category'));
    ?>
    <!-- start main-main-blog -->
    <div class="container-fluid block-under-header" data-speed="5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<?php echo $header; ?>
                </div>
            </div>
        </div>
    </div>
    
    <main class="main-blog">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<?php
						$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'taxonomy'    => 'blog-list',
							'post_type'   => 'blog',
							'orderby'     => 'date',
							'order'       => 'DESC',
							'posts_per_page' => $GLOBALS['wp_query']->query_vars['posts_per_page'],
							'paged'          => $current_page,

						);
			
						$blog_list = get_posts( $args );
					?>
                    <ul class="articles-list">
						<?php if($blog_list){ ?>
						<?php foreach($blog_list as $blog){ ?>
						<?php
							$image_url = wp_get_attachment_image_src( get_post_thumbnail_id($blog->ID), 'full');
							$descr = wp_trim_words( get_post_meta( $blog->ID, 'main_content_blog_page', $single = true ), 30, '...' );
							$link = get_permalink($blog->ID);
						?>
                        <li>
                            <div class="image-block" style="background-image: url( '<?php echo $image_url[0] ? $image_url[0] : esc_url( get_template_directory_uri() ) . '/images/blog-in-1.jpg'; ?>' ); "></div>
                            <div class="text-block">
                                <p class="title"><?php echo $blog->post_title; ?></p>
                                <p><?php echo $descr; ?></p>
                                <p class="more-date">
                                    <a href="<?php echo $link; ?>">Подробнее</a><time><?php echo get_the_date( 'd-m-y', $blog->ID ); ?></time>
                                </p>
                            </div>
                        </li>
						<?php } ?>
						<?php wp_reset_postdata(); ?>
						<?php }else{ ?>
						<li>В данной категории статей не найдено!</li>
						<?php } ?>
                    </ul>
					<?php
						$defaults = array(
							'type' => 'array',
							'prev_next'    => True,
                            'prev_text'    => __('В начало'),
                            'next_text'    => __('В конец'),
						);
	
						$pagination = paginate_links($defaults);
					?>
					
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

    <!-- end main-main-blog -->
	
<?php get_footer(); ?>
