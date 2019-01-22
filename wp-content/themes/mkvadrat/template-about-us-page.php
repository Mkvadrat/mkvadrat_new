<?php
/*
Template name: About-us page
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

get_header(); 
?>

    <!-- start main-about -->
    <?php
		$header = html_entity_decode( get_post_meta( get_the_ID(), 'primary_title_about_us_page', $single = true ));
        $title_content = html_entity_decode( get_post_meta( get_the_ID(), 'title_text_content_block_about_us_page', $single = true ));
        $lower_block = html_entity_decode( get_post_meta( get_the_ID(), 'lower_block_about_us_page', $single = true ));
        $our_family_block = html_entity_decode( get_post_meta( get_the_ID(), 'title_text_our_family_block_about_us_page', $single = true )); 
		$our_clients_block = html_entity_decode( get_post_meta( get_the_ID(), 'title_text_our_clients_block_about_us_page', $single = true ));
		$top_first_block = html_entity_decode( get_post_meta( get_the_ID(), 'first_top_projects_block_about_us_page', $single = true ));
		$top_second_block = html_entity_decode( get_post_meta( get_the_ID(), 'second_top_projects_block_about_us_page', $single = true )); 
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
	
    <main class="main-about">
        
        <?php if($title_content){ ?>
        <div class="container-fluid block-under-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <?php echo $title_content; ?>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
        <?php } ?>
        
        <div class="we-do-block">
            <?php echo $lower_block; ?>
        </div>
        
        <div class="container our-family">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $our_family_block; ?>
                    <?php
						$results = get_field('developers_about_us_page', get_the_ID());
							
						if($results){
                    ?>
                    <ul class="developer-list">
                        <?php
                            foreach($results as $develop){
                                $image = wp_get_attachment_image(get_post_meta( $develop->ID, 'miniature_developers_category', $single = true ), 'full');
                                $name = $develop->post_title;
                                $descr = html_entity_decode( get_post_meta( $develop->ID, 'position_developers_category', $single = true ));
                        ?>
                        <li>
                            <p class="name"><?php echo $name; ?></p>
                            <p class="position"><?php echo $descr; ?></p>
                            <?php echo $image; ?>
                        </li>
                        <?php } ?>
                    </ul>
					<?php wp_reset_postdata(); ?>
					<?php }else{ ?>
					<p class="name">Разработчиков не найдено!</p>
					<?php } ?>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="two-halves-block">
							<?php if($our_clients_block){?>
                            <div class="left-side">
								<?php echo $our_clients_block; ?>
                            </div>
							<?php }else{ ?>
							<div class="left-side">
								<p class="title-dash">Наши клиенты</p>
							</div>
							<?php } ?>
							
							<?php if($top_first_block){ ?>
                            <div class="right-side">
								<?php echo $top_first_block; ?>
                            </div>
							<?php } ?>
                        </div>
						
						<?php if($top_second_block){ ?>
                        <div class="two-halves-block two-halves-block-half">
                            <div class="left-side">
                            </div>
							
                            <div class="right-side">
								<?php echo $top_second_block; ?>
                            </div>
                        </div>
						<?php } ?>
						
						<?php
							$project_list = get_field('projects_company_block_about_us_page', get_the_ID());
								
							if($results){
						?>
                        <ul class="links-list">
							<?php
								foreach($project_list as $list){
                                    $image = wp_get_attachment_image(get_post_meta( $list->ID, 'logo_image_projects_category', $single = true ), 'full');
									$link = get_permalink($list->ID);
									$style =  get_post_meta( $list->ID, 'background_color_about_us_page', $single = true ); 
							?>
                            <li style="background-color: <?php echo $style; ?>"><a href="<?php echo $link; ?>"><?php echo $logo; ?></a></li>
							<?php } ?>
                        </ul>
                        <?php wp_reset_postdata(); ?>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- end main-about -->
    
<?php get_footer(); ?>