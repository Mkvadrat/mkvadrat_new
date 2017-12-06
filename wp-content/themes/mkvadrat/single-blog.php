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
		$header = html_entity_decode( get_post_meta( get_the_ID(), 'primary_title_blog_page', $single = true ));
		$content = html_entity_decode( get_post_meta( get_the_ID(), 'main_content_blog_page', $single = true ));
		
	?>
	
    <!-- start main-main-blog-in -->
    <div class="container-fluid block-under-header" data-speed="5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<?php echo $header; ?>
                </div>
            </div>
        </div>
    </div>
    
    <main class="main-blog-in">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $content; ?>
										
					<?php echo do_shortcode("[social_share_button]"); ?>
					
                    <p><a class="back-to-search back" href="javascript:void(0)">Вернуться к списку статей</a></p>
                </div>
            </div>
        </div>

    </main>

    <!-- end main-main-blog-in -->
	
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('.back').click(function(){
		parent.history.back();
		return false;
	});
});
</script>

<?php get_footer(); ?>
